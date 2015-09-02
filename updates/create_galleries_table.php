<?php namespace Rebel59\Isogallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateGalleriesTable extends Migration
{

    public function up()
    {
        Schema::create('rebel59_isogallery_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('rebel59_isogallery_galleries');

    }

}
