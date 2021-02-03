@extends('main')

@section('content')

    <h1 class="mb-5">Подробная информация</h1>

    <div class="container mt-5">
        <img src="{{asset('/storage/' . $data->image)}}" class="image mb-5" width="500px">
        <div class="wrapper">
            <h3>{{$data->name}}</h3>
            <h4>{{$data->artist}}</h4>
            <p class="mt3">{{$data->text}}</p>

            <audio src="{{asset('/storage/' . $data->song_file)}}" controls class="audio-player_more"></audio><br>

            <span class="mt-3 song_name">{{$data->created_at}}</span><br>

            <a name="change" href="{{route('change', $data->id)}}" class="btn btn-danger mt-5">Изменить</a>
        </div>
    </div>

@endsection
