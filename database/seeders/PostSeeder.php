<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = File::get(path: 'database/json/posts.json');
    $posts = collect(json_decode($data));
    $posts->each(function ($post) {
      DB::table('posts')->insert([
        'title' => $post->title,
        'description' => $post->description,
        'image' => $post->image
      ]);
    });
  }
}
