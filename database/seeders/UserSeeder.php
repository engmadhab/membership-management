<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Madhab";
        $user->username = "madhab";
        $user->phone_no = "01747654201";
        $user->	email = "admin@gmail.com";
        $user->password = Hash::make('password');
        $user->designation_id = 1;
        $user->save();
    }
}
