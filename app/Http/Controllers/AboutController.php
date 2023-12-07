<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
  public function about(): View|\Illuminate\Foundation\Application|Factory|Application
  {
    return view('pages.about');
  }
}
