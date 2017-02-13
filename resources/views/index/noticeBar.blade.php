<!-- Start Notice Bar -->
<div class="notice-bar">
    <div class="container">
        @foreach($latestEvent as $event)
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Upcoming Event</strong> </div>
            <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                <h5><a href="single-event.html">    {{$event->name}} </a></h5>
                <span class="meta-data">31st December, 2016 : 09:30 PM - 01:00 AM<br> Music Hall, First Presbyterian Church of Farmington Hills<br>
                26165 Farmington Rd, Farmington Hills, MI 48334</span><br>

            </div>
            <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="{{date('F',strtotime($event->date) )}} {{date('d',strtotime($event->date) )}}, {{date('Y',strtotime($event->date) )}} {{date('H:i',strtotime($event->time))}}">
                <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
                <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
                <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
                <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
            </div>
            <div class="col-md-2 col-sm-6 hidden-xs"> <a href="#" class="btn btn-primary btn-lg btn-block">All Events</a> </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End Notice Bar -->