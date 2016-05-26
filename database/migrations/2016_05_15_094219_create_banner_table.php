<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_orbit', function($table)
        {
            $table->increments('id');
            $table->integer('author_id')->references('id')->on('users');
            $table->string('name');
            $table->string("image_url");
            $table->text('caption');
            $table->integer('sequence');
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
        Schema::drop('banner_orbit');
    }
}
