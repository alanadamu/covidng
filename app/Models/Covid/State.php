<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function blade_data(){
        return array(
            'activePage' => 'covid-state',
            'menuParent' => 'covid', 
            'titlePage' => 'States',
            'modelName' => 'State',  
            'createLabel' => 'Add State',   
            'indexLinks' => array(
                                array(
                                    'label' => 'Add State',
                                    'route' => 'covid.state.create'
                                ),
                                array(
                                    'label' => 'Add Bulk State',
                                    'route' => 'covid.state.bulk_create'
                                )
                        ),
            'indexData' => array(
                                    array(
                                        'key' => 'name',
                                        'label' => 'Name',
                                        'input' => 'text',
                                        'classes' => '',
                                        'has_relationship' => false,     
                                        'format_type' => 'none',                                    
                                    ),
                                    array(
                                        'key' => 'created_at',
                                        'label' => 'Created at',
                                        'input' => 'text',
                                        'classes' => '',
                                        'has_relationship' => false,
                                        'format_type' => 'date',
                                        'format_target' => 'd/m/Y H:i:s'
                                    ),
                                ),
            'indexActions' => array(
                'policy_name' => 'manage-covid-states',
                'actions' => array(
                    array(
                        
                        )
                )
            )
        );
    }

    public $ignore_columns = ['id'];
    public $route_name = 'covid.state';
    public $bulk_route_create = 'covid.state.bulk_create';
    public $bulk_route_store = 'covid.state.bulk_store';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
    ];

}
