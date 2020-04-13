<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\Res\Company;
use App\Models\Product\Product;

class Move extends Model
{
    protected $table = 'product_moves';
    public $odoo_model_name = 'stock.move';

    public $fields = array(
        'external_id',
        'company_id',
        'product_id',
        'product_qty',
        'value',
        'date',
    );

    public $blade_data = array(
        'activePage' => 'product-move',
        'menuParent' => 'product', 
        'titlePage' => 'Product Moves',
        'indexData' => array(
                            array(
                                'key' => 'date',
                                'label' => 'Date',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'product_id',
                                'label' => 'Product',
                                'has_relationship' => true,
                                'relationship_name' => 'product',
                                'relationship_target' => 'name'
                            ),
                            array(
                                'key' => 'product_qty',
                                'label' => 'Quantity',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'value',
                                'label' => 'Value',
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
        'product_id',
        'product_qty',
        'value',
        'date',
    ];

    /**
     * Get the category of the item
     *
     * @return \App\Models\Product\Product;
     */
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','external_id');
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
}
