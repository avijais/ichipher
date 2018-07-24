<?php

use Illuminate\Database\Seeder;
use App\Models\Section;
use App\Models\Standard;
class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Section::truncate();
        Schema::enableForeignKeyConstraints();

        // $sections = [

		$sectionDatas = [
			['name' => 'A'],
			['name' => 'B'],
			['name' => 'C'],
			['name' => 'D'],
			['name' => 'E'],
			['name' => 'F'],
			['name' => 'G'],
			['name' => 'H'],
		];

		// foreach ($sections as $section) {
			// Section::create($section);
		// }

		// $standard = new Standard();
		$section = new Section();

		// $standardDatas = $standard->all();
		// print_r($sectionsDatas);

		foreach ($sectionDatas as $sectionData) {
			$sectionResponse = $section->create($sectionData);
			// // print_r("inserted id : "); print_r($sectionResponse->id);
			// $inserted_section_id = $sectionResponse->id;
			// foreach ($standardDatas as $standardData) {
			// 	// print_r($standardData->id);
			// 	// print_r("\n");
			// 	$standard->section($standardData->id)->attach($inserted_section_id);
			// }
		}
    }
}
