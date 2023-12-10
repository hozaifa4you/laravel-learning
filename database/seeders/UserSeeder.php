<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = File::get(path: 'database/json/users.json');
    $users = collect(json_decode($data));
    $users->each(function ($user) {
      DB::table('users')->insert([
        'name' => $user->name,
        'email' => $user->email
      ]);
    });
  }
}
