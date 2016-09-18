<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEventsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_posts', function($table) {
            $table->renameColumn('description','description_thai');
            $table->renameColumn('title','title_thai');
            $table->dropColumn('content');
            $table->text('description_english');
            $table->text('title_english');
            $table->text('remark');
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
            $table->renameColumn('description_thai','description');
            $table->renameColumn('title_thai','title');
            $table->text('content');
            $table->dropColumn('description_english');
            $table->dropColumn('title_english');
            $table->dropColumn('remark');
        });
    }
}
