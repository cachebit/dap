<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    public function index($type, $serie)
    {
      return view('notes.'.$type.'.'.$serie);
    }
}
