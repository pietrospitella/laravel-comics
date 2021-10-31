@extends('layouts.app')

@section('title','Comics')
    

@section('content')
    <div id="cards">
        <div id="cards_cont">
            @foreach ($comics as $comic)    
                <div id="single_card">
                    <div id="img_box">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <h4>{{$comic['title']}}</h4>
                </div>
            @endforeach
        </div>
    </div>
@endsection