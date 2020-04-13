<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_moves', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('external_id');
            $table->unsignedInteger('company_id')->nullable();
            $table->string('product_id')->nullable();
            $table->decimal('product_qty',7,2)->nullable();
            $table->string('value',10,2)->nullable();
            $table->timestamp('date')->nullable();
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
        Schema::dropIfExists('product_moves');
    }
}
