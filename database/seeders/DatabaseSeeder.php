<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorynews;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        News::factory(10)->create();
        Categorynews::create([
            'title' => 'Games',
            'slug' => 'games'
        ]);
        User::create([
            'name' => 'Im Admin',
            'email' => 'fitraangguns@gmail.com',
            'password' => bcrypt('password')
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
