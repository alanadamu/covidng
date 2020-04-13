<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('external_id');
            $table->unsignedInteger('company_id')->nullable();
            $table->timestamp('date_order')->nullable();
            $table->unsignedInteger('odoo_user_id')->nullable();
            $table->decimal('amount_tax',15,2)->nullable();
            $table->decimal('amount_total',15,2)->nullable();
            $table->decimal('amount_paid',15,2)->nullable();
            $table->decimal('amount_return',15,2)->nullable();
            $table->unsignedInteger('partner_id')->nullable();
            $table->string('pos_reference')->nullable();
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
        Schema::dropIfExists('pos_orders');
    }
}
