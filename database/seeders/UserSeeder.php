<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alumno;
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
        $admin1 = User::create([
            'name'  => 'Luis Carlos',
            'email' => 'santillan.itc@gmail.com',
            'password' => bcrypt('carlos123')
        ]);
        $admin1->assignRole('admin');

        $alumno1 = Alumno::where('nombre', 'NICOLAS')->where('paterno', 'FELIX')->where('materno', 'AGUILASOCHO')->first();
        $user1 = User::create([
            'name'  => 'Nicolas Felix',
            'email' => 'nicolasfelixag@mail.com',
            'password' => bcrypt('nico123'),
            'alumno_id' => $alumno1 ? $alumno1->id : null,
        ]);
        $user1->assignRole('alumno');

        $alumno2 = Alumno::where('nombre', 'DAMIAN EDUARDO')->where('paterno', 'NAVEJAS')->where('materno', 'CORRALES')->first();
        $user2 = User::create([
            'name'  => 'Francisco Lopez',
            'email' => 'francisco@mail.com',
            'password' => bcrypt('francisco123'),
            'alumno_id' => $alumno2 ? $alumno2->id : null,
        ]);
        $user2->assignRole('alumno');

        $admin2 = User::create([
            'name'  => 'Orientadora',
            'email' => 'orientadora@cetis107.edu.mx',
            'password' => bcrypt('orientador123')
        ]);
        $admin2->assignRole('admin');
    }
}
