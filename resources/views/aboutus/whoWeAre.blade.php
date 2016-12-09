@extends('layouts.main')

@section('title','| Who We Are')

@section('content')
    @include('aboutus.whoWeAre.header')
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container text-justify">
                <div class="row">
                    @include('aboutus.whoWeAre.content')
                    @include('partials._sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection