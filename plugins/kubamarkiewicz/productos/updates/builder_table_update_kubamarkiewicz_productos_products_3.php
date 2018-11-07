<?php namespace KubaMarkiewicz\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKubamarkiewiczProductosProducts3 extends Migration
{
    public function up()
    {
        Schema::table('kubamarkiewicz_productos_products', function($table)
        {
            $table->integer('stock')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('kubamarkiewicz_productos_products', function($table)
        {
            $table->integer('stock')->nullable(false)->change();
        });
    }
}
