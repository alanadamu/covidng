<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('external_id');
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('product_category_id')->nullable();
            $table->unsignedInteger('product_template_id')->nullable();
            $table->string('name')->nullable();
            $table->decimal('standard_price',10,2)->nullable();
            $table->decimal('list_price',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_products');
    }
}
