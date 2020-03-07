<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectNotes extends Migration
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
        | Projects Action
        |--------------------------------------------------------------------------
        */
        Schema::create('project_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
            $table->string('desc');
            $table->string('attach')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('project_id')->references('id')->on('projects')
            ->onDelete('CASCADE')->onUpdate('CASCADE');
            
        });

        /*
        |--------------------------------------------------------------------------
        | Projects Operating Units
        |--------------------------------------------------------------------------
        */
        Schema::create('project_task_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('project_task_id')->unsigned();
            $table->string('desc');
            $table->string('attach')->nullable();
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
        Schema::dropIfExists('project_notes');
    }
}
