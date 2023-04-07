<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'role' => 'Admin',
            'name' => 'DSSAN',
            'email' => 'admin@sifal.deerwalk.edu.np',
            'password' => Hash::make('Admin@1234!'),
        ]);
    }
}
