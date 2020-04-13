<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config\OdooModel;
use App\Models\Account\PaymentMethod;
use App\Http\Controllers\OdooAPI\OdooController;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_db()
    {
        //Get odoo model
        $model = new PaymentMethod;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_payment_methods = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields);

        $i = 0;
        $len = count($new_odoo_payment_methods);
        if ($len == 0) {
            dd('no new product moves found...');
        }
        foreach ($new_odoo_payment_methods as $odoo_payment_method) {
            // dd($odoo_order);
            $payment_method = new PaymentMethod;
            $payment_method->external_id = $odoo_payment_method['id'];
            $payment_method->company_id = $odoo_payment_method['company_id']['0'];
            $payment_method->name = $odoo_payment_method['name'];
            $payment_method->save();
            $new_latest_id = $odoo_payment_method['id'];
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
        $model = new PaymentMethod;
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
