<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Standard;

class StandardSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('standard_subject')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $standard = new Standard();
		$subject = new Subject();

		$standardDatas = $standard->all();
		$subjectDatas = $subject->all();

		foreach ($standardDatas as $standardData) {
			foreach ($subjectDatas as $subjectData) {
				DB::table('standard_subject')->insert([
					'standard_id' => $standardData->id,
					'subject_id' => $subjectData->id
				]);
			}
		}
    }
}