<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_todo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('category');
            $table->string('content');
            $table->text('background_img');
            $table->text('images');
            $table->timestamps();
            $table->integer('status');
            $table->integer('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
