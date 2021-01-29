@extends('main')

@section('home')

    <h1 class="mb-5">Главная</h1>

    <div class="row">
        @for($i = 0; $i < 6; $i++)
            <div class="col-3 my_wrap mb-3">
                <img src="https://vinylium.ru/themes/vinilium/assets/img/pages/home/mainpage/vinil.png" alt="" width="200px">
                <span class="song_name">Исполнитель</span>
                <span class="song_name">Название песни</span>
            </div>
        @endfor
    </div>

@endsection
