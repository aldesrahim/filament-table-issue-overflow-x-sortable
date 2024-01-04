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

        $additional = [];

        for ($i=1;$i<=18;$i++) {
            $additional["word$i"] = fake()->words(3, true);
        }
        
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@filamentphp.com',
            ...($additional)
        ]);
    }
}
