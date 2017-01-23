@extends('layouts.app')

@section('title','| Create Post')

@section('styles')
    {!! Html::style('assets/css/quill.snow.css') !!}
    {!! Html::style('assets/css/select2.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.6.0/katex.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/styles/monokai-sublime.min.css') !!}

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
                {!! Form::open(array('route'=>'posts.store','files'=>true,'class'=>'filesAjax')) !!}
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
     {{Form::textarea('body',null,array('class'=>'form-control fileData','id'=>'snow-container'))}}

     {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

 {!! Form::close() !!}
</div>

           {{--<div class="col-md-6">
                {!! Form::open(array('route'=>'file.upload','files'=>true)) !!}
                    {{Form::label('featured_image1','Upload Featured Image')}}
                    {{Form::file('featured_image1',['class'=>'form-control'])}}
                    {{Form::submit('Upload',array('class'=>'btn btn-success','style'=>'margin-top:20px'))}}
                {!! Form::close() !!}
            </div>
<div class="col-md-6">
{{HTML::image('assets/images/logo/little_logo_2.png')}}
</div>--}}
</div>
</div>

@endsection

@section('scripts')
{!! Html::script('assets/js/select2.min.js') !!}
{!! Html::script('assets/js/quill.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.6.0/katex.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/highlight.min.js') !!}
<script type="text/javascript">
$('.select2-multi').select2();
</script>




<script type="text/javascript">

    var options = {
        debug: 'info',
        modules: {
            toolbar: '#toolbar'
        },
        placeholder: 'Compose an epic...',
        readOnly: true,
        theme: 'snow'
    };
    var quill = new Quill('#snow-container', {
        placeholder: 'Compose an epic...',
        theme: 'snow',
        debug: 'info',

    });
</script>
@endsection