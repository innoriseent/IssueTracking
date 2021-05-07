<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('msp_id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('board_id');
            $table->timestamps();

            $table->foreign('msp_id')->references('id')->on('msps');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('board_id')->references('id')->on('boards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board_projects');
    }
}
