<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            "fullname" => "Jochele Mae Pastor",
            "address" => "Laguna",
            "contact" => "09123456768",
            "email" => "jochelemaepastor@gmail.com",
            "password" => Hash::make('12345678'),
            "account_type" => 1,
        ]);
    }
}
