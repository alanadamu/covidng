<?php

namespace App\Http\Controllers\Res;

use App\Models\Res\OdooUser;
use Illuminate\Http\Request;

use App\Models\Config\OdooModel;
use App\Http\Controllers\Controller;
use App\Events\OdooAPI\GetOdooDataEvent;
use App\Http\Controllers\OdooAPI\OdooController;

class OdooUserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_db()
    {
        //Get odoo model
        $model = new OdooUser;
        $odoo_model_name = $model->odoo_model_name;
        $fields = $model->fields;
        $filters = $model->filters();
        //Get Latest entry id
        $odoo_model = OdooModel::where('name',$odoo_model_name)->get()['0'];
        $latest_external_id = $odoo_model->latest_external_id;
        $odoo_api = new OdooController;
        $new_odoo_users = $odoo_api->get_latest($odoo_model_name,$latest_external_id,$fields,$filters);

        $i = 0;
        $len = count($new_odoo_users);
        if ($len == 0) {
            return('no new users found...');
        }
        foreach ($new_odoo_users as $user) {
            // return($user);
            $odoo_user = new OdooUser;
            $odoo_user->external_id = $user['id'];
            $odoo_user->name = $user['name'];
            $odoo_user->email = $user['email'];
            $odoo_user->company_id = $user['company_id']['0'];
            $odoo_user->save();

            $new_latest_id = $user['id'];
            $odoo_model->latest_external_id = $new_latest_id;
            $odoo_model->save();
            if ($i == $len - 1) {
                
                
            }
            // …
            $i++;
        }
        return('save odoo users complete');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        event(new GetOdooDataEvent());

        $model = new OdooUser;
        $blade_data = $model->blade_data();
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
