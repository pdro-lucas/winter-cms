<?php namespace Imagin8\Banners\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateImagin8BannersItems2 extends Migration
{
    public function up()
    {
        Schema::table('imagin8_banners_items', function($table)
        {
            $table->boolean('is_active')->default(true)->change();
        });
    }
    
    public function down()
    {
        Schema::table('imagin8_banners_items', function($table)
        {
            $table->boolean('is_active')->default(null)->change();
        });
    }
}
