@extends('layouts.app')

@section('title','| Edit Roles')
@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Roles</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::model($user,['route'=>['admin.update',$user->id],'method'=>'PUT']) !!}
                {{Form::label('name','Name')}}
                {{Form::text('name',null,['class'=>'form-control','disabled'=>'disabled'])}}

                {{Form::label('email','Email')}}
                {{Form::text('email',null,['class'=>'form-control','disabled'=>'disabled'])}}

                {{Form::label('roles','Roles')}}
                {{Form::select('roles[]',$roles,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}

                {{Form::submit('update Roles',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($user->roles()->getRelatedIds()) !!}).trigger('change');



    </script>
@endsection