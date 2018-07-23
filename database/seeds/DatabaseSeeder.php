<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     ClientsTableSeeder::class,
        //     RolesTableSeeder::class,
        //     UsersTableSeeder::class,
        // ]);
        
    	$this->call(ClientsTableSeeder::class);
        $this->command->info("Client table seeded successfully");

        $this->call(RolesTableSeeder::class);
        $this->command->info("roles table created successfully");

        $this->call(UsersTableSeeder::class);
        $this->command->info("Users table seeded successfully");

        $this->call(ClssesTableSeeder::class);
        $this->command->info("Classes table seeded successfully");

        $this->call(SectionsTableSeeder::class);
        $this->command->info("Sections table table seeded successfully");
    }
}
