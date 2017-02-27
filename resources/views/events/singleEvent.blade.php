@extends('layouts.main')

@section('title','| Event')

@section('content')
    @include('events.eventPages.header')
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container" style="text-align: justify;">
                <div class="row text-justify">

                    @include('events.eventPages.content')
                </div>
            </div>
        </div>
    </div>
@endsection


