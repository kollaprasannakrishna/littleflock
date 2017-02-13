@extends('layouts.app')

@section('title','| Edit Post')

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
        {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT','files'=>true]) !!}
        <div class="row">
            <div class="col-md-6">

                {{Form::label('title','Title:')}}
                {{Form::text('title',null,array('class'=>'form-control'))}}

                {{Form::label('category_id','Category')}}
                {{Form::select('category_id',$categories,null,['class'=>'form-control'])}}

                {{Form::label('tags','Tags')}}
                {{Form::select('tags[]',$tags,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}

                {{ Form::label('slug','Slug') }}
                {{Form::text('slug',null,array('class'=>'form-control'))}}

                {{Form::label('featured_image','Upload Featured Image')}}
                {{Form::file('featured_image',['class'=>'form-control fileUpload'])}}


            </div>
            <div class="col-md-6">
                {{Form::label('body','Post Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control'))}}


            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    {{Form::submit('Update Post',array('class'=>'btn btn-success btn-block','style'=>'margin-top:20px'))}}
                </div>
                <div class="col-md-6">
                    <a href="{{route('posts.index')}}" class="btn btn-primary btn-block" style="margin-top: 20px;">Cancle</a>
                </div>


            </div>


        </div>
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');


    </script>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>

        tinymce.init({
            selector: 'textarea',
            height: 140,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true,
            imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>
@endsection