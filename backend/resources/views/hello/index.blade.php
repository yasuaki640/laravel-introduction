@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
    @parent
    Index page
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
