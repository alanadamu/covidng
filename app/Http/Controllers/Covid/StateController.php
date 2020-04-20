<?php

namespace App\Http\Controllers\Covid;

use Carbon\Carbon;
use App\Models\Covid\State;
use Illuminate\Http\Request;
use App\Imports\Covid\StatesImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Helpers\General\ModelFunctions;
use App\Http\Requests\Covid\StateRequest;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new State;
        list($model,$blade_data,$route_name) = ModelFunctions::get_index_data($model,10);        
        return view('general.index', ['model' => $model, 'blade_data' => $blade_data, 'route_name' => $route_name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new State;
        list($model,$blade_data,$route_name,$options) = ModelFunctions::get_create_data($model);       
        return view('general.create', [
                                        'model' => $model, 
                                        'blade_data' => $blade_data, 
                                        'route_name' => $route_name,
                                        'options' => $options,
                                    ]);
    }

    /**
     * Show the form for bulk creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bulk_create()
    {
        $model = new State;
        list($model,$blade_data,$route_name,$route_store) = ModelFunctions::get_bulk_create_data($model);       
        return view('general.bulk_create', [
                                        'model' => $model, 
                                        'blade_data' => $blade_data, 
                                        'route_name' => $route_name,
                                        'route_store' => $route_store,
                                    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StateRequest $request, State $model)
    {
        if($request->date){
            $model->create($request->merge([
                'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
            ])->all());
        } else {
            $model->create($request->all());
        }   
        $model->create($request->all());
        $route_name = ModelFunctions::get_route($model);
        $model_name = ModelFunctions::get_model_name($model);                
        return redirect()->route($route_name.'.index')->withStatus(__($model_name.' successfully created.'));
    }

    /**
     * Show the form for bulk storing a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bulk_store(Request $request)
    {
        // dd($request->file('data'));
        $array = Excel::import(new StatesImport, $request->file('data'));
        $model = new State;
        $route_name = ModelFunctions::get_route($model);
        $model_name = ModelFunctions::get_model_name($model);                
        return redirect()->route($route_name.'.index')->withStatus(__($model_name.'(s) successfully created.'));
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
