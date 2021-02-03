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

        $image = $req->file('image')->store('images', 'public');
        $song = $req->file('song')->store('songs', 'public');

        $data->artist = $req->input('artist');
        $data->name = $req->input('name');
        $data->text = $req->input('text');
        $data->song_file = $song;
        $data->image = $image;

        $data->save();

        return redirect(route('home'));
    }

    public function all()
    {
        return view('home', ['data' => Songs::paginate(6)]);
    }

    public function more($id)
    {
        return view('more', ['data' => Songs::find($id)]);
    }

    public function change($id)
    {
        return view('change', ['data' => Songs::find($id)]);
    }

    public function changeSubmit($id, SongRequest $req)
    {
        $data = Songs::find($id);

        $image = $req->file('image')->store('images', 'public');
        $song = $req->file('song')->store('songs', 'public');

        $data->artist = $req->input('artist');
        $data->name = $req->input('name');
        $data->text = $req->input('text');
        $data->song_file = $song;
        $data->image = $image;

        $data->save();

        return redirect(route('more', $id));
    }
}
