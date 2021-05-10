<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_ones', function (Blueprint $table) {
            $table->id();
            $table->string('m_stop')->nullable();
            $table->string('m_time')->nullable();
            $table->string('e_stop')->nullable();
            $table->string('e_time')->nullable();
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
        Schema::dropIfExists('route_ones');
    }
}
