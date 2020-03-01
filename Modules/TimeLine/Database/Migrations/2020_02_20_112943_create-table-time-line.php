<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTimeLine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('image_id')->unsigned()->nullable();
            $table->bigInteger('unit_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('desc');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('image_id')->references('id')->on('media')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('unit_id')->references('id')->on('units')
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
        Schema::dropIfExists('time_lines');
    }
}
