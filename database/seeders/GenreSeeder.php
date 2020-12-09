<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name'    => 'Action'
            ],
            [
                'name'    => 'Animation'
            ],
            [
                'name'    => 'Comedy'
            ],
            [
                'name'    => 'Crime'
            ],
            [
                'name'    => 'Drama'
            ],
            [
                'name'    => 'Experimental'
            ],
            [
                'name'    => 'Fantasy'
            ],
            [
                'name'    => 'Historical'
            ],
            [
                'name'    => 'Horror'
            ],
            [
                'name'    => 'Romance'
            ],
            [
                'name'    => 'Science Fiction'
            ],
            [
                'name'    => 'Thriller'
            ],
            [
                'name'    => 'Western'
            ],
            [
                'name'    => 'Musical'
            ],
            [
                'name'    => 'War'
            ]
        ]);
    }
}
