<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('event_posts', function($table)
        {
            $table->increments('id');
            $table->integer('author_id')->references('id')->on('users');
            $table->string('title', 128);
            $table->string("url")->unique();
            $table->text('description');
            $table->text('content');
            $table->string("feature_image_url");
            $table->string("status", 16);
            $table->integer("hits")->default(0);
            $table->boolean('is_featured')->default(0);
            $table->timestamps();
        });
        
        Schema::create('event_tags', function($table)
        {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->boolean('is_featured')->default(0);
            $table->timestamps();
        });
        
        Schema::create('event_tags_posts', function($table)
        {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('tag_id');
            $table->timestamps("created_at");
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
        Schema::drop('event_posts');
        Schema::drop('event_tags');
        Schema::drop('event_tags_posts');
    }
}
