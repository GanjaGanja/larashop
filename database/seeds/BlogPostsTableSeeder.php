<?php

use Illuminate\Database\Seeder;

class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 
        	DB::table('posts')->insert([ //,
        		'url' => $faker->unique()->word,
        		'title' => $faker->unique()->sentence($nbWords = 6),
        		'description' => $faker->paragraph($nbSentences = 3),
        		'content' => $faker->text,
        		'image' => $faker->randomElement($array = array('blog-one.jpg','blog-two.jpg','blog-three.jpg')),
        		'blog' => '1',
        		'category_id' => $faker->numberBetween($min = 1, $max = 3),
        	]);
        }
    }
}
