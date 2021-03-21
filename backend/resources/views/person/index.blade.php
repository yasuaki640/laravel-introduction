@extends('layouts.helloapp')

@section('title','Person.index')

@section('menubar')
    @parent
    Index page
@endsection

@section('content')
    <table>
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item}}</td>
                <td>
                    <table>
                        @if($item->boards != null)
                            @foreach($item->boards as $obj)
                                <tr>
                                    <td>{{$obj}}</td>
                                </tr>
                            @endforeach
                    </table>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
