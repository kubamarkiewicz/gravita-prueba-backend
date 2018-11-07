<?php namespace KubaMarkiewicz\Productos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKubamarkiewiczProductosProducts2 extends Migration
{
    public function up()
    {
        Schema::table('kubamarkiewicz_productos_products', function($table)
        {
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('kubamarkiewicz_productos_products', function($table)
        {
            $table->text('description')->nullable(false)->change();
        });
    }
}
