@extends('layouts.app')

@section('title','| Create Event')

@section('styles')
    {!! Html::style('assets/css/datedropper.css') !!}
    {!! Html::style('assets/css/timedropper.css') !!}

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Events</h1>
                <a href="{{route('events.index')}}">Show</a>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(array('route'=>'events.store','files'=>true)) !!}
                {{Form::label('title','Event Title:')}}
                {{Form::text('title',null,array('class'=>'form-control'))}}


                {{ Form::label('date','Event Date:') }}
                <input type="text" class="form-control datepicker" data-large-mode="true">
                {{ Form::label('time','Event Time:') }}
                <input type="text" class="form-control timepicker" data-large-mode="true">

                {{Form::label('description','Event Description:')}}
                {{Form::textarea('description',null,array('class'=>'form-control'))}}

                {{Form::submit('Create Event',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('assets/js/datedropper.js') !!}
    {!! Html::script('assets/js/timedropper.js') !!}

    <script type="text/javascript">
            $('.datepicker').dateDropper();
            $('.timepicker').timeDropper();

    </script>
@endsection