<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('reporter_id');
            $table->unsignedBigInteger('task_type_id');
            $table->unsignedBigInteger('task_priority_id');
            $table->integer('parent_task_id');
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('status_id')->references('id')->on('task_status_template_types');
            $table->foreign('reporter_id')->references('id')->on('users');
            $table->foreign('task_type_id')->references('id')->on('task_types');
            $table->foreign('task_priority_id')->references('id')->on('task_priorities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
