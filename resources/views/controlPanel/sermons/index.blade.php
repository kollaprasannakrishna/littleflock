@extends('layouts.app')

@section('title','| All Sermons')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Sermons</h1>
                <hr>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Author</th>
                            <th>Series</th>
                            <th>image</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sermons as $sermon)
                            <tr>
                                <td>{{$sermon->id}}</td>
                                <td>{{$sermon->title}}</td>
                                <td>{{$sermon->speaker}}</td>
                                <td>{{$sermon->venue->name}}</td>
                                <td>{{$sermon->series->name}}</td>
                                <td>{{$sermon->featured_image}}</td>
                                <td><a href="{{route('sermons.edit',$sermon->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('sermons.show',$sermon->id )}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                    <a href="{{route('sermons.delete',$sermon->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">

    </div>
@endsection

