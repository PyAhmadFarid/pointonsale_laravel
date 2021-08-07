<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            "name"=>"farid",
            "email"=>"farid@gmail.com",
            "password"=>bcrypt("qwer"),
            "email_verified_at"=>now()
        ]);
    }
}
