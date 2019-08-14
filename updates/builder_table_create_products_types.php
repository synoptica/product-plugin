<?php namespace Synoptica\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateProductsTypes extends Migration
{
    public function up()
    {
        Schema::create('products_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('products_types');
    }
}
