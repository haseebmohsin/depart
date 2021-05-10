<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('route_one')->nullable();
            $table->string('route_two')->nullable();
            $table->string('route_three')->nullable();
            $table->string('route_four')->nullable();
            $table->string('route_five')->nullable();
            $table->string('route_six')->nullable();
            $table->string('route_seven')->nullable();
            $table->string('route_eight')->nullable();
            $table->string('route_nine')->nullable();
            $table->string('route_ten')->nullable();
            $table->string('route_eleven')->nullable();
            $table->string('route_twelve')->nullable();
            $table->string('route_thirteen')->nullable();
            $table->string('route_fourteen')->nullable();
            $table->string('route_fifteen')->nullable();
            $table->string('route_sixteen')->nullable();
            $table->string('route_seventeen')->nullable();
            $table->string('route_eighteen')->nullable();
            $table->string('route_nineteen')->nullable();
            $table->string('route_twenty')->nullable();
            $table->string('route_twentyOne')->nullable();
            $table->string('route_twentyTwo')->nullable();
            $table->string('route_twentyThree')->nullable();
            $table->string('route_twentyFour')->nullable();
            $table->string('route_twentyFive')->nullable();
            $table->string('route_twentySix')->nullable();
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
        Schema::dropIfExists('routes');
    }
}
