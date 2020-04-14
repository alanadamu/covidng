<?php

use Illuminate\Database\Seeder;

class JournalAccountTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('journal_account_types')->insert([
            'id' => 1,
            'name' => 'Assets',
            'to_increase' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_account_types')->insert([
            'id' => 2,
            'name' => 'Liabilities',
            'to_increase' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_account_types')->insert([
            'id' => 3,
            'name' => 'Equity',
            'to_increase' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_account_types')->insert([
            'id' => 4,
            'name' => 'Income',
            'to_increase' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_account_types')->insert([
            'id' => 5,
            'name' => 'Expenses',
            'to_increase' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
