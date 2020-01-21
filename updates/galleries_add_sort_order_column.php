<?php namespace Rebel59\Isogallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddSortOrderColumn extends Migration
{

    public function up()
    {
        if (Schema::hasColumn('rebel59_isogallery_galleries', 'sort_order')) {
            return;
        }

        Schema::table('rebel59_isogallery_galleries', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }

    public function down()
    {
        if (Schema::hasColumn('rebel59_isogallery_galleries', 'sort_order')) {
            Schema::table('rebel59_isogallery_galleries', function ($table) {
                $table->dropColumn('sort_rder');
            });
        }
    }

}
