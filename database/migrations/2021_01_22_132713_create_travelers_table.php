<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers', function (Blueprint $table) {
            $table->id();
            $table->string('shift');
            $table->string('route_no');
            $table->string('stop_name');
            $table->binary('challan');
            $table->string('name');
            $table->string('system_id')->unique();
            $table->string('department');
            $table->string('gender');
            $table->string('phone');
            $table->binary('photo');
            $table->text('secret');
            $table->boolean('is_printed')->default(0);
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
        Schema::dropIfExists('travelers');
    }
}
