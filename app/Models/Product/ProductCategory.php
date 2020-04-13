<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\Res\Company;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
    public $odoo_model_name = 'product.category';

    public $fields = array(
        'external_id',
        'name',
    );

    public $blade_data = array(
        'activePage' => 'product-category',
        'menuParent' => 'product', 
        'titlePage' => 'Product Categories',
        'indexData' => array(
                            array(
                                'key' => 'name',
                                'label' => 'Name',
                                'has_relationship' => false,
                            )
                            
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
