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
        //Creacion admin y asignacion de role
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@englishlessons.com',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('admin');

        //Creacion de editor y asignacion de role
        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@englishlessons.com',
            'password' => Hash::make('editor'),
        ]);
        $editor->assignRole('editor');
    }
}
