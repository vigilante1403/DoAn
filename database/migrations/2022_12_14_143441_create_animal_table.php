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
        // Schema::create('adopt-an-animal', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name')->unique();
        //     $table->integer('price');
        //     $table->timestamps();
        //     $table->string('img_path');
        //     $table->integer('desc_id');
        //     $table->foreign('desc_id')->references('id')->on('animal-description')->onDelete('cascade');

        // });
        // Schema::create('animal-description', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name')->unique();
        //     $table->string('beard-colors');
        //     $table->text('weight');
        //     $table->string('personality-traits');
        //     $table->string('fact');
        //     $table->string('favorite-items');
        //     $table->string('related-to');

        // });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adopt-an-animal');
        Schema::dropIfExists('animal-description');
    }
};
