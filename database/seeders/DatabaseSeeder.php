<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Utilisateur "admin"
        $admin = User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Utilisateur "user"
        $user = User::factory()->create([
            'name'     => 'User',
            'email'    => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        // Produits de l'admin
        Product::factory()->count(3)->create([
            'user_id' => $admin->id,
        ]);

        // Produits de l'utilisateur simple
        Product::factory()->count(3)->create([
            'user_id' => $user->id,
        ]);
    }
}
