<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 56);
            $table->string('mobile', 10)->unique();
            $table->string('email', 112)->unique();
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        echo ("Client table drop called");
        Schema::disableForeignKeyConstraints();
        Schema::drop('clients');
        Schema::enableForeignKeyConstraints();
    }
}