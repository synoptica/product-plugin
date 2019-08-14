<?php namespace Synoptica\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateProductsProviders extends Migration
{
    public function up()
    {
        Schema::create('products_providers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('product_id');
            $table->integer('provider_id');
            $table->string('name', 255)->nullable();
            $table->string('descr', 4096)->nullable();
            $table->integer('cost')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('products_providers');
    }
}
