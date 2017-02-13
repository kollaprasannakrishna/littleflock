@extends('layouts.app')

@section('title','| '.$post->title)

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{!! $post->body !!}</p>
    <p>{{$post->user->name}}</p>
    <p>{{$post->category->name}}</p>
    @foreach($post->tags as $tag)
    <p>{{$tag->name}}</p>
    @endforeach
    <a href="{{route('blog.single',$post->slug)}}"> Get to single post</a>
@stop