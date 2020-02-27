<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
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
        | User Table
        |--------------------------------------------------------------------------
        */
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable()->unique();
            $table->string('unit')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });




        /*
        |--------------------------------------------------------------------------
        | Group User Table
        |--------------------------------------------------------------------------
        */
        Schema::create('group_user', function (Blueprint $table) {
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("group_id")->unsigned();

            $table->foregin("user_id")->references("id")->on("users")
            ->onDelete("CASCADE")->onUpdate("onDelete");

            $table->foregin("group_id")->references("id")->on("group")
            ->onDelete("CASCADE")->onUpdate("onDelete");


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
