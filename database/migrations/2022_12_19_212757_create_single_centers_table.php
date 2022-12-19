<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('long_name_en');
            $table->string('long_name_ar');
            $table->longText('main_image');
            $table->longText('description_en');
            $table->longText('description_ar');
            $table->string('location');
            $table->string('view_numbers');
            $table->string('phone');
            $table->longText('facebook_url');
            $table->longText('instagram_url');
            $table->longText('youtube_url');
            $table->longText('gallery_image_one');
            $table->longText('gallery_image_two');
            $table->longText('gallery_image_three');
            $table->longText('gallery_image_four');
            $table->longText('gallery_image_five');
            $table->longText('gallery_image_six');
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
        Schema::dropIfExists('single_centers');
    }
};
