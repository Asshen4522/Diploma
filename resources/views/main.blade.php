@extends('layout.app')
@section('body')
    <div class="catalog">

    
    @foreach ($Books as $elem)
        @include('parts.card',[
            'book' => $elem
        ])
    @endforeach
    @foreach ($Books as $elem)
        @include('parts.card',[
            'book' => $elem
        ])
    @endforeach
    @foreach ($Books as $elem)
        @include('parts.card',[
            'book' => $elem
        ])
    @endforeach
    @foreach ($Books as $elem)
        @include('parts.card',[
            'book' => $elem
        ])
    @endforeach
    @foreach ($Books as $elem)
        @include('parts.card',[
            'book' => $elem
        ])
    @endforeach
    @foreach ($Books as $elem)
        @include('parts.card',[
            'book' => $elem
        ])
    @endforeach
    </div>
@endsection