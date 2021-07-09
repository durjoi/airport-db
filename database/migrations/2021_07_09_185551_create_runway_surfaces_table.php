<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunwaySurfacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runway_surfaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('runway_id');
            $table->string('surface_type');
            $table->timestamps();

            $table->foreign('runway_id')->references('id')->on('airport_runways')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runway_surfaces');
    }
}
