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
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('project_id')->unsigned()->nullable();
            $table->bigInteger('operator_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->integer('percent');
            $table->float('estimated_time');
            $table->string('priority');
            $table->text('desc');
            $table->string('color')->default("black");
            $table->time('reminder_time')->nullable();
            $table->string('reminder_type')->nullable();
            $table->string('status')->default('in_progress');
            $table->date("complete_date")->nullable();
            $table->date("close_date")->nullable();
            $table->boolean('is_done')->default(False);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('operator_id')->references('id')->on('users')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

        });

        /*
        |--------------------------------------------------------------------------
        | Sub Task
        |--------------------------------------------------------------------------
        */
        Schema::create('project_sub_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('project_task_id')->unsigned()->nullable();
            $table->string('title');
            $table->integer('percent');
            $table->float('time_passes')->default(0);
            $table->string('priority');
            $table->string('color')->default("black");
            $table->text('desc')->nullable();
            $table->time('reminder_time')->nullable();
            $table->string('reminder_type')->nullable();
            $table->string('status')->default('in_progress');
            $table->boolean('is_done')->default(False);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('project_task_id')->references('id')->on('project_tasks')
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
