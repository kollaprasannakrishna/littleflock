@extends('layouts.main')

@section('title','| Our Vision')

@section('content')
    @include('aboutus.ourvision.header')
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container text-justify">
                <div class="row">
                    @include('aboutus.ourvision.content')
                    @include('partials._sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection