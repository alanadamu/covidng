<?php

namespace App\Http\Controllers\Covid;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Covid\CovidCase;
use App\Http\Controllers\Controller;
use App\Helpers\General\ModelFunctions;
use App\Imports\Covid\CovidCasesImport;
use App\Http\Requests\Covid\CovidCaseRequest;

class CovidCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new CovidCase;
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
        $model = new CovidCase;
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
        $model = new CovidCase;
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
    public function store(CovidCaseRequest $request, CovidCase $model)
    {
        if($request->date){
            $model->create($request->merge([
                'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
            ])->all());
        } else {
            $model->create($request->all());
        }   
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
        $model_fn = new ModelFunctions;
        $model = new CovidCase;
        $importClass = new CovidCasesImport;
        $result = $model_fn->upload_excel_data($model,$request->file('data'),$importClass);
        return $result;
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
