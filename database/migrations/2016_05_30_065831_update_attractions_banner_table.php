<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAttractionsBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('attractions', function($table) {
            $table->renameColumn('is_campaign','is_event');
            $table->string('category');
        });

        //composer require doctrine/dbal
        Schema::table('banner_orbit', function($table) {
            $table->string('link_url');
            $table->renameColumn('image_url','desktop_image_url');
            $table->string('tablet_image_url');
            $table->string('mobile_image_url');
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
        Schema::table('attractions', function($table) {
            $table->renameColumn('is_event','is_campaign');
            $table->dropColumn('category');
        });

        Schema::table('banner_orbit', function($table) {
            $table->renameColumn('desktop_image_url','image_url');
            $table->dropColumn('tablet_image_url');
            $table->dropColumn('mobile_image_url');
        });
    }

}
