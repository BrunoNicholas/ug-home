<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->string('role')->nullable()->default('user');
            $table->string('telephone')->nullable();
            $table->string('location')->default('Kampala (Central), Uganda')->nullable();
            $table->string('gender')->default('Unknown')->nullable();
            $table->integer('age')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('maritual_status')->nullable()->default('single');
            $table->string('profile_image')->default('profile.jpg')->nullable();
            $table->string('occupation')->nullable()->default('Parent');
            $table->string('nationality')->nullable()->default('Parent');
            $table->text('bio')->nullable();
            $table->string('status')->default('Active')->nullable();
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
