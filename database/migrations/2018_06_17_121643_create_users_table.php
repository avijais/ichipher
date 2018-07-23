<?php

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
            $table->integer('client_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->string('fname', 56);
            $table->string('lname', 56)->nullable();
            $table->string('mobile', 10)->unique();
            $table->string('email', 112)->unique();
            $table->string('password', 60);
            $table->string('api_token', 64)->unique()->nullable();
            $table->tinyInteger('verified')->default(0);
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        echo ("users table drop called");
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_client_id_foreign');
            $table->dropForeign('users_role_id_foreign');
        });
        Schema::disableForeignKeyConstraints();
        Schema::drop('users');
        Schema::enableForeignKeyConstraints();
    }
}
