<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteEighteensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_eighteens', function (Blueprint $table) {
            $table->id();
            $table->string('morning_stop')->nullable();
            $table->string('morning_time')->nullable();
            $table->string('evening_stop')->nullable();
            $table->string('evening_time')->nullable();
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
        Schema::dropIfExists('route_eighteens');
    }
}
