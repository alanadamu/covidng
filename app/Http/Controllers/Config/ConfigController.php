<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Models\Config\Config;
use App\Http\Controllers\Controller;
use App\Http\Requests\Config\ConfigRequest;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Config;
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
        $model = new Config;
        $blade_data = $model->blade_data();
        $route_name = $model->route_name;
        

        foreach ($blade_data['indexData'] as $data) {
            if($data['has_relationship']){
                $options[$data['relationship_name_plural']]['options'] = $data['relationship_model']->get();
                $options[$data['relationship_name_plural']]['name_plural'] = $data['relationship_name_plural'];
                $options[$data['relationship_name_plural']]['name'] = $data['relationship_name'];
                $options[$data['relationship_name_plural']]['key'] = $data['key'];
                $options[$data['relationship_name_plural']]['label'] = $data['label'];
            }
        }

        // dd($options);
        return view('general.create', [
                                        'model' => $model, 
                                        'blade_data' => $blade_data, 
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
    public function store(ConfigRequest $request, Config $model)
    {
        // dd($request->all());

        $model->create($request->all());

        return redirect()->route('config.config.index')->withStatus(__('Configuration successfully created.'));
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
