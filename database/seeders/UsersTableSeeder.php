<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultUser = new User();

        $defaultUser->name = 'Admin';
        $defaultUser->last_name = 'Default';
        $defaultUser->telephone = '00000000';
        $defaultUser->email = 'Admin@gmail.com';
        $defaultUser->password = Hash::make('Admin2023-24');
        $defaultUser->document_type = 'CC';
        $defaultUser->document_number = '000000000';
        $defaultUser->role_id = 1;

        $defaultUser->save();
    }
}
