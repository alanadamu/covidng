<?php

use Illuminate\Database\Seeder;

class JournalAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('journal_accounts')->insert([
            'id' => 1,
            'name' => 'Assets',
            'account_type_id' => 1,
            'parent_id' => NULL,
            'is_source' => 0,
            'account_number' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_accounts')->insert([
            'id' => 2,
            'name' => 'Liabilities',
            'account_type_id' => 2,
            'parent_id' => NULL,
            'is_source' => 0,
            'account_number' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_accounts')->insert([
            'id' => 3,
            'name' => "Owner's Equity",
            'account_type_id' => 3,
            'parent_id' => NULL,
            'is_source' => 0,
            'account_number' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_accounts')->insert([
            'id' => 4,
            'name' => 'Retained Earnings',
            'account_type_id' => 3,
            'parent_id' => 3,
            'is_source' => 0,
            'account_number' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_accounts')->insert([
            'id' => 5,
            'name' => 'Income',
            'account_type_id' => 4,
            'parent_id' => 4,
            'is_source' => 0,
            'account_number' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('journal_accounts')->insert([
            'id' => 6,
            'name' => 'Expenses',
            'account_type_id' => 5,
            'parent_id' => 4,
            'is_source' => 0,
            'account_number' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
