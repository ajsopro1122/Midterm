<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Orcullo',
                'fname' => 'Alvin',
                'address' => 'Tubigon, Bohol',
                'phone' => '09123456789',
                'email' => 'alvin@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Gunner',
                'fname' => 'Gunner Jane',
                'address' => 'Tera, Bohol',
                'phone' => '09123456789',
                'email' => 'gunner@gmail.com',
                'password' => bcrypt('password1234')
            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
