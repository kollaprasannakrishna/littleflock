@extends('layouts.app')

@section('title','| Edit Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Categories for Blog Posts</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::model($venue,['route'=>['venue.update',$venue->id],'method'=>'PUT']) !!}


                {{Form::label('name','Church Name')}}
                {{Form::text('name',null,['class'=>'form-control'])}}

                {{Form::label('address1','Address 1')}}
                {{Form::text('address1',null,['class'=>'form-control'])}}

                {{Form::label('address2','Address 2')}}
                {{Form::text('address2',null,['class'=>'form-control'])}}

                {{Form::label('city','City')}}
                {{Form::text('city',null,['class'=>'form-control'])}}

                {{Form::label('state','State')}}
                {{Form::text('state',null,['class'=>'form-control'])}}

                {{Form::label('zip','Zip Code')}}
                {{Form::text('zip',null,['class'=>'form-control'])}}
                {{Form::label('contact','Contact No')}}
                {{Form::text('contact',null,['class'=>'form-control'])}}
                {{Form::submit('Update Venue',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop