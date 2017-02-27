<!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <header class="single-post-header clearfix">
                        <nav class="btn-toolbar pull-right"> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Print" ><i class="fa fa-print"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Contact us" ><i class="fa fa-envelope"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Share event" ><i class="fa fa-location-arrow"></i></a> </nav>
                        <h2 class="post-title">{{$event->name}}</h2>
                    </header>
                    <article class="post-content">
                        <div class="event-description">
                            <div class="spacer-20"></div>
                            <div class="row">
                                <div class="col-md-6">

                                    <img src="{{asset('images/events/'.$event->image)}}" class="img-responsive">

                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Event details</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="info-table">
                                                <li><i class="fa fa-calendar"></i> <strong>{{$event->day}}</strong> | {{date('d',strtotime($event->date) )}} {{date('F',strtotime($event->date) )}}, {{date('Y',strtotime($event->date) )}}</li>
                                                <li><i class="fa fa-clock-o"></i> {{date('H:i A',strtotime($event->time) )}}</li>
                                                <li><i class="fa fa-map-marker"></i> {{$event->venue->address1}}{{$event->venue->address2}}{{$event->venue->city}}{{$event->venue->state}}, US</li>
                                                <li><i class="fa fa-phone"></i> {{$event->venue->contact}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                {!! $event->description !!}
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-3 sidebar">
                    @include('partialPages.events')
                    @include('partialPages.posts')
                </div>
            </div>
        </div>
    </div>
</div>