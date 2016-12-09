@extends('layouts.app')

@section('title','| Delete Post')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Delete Post</h1>
            </div>
            <div class="col-md-6">
                {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'margin-top:20px;float:right;'])}}
                {!! Form::close() !!}
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->body}}</p>
            </div>
        </div>
    </div>
@endsection