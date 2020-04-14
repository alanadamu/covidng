<?php

namespace App\Models\Config;

use App\Models\Config\OdooModel;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'app_configs';
    public function blade_data(){
        return array(
            'activePage' => 'config-config',
            'menuParent' => 'config', 
            'titlePage' => 'Configuration Options',
            'createLabel' => 'Add Configuration Option',
            'indexData' => array(
                                array(
                                    'key' => 'config_name',
                                    'label' => 'Name',
                                    'has_relationship' => false,
                                ),
                                array(
                                    'key' => 'config_odoo_model_id',
                                    'label' => 'Odoo Model Name',
                                    'has_relationship' => true,
                                    'relationship_name' => 'config_odoo_model',
                                    'relationship_name_plural' => 'config_odoo_models',
                                    'relationship_target' => 'name',
                                    'relationship_model' => new OdooModel
                                ),
                                array(
                                    'key' => 'table_name',
                                    'label' => 'Table Name',
                                    'has_relationship' => false,
                                ),
                                array(
                                    'key' => 'column_name',
                                    'label' => 'Column Name',
                                    'has_relationship' => false,
                                ),
                                array(
                                    'key' => 'value',
                                    'label' => 'Value',
                                    'has_relationship' => false,
                                ),
                                
                            )
        );
    }
    public $ignore_columns = [];
    public $route_name = 'config.config';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'config_odoo_model_id',
        'config_name',
        'table_name',
        'column_name',
        'value'
    ];
    /**
     * Get the type of account
     *
     * @return \App\Models\Config\OdooModel;
     */
    public function config_odoo_model()
    {
        return $this->belongsTo(OdooModel::class);
    }
}
