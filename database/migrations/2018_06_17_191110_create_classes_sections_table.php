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
        Schema::create('standard_section', function (Blueprint $table) {
            $table->integer('standard_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->foreign('standard_id')->references('id')->on('standards');
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
        echo ("standard_section table drop called");
        Schema::table('standard_section', function (Blueprint $table) {
            $table->dropForeign('standard_section_standard_id_foreign');
            $table->dropForeign('standard_section_section_id_foreign');
        });
        Schema::drop('standard_section');
    }
}
