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
        | Projects Categories
        |--------------------------------------------------------------------------
        */
        Schema::create('project_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
            
        });

        /*
        |--------------------------------------------------------------------------
        | Projects Operating Units
        |--------------------------------------------------------------------------
        */
        Schema::create('project_operating_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
            
        });
        /*
        |--------------------------------------------------------------------------
        | Projects Table
        |--------------------------------------------------------------------------
        */
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('operating_unit_id')->unsigned()->nullable();
            $table->bigInteger('manager_id')->unsigned()->nullable();
            $table->bigInteger('supervisor_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('applicant_unit');
            $table->string('priority');
            $table->date('req_date')->nullable();
            $table->date('start_date')->nullable();
            $table->date('complete_date')->nullable();
            $table->date('close_date')->nullable();
            $table->text('desc');
            $table->string('status')->default('in_progress');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('set null')->onUpdate('CASCADE');

            $table->foreign('category_id')->references('id')->on('project_categories')
            ->onDelete('set null')->onUpdate('CASCADE');

            $table->foreign('operating_unit_id')->references('id')->on('project_operating_units')
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
        Schema::dropIfExists('project_categories');
        Schema::dropIfExists('operating_units');
        Schema::dropIfExists('projects');

    }
}
