<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@udenar.edu.co',
            'password' => Hash::make('12345678'),
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Doc1',
            'email' => 'doc1@udenar.edu.co',
            'password' => Hash::make('12345678'),
        ])->assignRole('Doctor');

        User::create([
            'name' => 'paciente',
            'email' => 'paciente@udenar.edu.co',
            'password' => Hash::make('12345678'),
        ])->assignRole('Paciente');

        User::factory(17)->create();
    }
}
