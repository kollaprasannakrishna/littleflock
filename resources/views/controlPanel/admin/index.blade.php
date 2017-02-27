@extends('layouts.app')

@section('title','| Admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Users & Roles</h1>

            </div>
            <div class="col-md-12">
                <div class="form-group-lg">
                    <input type="text" class="form-control" placeholder="Search table" id="search_name">
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover" id="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                @foreach($user->roles as $role)
                                    |{{$role->name}}|
                                @endforeach
                                </td>
                                <td><a href="{{route('admin.edit',$user->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="#" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                    {!! Form::open(['route'=>['admin.destroy',$user->id],'method'=>'DELETE']) !!}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger btn-xs'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
       {{$users->links()}}
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/paging.js') !!}
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script>
        var $rows = $('#table tr');
        $('#search_name').keyup(function() {

            var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                    reg = RegExp(val, 'i'),
                    text;

            $rows.show().filter(function() {
                text = $(this).text().replace(/\s+/g, ' ');
                return !reg.test(text);
            }).hide();
        });
    </script>


@endsection