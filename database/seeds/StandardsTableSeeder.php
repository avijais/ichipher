<?php

use Illuminate\Database\Seeder;
use App\Models\Standard;
use App\Models\Section;
class StandardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
		Standard::truncate();
		Schema::enableForeignKeyConstraints();

		$standardDatas = [
			['name' => 'One', 'roman_name' => 'I', 'numeric_name' => '1', 'branch' => ''],
			['name' => 'Two', 'roman_name' => 'II', 'numeric_name' => '2', 'branch' => ''],
			['name' => 'Three', 'roman_name' => 'III', 'numeric_name' => '3', 'branch' => ''],
			['name' => 'Four', 'roman_name' => 'IV', 'numeric_name' => '4', 'branch' => ''],
			['name' => 'Five', 'roman_name' => 'V', 'numeric_name' => '5', 'branch' => ''],
			['name' => 'Six', 'roman_name' => 'VI', 'numeric_name' => '6', 'branch' => ''],
			['name' => 'Seven', 'roman_name' => 'VII', 'numeric_name' => '7', 'branch' => ''],
			['name' => 'Eight', 'roman_name' => 'VIII', 'numeric_name' => '8', 'branch' => ''],
			['name' => 'Nine', 'roman_name' => 'IX', 'numeric_name' => '9', 'branch' => ''],
			['name' => 'Ten', 'roman_name' => 'X', 'numeric_name' => '10', 'branch' => ''],
			['name' => 'Eleven', 'roman_name' => 'XI', 'numeric_name' => '11', 'branch' => ''],
			['name' => 'Twelve', 'roman_name' => 'XII', 'numeric_name' => '12', 'branch' => '']
		];
		
		$standard = new Standard();
		$section = new Section();

		// $sectionsDatas = $section->all();
		// print_r($sectionsDatas);

		foreach ($standardDatas as $standardData) {
			$response = $standard->create($standardData);
			print_r("inserted id : "); print_r($response->id);
			// $clss->create($class);
			// // Clss::create($class)->Sections()->attach(1);
			// foreach ($sectionsDatas as $sectionData) {
				// print_r($section->id);
				// $response->section($response->id)->attach($sectionData->id);
				// $clss->section()->attach($section->id);
			// }
		}
    }
}
