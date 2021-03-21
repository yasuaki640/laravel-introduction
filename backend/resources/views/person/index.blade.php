@extends('layouts.helloapp')

@section('title','Person.index')

@section('menubar')
    @parent
    Index page
@endsection

@section('content')
    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->__toString()}}</td>
                <td>
                    @if($item->board !=null)
                        {{$item->board}}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
