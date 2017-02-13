@extends('layouts.app')

@section('title','| Create Event')

@section('styles')


@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Sermons</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            {!! Form::open(['route'=>'sermons.store','files'=>true,'id'=>'eventForm']) !!}
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('title','Sermon Title:')}}
                        {{Form::text('title',null,array('class'=>'form-control'))}}

                        {{Form::label('speaker','Speaker:')}}
                        {{Form::text('speaker',null,array('class'=>'form-control'))}}

                        {{Form::label('venue_id','Venue:')}}
                        <select class="form-control" name="venue_id">
                            @foreach($venues as $venue)
                                <option value="{{$venue->id}}">{{$venue->name }}</option>
                            @endforeach
                        </select>

                        {{ Form::label('date','Sermon Date:') }}
                        {{Form::date('date',null,['class'=>'form-control'])}}
                    </div>

                    <div class="col-md-6">
                        {{Form::label('description','Sermon Description:')}}
                        {{Form::textarea('description',null,array('class'=>'form-control'))}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('videolink','YouTube Link:')}}
                        {{Form::text('videolink',null,array('class'=>'form-control'))}}

                        {{Form::label('audio_file','Audio Sermons:')}}
                        {{Form::file('audio_file',['class'=>'form-control'])}}

                        {{Form::label('featured_image','Upload Featured Image')}}
                        {{Form::file('featured_image',['class'=>'form-control'])}}
                    </div>
                    <div class="col-md-6">
                        {{Form::label('series_id','Series')}}
                        <select class="form-control" name="series_id">
                            @foreach($seriess as $series)
                                <option value="{{$series->id}}">{{$series->name }}</option>
                            @endforeach
                        </select>

                        {{Form::submit('Add Sermon',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
                    </div>

                </div>
            </div>


            {!! Form::close() !!}
        </div>

    </div>

@endsection

@section('scripts')



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