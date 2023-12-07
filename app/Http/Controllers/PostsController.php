<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostsController extends Controller
{
  public function all_posts(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    return view('pages.posts');
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
