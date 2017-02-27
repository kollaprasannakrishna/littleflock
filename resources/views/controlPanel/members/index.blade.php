@extends('layouts.app')

@section('title','| All Posts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Members</h1>


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
                            <th>First name</th>
                            <th>Lasr name</th>
                            <th>email</th>
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
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member->id}}</td>
                                <td>{{$member->firstname}}</td>
                                <td>{{$member->lastname}}</td>
                                <td>{{$member->email}}</td>
                                <td>{{$member->address1}}</td>
                                <td>{{$member->address2}}</td>
                                <td>{{$member->city}}</td>
                                <td>{{$member->state}}</td>
                                <td>{{$member->zip}}</td>
                                <td>{{$member->phone}}</td>

                                <td><a href="{{route('members.edit',$member->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                {{--<td><a href="{{route('venue.show',$venue->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>--}}
                                <td>{!! Form::open(['route'=>['members.destroy',$member->id],'method'=>'DELETE']) !!}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger btn-xs'])}}
                                    {!! Form::close() !!}

                                    {{--<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>--}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="text-center">
        {{$members->links()}}
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