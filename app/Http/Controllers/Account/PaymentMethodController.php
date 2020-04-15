<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Models\Config\Config;

use App\Models\Config\OdooModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Account\PaymentMethod;
use App\Http\Controllers\OdooAPI\OdooController;
use App\Http\Requests\Account\PaymentMethodRequest;

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
        $filters = $model->filters();
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_payment_methods = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields,$filters);

        $i = 0;
        $len = count($new_odoo_payment_methods);
        if ($len == 0) {
            return('no new payment methods found...');
        }
        foreach ($new_odoo_payment_methods as $odoo_payment_method) {
            // return($odoo_order);
            $payment_method = new PaymentMethod;
            $payment_method->external_id = $odoo_payment_method['id'];
            $payment_method->company_id = $odoo_payment_method['company_id']['0'];
            $payment_method->name = $odoo_payment_method['name'];
            $payment_method->save();
            $new_latest_id = $odoo_payment_method['id'];
            $odoo_model->latest_external_id = $new_latest_id;
            $odoo_model->save();

            if ($i == $len - 1) {
                
                
            }
            // …
            $i++;
        }

        return('save payment methods complete');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new PaymentMethod;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_journal($payment_method_id)
    {
        //Get PaymentMethod
        $payment_method = PaymentMethod::findOrFail($payment_method_id);
        $blade_data = array(
            'activePage' => 'payment-method-connect-account',
            'menuParent' => 'payment-method', 
            'titlePage' => 'Connect Account',
            'createLabel' => 'Add Journal Account for '.$payment_method->name,
            'indexData' => array(
                                array(
                                    'key' => 'journal_account_id',
                                    'label' => 'Journal Account',
                                    'has_relationship' => true,
                                    'relationship_name' => 'journal_account',
                                    'relationship_name_plural' => 'journal_accounts',
                                    'relationship_target' => 'name',
                                    'relationship_model' => new OdooModel
                                ),
                                
                            ),
            'hiddenData' => array(
                                array(
                                    'key' => 'payment_method_id',
                                    'value' => $payment_method_id
                                ),
                                
                            ),
        );
        //Get Model ID
        $model = new PaymentMethod;
        $odoo_model_name = $model->odoo_model_name;
        $route_name = $model->route_name;

        $model_id = OdooModel::where('name',$odoo_model_name)->firstOrFail()->id;
        $filter_table_name = 'journal_accounts';
        // dd($model_id);
        //Get Configuration Filters
        $whereFilters = Config::where('config_odoo_model_id',$model_id)->where('table_name',$filter_table_name)->get();
        $journal_accounts = DB::table($filter_table_name);
        foreach ($whereFilters as $filter) {
            $journal_accounts = $journal_accounts->where($filter['column_name'],$filter['value']);
        }
        $journal_accounts = $journal_accounts->get();
        // dd($journal_accounts);
        $options['journal_accounts']['options'] = $journal_accounts;
        // dd($route_name.'.store_journal');
        return view('general.create', [
            'model' => $model, 
            'blade_data' => $blade_data, 
            'route_store' => $route_name.'.store_journal',
            'route_name' => $route_name,
            'options' => $options 
        ]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_journal(PaymentMethodRequest $request, PaymentMethod $model)
    {
        // dd($request->journal_account_id);

        $payment_method = PaymentMethod::where('id',$request->payment_method_id)->firstOrFail();
        // dd($payment_method->journal_account_id);
        $payment_method->journal_account_id = $request->journal_account_id;
        $payment_method->save();
        return redirect()->route('account.payment_method.index')->withStatus(__('Account connected successfully created.'));
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
