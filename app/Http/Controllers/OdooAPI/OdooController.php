<?php

namespace App\Http\Controllers\OdooAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ripcord\Providers\Laravel\Ripcord;

use App\Models\Config\OdooModel;


class OdooController extends Ripcord 
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_latest($model, $latest_id,$fields=array(),$filters=array())
    {
        // dd([$model,$latest_id,$fields]);
        $config = array(
            'url' => 'http://67.205.128.249:8069/xmlrpc/2',
            'db' => 'novomed',
            'user' => 'alanadamu2@gmail.com',
            'password' => '15478362'
        );

        $common = new Ripcord($config);
        $models = $common->client;
        $ids = $models->execute_kw(
            $common->db,
            $common->uid,
            $common->password,
            $model,
            'search_read',
            array(
                    $filters,
                ),
            array(
                    'fields'=>$fields,
                    'order' =>'id asc',
                    'limit' => 2000
                )
            
        );
        // dd($ids);
        
        return $ids;
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
