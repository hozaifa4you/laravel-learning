<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
  public function user(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    $user = [
      "name" => "Yousuf Ahamd",
      "email" => "yousuf360.ya@gmail.ocm",
      "age" => 28,
      "mobile" => "01918780770",
      "address" => "Satkhira",
      "brothers" => ["Anamul Hasan", "Ather Rahman", "Ibrahim Khalil", "Niloy Jamil", "Abu Huraira"],
      "city" => ["Dhaka", "Chattogram", "Satkhira", "Khulna"]
    ];

    return view('pages.user', ['user' => $user]);
  }
}
