<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
        // exit;

        $users = [
        	[
                'client_id' => 1,
                'role_id' => 1,
                'fname' => 'fname',
                'lname' => 'One',
                'mobile' => '9839152090',
                'email' => 'avijais@yahoo.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 2,
                'fname' => 'admin1',
                'lname' => 'client2',
                'mobile' => '0077777770',
                'email' => 'admin1@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 2,
                'fname' => 'admin2',
                'lname' => 'client2',
                'mobile' => '0077777771',
                'email' => 'admin2@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 3,
                'fname' => 'Teacher1',
                'lname' => 'client2',
                'mobile' => '0077777772',
                'email' => 'teacher1@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 3,
                'fname' => 'Teacher2',
                'lname' => 'client2',
                'mobile' => '0077777773',
                'email' => 'teacher2@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 3,
                'fname' => 'Teacher3',
                'lname' => 'client2',
                'mobile' => '0077777774',
                'email' => 'teacher3@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 4,
                'fname' => 'Executive1',
                'lname' => 'client2',
                'mobile' => '0077777775',
                'email' => 'executive1@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 4,
                'fname' => 'Executive2',
                'lname' => 'client2',
                'mobile' => '0077777776',
                'email' => 'executive2@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 4,
                'fname' => 'Executive3',
                'lname' => 'client2',
                'mobile' => '0077777777',
                'email' => 'executive3@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 4,
                'fname' => 'Executive4',
                'lname' => 'client2',
                'mobile' => '0077777778',
                'email' => 'executive4@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 5,
                'fname' => 'student1',
                'lname' => 'client2',
                'mobile' => '0077777779',
                'email' => 'student1@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 5,
                'fname' => 'student2',
                'lname' => 'client2',
                'mobile' => '0077777780',
                'email' => 'student2@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 5,
                'fname' => 'student3',
                'lname' => 'client2',
                'mobile' => '0077777781',
                'email' => 'student3@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 5,
                'fname' => 'student4',
                'lname' => 'client2',
                'mobile' => '0077777782',
                'email' => 'student4@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 2,
                'role_id' => 5,
                'fname' => 'student5',
                'lname' => 'client2',
                'mobile' => '0077777783',
                'email' => 'student5@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 2,
                'fname' => 'admin1',
                'lname' => 'client3',
                'mobile' => '0077777784',
                'email' => 'admin31@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 2,
                'fname' => 'admin2',
                'lname' => 'client3',
                'mobile' => '0077777785',
                'email' => 'admin32@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 3,
                'fname' => 'Teacher1',
                'lname' => 'client3',
                'mobile' => '0077777786',
                'email' => 'teacher31@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 3,
                'fname' => 'Teacher2',
                'lname' => 'client3',
                'mobile' => '0077777787',
                'email' => 'teacher32@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 3,
                'fname' => 'Teacher3',
                'lname' => 'client3',
                'mobile' => '0077777788',
                'email' => 'teacher33@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 4,
                'fname' => 'Executive1',
                'lname' => 'client3',
                'mobile' => '0077777789',
                'email' => 'executive31@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 4,
                'fname' => 'Executive2',
                'lname' => 'client3',
                'mobile' => '0077777790',
                'email' => 'executive32@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 4,
                'fname' => 'Executive3',
                'lname' => 'client3',
                'mobile' => '0077777791',
                'email' => 'executive33@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 4,
                'fname' => 'Executive4',
                'lname' => 'client3',
                'mobile' => '0077777792',
                'email' => 'executive34@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 5,
                'fname' => 'student1',
                'lname' => 'client3',
                'mobile' => '0077777793',
                'email' => 'student31@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 5,
                'fname' => 'student2',
                'lname' => 'client3',
                'mobile' => '0077777794',
                'email' => 'student32@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 5,
                'fname' => 'student3',
                'lname' => 'client3',
                'mobile' => '0077777795',
                'email' => 'student33@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 5,
                'fname' => 'student4',
                'lname' => 'client3',
                'mobile' => '0077777796',
                'email' => 'student34@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'client_id' => 3,
                'role_id' => 5,
                'fname' => 'student5',
                'lname' => 'client3',
                'mobile' => '0077777797',
                'email' => 'student35@email.com',
                'password' => bcrypt('123456'),
                'verified' => 1
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        User::insert($users);
    }
}
