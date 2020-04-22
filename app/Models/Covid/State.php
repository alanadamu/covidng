<?php

namespace App\Models\Covid;

use App\Models\Covid\Test;
use App\Models\Covid\Death;
use App\Models\Covid\CovidCase;
use App\Models\Covid\Discharge;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function blade_data(){
        return array(
            'activePage' => 'manage-state',
            'menuParent' => 'manage', 
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

    /**
     * Get the cases of the state
     *
     * @return \App\Models\Covid\CovidCase
     */

    public function covid_cases()
    {
        return $this->hasMany(CovidCase::class);
    }

    /**
     * Get the cases of the state
     *
     * @return \App\Models\Covid\Death
     */

    public function death()
    {
        return $this->hasMany(Death::class);
    }

    /**
     * Get the cases of the state
     *
     * @return \App\Models\Covid\Discharge
     */

    public function discharge()
    {
        return $this->hasMany(Discharge::class);
    }

    /**
     * Get the cases of the state
     *
     * @return \App\Models\Covid\Test
     */

    public function test()
    {
        return $this->hasMany(Test::class);
    }

}
