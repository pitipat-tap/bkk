<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('attractions', function($table)
        {
            $table->increments('id');
            $table->integer('author_id')->references('id')->on('users');
            $table->string('title_thai');
            $table->string('title_english');
            $table->string('title_japan');
            $table->string('title_china');
            $table->text('description_thai');
            $table->text('description_english');
            $table->text('description_japan');
            $table->text('description_china');
            $table->string("opening_day_thai");
            $table->string("opening_day_english");
            $table->string("opening_day_japan");
            $table->string("opening_day_china");
            $table->string("image_url_1");
            $table->string("image_url_2");
            $table->string("image_url_3");
            $table->string("image_url_4");
            $table->string("image_url_5");
            $table->string("opening_hours");
            $table->string("admission_free");
            $table->string("map_url");
            $table->string("remark");
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
        //
        Schema::drop('attractions');
    }
}
