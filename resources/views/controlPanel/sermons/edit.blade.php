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
            {!! Form::model($sermon,['route'=>['sermons.update',$sermon->id],'files'=>true,'id'=>'eventForm','method'=>'PUT']) !!}
            <div class="col-md-4 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">Panel heading</div>
                    <div class="panel-body">
                        {{Form::label('title','Sermon Title:')}}
                        {{Form::text('title',null,array('class'=>'form-control'))}}


                        {{Form::label('speaker','Speaker:')}}
                        {{Form::text('speaker',null,array('class'=>'form-control'))}}

                        {{Form::label('venue_id','Venue:')}}
                        {{Form::select('venue_id',$venues,null,['class'=>'form-control'])}}

                        {{ Form::label('date','Sermon Date:') }}
                        {{Form::date('date',null,['class'=>'form-control'])}}
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">Panel heading</div>
                    <div class="panel-body">
                        {{Form::label('description','Sermon Description:')}}
                        {{Form::textarea('description',null,array('class'=>'form-control'))}}
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">Panel heading</div>
                    <div class="panel-body">
                        {{Form::label('videolink','YouTube Link:')}}
                        {{Form::text('videolink',null,array('class'=>'form-control'))}}

                        {{Form::label('audiolink','YouTube Link:')}}
                        {{Form::text('audiolink',null,array('class'=>'form-control'))}}

                        {{Form::label('featured_image','Upload Featured Image')}}
                        {{Form::file('featured_image',['class'=>'form-control'])}}
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">Panel heading</div>
                    <div class="panel-body">
                        {{Form::label('series_id','Series')}}
                        {{Form::select('series_id',$seriess,null,['class'=>'form-control'])}}


                        {{Form::submit('Update Sermon',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

                    </div>
                </div>

            </div>

            {!! Form::close() !!}
        </div>

    </div>
    <audio controls>
        <source src="http://mboxmp3.com/u/SampleAudio_0.5mb.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

@endsection

@section('scripts')



    <script type="text/javascript">




    </script>


@endsection