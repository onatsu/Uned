<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(['email' => 'info@davidcruz.net']);
        $this->call(ProductSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
