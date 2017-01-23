@extends('layouts.app')

@section('title','| Edit Categories')
@section('styles')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Member Info</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::model($member,['route'=>['members.update',$member->id],'method'=>'PUT']) !!}
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


                {{Form::submit('Update Venue',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop


@section('scripts')
    {!! Html::script('assets/js/select2.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($member->positions()->getRelatedIds()) !!}).trigger('change');
    </script>

@endsection