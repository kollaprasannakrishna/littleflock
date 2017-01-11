@extends('layouts.main')

@section('title','| Home')

@section('content')
    @include('partials._carousel')
    @include('index.noticeBar')
    @include('index.content')
    {{--@include('index.gallery')--}}
@endsection