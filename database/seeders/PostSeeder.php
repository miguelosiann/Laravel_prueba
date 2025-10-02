<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post 1',
            'content' => 'Contenido del post 1',
            'category' => 'Categoria 1',
            'published_at' => now(),
            'is_active' => true
        ]);

        Post::create([
            'title' => 'Post 2',
            'content' => 'Contenido del post 2',
            'category' => 'Categoria 2',
            'published_at' => now(),
            'is_active' => true
        ]);
    }
}
