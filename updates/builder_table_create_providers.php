<?php namespace Synoptica\Service\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateProviders extends Migration
{
    public function up()
    {
        Schema::create('providers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('descr', 1024)->nullable();
            $table->string('slug', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });     
    }
    
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
