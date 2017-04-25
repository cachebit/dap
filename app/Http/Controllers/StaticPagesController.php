<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function home()
    {
      return view('home');
    }

    public function notes()
    {
      return view('notes');
    }

    public function pdf()
    {
      return view('pdf');
    }

    public function laracasts()
    {
      return view('laracasts');
    }

    public function promote()
    {
      return view('promote');
    }
}
