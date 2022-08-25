<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add the system user
        DB::table('users')->insert([
            'name' => "System Admin",
            'email' => 'admin@kam.com',
            'password' => Hash::make('vm6D2iVwcGmLo2z0zgGIn$84'),
        ]);
    }
}
