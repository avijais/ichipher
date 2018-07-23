<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_subject', function (Blueprint $table) {
            $table->integer('standard_id')->unsigned();
            $table->foreign('standard_id')->references('id')->on('standards');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        echo ("standard_subject table drop called");
        Schema::table('standard_subject', function (BluePrint $table) {
            $table->dropForeign('standard_subject_subject_id_foreign');
            $table->dropForeign('standard_subject_standard_id_foreign');
        });
        Schema::drop('standard_subject');
    }
}
