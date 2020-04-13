<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config\OdooModel;
use App\Models\POS\Order;
use App\Http\Controllers\OdooAPI\OdooController;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_db()
    {
        //Get odoo model
        $model = new Order;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_orders = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields);

        $i = 0;
        $len = count($new_odoo_orders);
        if ($len == 0) {
            dd('no new orders found...');
        }
        foreach ($new_odoo_orders as $odoo_order) {
            // dd($odoo_order);
            $order = new Order;
            $order->external_id = $odoo_order['id'];
            $order->company_id = $odoo_order['company_id']['0'];
            $order->date_order = $odoo_order['date_order'];
            $order->odoo_user_id = $odoo_order['user_id']['0'];
            $order->amount_tax = $odoo_order['amount_tax'];
            $order->amount_total = $odoo_order['amount_total'];
            $order->amount_paid = $odoo_order['amount_paid'];
            $order->amount_paid = $odoo_order['amount_paid'];
            $order->partner_id = $odoo_order['partner_id']['0'];
            $order->pos_reference = $odoo_order['pos_reference'];
            $order->save();
            $new_latest_id = $odoo_order['id'];
            $odoo_model->latest_external_id = $new_latest_id;
            $odoo_model->save();

            if ($i == $len - 1) {
                
                dd('save complete');
            }
            // …
            $i++;
        }
        
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Order;
        $blade_data = $model->blade_data;
        // dd($blade_data);

        foreach ($blade_data['indexData'] as $data) {
            if($data['has_relationship']){
                $model = $model->with($data['relationship_name']);
            }
        }

        $model = $model->paginate(10);
        return view('general.index', ['model' => $model, 'blade_data' => $blade_data ]);
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
