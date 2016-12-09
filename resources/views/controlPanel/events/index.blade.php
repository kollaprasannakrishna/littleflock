@extends('layouts.app')

@section('title','|events')

@section('content')
    @foreach($arr as $a)
        <p>{{$a}}</p>
    @endforeach
@stop