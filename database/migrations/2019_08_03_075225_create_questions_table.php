<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asked_by')->unsigned();
            $table->integer('responder')->nullable()->unsigned();
            $table->string('user_name')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->text('response')->nullable();
            $table->string('status')->default('Pending')->nullable();
            $table->timestamps();

            $table->foreign('responder')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
