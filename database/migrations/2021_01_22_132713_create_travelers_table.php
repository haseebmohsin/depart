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
            $table->string('name');
            $table->string('system_id')->unique();
            $table->string('department');
            $table->string('challan');
            $table->string('gender');
            $table->string('shift');
            $table->string('route_no');
            $table->string('stop_name');
            $table->binary('photo');
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
