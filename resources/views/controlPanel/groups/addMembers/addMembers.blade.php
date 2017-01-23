@extends('layouts.app')

@section('title','| Create Categories')
@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Members to this group</h1>
                <hr>
            </div>
            <div class="col-md-4">
                {!! Form::open(['route'=>['addmembers.update',$group->id],'method'=>'PATCH']) !!}
                {{Form::label('members',$group->name)}}
                {{Form::select('members[]',$member_names,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}
                {{Form::submit('Add members',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member->id}}</td>
                                <td>{{$member->firstname}}</td>
                                <td><a href="{{route('members.edit',$member->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('members.show',$member->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>{!! Form::open(['route'=>['addmembers.destroy',$member->id],'method'=>'DELETE']) !!}
                                {{Form::submit('Delete',['class'=>'btn btn-danger btn-xs'])}}
                                {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop


@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2({
            tags: false,
            tokenSeparators: [',', ' ']
        });

    </script>
@endsection