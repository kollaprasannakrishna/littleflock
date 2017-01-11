@extends('layouts.app')

@section('title','| Create Event')

@section('styles')
    {!! Html::style('assets/css/datedropper.css') !!}
    {!! Html::style('assets/css/timedropper.css') !!}

    {!! Html::style('assets/css/select2.min.css') !!}


@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Events</h1>
                <a href="{{route('events.index')}}">Show</a>
                <hr>
            </div>
        </div>
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                {!! Form::model($event,['route'=>['events.update',$event->id],'method'=>'PUT']) !!}
                {{Form::label('name','Event Title:')}}
                {{Form::text('name',null,array('class'=>'form-control'))}}


                {{ Form::label('date','Event Date:') }}
                {{Form::date('date',null,['class'=>'form-control'])}}

                {{ Form::label('time','Event Time:') }}
                <input type="text" class="form-control timepicker" name="time">

                {{Form::label('venue','Venue')}}
                {{Form::text('venue',null,['class'=>'form-control'])}}
                {{Form::label('type','Event Type')}}
                <select class="form-control" name="type" id="mylist" value="{{$event->type}}">
                    <option value="weekly" @if($event->type == 'weekly') selected @endif>Weekly</option>
                    <option value="monthly" @if($event->type == 'monthly') selected @endif>Monthly</option>
                    <option value="special" @if($event->type == 'special') selected @endif>Special</option>
                </select>


                {{Form::label('day','Event Day')}}
                <select class="form-control" name="day" value="{{$event->day}}">
                    <option value="sunday" @if($event->day == 'sunday') selected @endif>Sunday</option>
                    <option value="monday" @if($event->day == 'monday') selected @endif>Monday</option>
                    <option value="tuesday" @if($event->day == 'tuesday') selected @endif>Tuesday</option>
                    <option value="wednesday" @if($event->day == 'wednesday') selected @endif>Wednesday</option>
                    <option value="thursday" @if($event->day == 'thursday') selected @endif>Thursday</option>
                    <option value="friday" @if($event->day == 'friday') selected @endif>Friday</option>
                    <option value="saturday" @if($event->day == 'saturday') selected @endif>Saturday</option>
                </select>

                {{Form::label('description','Event Description:')}}
                {{Form::textarea('description',null,array('class'=>'form-control'))}}

                {{Form::submit('Update Event',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection

@section('scripts')

    {!! Html::script('assets/js/datedropper.js') !!}
    {!! Html::script('assets/js/timedropper.js') !!}
    {!! Html::script('assets/js/select2.min.js') !!}

    <script type="text/javascript">


        $('.select2-multi2').select2();
        $('.datepicker').dateDropper();
        $('.timepicker').timeDropper({
            setCurrentTime:false
        });

        $( document ).ready(function() {
            $("#mylist").change();
        });

        $('#mylist').on('change',function(){
            if( $(this).val() == 'monthly'){
                var newLabel=$("<label id='mylabel'>How many times in a month?:</label>");
                var newInput=$("<select class='form-control' multiple='multiple' name='monthsDay[]'>" +
                        "<option value='1'>1st Month</option>" +
                        "<option value='2'>2nd Month</option>" +
                        "<option value='3'>3rd Month</option>" +
                        "<option value='4'>4th Month</option>" +
                        "<option value='5'>5th Month</option></select>")
                        .attr("id", "myfieldid");
                var newSel=$(' <select class="form-control select2-multi" name="tags[]" multiple="multiple"> </select>');
                $('#mylist').after(newLabel);
                $('#mylabel').after(newInput);
            }else{
                $('#mylabel').remove();
                $('#myfieldid').remove();

            }
        });

    </script>


@endsection