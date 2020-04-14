<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('account_type_id');
            $table->unsignedInteger('is_source');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('account_number');
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
        Schema::dropIfExists('journal_accounts');
    }
}
