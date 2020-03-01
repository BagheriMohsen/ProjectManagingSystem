<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCommentTimeLine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_line_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('time_line_id')->unsigned();
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->text('message');
            $table->boolean('is_confirm')->default(False);
            $table->date("confirm_date")->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('time_line_id')->references('id')->on('time_lines')
            ->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('parent_id')->references('id')->on('time_line_comments')
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
        Schema::dropIfExists('time_line_comments');
    }
}
