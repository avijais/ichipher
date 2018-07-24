<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Subject::truncate();
        Schema::enableForeignKeyConstraints();

		$subjects = [
			['name' => 'Math'],
			['name' => 'English'],
			['name' => 'English Grammer'],
			['name' => 'Sanskrit'],
			['name' => 'Home Science'],
			['name' => 'Geography'],
			['name' => 'History'],
			['name' => 'Biology'],
			['name' => 'Chemestry'],
			['name' => 'Physics'],
			['name' => 'Hindi'],
			['name' => 'General Knowledge'],
		];

		foreach ($subjects as $subject) {
			Subject::create($subject);
		}
    }
}
