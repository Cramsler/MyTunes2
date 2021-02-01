@extends('main')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('send')}}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="artist" placeholder="name@example.com">
            <label for="artist">Автор</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="name" placeholder="Password">
            <label for="name">Название</label>
        </div>
        <div class="input-group mt-3">
            <input type="file" class="form-control" id="image">
            <label class="input-group-text" for="image">Обложка</label>
        </div>
        <div class="input-group mt-3">
            <input type="file" class="form-control" id="song">
            <label class="input-group-text" for="song">Файл</label>
        </div>

        <button type="submit" class="btn btn-outline-secondary mt-3">Отправить</button>
    </form>

@endsection
