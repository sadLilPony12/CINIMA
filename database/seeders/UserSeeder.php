<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id'       => 1,
                'email'         => 'superadmin@gmail.com',
                'username'      => 'sadLilPony',
                'password'      => Hash::make('password'),
                'first_name'    => 'Benedict Earle Gabriel',
                'middle_name'   => 'Romero',
                'last_name'     => 'Pajarillaga',
                'address'       => 'Region III, Nueva Ecija, Cabanatuan City',
                'gender'        => 'Male',
            ],
            [
                'role_id'       => 3,
                'email'         => 'kimkiyakiya@gmail.com',
                'username'      => 'kimkiyakiya',
                'password'      => Hash::make('password'),
                'first_name'    => 'Kimberly Anne',
                'middle_name'   => 'Penaflor',
                'last_name'     => 'Sarmiento',
                'address'       => 'Region III, Nueva Ecija, Cabanatuan City',
                'gender'        => 'Female',
            ],
            [
                'role_id'       => 2,
                'email'         => 'poopoo_icecream_machine@kubeta.com',
                'username'      => 'Poo poo',
                'password'      => Hash::make('password'),
                'first_name'    => 'Thomas Emmanuel',
                'middle_name'   => 'Romero',
                'last_name'     => 'Pajarillaga',
                'address'       => 'Region III, Nueva Ecija, Cabanatuan City',
                'gender'        => 'Male',
            ],
            [
                'role_id'       => 2,
                'email'         => 'its10_lola_callsme@princess.com',
                'username'      => 'Princess',
                'password'      => Hash::make('password'),
                'first_name'    => 'Channey Ydreo',
                'middle_name'   => 'Benedicto',
                'last_name'     => 'Marzan',
                'address'       => 'Region III, Nueva Ecija, Cabanatuan City',
                'gender'        => 'Male',
            ],
            [
                'role_id'       => 3,
                'email'         => 'halik_tae_aso_bunganga@walang_ligo.com',
                'username'      => 'Pulube',
                'password'      => Hash::make('password'),
                'first_name'    => 'Angel Dennise',
                'middle_name'   => 'Romero',
                'last_name'     => 'Pajarillaga',
                'address'       => 'Region III, Nueva Ecija, Cabanatuan City',
                'gender'        => 'Female',
            ]
        ]);
    }
}
