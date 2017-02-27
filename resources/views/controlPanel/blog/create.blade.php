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
                <p id='progress'></p>
                <hr>
            </div>
        </div>
        {!! Form::open(array('route'=>'posts.store','class'=>'upload','files'=>true)) !!}
        <div class="row">
            <div class="col-md-6">

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


            </div>
            <div class="col-md-6">
                {{Form::label('body','Post Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control fileData'))}}
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    {{Form::submit('Save',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px','name'=>'save'))}}
                </div>
                <div class="col-md-6">
                    {{Form::submit('Publish',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px','name'=>'save'))}}
                </div>

            </div>
            {!! Form::close() !!}
            {{--<div class="col-md-6">--}}
                 {{--{!! Form::open(array('route'=>'file.upload','files'=>true)) !!}--}}
                     {{--{{Form::label('featured_image1','Upload Featured Image')}}--}}
                {{--{!!Form::file('featured_image1',['class'=>'form-control']) !!}--}}

                     {{--{{Form::submit('Upload',array('class'=>'btn btn-success','style'=>'margin-top:20px'))}}--}}
                 {{--{!! Form::close() !!}--}}
             {{--</div>--}}


            {{--<div class="col-md-6">--}}
 {{--<img src="http://www.littleflock.org/laravel_code/public/images/1487444012.png" class="img-responsive">--}}
                {{--{{HTML::image('images/1487443259.png')}}--}}

                {{--<audio controls>--}}
                    {{--<source src="" type="audio/ogg">--}}
                    {{--<source src="http://www.littleflock.org/laravel_code/public/images/hello/new_audio.mp3" type="audio/mpeg">--}}
                    {{--Your browser does not support the audio tag.--}}
                {{--</audio>--}}
            {{--</div>--}}
        {{--</div>--}}


    </div>

@endsection

@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
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