<?php

namespace App\Http\Controllers\Account;

use App\Models\Res\Partner;
use Illuminate\Http\Request;

use App\Models\Config\Config;
use App\Models\Account\Payment;
use App\Models\Config\OdooModel;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Account\PaymentMethod;
use App\Helpers\Journal\JournalHelper;
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
        set_time_limit(60000);

        //Get odoo model
        $model = new Payment;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        $filters = $model->filters();
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_payments = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields,$filters);

        $i = 0;
        $len = count($new_odoo_payments);
        if ($len == 0) {
            return('no new payments found...');
        }
        foreach ($new_odoo_payments as $odoo_payment) {
            Log::info('here');
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

            //Store Journal Entry
            //Get Journal Account for Payment Method
            $journal_account_id = PaymentMethod::where('id',$payment->payment_method_id)->get()['0']->journal_account_id;
            $journal_helper = new JournalHelper;
            //Credit shop account
            
            $journal_helper->journal_entry(
                1,
                $journal_account_id,
                $payment->date,
                $payment->amount,
                'Payment for '.$odoo_payment['pos_statement_id']['1']
            );

            //Check if it is a customer account payment method
            //Get Config Details
            $model = new PaymentMethod;
            $odoo_model_name = $model->odoo_model_name;
            $route_name = $model->route_name;

            $model_id = OdooModel::where('name',$odoo_model_name)->firstOrFail()->id;
            $filter_table_name = 'account_payment_methods';
            $config_details = Config::where('config_odoo_model_id',$model_id)->where('table_name',$filter_table_name)->get();
            
            //Check to see if the payment type is the same as that of config
            if($config_details['0']->value == $payment->payment_method_id){
                //Get the Partner Account for this payment
                //Get the Partner ID
                // dump($payment->partner_id);
                if($payment->partner_id){
                    //Record Journal Entry
                    /*-------------Record Customer Account Debit--------------*/
                    //Get Customer Journal Account
                    $journal_account_id = Partner::where('external_id',$payment->partner_id)->get()['0']->journal_account_id;
                    if ($journal_account_id) {
                        //Store Journal Entry
                        $journal_helper->journal_entry(
                            1,
                            $journal_account_id,
                            $payment->date,
                            $payment->amount,
                            'Payment for '.$odoo_payment['pos_statement_id']['1']
                        );
                    } else {
                        //Create Memo to resolve the issue
                        // dump('customer has no linked journal account');
                    }
                    
                    // /*-------------Record Customer Receivable Credit--------------*/
                    //Get Customer Receivable Account
                    $journal_account_id = Config::where('config_name','get_customer_receivable_account_id')->get()['0']->value;
                    //Store Journal Entry
                    $journal_helper->journal_entry(
                        2,
                        $journal_account_id,
                        $payment->date,
                        $payment->amount,
                        'Payment for '.$odoo_payment['pos_statement_id']['1']
                    );
                } else {
                    //Create a memo to resolve the issue
                    // dump('Customer Account Set but partner not set '.$payment->payment_method_id.' '.$config_details['0']->value);
                }

            } else {
                //No error
                // dump('Customer Account Method not set '.$payment->payment_method_id.' '.$config_details['0']->value);
            }
            $i++;
        }
        dd();
        return('save payments complete');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Payment;
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
