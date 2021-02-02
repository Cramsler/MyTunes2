<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Songs;
use App\Http\Requests\SongRequest;

class SongController extends Controller
{
    public function send(SongRequest $req)
    {
          return dd($req);
    }
}
