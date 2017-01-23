@extends('layouts.app')

@section('title','| Create Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Groups for Members</h1>
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
                            <th>Add memebrs</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                            <tr>
                                <td>{{$group->id}}</td>
                                <td>{{$group->name}}</td>
                                <td><a href="{{route('groups.edit',$group->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('addmembers.edit',$group->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span></a></td>
                                <td><a href="{{route('groups.show',$group->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>{!! Form::open(['route'=>['series.destroy',$group->id],'method'=>'DELETE']) !!}
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
                {!! Form::open(['route'=>'groups.store','method'=>'POST']) !!}
                    {{Form::label('name','Group Name')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                    {{Form::submit('Create new',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop