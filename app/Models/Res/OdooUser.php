<?php

namespace App\Models\Res;

use App\Models\Res\Company;
use App\Models\Config\OdooModel;
use Illuminate\Database\Eloquent\Model;

class OdooUser extends Model
{
    protected $table = 'res_odoo_users';
    public $odoo_model_name = 'res.users';
    public $fields = array(
                            'name',
                            'email',
                            'company_id'
                        );
    public function blade_data(){
        return array(
        'activePage' => 'res-odoo-users',
        'menuParent' => 'res', 
        'titlePage' => 'Odoo Users',
        'indexData' => array(
                            array(
                                'key' => 'name',
                                'label' => 'Name',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'email',
                                'label' => 'Email',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'company_id',
                                'label' => 'Company',
                                'has_relationship' => true,
                                'relationship_name' => 'company',
                                'relationship_target' => 'name'
                            ),
                            
                        )
        );
    }
    public $ignore_columns = ['external_id'];
    public $route_name = 'res.odoo_user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'external_id',
        'company_id',
        'name',
        'email'
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
