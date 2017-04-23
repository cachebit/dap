<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function show($type, $serie, $title )
    {
      return view('notes.'.$type.'.'.$serie.'.'.$title,[
                  'type' => $type,
                  'serie' => $serie,
                  'title' => $title,
                ]);
    }
}
