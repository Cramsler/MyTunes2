@extends('main')

@section('content')

    <h1 class="mb-5">Все композиции</h1>

    <div class="row row_my">
        @foreach($data as $el)
            <div class="col-3 my_wrap mb-3">
                <a href="{{route('more', $el->id)}}"><img src="{{asset('/storage/more.png')}}" alt="" class="more"></a>
                <img src="https://vinylium.ru/themes/vinilium/assets/img/pages/home/mainpage/vinil.png" alt="" width="200px" class="vinil">
                <span class="song_name">{{$el->artist}}</span>
                <span class="song_name">{{$el->name}}</span>
                <audio class="audio-player" src="{{asset('/storage/' . $el->song_file)}}" controls></audio>
            </div>
        @endforeach
    </div>

    <div class="paginate">
        <span class="pagination mt-5">{{$data->links()}}</span>
    </div>

@endsection
