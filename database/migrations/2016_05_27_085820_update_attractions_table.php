<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAttractionsTable extends Migration
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
            $table->boolean('is_attraction')->default(0);
            $table->boolean('is_accommodation')->default(0);
            $table->boolean('is_campaign')->default(0);
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
            $table->dropColumn('is_attraction');
            $table->dropColumn('is_accommodation');
            $table->dropColumn('is_campaign');
        });
    }
}
