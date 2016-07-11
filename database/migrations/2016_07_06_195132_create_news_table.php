<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->index();
            $table->integer('subcategory_id')->unsigned()->index();
            $table->integer('author_id')->unsigned()->index();
            $table->string('title_az');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('short_desc_az');
            $table->string('short_desc_en');
            $table->string('short_desc_ru');
            $table->longText('desc_az');
            $table->longText('desc_en');
            $table->longText('desc_ru');
            $table->string('main_img');
            $table->string('keywords');
            $table->boolean('visibility');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }
}
