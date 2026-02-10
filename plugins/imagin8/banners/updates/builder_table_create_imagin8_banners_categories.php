<?php namespace Imagin8\Banners\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateImagin8BannersCategories extends Migration
{
    public function up()
    {
        Schema::create('imagin8_banners_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code');
            $table->boolean('options_loop');
            $table->boolean('options_autoplay');
            $table->boolean('options_arrows');
            $table->boolean('options_pagination');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('imagin8_banners_categories');
    }
}
