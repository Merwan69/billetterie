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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('duree');
            $table->string('Price');
            $table->string('Description');
            $table->string('Image');
            $table->string('type');
            $table->integer('IdArtiste');
            $table->integer('NumberPlacesReserved');
            $table->integer('NumberPlacesAvailable');
            $table->date('Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concerts');
    }
};
