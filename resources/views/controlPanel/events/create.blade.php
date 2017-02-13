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
                <h1>Create Events</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            {!! Form::open(['route'=>'events.store','files'=>true,'id'=>'eventForm']) !!}
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
                <select class="form-control" name="venue_id">
                    @foreach($venues as $venue)
                        <option value="{{$venue->id}}">{{$venue->name }}</option>
                    @endforeach
                </select>


            </div>
            <div class="col-md-4">
                {{Form::label('type','Event Type')}}
                <select class="form-control" name="type" id="mylist">
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="special">Special</option>
                </select>

                {{Form::label('day','Event Day')}}
                <select class="form-control" name="day">
                    <option value="sunday">Sunday</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                    <option value="saturday">Saturday</option>
                </select>

            </div>
            <div class="col-md-12">
                {{Form::label('description','Event Description:')}}
                {{Form::textarea('description',null,array('class'=>'form-control'))}}


                {{Form::submit('Create Event',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

            </div>

            {!! Form::close() !!}
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Data</th>
                                <th>Time</th>
                                <th>Venue</th>
                                <th>Day</th>
                                <th>Type</th>
                                <th>Author</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                            <tr class="{{$event->active =='YES'?'success    ':'danger'}}">
                                <td>{{$event->id}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->time}}</td>
                                <td>{{$event->venue->name }}</td>
                                <td>{{$event->day}}</td>
                                <td>{{$event->type}}</td>
                                <td>{{$event->user->name}}</td>
                                <td><a href="{{route('events.edit',$event->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="{{route('events.show',$event->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                    <a href="{{route('events.delete',$event->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            <div class="col-md-4">





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
            $('.timepicker').timeDropper();


            $('#mylist').change(function(){
                if( $(this).val() == 'monthly'){
                    var newLabel=$("<label id='mylabel'>How many times in a month?:</label>");
                   var newInput=$("<select class='form-control' multiple='multiple' name='monthsDay[]'><option value='1'>1st Month</option><option value='2'>2nd Month</option><option value='3'>3rd Month</option><option value='4'>4th Month</option><option value='5'>5th Month</option></select>")
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