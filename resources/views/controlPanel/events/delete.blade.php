@extends('layouts.app')
@section('header','Delete Event')
@section('title','| Delete Event')

@section('content')


    <div class="row remove-margin-bottom add-top-40">
        <div class="col s12 m12 l12">
            <div class="row remove-margin-bottom">
                <div class="col s12 m12 l12">
                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h4>{{$event->name}}</h4>
                        {!! Form::open(['route'=>['events.destroy',$event->id],'method'=>'DELETE']) !!}
                        {{Form::submit('Delete',['class'=>'btn red btn-xs','style'=>'margin-top:-50px;float:right;'])}}
                        {!! Form::close() !!}

                        <hr>
                        {{ strip_tags($event->description)}}

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


@endsection