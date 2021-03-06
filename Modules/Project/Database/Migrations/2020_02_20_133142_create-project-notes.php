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
        | Projects Operating Units
        |--------------------------------------------------------------------------
        */
        Schema::create('project_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('process_id')->unsigned();
            $table->string('attach')->nullable();
            $table->string('title');
            $table->string('desc');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('project_id')->references('id')->on('projects')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('process_id')->references('id')->on('processes')
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
