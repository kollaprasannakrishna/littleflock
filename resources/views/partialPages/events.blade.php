<div class="widget-upcoming-events widget">
    <div class="sidebar-widget-title">
        <h3>Upcoming Events</h3>
    </div>
    <ul>
        @foreach($sideEvents as $event)
        <li class="item event-item clearfix">
            <div class="event-date"> <span class="date">06</span> <span class="month">Aug</span> </div>
            <div class="event-detail">
                <h4><a href="#">{{$event->name}}</a></h4>
                <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
        </li>
            @endforeach

    </ul>
</div>