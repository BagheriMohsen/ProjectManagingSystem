<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTickets extends Migration
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
        | Table Tickets
        |--------------------------------------------------------------------------
        */
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('unit_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('receiver_id')->unsigned();
            $table->string('attach')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string("tracking_code")->unique();
            $table->string("priority")->default("low");
            $table->boolean("is_close")->default(False);
            $table->text('desc');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('receiver_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('unit_id')->references('id')->on('units')
            ->onDelete('CASCADE')->onUpdate('CASCADE');


            
        });

        /*
        |--------------------------------------------------------------------------
        | Table Ticket Replies
        |--------------------------------------------------------------------------
        */
        Schema::create('ticket_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('receiver_id')->unsigned();
            $table->bigInteger('ticket_id')->unsigned();
            $table->string('attach')->nullable();
            $table->string('title');
            $table->text('desc');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('receiver_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('ticket_id')->references('id')->on('tickets')
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
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('ticket_replies');

    }
}
