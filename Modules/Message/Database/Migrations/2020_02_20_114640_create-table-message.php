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
        
        /*
        |--------------------------------------------------------------------------
        | Create Table Messages
        |--------------------------------------------------------------------------
        */
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('unit_id')->unsigned()->nullable();
            $table->bigInteger('sender_id')->unsigned();
            $table->bigInteger('receiver_id')->unsigned();
            $table->string('attach')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('desc');
            $table->boolean('is_unread')->default(False);
            $table->timestamps();


            $table->foreign('sender_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('receiver_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('unit_id')->references('id')->on('units')
            ->onDelete('CASCADE')->onUpdate('CASCADE');
            
        });



        /*
        |--------------------------------------------------------------------------
        | Create Table Message Replies
        |--------------------------------------------------------------------------
        */
        Schema::create('message_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sender_id')->unsigned();
            $table->bigInteger('receiver_id')->unsigned();
            $table->bigInteger('message_id')->unsigned();
            $table->string('attach')->nullable();
            $table->text('desc');
            $table->timestamps();


            $table->foreign('sender_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('receiver_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('message_id')->references('id')->on('messages')
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
