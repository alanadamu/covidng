<?php

namespace App\Models\Res;

use App\Models\Res\Company;
use App\Models\Journal\Account;
use App\Models\Config\OdooModel;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'res_partners';
    public $odoo_model_name = 'res.partner';

    public $fields = array(
        'name', 
        'company_id'
    );

    public function blade_data(){
        return array(
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
                                array(
                                    'key' => 'journal_account_id',
                                    'label' => 'Customer Account',
                                    'has_relationship' => true,
                                    'relationship_name' => 'journal_account',
                                    'relationship_target' => 'name'
                                ),
                                
                            ),
            'indexActions' => array(
                'policy_name' => 'manage-res-partners',
                'actions' => array(
                    array(
                        'action_indicator_field' => 'journal_account_id',
                        'action_indicator_target' => false,
                        'model_policy_name' => 'link-journal-account',
                         'name' => 'Link Journal Account',
                         'route_to' => 'res.partner.create_journal',
                         'icon' =>  'icon-key-25',
                         'icon_color_indicator_field' => 'journal_account_id',
                         'icon_color_indicator_target' => '',
                         'icon_color_indicator_true' => 'warning',
                         'icon_color_indicator_false' => 'success',
                        )
                )
            )
        );
    }

    public $ignore_columns = ['external_id'];
    public $route_name = 'res.partner';
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

    /**
     * Get the category of the item
     *
     * @return \App\Models\Journal\Account;
     */
    public function journal_account()
    {
        return $this->belongsTo(Account::class,'journal_account_id');
    }

    public function filters(){
        $id = OdooModel::where('name',$this->odoo_model_name)->get()['0']->latest_external_id;
        return array(
            array('id', '>', $id),
        );
    } 
}
