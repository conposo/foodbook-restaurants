<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('menus', function (Blueprint $table) {
        //     $table->addColumn('dish_weight',2);
        // });

        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('is_public')->nullable();
            
            $table->unsignedSmallInteger('restaurant_id');

            $table->string('category_slug');
            
            $table->unsignedSmallInteger('dish_id')->nullable();
            $table->string('dish_name', 255);
            $table->string('dish_slug', 255)->nullable();
            $table->decimal('dish_price', 5, 2);
            $table->smallInteger('dish_weight')->nullable();
            $table->string('dish_image_url', 255)->nullable();
            
            $table->unsignedTinyInteger('order')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
