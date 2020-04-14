<?php

namespace App\Http\Controllers\Res;

use App\Models\Res\Partner;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Config\Config;
use App\Models\Journal\Account;

use App\Models\Config\OdooModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use App\Http\Requests\Res\PartnerRequest;
use App\Http\Controllers\OdooAPI\OdooController;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_db()
    {
        //Get odoo model
        $model = new Partner;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        $filters = $model->filters();
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_partners = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields,$filters);

        $i = 0;
        $len = count($new_odoo_partners);
        if ($len == 0) {
            return('no new partners found...');
        }
        foreach ($new_odoo_partners as $odoo_partner) {
            // return($user);
            $partner = new Partner;
            $partner->external_id = $odoo_partner['id'];
            $partner->name = $odoo_partner['name'];
            $partner->company_id = $odoo_partner['company_id']['0'];
            $partner->save();
            $new_latest_id = $odoo_partner['id'];
            $odoo_model->latest_external_id = $new_latest_id;
            $odoo_model->save();

            if ($i == $len - 1) {
                
                
            }
            // …
            $i++;
        }
        return('save partners complete');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $model = new Partner;
        $blade_data = $model->blade_data();
        $route_name = $model->route_name;

        foreach ($blade_data['indexData'] as $data) {
            if($data['has_relationship']){
                $model = $model->with($data['relationship_name']);
            }
        }

        $model = $model->paginate(10);
        return view('general.index', ['model' => $model, 'blade_data' => $blade_data, 'route_name' => $route_name]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_journal($partner_id)
    {
        //Get Partner
        $partner = Partner::findOrFail($partner_id);
        $blade_data = array(
            'activePage' => 'partner-connect-account',
            'menuParent' => 'partner', 
            'titlePage' => 'Connect Account',
            'createLabel' => 'Add Journal Account for '.$partner->name,
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
                                    'key' => 'partner_id',
                                    'value' => $partner_id
                                ),
                                
                            ),
        );
        //Get Model ID
        $model = new Partner;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_journal(PartnerRequest $request, Partner $model)
    {
        // dd($request->journal_account_id);

        $partner = Partner::where('id',$request->partner_id)->firstOrFail();
        // dd($partner->journal_account_id);
        $partner->journal_account_id = $request->journal_account_id;
        $partner->save();
        return redirect()->route('res.partner.index')->withStatus(__('Account connected successfully created.'));
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
