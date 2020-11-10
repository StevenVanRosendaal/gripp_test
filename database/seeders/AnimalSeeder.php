<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => 'hond'
            ''
        ]);

        DB::table('animals')->insert([
            'name' => 'kat'
        ]);

        DB::table('animals')->insert([
            'name' => 'vis'
        ]);

        DB::table('animals')->insert([
            'name' => 'konijn'
        ]);
    }
}
