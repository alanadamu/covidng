<?php

namespace App\Models\POS;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product\Product;
use App\Models\Res\Company;
use App\Models\POS\Order;

class ProductLine extends Model
{
    protected $table = 'pos_product_lines';
    public $odoo_model_name = 'pos.order.line';

    public $fields = array(
        'external_id',
        'company_id',
        'product_id',
        'order_id',
        'price_unit',
        'qty',
        'price_subtotal',
        'price_subtotal_incl',
        'discount',
    );

    public $blade_data = array(
        'activePage' => 'pos-product-line',
        'menuParent' => 'pos', 
        'titlePage' => 'Product Lines',
        'indexData' => array(
                            array(
                                'key' => 'product_id',
                                'label' => 'Product',
                                'has_relationship' => true,
                                'relationship_name' => 'product',
                                'relationship_target' => 'name'
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
                                'relationship_target' => 'name'
                            ),
                            array(
                                'key' => 'qty',
                                'label' => 'Quantity',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'discount',
                                'label' => 'Discount',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'price_subtotal',
                                'label' => 'Subtotal w/o Tax',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'price_subtotal_incl',
                                'label' => 'Subtotal w/ Tax',
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
        'product_id',
        'order_id',
        'price_unit',
        'qty',
        'price_subtotal',
        'price_subtotal_incl',
        'discount',
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

    /**
     * Get the tags of the item
     *
     * @return \App\Models\Product\Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','external_id');
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
}
