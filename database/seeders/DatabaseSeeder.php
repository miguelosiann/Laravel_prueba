<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Crear 100 posts usando la Factory
        Post::factory(100)->create();

        $this->call([
            UserSeeder::class,
   
        ]);

   

    }
}
