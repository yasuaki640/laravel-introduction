@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
    @parent
    detail page
@endsection

@section('content')
    @if($items != null)
        @foreach($items as $item)
            <table>
                <tr>
                    <th>name :</th>
                    <td>{{$item->name}}</td>
                </tr>
                <tr>
                    <th>id :</th>
                    <td>{{$item->id}}</td>
                </tr>
            </table>
        @endforeach
    @endif
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
