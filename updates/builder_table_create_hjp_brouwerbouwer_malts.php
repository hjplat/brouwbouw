<?php namespace Hjp\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHjpBrouwerbouwerMalts extends Migration
{
    public function up()
    {
        Schema::create('hjp_brouwerbouwer_malts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('recipe_id');
            $table->decimal('percentage',10,2);
            $table->integer('malt_list_id');
            $table->boolean('mash')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hjp_brouwerbouwer_malts');
    }
    
}