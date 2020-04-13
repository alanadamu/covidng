<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Model;
use App\Models\Res\Company;

class PaymentMethod extends Model
{
    protected $table = 'account_payment_methods';
    public $odoo_model_name = 'account.journal';

    public $fields = array(
        'external_id',
        'company_id',
        'name',
    );

    public $blade_data = array(
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
     * @return \App\Models\Res\Company
     */
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id','external_id');
    }
}
