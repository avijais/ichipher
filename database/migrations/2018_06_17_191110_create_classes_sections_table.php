<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_sections', function (Blueprint $table) {
            $table->integer('class_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('section_id')->references('id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        echo ("classes_sections table drop called");
        Schema::table('classes_sections', function (Blueprint $table) {
            $table->dropForeign('classes_sections_class_id_foreign');
            $table->dropForeign('classes_sections_section_id_foreign');
        });
        Schema::drop('classes_sections');
    }
}
