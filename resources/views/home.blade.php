@extends('main')

@section('content')

    <h1 class="mb-5">Главная</h1>

    <div class="row">
        @for($i = 0; $i < 6; $i++)
            <div class="col-3 my_wrap mb-3">
                <img src="https://vinylium.ru/themes/vinilium/assets/img/pages/home/mainpage/vinil.png" alt="" width="200px">
                <span class="song_name">Twenty One Pilots</span>
                <span class="song_name">Stress out</span>
            </div>
        @endfor
    </div>

@endsection
