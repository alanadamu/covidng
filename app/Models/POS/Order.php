<?php

namespace App\Models\POS;

use Illuminate\Database\Eloquent\Model;

use App\Models\Res\Company;
use App\Models\Res\OdooUser;
use App\Models\Res\Partner;
class Order extends Model
{
    
    protected $table = 'pos_orders';
    public $odoo_model_name = 'pos.order';

    public $fields = array(
        'external_id',
        'company_id',
        'date_order',
        'amount_tax',
        'amount_total',
        'amount_paid',
        'amount_return',
        'partner_id',
        'pos_reference',
        'user_id'
    );

    public $blade_data = array(
        'activePage' => 'res-company',
        'menuParent' => 'res', 
        'titlePage' => 'Companies',
        'indexData' => array(
                            array(
                                'key' => 'pos_reference',
                                'label' => 'Reference',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'user_id',
                                'label' => 'User',
                                'has_relationship' => true,
                                'relationship_name' => 'odoo_user',
                                'relationship_target' => 'name'
                            ),
                            array(
                                'key' => 'date_order',
                                'label' => 'Date',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'amount_total',
                                'label' => 'Amount',
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
        'date_order',
        'odoo_user_id',
        'amount_tax',
        'amount_total',
        'amount_paid',
        'amount_return',
        'partner_id',
        'pos_reference',
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
     * Get the tags of the item
     *
     * @return \App\Models\Res\OdooUser;
     */
    public function odoo_user()
    {
        return $this->belongsTo(OdooUser::class,'odoo_user_id','external_id');
    }

    /**
     * Get the tags of the item
     *
     * @return \App\Models\Res\Partner;
     */
    public function partner()
    {
        return $this->belongsTo(Partner::class,'partner_id','external_id');
    }

}
