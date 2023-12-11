<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
  public function all_posts()
  {
    $posts = DB::table('posts')
      ->leftJoin('users', 'posts.user_id', '=', 'users.id')
      ->select('posts.*', 'users.name')
      ->paginate(6);

//    dd($posts);

    return view('pages.posts', ['posts' => $posts]);
  }

  public function single_post(string $post_id): View|\Illuminate\Foundation\Application|Factory|Application
  {
    return view('pages.post');
  }

  public function create_post(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    return view('create-post');
  }
}
