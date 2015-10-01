<?php namespace Rebel59\Isogallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('rebel59_isogallery_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->timestamps();
        });


        Schema::create('rebel59_isogallery_gally_cats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('gallery_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['gallery_id', 'category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rebel59_isogallery_categories');
        Schema::dropIfExists('rebel59_isogallery_gally_cats');
    }

}
