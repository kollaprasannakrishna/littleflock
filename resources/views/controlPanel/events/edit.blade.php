@extends('layouts.app')

@section('title','| Edit Event')

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
                <hr>
            </div>
        </div>
        <div class="row">
            {!! Form::model($event,['route'=>['events.update',$event->id],'files'=>true,'method'=>'PUT']) !!}
            <div class="col-md-4">
                {{Form::label('name','Event Title:')}}
                {{Form::text('name',null,array('class'=>'form-control'))}}


                {{ Form::label('date','Event Date:') }}
                {{Form::date('date',null,['class'=>'form-control'])}}

                {{Form::label('featured_image','Upload Featured Image')}}
                {{Form::file('featured_image',['class'=>'form-control'])}}

            </div>
            <div class="col-md-4">
                {{ Form::label('time','Event Time:') }}
                <input type="text" class="form-control timepicker" name="time">

                {{Form::label('venue_id','Venue:')}}
                {{Form::select('venue_id',$venues,null,['class'=>'form-control'])}}




            </div>
            <div class="col-md-4">
                {{Form::label('type','Event Type')}}
                <select class="form-control" name="type" id="mylist" value="{{$event->type}}">
                    <option value="weekly" @if($event->type == 'weekly') selected @endif>Weekly</option>
                    <option value="monthly" @if($event->type == 'monthly') selected @endif>Monthly</option>
                    <option value="special" @if($event->type == 'special') selected @endif>Special</option>
                </select>

                {{Form::label('day','Event Day')}}
                <select class="form-control" name="day" value="{{$event->day}}">
                    <option value="sunday" @if($event->day == 'Sunday') selected @endif>Sunday</option>
                    <option value="monday" @if($event->day == 'Monday') selected @endif>Monday</option>
                    <option value="tuesday" @if($event->day == 'Tuesday') selected @endif>Tuesday</option>
                    <option value="wednesday" @if($event->day == 'Wednesday') selected @endif>Wednesday</option>
                    <option value="thursday" @if($event->day == 'Thursday') selected @endif>Thursday</option>
                    <option value="friday" @if($event->day == 'Friday') selected @endif>Friday</option>
                    <option value="saturday" @if($event->day == 'Saturday') selected @endif>Saturday</option>
                </select>
            </div>
            <div class="col-md-12">
                {{Form::label('description','Event Description:')}}
                {{Form::textarea('description',null,array('class'=>'form-control'))}}

                {{Form::submit('Update Event',array('class'=>'btn btn-success btn-block','style'=>'margin-top:20px'))}}

            </div>

            {!! Form::close() !!}

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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>

        tinymce.init({
            selector: 'textarea',
            height: 140,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true,
            imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>

@endsection