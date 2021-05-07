<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwimlaneTransitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swimlane_transitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('swimlane_id');
            $table->string('status');
            $table->timestamps();

            $table->foreign('swimlane_id')->references('id')->on('swimlanes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('swimlane_transitions');
    }
}
