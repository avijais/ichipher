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

        $this->call(SectionsTableSeeder::class);
        $this->command->info("Sections table table seeded successfully");

        $this->call(StandardsTableSeeder::class);
        $this->command->info("Standard table seeded successfully");

        $this->call(StandardSectionTableSeeder::class);
        $this->command->info("Standard section table seeded successfully");

        $this->call(StandardSubjectTableSeeder::class);
        $this->command->info("Standard subject table seeded successfully");

        $this->call(HomeworksTableSeeder::class);
        $this->command->info("Homeworks table seeded successfully");
    }
}
