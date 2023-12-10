<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
  public function users(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    $users = DB::table('users')->get();

    return view('pages.users', ['users' => $users]);
  }

  public function user(string $user_id): View|\Illuminate\Foundation\Application|Factory|Application
  {

    $user = DB::table('users')->where('id', $user_id)->get();

    return view('pages.user', ['user' => $user]);
  }

  public function new_user(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    return view('pages.newuser');
  }

  public function update_user(string $user_id): View|\Illuminate\Foundation\Application|Factory|Application
  {
    return view('pages.updateuser');
  }

  public function delete_user(string $user_id)
  {
    $user = DB::table('users')->where('id', $user_id)->delete();
    if ($user) {
      return redirect()->route('users.all');
    } else {
      return view('pages.userdelete');
    }
  }
}

