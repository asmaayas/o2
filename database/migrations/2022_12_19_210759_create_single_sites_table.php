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
        Schema::create('single_sites', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->longText('main_image');
            $table->string('type');
            $table->string('dive_site');
            $table->string('depth');
            $table->string('access');
            $table->string('level');
            $table->longText('overview');
            $table->longText('read_more_link');
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
        Schema::dropIfExists('single_sites');
    }
};
