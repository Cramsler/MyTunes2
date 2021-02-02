<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs;
use App\Http\Requests\SongRequest;

class SongController extends Controller
{
    public function send(SongRequest $req)
    {
        $data = new Songs();

//        $image = $req->file('image')->store('images', 'public');
        $song = $req->file('song')->store('songs', 'public');

        $data->artist = $req->input('artist');
        $data->name = $req->input('name');
        $data->song_file = $song;
//        $data->image = $image;

        $data->save();

        return redirect(route('home'));
    }

    public function all()
    {
        return view('home', ['data' => Songs::all()]);
    }
}
