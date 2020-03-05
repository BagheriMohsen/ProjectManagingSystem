<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
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
        | Projects Table
        |--------------------------------------------------------------------------
        */
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('operating_unit_id')->unsigned()->nullable();
            $table->bigInteger('applicant_unit_id')->unsigned()->nullable();
            $table->bigInteger('manager_id')->unsigned()->nullable();
            $table->bigInteger('supervisor_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('subject');
            $table->string('priority');
            $table->string('color');
            $table->date('req_date')->nullable();
            $table->date('start_date')->nullable();
            $table->date('dead_date')->nullable();
            $table->date('complete_date')->nullable();
            $table->date('close_date')->nullable();
            $table->text('desc');
            $table->string('status')->default('in_progress');
            $table->boolean('is_public')->default(True);
            $table->boolean('is_verify')->default(False);
            $table->date('verify_date')->nullable();
            $table->timestamps();

            
            $table->foreign('operating_unit_id')->references('id')->on('units')
            ->onDelete('set null')->onUpdate('CASCADE');

            $table->foreign('applicant_unit_id')->references('id')->on('units')
            ->onDelete('set null')->onUpdate('CASCADE');

            $table->foreign('manager_id')->references('id')->on('users')
            ->onDelete('set null')->onUpdate('CASCADE');

            $table->foreign('supervisor_id')->references('id')->on('users')
            ->onDelete('set null')->onUpdate('CASCADE');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
