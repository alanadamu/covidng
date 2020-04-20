<?php

namespace App\Helpers\General;

use Carbon\Carbon;
use App\Models\Covid\State;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class ModelFunctions
{
    /**
     * Get Route
     *
     * @return \Illuminate\Http\Response
     */
    public static function get_route($model){

        return $model->route_name;
        
    }

    /**
     * Get Model name
     *
     * @return \Illuminate\Http\Response
     */
    public static function get_model_name($model){
        $blade_data = $model->blade_data();
        return $blade_data['modelName'];
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function get_index_data($model,$paginate){

        $blade_data = $model->blade_data();
        $route_name = $model->route_name;

        foreach ($blade_data['indexData'] as $data) {
            if($data['has_relationship']){
                $model = $model->with($data['relationship_name']);
            }
        }
        $model = $model->orderBy('id','desc')->paginate($paginate);


        return [$model,$blade_data,$route_name];

        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function get_create_data($model){

        $blade_data = $model->blade_data();
        $route_name = $model->route_name;
        $options = array();
        foreach ($blade_data['indexData'] as $data) {            
            if($data['has_relationship']){
                $options[$data['relationship_name_plural']] = $data['relationship_model']->get();
            }
        }


        return [$model,$blade_data,$route_name,$options];

        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function get_bulk_create_data($model){

        $blade_data = $model->blade_data();
        $route_name = $model->route_name;
        $route_store = $model->bulk_route_store;

        return [$model,$blade_data,$route_name,$route_store];

        
    }

    /**
     * Upload excel data
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_excel_data($model,$file,$importClass){

        $array = Excel::toArray($importClass, $file);
        $count = 1;

        //Check File for Duplicates
        foreach($array['0'] as $key => $value){
            if ($value['date'] == null) {
                continue;
            }
            $array2[] = array(
                                'date' => $value['date'],
                                'state' => $value['state']
                            );

        }
        // Redirect back if duplicates found
        $bulk_route_create = $model->bulk_route_create;
        if(count($array2) !== count(array_unique($array2,SORT_REGULAR))){
            
            return redirect()->route($bulk_route_create)->withErrors(__('Duplicates detected. Please check again'));
        }
        
        //Loop through data and validate them
        $data = array();
        foreach ($array['0'] as $key => $value) {
            //Start Row tracker
            $count++;
            //Skip blank rows
            if ($value['date'] == null) {
                continue;
            }

            //Verify State Exists
            if(State::where('name',$value['state'])->count()==0){
                return redirect()->route($bulk_route_create)->withErrors(__('Unrecognized states found. Please check again.'));
            }
            $state_id = State::where('name',$value['state'])->get()['0']->id;


            //Run Validator

            $value['state_id'] = $state_id;
            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value['date']);
            $value['date'] = Carbon::instance($date)->format('Y-m-d');
            $messages = [
                'date.unique' => 'The State and Date Combination already exist in Row '.$count,
                'state_id.unique' => 'The State and Date Combination already exist in Row '.$count,
            ];

            $validator = Validator::make($value, [
                'date' => 'bail', Rule::unique($model->getTable())->where(function ($query) use ($state_id) {
                    return $query->where('state_id', $state_id);
                }),
                'state_id' => Rule::unique($model->getTable())->where(function ($query) use ($date) {
                    return $query->where('date', $date);
                }),
                'value' => 'numeric|min:0'
            ],$messages);
            
            //Redirect if Validator Fails
            if ($validator->fails()) {
                // dd('aa');
                return redirect()->route($bulk_route_create)
                            ->withErrors($validator)
                            ->withInput();
            }

            //If Validator does not fail, store data in array
            array_push($data, [
                                'date' => $value['date'],
                                'state_id' => $state_id,
                                'value' => $value['value'],
                            ]);
        }
        // dd($data);
        //If all data looped through without failure
        $model->insert($data);
        $route_name = $this->get_route($model);
        $model_name = $this->get_model_name($model);                
        return redirect()->route($route_name.'.index')->withStatus(__($model_name.'(s) successfully created.'));


        
    }



    
}
