<?php

use Illuminate\Database\Seeder;
use App\Models\Client;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*using Query builder[disable foreign key check for this connection before running seeders]*/
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Client::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		// exit;
    	/*using Eloquent [disable foreign key check for this connection before running seeders]*/
    	// Schema::disableForeignKeyConstraints();
		// Client::truncate();
		// Schema::enableForeignKeyConstraints();

    	/*Deleteing only row but id is generated next after max id*/
		// Client::query()->delete();

    	/*create method auto inserted create_at and updated_at and allow to insert one row in each query*/
        Client::create([
        	'name' => 'Client One',
        	'mobile' => '9839152090',
        	'email' => 'abhi.jais@yahoo.co.in',
        	'address' => 'Chattarpur',
        ]);
        Client::create([
        	'name' => 'Client Two',
        	'mobile' => '7042406890',
        	'email' => 'abhi_niceboy99@yahoo.co.in',
        	'address' => 'Maidanghari',
        ]);

        /*insert method not auto inserted create_at and updated_at and allow to insert multiple row in single query*/
        Client::insert([
        	[
	        	'name' => 'Client Three',
	        	'mobile' => '8471008051',
	        	'email' => 'abhiniceboy99@gmail.com',
	        	'address' => 'Chattarpur',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s')
	        ], [
	        	'name' => 'Client Four',
	        	'mobile' => '9455143287',
	        	'email' => 'avijais@yahoo.com',
	        	'address' => 'Maidanghari',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s')
	        ]
	    ]);
    }
}
