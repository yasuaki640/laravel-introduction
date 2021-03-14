@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
    @parent
    Index page
@endsection

@section('content')
    <p>{{$msg ?? ''}}</p>
    @if(count($errors) > 0)
        <p>inputed has problem. please enter again.</p>
    @endif
    <form action="/hello" method="post">
        <table>
            @csrf
            @if($errors->has('msg'))
                <tr>
                    <th>ERROR</th>
                    <td>{{$errors->first('msg')}}</td>
                </tr>
            @endif
            <tr>
                <th>Message:</th>
                <td><input type="text" name="msg" value="{{old('msg')}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2021 yasu.
@endsection
