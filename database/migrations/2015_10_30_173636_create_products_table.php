<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->unique();
            $table->string('title', 140);
            $table->string('description', 500);
            $table->integer('price');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->timestamps();
            $table->string('created_at_ip');
            $table->string('updated_at_ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
