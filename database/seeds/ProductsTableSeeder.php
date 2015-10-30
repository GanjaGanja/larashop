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
        DB::table('products')->insert(['name' => 'Mini skirt black edition', 'title' => 'Mini skirt black edition','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 35,'category_id' => 1,'brand_id' => 1,]);
        DB::table('products')->insert(['name' => 'T-shirt blue edition', 'title' => 'T-shirt blue edition','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 64,'category_id' => 2,'brand_id' => 3,]);
        DB::table('products')->insert(['name' => 'Sleeveless Colorblock Scuba', 'title' => 'Sleeveless Colorblock Scuba','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna','price' => 13,'category_id' => 3,'brand_id' => 2,]);
    }
}
