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
        User::create([
          'name' => "admin",
          "email" => "admin@example.com",
          "password" => Hash::make("password")
        ])->assignRole("admin");

        User::create([
          'name' => "operations",
          "email" => "operations@example.com",
          "password" => Hash::make("password")
        ])->assignRole("operations");
    }
}
