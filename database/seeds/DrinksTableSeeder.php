<?php

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->insert([
        	'name' => 'Vodka',
        	'comments' => 'Blood of creativity',
        	'brew_date' => '1973-09-03',
        	]);
    }
}
