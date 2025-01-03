<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'fullname' => 'Test Admin User',
            'type' => 'Admin',
            'email' => 'test@example.com',
            'password' => 'admin1234'
        ]);
        
        User::factory(10)->create();

        
    }
}
