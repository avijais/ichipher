<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('standard_id')->unsigned();
            $table->foreign('standard_id')->references('id')->on('standards');
            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->text('title');
            $table->text('description');
            $table->text('reference');
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
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
        echo ("homework table drop called");
        Schema::table('homeworks', function(Blueprint $table) {
            $table->dropForeign('homeworks_standard_id_foreign');
            $table->dropForeign('homeworks_section_id_foreign');
            $table->dropForeign('homeworks_subject_id_foreign');
            $table->dropForeign('homeworks_created_by_foreign');
        });
        Schema::drop('homeworks');
    }
}
