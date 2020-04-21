<?php

namespace App\Models\Covid;

use App\Models\Covid\State;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    public function blade_data(){
        return array(
            'activePage' => 'covid-death',
            'menuParent' => 'covid', 
            'titlePage' => 'Deaths',     
            'modelName' => 'Death',
            'createLabel' => 'Add Death',
            'indexLinks' => array(
                                    array(
                                        'label' => 'Add Death',
                                        'route' => 'covid.death.create'
                                    ),
                                    array(
                                        'label' => 'Add Bulk Death',
                                        'route' => 'covid.death.bulk_create'
                                    )
                            ),
            'indexData' => array(
                                array(
                                    'key' => 'date',
                                    'label' => 'Date',
                                    'input' => 'text',
                                    'classes' => 'datetimepicker',
                                    'has_relationship' => false, 
                                    'format_type' => 'date',
                                    'format_target' => 'd-m-Y'                                   
                                ),
                                array(
                                    'key' => 'state_id',
                                    'label' => 'State',
                                    'input' => 'text',
                                    'has_relationship' => true,
                                    'relationship_name' => 'state',
                                    'relationship_target' => 'name',
                                    'relationship_name_plural' => 'states',
                                    'relationship_target' => 'name',
                                    'relationship_model' => new State,
                                    'format_type' => 'none', 
                                ),
                                array(
                                    'key' => 'value',
                                    'label' => 'Number of Deaths',
                                    'input' => 'Number',
                                    'classes' => '',
                                    'has_relationship' => false,
                                    'format_type' => 'none', 
                                ),
                                array(
                                    'key' => 'created_at',
                                    'label' => 'Created at',
                                    'classes' => '',
                                    'has_relationship' => false,
                                    'format_type' => 'date',
                                    'format_target' => 'd/m/Y H:i:s'
                                ),
                                
                            ),
            'indexActions' => array(
                'policy_name' => 'manage-covid-deaths',
                'actions' => array(
                    array(
                        
                        )
                )
            )
        );
    }

    public $ignore_columns = ['id'];
    public $route_name = 'covid.death';
    public $bulk_route_create = 'covid.death.bulk_create';
    public $bulk_route_store = 'covid.death.bulk_store';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'state_id',
        'date',
        'value',
        'state_sum_value',
        'sum_value',
        'state_sum_value',
        'sum_value'
    ];

    /**
     * Get the category of the item
     *
     * @return \App\Models\Covid\State
     */

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
