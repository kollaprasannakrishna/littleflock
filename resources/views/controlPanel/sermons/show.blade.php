@extends('layouts.app')

@section('title','| '.$sermon->title)
@section('header','Sermon')

@section('floatingBtn')
    <a href="{{route('sermons.edit',$sermon->id)}}" class="btn-floating btn-large waves-effect waves-light red right" id="floatingBtn" style="margin-right: 320px;margin-top: 5px;"><i class="material-icons">mode_edit</i></a>
@endsection
@section('content')
    <div class="row remove-margin-bottom add-top-40">
        <div class="col s12 m12 l12">
            <div class="row remove-margin-bottom">
                <div class="col s12 m12 l12">
                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h4>{{$sermon->title}}</h4>
                        <hr>
{{--                        {!! $post->body !!}--}}

                    </div>

                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h5>Sermon Series: {{$sermon->series->name}}</h5>
                        <p>Speaker: - {{$sermon->speaker}}</p>
                        {{--<a href="{{route('blog.single',$post->slug)}}" target="_blank"> Get to single post</a>--}}
                    </div>

                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h5>Sermon Audio</h5>

                        <audio controls>
                            {{--<source src="{{asset('audio/sermons/'.$sermon->title.'/'.$sermon->audiolink)}}" type="audio/ogg">--}}
                            <source src="{{asset('audio/sermons/'.$sermon->series->name.'/'.$sermon->audiolink)}}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>

                </div>
            </div>
        </div>
    </div>











@stop