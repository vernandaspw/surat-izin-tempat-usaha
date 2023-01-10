<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'nama' => 'administrator',
                'username' => 'administrator',
                'password' => Hash::make('administrator'),
                'role' => 'administrator'
            ],
            [
                'nama' => 'admin',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ],
            [
                'nama' => 'kepala',
                'username' => 'kepala',
                'password' => Hash::make('kepala'),
                'role' => 'kepala'
            ],
            [
                'nama' => 'umum',
                'username' => 'umum',
                'password' => Hash::make('umum'),
                'role' => 'umum'
            ],
        ]);
    }
}
