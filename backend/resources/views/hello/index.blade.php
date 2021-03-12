@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
    @parent
    Index page
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>
    @include('components.message',['msg_title'=>'OK','msg_content'=>'This is sub view.'])
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
