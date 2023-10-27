@extends('layout.app')

@section('content')

<main>
    <div class="block_jumbo">
        <button class="current_button"><strong>CURRENT SERIES</strong></button>
    </div>
    <div class="card_comics text-center">
        <div class="container d-flex flex-wrap pt-5 pb-3">
            @foreach($comics as $comic)
            <div class="card_element">
                <div class="p-3">
                    <img src="{{$comic['thumb']}}" class="img_card" alt="">
                    <h6 class="text-white mt-3 text-uppercase">{{ $comic['title'] }}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <button class="btn btn-primary mt-3 mb-3 custom_button"><strong>LOAD MORE</strong></button>
    </div>
</main>

@endsection