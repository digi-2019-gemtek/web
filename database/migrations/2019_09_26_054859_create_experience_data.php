<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_data', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('data_datetime');
            $table->double('soil_temperature', 15, 8);
            $table->double('soil_humidity', 15, 8);
            $table->double('soil_ec', 15, 8);
            $table->double('air_temperature', 15, 8);
            $table->double('air_humidity', 15, 8);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_data');
    }
}
