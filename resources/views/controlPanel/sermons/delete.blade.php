@extends('layouts.app')
@section('header','Delete Sermon')
@section('title','| Delete Sermon')

@section('content')

    <div class="row remove-margin-bottom add-top-40">
        <div class="col s12 m12 l12">
            <div class="row remove-margin-bottom">
                <div class="col s12 m12 l12">
                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h4>{{$sermon->title}}</h4>
                        {!! Form::open(['route'=>['sermons.destroy',$sermon->id],'method'=>'DELETE']) !!}
                        {{Form::submit('Delete',['class'=>'btn red btn-xs','style'=>'margin-top:-50px;float:right;'])}}
                        {!! Form::close() !!}

                        <hr>
                        {!! $sermon->body !!}

                    </div>

                    <div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">

                        <h5>Sermon Series: {{$sermon->series->name}}</h5>
                        <p>Speaker: - {{$sermon->speaker}}</p>
                        {{--<a href="{{route('blog.single',$post->slug)}}" target="_blank"> Get to single post</a>--}}
                    </div>
                    {{--<div class="card-panel white z-depth-2 lighten-3 remove-margin-bottom">--}}

                        {{--@foreach($post->tags as $tag)--}}
                            {{--<div class="chip">--}}

                                {{--{{$tag->name}}--}}
                            {{--</div>--}}

                        {{--@endforeach--}}

                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>



@endsection