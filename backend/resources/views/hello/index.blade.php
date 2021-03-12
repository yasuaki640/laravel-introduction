@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
    @parent
    Index page
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    @foreach($data as $item)
        {{$item['name']}} : {{$item['mail']}}<br>
    @endforeach
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
