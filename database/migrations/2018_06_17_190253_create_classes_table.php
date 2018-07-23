<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 12);
            $table->string('roman_name', 5);
            $table->string('numeric_name', 5);
            $table->string('branch', 20)->nullable();
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
        echo ("standards table drop called");
        Schema::disableForeignKeyConstraints();
        Schema::drop('standards');
        Schema::enableForeignKeyConstraints();
    }
}
