@extends('layouts.app')
@section('header','Event')
@section('title','| Create Categories')

@section('floatingBtn')
    <a href="{{route('events.edit',$event->id)}}" class="btn-floating btn-large waves-effect waves-light red right" id="floatingBtn" style="margin-right: 320px;margin-top: 5px;"><i class="material-icons">mode_edit</i></a>
@endsection
@section('content')
    <div class="row remove-margin-bottom add-top-40">
        <div class="col s12 m12 l12">
            <div class="row remove-margin-bottom">
                <div class="col s12 m12 l12">
                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h4>{{$event->name}}</h4>
                        <hr>
                        {{strip_tags($event->description)}}

                    </div>

                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h5>Venue : {{$event->venue->name}}</h5>
                        <p>Created by : {{$event->user->name}}</p>
                        {{--<a href="{{route('blog.single',$post->slug)}}" target="_blank"> Get to single post</a>--}}
                    </div>

                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h5>Featured Image</h5>

                        <img src="{{asset('images/events/'.$event->image)}}" alt="No Image found">
                    </div>

                </div>
            </div>
        </div>
    </div>




@stop