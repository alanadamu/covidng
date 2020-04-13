<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config\OdooModel;
use App\Models\Account\Payment;
use App\Http\Controllers\OdooAPI\OdooController;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_db()
    {
        //Get odoo model
        $model = new Payment;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_payments = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields);

        $i = 0;
        $len = count($new_odoo_payments);
        if ($len == 0) {
            dd('no new product moves found...');
        }
        foreach ($new_odoo_payments as $odoo_payment) {
            // dd($odoo_order);
            $payment = new Payment;
            $payment->external_id = $odoo_payment['id'];
            $payment->company_id = $odoo_payment['company_id']['0'];
            $payment->order_id = $odoo_payment['pos_statement_id']['0'];
            $payment->date = $odoo_payment['date'];
            $payment->partner_id = $odoo_payment['partner_id']['0'];
            $payment->payment_method_id = $odoo_payment['journal_id']['0'];
            $payment->amount = $odoo_payment['amount'];            
            $payment->save();
            $new_latest_id = $odoo_payment['id'];
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
        $model = new Payment;
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
