<?php

use Illuminate\Database\Seeder;

class ConfigOdooModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config_odoo_models')->insert([
            'id' => 1,
            'name' => 'pos.order',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 2,
            'name' => 'res.company',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 3,
            'name' => 'res.partner',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 4,
            'name' => 'res.users',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 5,
            'name' => 'account.bank.statement.line',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 6,
            'name' => 'product.product',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 7,
            'name' => 'product.category',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('config_odoo_models')->insert([
            'id' => 8,
            'name' => 'account.journal',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 9,
            'name' => 'pos.order.line',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 10,
            'name' => 'stock.move',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('config_odoo_models')->insert([
            'id' => 11,
            'name' => 'product.template',
            'latest_external_id' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
