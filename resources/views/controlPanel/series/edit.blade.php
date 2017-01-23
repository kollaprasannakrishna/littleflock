@extends('layouts.app')

@section('title','| Edit Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Series for Sermons</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::model($series,['route'=>['series.update',$series->id],'method'=>'PUT']) !!}
                {{Form::label('name','Series Name')}}
                {{Form::text('name',null,['class'=>'form-control'])}}
                {{Form::submit('update new',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop