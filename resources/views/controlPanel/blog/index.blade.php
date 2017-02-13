@extends('layouts.app')

@section('title','| All Posts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Posts</h1>


            </div>
            <div class="col-md-12">
                <div class="form-group-lg">
                    <input type="text" class="form-control" placeholder="Search table" id="search">
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>

        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover" id="table">
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
                        <tbody id="fbody">
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{substr(strip_tags($post->body),0,5)}}{{strlen($post->body)>5?"....":""}}</td>
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
    <div class="text-center">
        {{$posts->links()}}
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/paging.js') !!}
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
    var $rows = $('#table tr');
    $('#search').keyup(function() {

        var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                reg = RegExp(val, 'i'),
                text;

        $rows.show().filter(function() {
            text = $(this).text().replace(/\s+/g, ' ');
            return !reg.test(text);
        }).hide();
    });
</script>


@endsection