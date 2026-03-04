<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'jendasv@seznam.cz')->exists()) {
            User::create([
                'name' => 'Jan',
                'second_name' => 'Svoboda',
                'email' => 'jendasv@seznam.cz',
                'password' => Hash::make('admin123'), // bezpečné hashování
                'role' => 'admin',
            ]) ;
        }
        if (!User::where('email', 'pepasv@gmail.com')->exists()) {
            User::create([
                'name' => 'Josef',
                'second_name' => 'Svoboda',
                'email' => 'pepasv@gmail.com',
                'password' => Hash::make('user123'), // bezpečné hashování
                'role' => 'editor',
            ]) ;
        }
        if (!User::where('email', 'kuliocko@gmail.com')->exists()) {
            User::create([
                'name' => 'Vít',
                'second_name' => 'Rakušan',
                'email' => 'kuliocko@gmail.com',
                'password' => Hash::make('user123'), // bezpečné hashování
                'role' => 'editor',
            ]) ;
        }
    }
}
