<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class,]);
            
        User::factory()->create([
            'name' => 'Alessio',
            'email' => 'alessio@email.it',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Biagio',
            'email' => 'biagio@email.it',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);        
        User::factory()->create([
            'name' => 'Dario',
            'email' => 'dario@email.it',
            'password' => Hash::make('12345678'),
            'role' => 'user',
            'is_revisor' => true
        ]);       
    }
}
