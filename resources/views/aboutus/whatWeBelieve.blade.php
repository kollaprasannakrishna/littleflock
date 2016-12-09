@extends('layouts.main')

@section('title','| Greetings')

@section('content')
    @include('aboutus.whatWeBelieve.header')
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container" style="text-align: justify;">
                <div class="row text-justify">
                    @include('aboutus.whatWeBelieve.content')
                    @include('partials._sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection