<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_trains', function (Blueprint $table) {
            $table->id();
            $table->string('Train_Id', 100);
            $table->string('Departure_City',100);
            $table->string('Arrivals_City',100);
            $table->string('Time_Departure',100);
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
        Schema::dropIfExists('_trains');
    }
}
