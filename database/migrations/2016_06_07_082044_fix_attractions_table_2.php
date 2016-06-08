<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixAttractionsTable2 extends Migration
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
            $table->text('address');
            $table->text('commute');
            $table->text('telephone_number');
            $table->text('website');
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
            $table->dropColumn('address');
            $table->dropColumn('commute');
            $table->dropColumn('telephone_number');
            $table->dropColumn('website');
        });
    }
}
