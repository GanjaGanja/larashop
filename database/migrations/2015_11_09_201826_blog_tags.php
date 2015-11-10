<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tags', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tag')->unique();
            $table->timestamps();        
        });

        DB::table('blog_tags')->insert([
            'tag' => "Pink"
            ]);
        DB::table('blog_tags')->insert([
            'tag' => "T-Shirt"
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_tags');
    }
}
