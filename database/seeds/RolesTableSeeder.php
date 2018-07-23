<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
		Role::truncate();
		Schema::enableForeignKeyConstraints();
		// exit;
		$roles = [
			['name' => 'superadmin'],
			['name' => 'admin'],
			['name' => 'manger'],
			['name' => 'executive'],
			['name' => 'user'],
		];
	    Role::insert($roles);
    }
}