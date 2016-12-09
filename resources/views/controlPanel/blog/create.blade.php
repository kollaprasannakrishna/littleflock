@extends('layouts.app')

@section('title','| Create Post')

@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Posts</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(array('route'=>'posts.store','files'=>true)) !!}
                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,array('class'=>'form-control'))}}

                    {{Form::label('category_id','Category')}}
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name }}</option>
                        @endforeach
                    </select>

                    {{Form::label('tags','Tags')}}
                    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>

                    {{ Form::label('slug','Slug') }}
                    {{Form::text('slug',null,array('class'=>'form-control'))}}

                    {{Form::label('featured_image','Upload Featured Image')}}
                    {{Form::file('featured_image',['class'=>'form-control'])}}

                    {{Form::label('body','Post Body:')}}
                    {{Form::textarea('body',null,array('class'=>'form-control'))}}

                    {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection