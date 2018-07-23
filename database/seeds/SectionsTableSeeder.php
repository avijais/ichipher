<?php

use Illuminate\Database\Seeder;
use App\Models\Section;
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

		$sections = [
			['name' => 'A'],
			['name' => 'B'],
			['name' => 'C'],
			['name' => 'D'],
			['name' => 'E'],
			['name' => 'F'],
			['name' => 'G'],
			['name' => 'H'],
		];
		foreach ($sections as $section) {
			Section::create($section);
		}
    }
}
