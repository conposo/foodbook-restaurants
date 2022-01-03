<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            
            // Owner
            $table->unsignedInteger('creator_id');

            // Business name
            $table->string('slug', 256);
            $table->string('business_name', 256);

            $table->json('worktime')->nullable();

            // Address
            $table->string('city', 256);
            $table->string('region', 256)->nullable();
            $table->string('postal_code', 256)->nullable();
            $table->string('address', 512);
            $table->string('address_additional', 256)->nullable();
            $table->string('lat', 128);
            $table->string('lng', 128);

            // Contacts
            $table->string('phone', 256);
            $table->string('email', 256)->nullable();
            $table->string('website', 256)->nullable();
            $table->string('fb_page', 256)->nullable();

            // About the Restaurant
            $table->text('description');
            $table->string('category', 256)->nullable();
            $table->string('cuisine', 256);
            $table->json('seats')->nullable();
            $table->json('price_range')->nullable();

            $table->boolean('agreement')->default(false);

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
        Schema::dropIfExists('restaurants');
    }
}
