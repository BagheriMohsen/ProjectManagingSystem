<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sender_id')->unsigned();
            $table->bigInteger('reciver_id')->unsigned();
            $table->string('attach')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->timestamps();


            $table->foreign('sender_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('reciver_id')->references('id')->on('users')
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
        Schema::dropIfExists('messages');
    }
}
