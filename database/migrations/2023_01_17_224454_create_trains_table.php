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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departure_rail_station', 200);
            $table->string('arrival_rail_station', 200);
            $table->date('departure_time', 0);
            $table->date('arrival_time', 0);
            $table->mediumInteger('train_code', false, true);
            $table->tinyInteger('number_carriage', false, true);
            $table->boolean('in_time')->nullable();
            $table->boolean('delay')->nullable();
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
        Schema::dropIfExists('trains');
    }
}
