<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(5)->create();


        // \App\Models\Post::factory()->create([
        //     'First_Name' => 'Test',
        //     'Last_Name' => 'User',
        //     'Email_Address' => 'test@example.com',
        // ]);
    }
}
