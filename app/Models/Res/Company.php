<?php

namespace App\Models\Res;

use App\Models\Config\OdooModel;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'res_companies';
    public $odoo_model_name = 'res.company';

    public $fields = array(
        'name',
    );

    public $blade_data = array(
        'activePage' => 'res-company',
        'menuParent' => 'res', 
        'titlePage' => 'Companies',
        'indexData' => array(
                            array(
                                'key' => 'name',
                                'label' => 'Name',
                                'has_relationship' => false,
                            ),
                            
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
        'company_id',
        'name',
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
        );
    } 
}
