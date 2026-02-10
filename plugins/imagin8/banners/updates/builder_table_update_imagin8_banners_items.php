<?php namespace Imagin8\Banners\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateImagin8BannersItems extends Migration
{
    public function up()
    {
        Schema::table('imagin8_banners_items', function($table)
        {
            $table->integer('sort_order')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('imagin8_banners_items', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}
