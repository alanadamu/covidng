<?php

namespace App\Models\Account;

use App\Models\Res\Company;
use App\Models\Journal\Account;
use App\Models\Config\OdooModel;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'account_payment_methods';
    public $odoo_model_name = 'account.journal';

    public $fields = array(
        'external_id',
        'company_id',
        'name',
    );

    public function blade_data(){
        return array(
        'activePage' => 'account-payment-method',
        'menuParent' => 'account', 
        'titlePage' => 'Payment Methods',
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
                            
                        )
        );
    }
    public $ignore_columns = ['external_id'];
    public $route_name = 'account.payment_method';
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
     * @return \App\Models\Res\Company
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
    /**
     * Get the category of the item
     *
     * @return \App\Models\Journal\Account;
     */
    public function journal_account()
    {
        return $this->belongsTo(Account::class,'journal_account_id');
    }
}
