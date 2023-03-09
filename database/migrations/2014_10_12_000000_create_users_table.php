<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('login',20)->unique()->nullable(false);
            $table->string('full_name',40)->nullable(false);
            $table->string('tel_number',15)->unique()->nullable(true);
            $table->string('password',255)->nullable(false);
            $table->date('birthday')->nullable(true);
            $table->string('sex',7)->nullable(false);
            $table->bigInteger('id_role')->unsigned()->nullable(false);
            $table->string('remember_token',100)->nullable(true);
            $table->foreign('id_role')->references('id')->on('roles');
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
};
