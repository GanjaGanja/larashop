<?php

use Illuminate\Database\Seeder;

class BlogPostTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 11; $i++) { 
        	DB::table('blog_post_tags')->insert([ //,
        		'post_id' => $i,
        		'tag_id' => $faker->numberBetween($min = 1, $max = 2),
        	]);
        }
    }
}
