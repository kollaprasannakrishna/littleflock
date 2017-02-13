@extends('layouts.app')

@section('title','| '.$tag->name)

@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$tag->name}} Tag</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>{{$tag->posts->count()}} Tags are Associated Posts</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tag->posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->category->name}}</td>
                                <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('posts.show',$post->id )}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                    <a href="{{route('posts.delete',$post->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    </script>
@endsection