<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name'  => 'Luis Carlos',
            'email' => 'santillan.itc@gmail.com',
            'password' => bcrypt('carlos123')
        ])->assignRole('admin');

        User::create([
            'name'  => 'Francisco Lopez',
            'email' => 'francisco@mail.com',
            'password' => bcrypt('francisco123')
        ])->assignRole('alumno');
        
        User::create([
            'name'  => 'Orientadora',
            'email' => 'orientadora@cetis107.edu.mx',
            'password' => bcrypt('orientador123')
        ])->assignRole('admin');

        User::create([
            'name'  => 'Nicolas Felix',
            'email' => 'nicolasfelixag@mail.com',
            'password' => bcrypt('Nico123')
        ])->assignRole('alumno');
    }
}
