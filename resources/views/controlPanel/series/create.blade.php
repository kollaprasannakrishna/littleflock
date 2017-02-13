@extends('layouts.app')

@section('title','| Create Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Series for Sermons</h1>
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
                        @foreach($seriess as $series)
                            <tr>
                                <td>{{$series->id}}</td>
                                <td>{{$series->name}}</td>
                                <td><a href="{{route('series.edit',$series->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('series.show',$series->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>

                                    <a href="{{route('series.delete',$series->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                {!! Form::open(['route'=>'series.store','method'=>'POST']) !!}
                    {{Form::label('name','Series Name')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                    {{Form::submit('Create new',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop