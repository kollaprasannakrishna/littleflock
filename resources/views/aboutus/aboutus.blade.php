@extends('layouts.main')

@section('title','| About US')

@section('content')
    @include('aboutus.aboutus.header')
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container" style="text-align: justify;">
                <div class="row text-justify">
                    @include('aboutus.aboutus.content')
                    @include('partials._sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection