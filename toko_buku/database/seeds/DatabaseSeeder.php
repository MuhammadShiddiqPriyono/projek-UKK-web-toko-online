<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "manager",
            "email" => "manager@gmail.com",
            "password" => Hash::make('manager123'),
            "address" => "Jl. wangun Bogor Selatan",
            "telphone" => "000000000000",
            "status" => "manager",
            "akses" => "manager"
            ]);
    }
}
