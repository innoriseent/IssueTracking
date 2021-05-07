<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskDependenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_dependencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('dependency_type_id');
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('tasks');
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('dependency_type_id')->references('id')->on('task_dependency_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_dependencies');
    }
}
