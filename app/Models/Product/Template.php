<?php

namespace App\Models\Product;

use App\Models\Config\OdooModel;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = 'product_templates';
    public $odoo_model_name = 'product.template';

    public $fields = array(
        'external_id',
        'type',
    );

    public $blade_data = array(
        'activePage' => 'product-template',
        'menuParent' => 'product', 
        'titlePage' => 'Product Templates',
        'indexData' => array(
                            array(
                                'key' => 'type',
                                'label' => 'Type',
                                'has_relationship' => false,
                            )
                            
                        )
    );
    public $ignore_columns = ['external_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'external_id',
        'type',
    ];

     /**
     * Get the category of the item
     *
     * @return \App\Models\Res\Company;
     */
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','external_id');
    }

    public function filters(){
        $id = OdooModel::where('name',$this->odoo_model_name)->get()['0']->latest_external_id;
        return array(
            array('id', '>', $id),
            '|',array('active', '=', false),array('active', '=', true)
        );
    } 
}
