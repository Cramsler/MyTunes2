@extends('main')

@section('content')

    <h1 class="mb-5">Главная</h1>

    <div class="row">
        @foreach($data as $el)
            <div class="col-3 my_wrap mb-3">
                <img src="https://vinylium.ru/themes/vinilium/assets/img/pages/home/mainpage/vinil.png" alt="" width="200px" class="">
                <span class="song_name">{{$el->artist}}</span>
                <span class="song_name">{{$el->name}}</span>
                <audio class="audio-player" src="../../storage/app/public/{{$el->song_file}}"></audio>
            </div>
        @endforeach
    </div>

@endsection
