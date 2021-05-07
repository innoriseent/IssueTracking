<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskStatusTemplateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_status_template_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_status_template_id');
            $table->string('status');
            $table->timestamps();

            $table->foreign('task_status_template_id')->references('id')->on('task_status_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_status_template_types');
    }
}
