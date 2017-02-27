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

            <div class="col-md-12">
                {!! Form::open(['route'=>'members.store','method'=>'POST']) !!}
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('firstname','First Name')}}
                        {{Form::text('firstname',null,['class'=>'form-control'])}}

                        {{Form::label('lastname','Last Name')}}
                        {{Form::text('lastname',null,['class'=>'form-control'])}}
                    </div>

                    <div class="col-md-6">
                        {{Form::label('email','Email')}}
                        {{Form::text('email',null,['class'=>'form-control'])}}


                        {{Form::label('positions','positions')}}
                        {{Form::select('positions[]',$positions,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('address1','Address 1')}}
                        {{Form::text('address1',null,['class'=>'form-control'])}}

                        {{Form::label('address2','Address 2')}}
                        {{Form::text('address2',null,['class'=>'form-control'])}}
                    </div>
                    <div class="col-md-6">
                        {{Form::label('city','City')}}
                        {{Form::text('city',null,['class'=>'form-control'])}}

                        {{Form::label('state','State')}}
                        {{Form::text('state',null,['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('zip','Zip Code')}}
                        {{Form::text('zip',null,['class'=>'form-control'])}}

                        {{Form::label('phone','Contact No')}}
                        {{Form::text('phone',null,['class'=>'form-control'])}}
                    </div>
                    <div class="col-md-6">
                        {{Form::submit('Create new',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
                    </div>
                </div>












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