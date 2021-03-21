@extends('layouts.helloapp')

@section('title','Person.find')

@section('menubar')
    @parent
    Index page
@endsection

@section('content')
    <form action="/person/find" method="post">
        @csrf
        <input type="text" name="name" value="{{$name}}">
        <input type="submit" value="find">
    </form>
    @if (isset($item))
        <table>
            <tr>
                <th>Data</th>
            </tr>
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        </table>
    @endif
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
