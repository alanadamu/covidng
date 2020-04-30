<?php

namespace App\Models\Covid;

use App\Models\Covid\State;
use Illuminate\Database\Eloquent\Model;

class Discharge extends Model
{
    public function blade_data(){
        return array(
            'activePage' => 'covid-discharge',
            'menuParent' => 'covid', 
            'titlePage' => 'Discharges',     
            'modelName' => 'Discharge',
            'createLabel' => 'Add Discharge',
            'editLabel' => 'Update Discharge',   
            'indexLinks' => array(
                                    array(
                                        'label' => 'Add Discharge',
                                        'route' => 'covid.discharge.create'
                                    ),
                                    array(
                                        'label' => 'Add Bulk Discharge',
                                        'route' => 'covid.discharge.bulk_create'
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
                                        'label' => 'Number of Discharges',
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
                'policy_name' => 'manage-covid-discharges',
                'actions' => array(
                    array(
                        'action_indicator_field' => 'value',
                        'action_indicator_target' => true,
                        'model_policy_name' => 'update',
                         'name' => 'Edit Discharge',
                         'route_to' => 'covid.discharge.edit',
                         'icon' =>  'icon-pencil',
                         'icon_color_indicator_field' => 'value',
                         'icon_color_indicator_target' => true,
                         'icon_color_indicator_true' => 'warning',
                         'icon_color_indicator_false' => 'warning',
                        )
                )
            )
        );
    }

    public $ignore_columns = ['id'];
    public $route_name = 'covid.discharge';
    public $bulk_route_create = 'covid.discharge.bulk_create';
    public $bulk_route_store = 'covid.discharge.bulk_store';
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
