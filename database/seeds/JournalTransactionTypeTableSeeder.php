<?php

use Illuminate\Database\Seeder;

class JournalTransactionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('journal_transaction_types')->insert([
            'id' => 1,
            'name' => 'Debit',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_transaction_types')->insert([
            'id' => 2,
            'name' => 'Credit',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
