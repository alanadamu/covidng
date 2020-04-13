<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Model;
use App\Models\Res\Partner;
use App\Models\Account\PaymentMethod;
use App\Models\Res\Company;
use App\Models\POS\Order;
use App\Models\Config\OdooModel;

class Payment extends Model
{
    protected $table = 'account_payments';
    public $odoo_model_name = 'account.bank.statement.line';

    public $fields = array(
        'external_id',
        'company_id',
        'pos_statement_id',
        'date',
        'partner_id',
        'journal_id',
        'amount',
    );

    public $blade_data = array(
        'activePage' => 'account-payment',
        'menuParent' => 'account', 
        'titlePage' => 'Payments',
        'indexData' => array(
                            array(
                                'key' => 'amount',
                                'label' => 'Amount',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'date',
                                'label' => 'Date',
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
                                'key' => 'order_id',
                                'label' => 'Order',
                                'has_relationship' => true,
                                'relationship_name' => 'order',
                                'relationship_target' => 'pos_reference'
                            ),
                            array(
                                'key' => 'partner_id',
                                'label' => 'Customer',
                                'has_relationship' => true,
                                'relationship_name' => 'partner',
                                'relationship_target' => 'name'
                            ),
                            array(
                                'key' => 'payment_method_id',
                                'label' => 'Payment Method',
                                'has_relationship' => true,
                                'relationship_name' => 'payment_method',
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
        'order_id',
        'date',
        'partner_id',
        'payment_method_id',
        'amount',
    ];

     /**
     * Get the tags of the item
     *
     * @return \App\Models\Res\Partner;
     */
    public function partner()
    {
        return $this->belongsTo(Partner::class,'partner_id','external_id');
    }

     /**
     * Get the category of the item
     *
     * @return \App\Models\Account\PaymentMethod;
     */
    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class,'payment_method_id','external_id');
    }

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
     * Get the tags of the item
     *
     * @return \App\Models\POS\Order
     */
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id','external_id');
    }

    public function filters(){
        $id = OdooModel::where('name',$this->odoo_model_name)->get()['0']->latest_external_id;
        return array(
            array('id', '>', $id),
        );
    } 
}
