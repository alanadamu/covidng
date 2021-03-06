<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config\OdooModel;
use App\Models\POS\ProductLine;
use App\Models\Product\Product;
use App\Http\Controllers\OdooAPI\OdooController;

class ProductLineController extends Controller
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
        $model = new ProductLine;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        $filters = $model->filters();
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_product_lines = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields,$filters);

        $i = 0;
        $len = count($new_odoo_product_lines);
        if ($len == 0) {
            return('no new product lines found...');
        }
        // dd($new_odoo_product_lines);
        foreach ($new_odoo_product_lines as $odoo_product_line) {
            // return($odoo_product_line);
            $product_line = new ProductLine;
            $product_line->external_id = $odoo_product_line['id'];
            $product_line->company_id = $odoo_product_line['company_id']['0'];
            $product_line->product_id = $odoo_product_line['product_id']['0'];
            $product_line->order_id = $odoo_product_line['order_id']['0'];
            $product_line->create_date = $odoo_product_line['create_date'];
            $product_line->price_unit = $odoo_product_line['price_unit'];

            //Get cost price
            $cost_price = Product::where('external_id', $product_line->product_id)->get()['0']->standard_price;

            $product_line->discount = $odoo_product_line['discount'];
            $product_line->cost_price = $cost_price;
            $product_line->qty = $odoo_product_line['qty'];
            $product_line->profit = ($product_line->price_unit*(1-$product_line->discount/100) - $product_line->cost_price)*$product_line->qty;
            $product_line->price_subtotal = $odoo_product_line['price_subtotal'];
            $product_line->price_subtotal_incl = $odoo_product_line['price_subtotal_incl'];

            $product_line->save();

            $new_latest_id = $odoo_product_line['id'];
            $odoo_model->latest_external_id = $new_latest_id;
            $odoo_model->save();
            

            if ($i == $len - 1) {
                
                
            }
            // …
            $i++;
        }
        return('save product lines complete');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new ProductLine;
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
