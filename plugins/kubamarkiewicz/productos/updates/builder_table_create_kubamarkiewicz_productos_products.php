<?php namespace KubaMarkiewicz\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKubamarkiewiczProductosProducts extends Migration
{
    public function up()
    {
        Schema::create('kubamarkiewicz_productos_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description');
            $table->integer('stock');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kubamarkiewicz_productos_products');
    }
}
