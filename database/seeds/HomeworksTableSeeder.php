<?php

use Illuminate\Database\Seeder;
use App\Models\Homework;
use App\Models\Standard;
use App\Models\Section;
use App\Models\Subject;

class HomeworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Homework::truncate();
        Schema::enableForeignKeyConstraints();
        $homework = new Homework;
        
        $standard = new Standard;
        $standards = $standard->all();
        
        $section = new Section;
        $sections = $section->all();
        
        $subject = new Subject;
        $subjects = $subject->all();

        $teachersId = [4, 18];
        foreach ($teachersId as $eachTeacherId) {
        	foreach ($standards as $eachStandard) {
	        	foreach ($sections as $eachSection) {
	        		foreach ($subjects as $eachSubject) {
	        			$toBeInsertHomework = [
	        				'standard_id' => $eachStandard->id,
		        			'section_id' => $eachSection->id,
		        			'subject_id' => $eachSubject->id,
		        			'title' => 'Section '. $eachSection->name . ' ka ' . $eachSubject->name . ' ka Title.',
		        			'description' => 'Section '. $eachSection->name . ' ka ' . $eachSubject->name . ' ka Description.',
		        			'created_by' => $eachTeacherId
		        		];
		        		$homework->create($toBeInsertHomework);
	        		}
	        	}
	        	print_r("-----class --$eachStandard---done-------------------");
	        }
        }
    }
}
