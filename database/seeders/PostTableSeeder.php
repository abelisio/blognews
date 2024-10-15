<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('posts')->insert([
        //     'title' => 'POST exemplo',
        //     'description' => 'desxcriçao POST',
        //     'body' => 'conteúdo POST',
        //     'slug' => 'POST-exemplo',
        //     'thumb' => 'thumb-tete.png',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // Post::factory(5)->create();

        // Post::factory(10)->active()->create();

        \App\Models\User::factory(10)
            ->hasPosts(5, ['is_active' => true])
            ->create();
    }
}