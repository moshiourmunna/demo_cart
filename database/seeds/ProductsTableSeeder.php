<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name' => 'Nokia',
            'product_img' => 'asset/img/product_1.png',
            'price' => '10000',
            'catagory_id' => 1
            ],
            [
            'name' => 'Samsung',
            'product_img' => 'asset/img/product_1.png',
            'price' => '15000',
            'catagory_id' => 2
            ],
            [
            'name' => 'ABC',
            'product_img' => 'asset/img/product_1.png',
            'price' => '20000',
            'catagory_id' => 4
            ]
        ]);
    }
}
