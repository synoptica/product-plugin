<?php namespace Synoptica\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateProducts extends Migration
{
    public function up()
    {
        Schema::create('products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('type_id');
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->string('descr', 4096)->nullable();
            $table->string('class', 255)->nullable();
            $table->integer('price')->default(0);
            $table->integer('price_reseller_a')->nullable();
            $table->integer('price_reseller_b')->nullable();
            $table->integer('price_reseller_c')->nullable();
            $table->string('photo', 255)->nullable();
            $table->boolean('is_enabled')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
