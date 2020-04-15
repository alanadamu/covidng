<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config\OdooModel;
use App\Models\Product\Move;
use App\Http\Controllers\OdooAPI\OdooController;

class MoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_db()
    {
        set_time_limit(60000);
        //Get odoo model
        $model = new Move;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        $filters = $model->filters();
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_product_moves = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields,$filters);
        
        $i = 0;
        $len = count($new_odoo_product_moves);
        if ($len == 0) {
            return('no new product moves found...');
        }
        foreach ($new_odoo_product_moves as $odoo_product_move) {
            // return($odoo_order);
            $product_move = new Move;
            $product_move->external_id = $odoo_product_move['id'];
            $product_move->company_id = $odoo_product_move['company_id']['0'];
            $product_move->product_id = $odoo_product_move['product_id']['0'];
            $product_move->value = $odoo_product_move['value'];
            $product_move->product_qty = $product_move->value > 0 ? $odoo_product_move['product_qty']: -$odoo_product_move['product_qty'];
            $product_move->date = $odoo_product_move['date'];
            $product_move->save();
            $new_latest_id = $odoo_product_move['id'];
            $odoo_model->latest_external_id = $new_latest_id;
            $odoo_model->save();

            if ($i == $len - 1) {
                
                
            }
            // …
            $i++;
        }

        return('save product moves complete');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Move;
        $blade_data = $model->blade_data();
        $route_name = $model->route_name;
        // dd($blade_data);

        foreach ($blade_data['indexData'] as $data) {
            if($data['has_relationship']){
                $model = $model->with($data['relationship_name']);
            }
        }

        $model = $model->paginate(10);
        return view('general.index', ['model' => $model, 'blade_data' => $blade_data, 'route_name' => $route_name ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
