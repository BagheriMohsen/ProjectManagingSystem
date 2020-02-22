<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProcesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('project_id')->unsigned()->nullable();
            $table->bigInteger('process_id')->unsigned()->nullable();
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
        Schema::dropIfExists('processes');
    }
}
