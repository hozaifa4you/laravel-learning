<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UsersController extends Controller
{
  public function users(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    $users = [
      1 => ['id' => 1, 'name' => 'Yousuf Ahamad', 'age' => 28, 'education' => 'BSc at CSE'],
      2 => ['id' => 2, 'name' => 'Anamul Hasan', 'age' => 20, 'education' => 'Enter'],
      3 => ['id' => 3, 'name' => 'Niloy Jamil', 'age' => 31, 'education' => 'Honor\'s at BBA'],
    ];

    return view('pages.users', ['users' => $users]);
  }
}
