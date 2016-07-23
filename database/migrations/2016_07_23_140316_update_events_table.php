<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_posts', function($table) {
            $table->string("image_url_2");
            $table->string("image_url_3");
            $table->string("image_url_4");
            $table->string("image_url_5");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_posts', function($table) {
            $table->dropColumn('image_url_2');
            $table->dropColumn('image_url_3');
            $table->dropColumn('image_url_4');
            $table->dropColumn('image_url_5');
        });
    }
}
