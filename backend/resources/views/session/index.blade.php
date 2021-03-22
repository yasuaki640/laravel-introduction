@extends('layouts.helloapp')

@section('title','session.index')

@section('menubar')
    @parent
    session page
@endsection

@section('content')
    <p>{{$session_data}}</p>
    <form action="/hello/session" method="post">
        @csrf
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
