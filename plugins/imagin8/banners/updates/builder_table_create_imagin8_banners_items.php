<?php namespace Imagin8\Banners\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateImagin8BannersItems extends Migration
{
    public function up()
    {
        Schema::create('imagin8_banners_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('button_text')->nullable();
            $table->string('link_url')->nullable();
            $table->string('text_color')->nullable();
            $table->integer('sort_order');
            $table->boolean('is_active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('imagin8_banners_items');
    }
}
