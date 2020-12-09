<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'classification'    => 'dev',
                'display_name'      => 'Developer'
            ],
            [
                'classification'    => 'admin',
                'display_name'      => 'Administrator'
            ],
            [
                'classification'    => 'user',
                'display_name'      => 'Customer'
            ]
        ]);
    }
}
