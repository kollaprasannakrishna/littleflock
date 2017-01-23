@extends('layouts.app')

@section('title','| Create Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Categories for Blog Posts</h1>
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
                            <th>Church name</th>
                            <th>Address 1</th>
                            <th>Address 2</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Contact</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($venues as $venue)
                            <tr>
                                <td>{{$venue->id}}</td>
                                <td>{{$venue->name}}</td>
                                <td>{{$venue->address1}}</td>
                                <td>{{$venue->address2}}</td>
                                <td>{{$venue->city}}</td>
                                <td>{{$venue->state}}</td>
                                <td>{{$venue->zip}}</td>
                                <td>{{$venue->contact}}</td>

                                <td><a href="{{route('venue.edit',$venue->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                {{--<td><a href="{{route('venue.show',$venue->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>--}}
                                <td>{!! Form::open(['route'=>['venue.destroy',$venue->id],'method'=>'DELETE']) !!}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger btn-xs'])}}
                                    {!! Form::close() !!}

                                    {{--<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>--}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                {!! Form::open(['route'=>'venue.store','method'=>'POST']) !!}
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
                {{Form::submit('Create new',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>








@stop