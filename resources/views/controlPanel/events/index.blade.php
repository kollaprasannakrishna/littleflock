@extends('layouts.app')

@section('title','|events')

@section('content')
    @foreach($arr as $a)
        <p>{{$a}}</p>
    @endforeach

    <p>{{date("l, Y-m-d")}}</p>

    <p>{{$nextSun}}</p>
@stop