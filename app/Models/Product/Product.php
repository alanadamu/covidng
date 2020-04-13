<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\Res\Company;
use App\Models\Product\ProductCategory;
use App\Models\Product\Template;

class Product extends Model
{
    protected $table = 'product_products';
    public $odoo_model_name = 'product.product';

    public $fields = array(
        'external_id',
        'company_id',
        'categ_id',
        'product_tmpl_id',
        'name',
        'standard_price',
        'list_price',
    );

    public $blade_data = array(
        'activePage' => 'product-product',
        'menuParent' => 'product', 
        'titlePage' => 'Products',
        'indexData' => array(
                            array(
                                'key' => 'name',
                                'label' => 'Name',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'standard_price',
                                'label' => 'Cost Price',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'list_price',
                                'label' => 'Selling Price',
                                'has_relationship' => false,
                            ),
                            array(
                                'key' => 'product_category_id',
                                'label' => 'Category',
                                'has_relationship' => true,
                                'relationship_name' => 'product_category',
                                'relationship_target' => 'name'
                            ),
                            array(
                                'key' => 'product_template_id',
                                'label' => 'Type',
                                'has_relationship' => true,
                                'relationship_name' => 'product_template',
                                'relationship_target' => 'type'
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
        'product_category_id',
        'product_template_id',
        'name',
        'standard_price',
        'list_price',
    ];

    /**
     * Get the category of the item
     *
     * @return \App\Models\Product\ProductCategory;
     */
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id','external_id');
    }

    /**
     * Get the category of the item
     *
     * @return \App\Models\Product\Template
     */
    public function product_template()
    {
        return $this->belongsTo(Template::class,'product_template_id','external_id');
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
