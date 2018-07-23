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
        Schema::create('classes_subjects', function (Blueprint $table) {
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
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
        echo ("classes_subjects table drop called");
        Schema::table('classes_subjects', function (BluePrint $table) {
            $table->dropForeign('classes_subjects_subject_id_foreign');
            $table->dropForeign('classes_subjects_class_id_foreign');
        });
        Schema::drop('classes_subjects');
    }
}
