<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterHomeworksAddColumnRemarksSubmissionDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homeworks', function(Blueprint $table) {
            $table->text('remarks')->after('reference');
            $table->date('submission_date')->after('remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homeworks', function(Blueprint $table) {
            $table->dropcolumn('remarks');
            $table->dropcolumn('submission_date');
        });
    }
}
