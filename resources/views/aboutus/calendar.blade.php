@extends('layouts.main')

@section('title','| Greetings')
@section('styles')
    <link href='assets/plugins/fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='assets/plugins/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
@endsection
@section('content')
    @include('aboutus.calendar.header')
    @include('aboutus.calendar.content')


@endsection

@section('scripts')
    <script src='assets/plugins/fullcalendar/lib/moment.min.js'></script>
    <script src='assets/plugins/fullcalendar/jquery-ui.custom.min.js'></script>
    <script src='assets/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                defaultDate: '{{date('Y-m-d')}}',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                        @foreach($events as $event)
                    {
                        title: '{{$event->name}}',
                        start: '{{$event->date.'T'.$event->time}}'
                    },
                        @endforeach

                ]
            });

        });

    </script>
@stop