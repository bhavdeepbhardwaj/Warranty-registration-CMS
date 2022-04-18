<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
               'name'           =>'Admin',
               'last_name'      =>'',
               'email'          =>'admin@avita.com',
                'is_admin'      =>'1',
               'password'       => bcrypt('Admin@123'),
            ],
            [
               'name'           =>'User',
               'last_name'      =>'',
               'email'          =>'user@avita.com',
                'is_admin'      =>'0',
               'password'       => bcrypt('User@123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
