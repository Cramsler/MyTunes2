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

    <form action="{{route('changeSubmit', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="artist" name="artist" value="{{$data->artist}}" placeholder="Автор">
            <label for="artist">Автор</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" placeholder="Название">
            <label for="name">Название</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" id="text" name="text" placeholder="Описание">{{$data->text}}</textarea>
            <label for="text">Текст песни</label>
        </div>
        <div class="input-group mt-3">
            <input type="file" class="form-control" id="image" name="image">
            <label class="input-group-text" for="image">Обложка</label>
        </div>
        <div class="input-group mt-3">
            <input type="file" class="form-control" id="song" name="song">
            <label class="input-group-text" for="song">Файл</label>
        </div>

        <button type="submit" class="btn btn-outline-secondary mt-3">Изменить</button>
    </form>

@endsection
