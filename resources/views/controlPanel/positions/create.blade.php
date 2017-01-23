@extends('layouts.app')

@section('title','| Create Positions')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Positions for Members</h1>
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
                        @foreach($positions as $position)
                            <tr>
                                <td>{{$position->id}}</td>
                                <td>{{$position->title}}</td>
                                <td><a href="{{route('positions.edit',$position->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('positions.show',$position->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>{!! Form::open(['route'=>['positions.destroy',$position->id],'method'=>'DELETE']) !!}
                                    {{  Form::submit('Delete',['class'=>'btn btn-danger btn-xs']) }}
                                    {!! Form::close() !!}

                                    {{--<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>--}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                {!! Form::open(['route'=>'positions.store','method'=>'POST']) !!}
                    {{Form::label('title','Position Title')}}
                    {{Form::text('title',null,['class'=>'form-control'])}}
                    {{Form::submit('Create new',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop