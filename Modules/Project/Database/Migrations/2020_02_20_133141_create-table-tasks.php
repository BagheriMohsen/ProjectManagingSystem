<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        |--------------------------------------------------------------------------
        |  Task
        |--------------------------------------------------------------------------
        */
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('project_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->integer('percent');
            $table->date('dead_line');
            $table->string('priority');
            $table->text('desc');
            $table->string('status')->default('in_progress');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

        });

        /*
        |--------------------------------------------------------------------------
        | Sub Task
        |--------------------------------------------------------------------------
        */
        Schema::create('sub_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('task_id')->unsigned()->nullable();
            $table->bigInteger('operator_id');
            $table->string('title');
            $table->string('slug');
            $table->integer('percent');
            $table->date('dead_line');
            $table->string('priority');
            $table->text('desc');
            $table->string('status')->default('in_progress');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('task_id')->references('id')->on('tasks')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

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
        Schema::dropIfExists('sub_tasks');
        
    }
}
