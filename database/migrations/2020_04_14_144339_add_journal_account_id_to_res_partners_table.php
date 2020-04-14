<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJournalAccountIdToResPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('res_partners', function (Blueprint $table) {
            $table->unsignedInteger('journal_account_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('res_partners', function (Blueprint $table) {
            $table->dropColumn('journal_account_id');
        });
    }
}
