<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
  public function users(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    $users = DB::table('users')->orderBy('id')->paginate(10);

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

  public function create_new_user(Request $req): string|RedirectResponse
  {
    $user = DB::table('users')->insert([
      'name' => $req->input('name'),
      'email' => $req->input('email'),
      'age' => $req->input('age'),
      'address' => $req->input('address'),
      'password' => $req->input('password'),
      'phone' => $req->input('phone'),
      'city' => $req->input('city')
    ]);

    if ($user) {
      return redirect()->route('users.all');
    } else {
      return "User creation failed";
    }
  }

  public function update_user(string $user_id): View|\Illuminate\Foundation\Application|Factory|Application
  {
    $user = DB::table('users')->find($user_id);
    return view('pages.updateuser', ['data' => $user]);
  }

  public function update_user_post(Request $req, string $user_id): string|RedirectResponse
  {
    $user = DB::table('users')
      ->where('id', $user_id)
      ->update([
        'name' => $req->input('name'),
        'email' => $req->input('email'),
        'age' => $req->input('age'),
        'address' => $req->input('address'),
        'phone' => $req->input('phone'),
        'city' => $req->input('city')
      ]);

    if ($user) {
      return redirect()->route('users.all');
    } else {
      return "User update failed!";
    }
  }

  public function delete_user(string $user_id): View|\Illuminate\Foundation\Application|Factory|RedirectResponse|Application
  {
    $user = DB::table('users')->where('id', $user_id)->delete();
    if ($user) {
      return redirect()->route('users.all');
    } else {
      return view('pages.userdelete');
    }
  }

//  TODO: user for validation
  public function user_validation(Request $request): void
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'city' => 'required',
      'age' => 'required|numeric|min:18',
      'image' => 'required|File|mimes:jpeg,jpg,png',
      'agree' => 'required'
    ], [
      'name.required' => 'Name is required',
      'email.required' => 'Email is required',
      'city.required' => 'City is required',
      'age.required' => 'Age is required',
      'age.min' => 'Age must be greater than 18',
      'image.required' => 'Image is required',
      'image.mimes' => 'Image must be jpeg, jpg or png',
      'image.file' => 'Image must be a file',
      'agree.required' => 'You must agree to the terms and conditions'
    ]);

    dd($request->all());

  }
}



