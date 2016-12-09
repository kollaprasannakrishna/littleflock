@extends('layouts.app')

@section('title','| Create Tags')

@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Tags for Blog Posts</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->name}}</td>
                                <td><a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('tags.show',$tag->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>{!! Form::open(['route'=>['tags.destroy',$tag->id],'method'=>'DELETE']) !!}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger btn-xs'])}}
                                    {!! Form::close() !!}

                                    {{--<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>--}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                {!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}
                {{Form::label('tags','Tags')}}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                </select>
                {{Form::submit('Create Tags',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
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