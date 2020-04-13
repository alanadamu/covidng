<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_product_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('external_id');
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('order_id')->nullable();
            $table->decimal('price_unit',10,2)->nullable();
            $table->decimal('qty',7,2)->nullable();
            $table->decimal('price_subtotal',10,2)->nullable();
            $table->decimal('price_subtotal_incl',10,2)->nullable();
            $table->decimal('discount',10,2)->nullable();
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
        Schema::dropIfExists('pos_product_lines');
    }
}
