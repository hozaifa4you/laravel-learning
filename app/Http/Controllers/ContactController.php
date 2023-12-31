<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
  public function contact(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    return view('pages.contact');
  }
}
