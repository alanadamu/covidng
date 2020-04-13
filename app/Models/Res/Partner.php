<?php

namespace App\Models\Res;

use Illuminate\Database\Eloquent\Model;
use App\Models\Res\Company;

class Partner extends Model
{
    protected $table = 'res_partners';
    public $odoo_model_name = 'res.partner';

    public $fields = array(
        'name', 
        'company_id'
    );


    public $blade_data = array(
        'activePage' => 'res-partner',
        'menuParent' => 'res', 
        'titlePage' => 'Partners',
        'indexData' => array(
                            array(
                                'key' => 'name',
                                'label' => 'Name',
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
}
