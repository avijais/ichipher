<?php

use Illuminate\Database\Seeder;
use App\Models\Section;
use App\Models\Standard;

class StandardSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('standard_section')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $standard = new Standard();
		$section = new Section();

		$standardDatas = $standard->all();
		$sectionDatas = $section->all();

		foreach ($standardDatas as $standardData) {
			foreach ($sectionDatas as $sectionData) {
				DB::table('standard_section')->insert([
					'standard_id' => $standardData->id,
					'section_id' => $sectionData->id
				]);
			}
		}
    }
}
