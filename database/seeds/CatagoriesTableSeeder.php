<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('catagories')->insert([
            [
            'title' => 'Mobile'
            ],
            [
            'title' => 'Computer'
            ],
            [
            'title' => 'Television'
            ],
            [
            'title' => 'Car'
            ]
        ]);
    }
}
