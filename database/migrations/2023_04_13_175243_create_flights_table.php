<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->enum("type", ["PASSENGER", "FREIGHT"]);
            $table->bigInteger("departure_id")->unsigned();
            $table->bigInteger("destination_id")->unsigned();
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->bigInteger("airline_id")->unsigned();
            $table->timestamps();
            $table->foreign('departure_id')->references('id')->on('airports');
            $table->foreign('destination_id')->references('id')->on('airports');
            $table->foreign('airline_id')->references('id')->on('airlines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
