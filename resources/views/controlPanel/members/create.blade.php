@extends('layouts.app')

@section('title','| Create Categories')
@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Create Members</h1>

            </div>
            <div class="col-md-8">
                {!! Form::open(['route'=>'members.import','files'=>true,'id'=>'eventForm']) !!}

                    <div class="col-md-6">
                        {{Form::label('member_excel','Import Memners information(Excel)')}}
                        {{Form::file('member_excel',['class'=>'form-control'])}}

                    </div>
                    <div class="col-md-6">
                        {{Form::submit('Create Event',array('class'=>'btn btn-success','style'=>'margin-top:25px'))}}
                    </div>



                {!! Form::close() !!}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-hover">
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
            <div class="col-md-4">
                {!! Form::open(['route'=>'members.store','method'=>'POST']) !!}
                {{Form::label('firstname','First Name')}}
                {{Form::text('firstname',null,['class'=>'form-control'])}}

                {{Form::label('lastname','Last Name')}}
                {{Form::text('lastname',null,['class'=>'form-control'])}}

                {{Form::label('email','Email')}}
                {{Form::text('email',null,['class'=>'form-control'])}}


                {{Form::label('positions','positions')}}
                {{Form::select('positions[]',$positions,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}

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

                {{Form::label('phone','Contact No')}}
                {{Form::text('phone',null,['class'=>'form-control'])}}

                {{Form::submit('Create new',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@endsection