<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_journals', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('transaction_type_id');
            $table->date('date');
            $table->string('reason');
            $table->decimal('amount',15,2);
            $table->decimal('balance',15,2);
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
        Schema::dropIfExists('journal_journals');
    }
}
