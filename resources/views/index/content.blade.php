<!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full home6">
        <div class="container">
            <div class="row">
                <!-- Start Featured Blocks -->
                <div class="featured-blocks clearfix">
                    <div class="col-md-4 col-sm-4 col-xs-12 featured-block"> <a href="#" class="img-thumbnail"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="staff"> <strong>Our Pastors</strong> <span class="more">read more</span> </a> </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 featured-block"> <a href="#" class="img-thumbnail"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="staff"> <strong>New Here</strong> <span class="more">read more</span> </a> </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 featured-block"> <a href="#" class="img-thumbnail"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="staff"> <strong>Sermons Archive</strong> <span class="more">read more</span> </a> </div>
                </div>
                <!-- End Featured Blocks -->
                <div class="spacer-30"></div>
                <!-- Events Listing -->
                <div class="listing events-listing">
                    <div class="container listing-header">
                        <h3>More Coming Events</h3>
                    </div>
                    <div class="container listing-cont">
                        <ul>
                            @foreach($events as $event)
                                <li class="item event-item">
                                    <div class="event-date"> <span class="date">{{date('d',strtotime($event->date) )}}</span> <span class="month">{{date('M',strtotime($event->date))}}</span> </div>
                                    <div class="event-detail">
                                        <h4><a href="#">{{$event->name}}</a></h4>
                                        <span class="event-dayntime meta-data">{{$event->day}} | {{$event->time}}</span>
                                    </div>
                                    <div class="to-event-url">
                                        <div><a href="{{route('get.event',$event->name)}}" class="btn btn-default btn-sm">Details</a></div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-50"></div>
        <div class="padding-tb45 lgray-bg featured-sermon">
            <div class="container">
                {{--<h3>Latest Sermon</h3>--}}
                <div class="row">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                        {{--<span class="date">Dec 31, 2016</span>--}}
                        <div class="spacer-20"></div>
                        <h4><a href="#">Dear Beloved of God</a></h4>
                        <p class="text-justify">Grace be unto you and Peace from God our Father and from the Lord Jesus Christ. Unto the King eternal, immortal, invisible, the only wise God, be honour and glory for ever and ever. Amen.</p>

                        <p class="text-justify">
                            Welcome to website of Zion House of Prayer. We are a Telugu Church serving Wheaton, Naperville,
                            Aurora and surrounding suburbs of Chicago. We are not affiliated to any denomination.
                            We firmly believe that the Bible is the inspired Word of God, and constantly seek His grace to
                            keep us rooted and build us in His word. We adhere to the vision of first century,
                            who continued steadfastly in the apostles doctrine and fellowship, and in breaking
                            of bread, and in prayers (Acts 2:42).

                        </p>
                        <p class="text-justify">
                            The purpose of this website is to share with you what the Lord has been doing with this fellowship.
                            It is our prayer that your visit to this website may help you grow little more into His likeness.
                        </p>
                        <p class="text-justify">
                            We humbly request you to pray for the ministry of Zion House of Prayer
                        </p>
                            <p class="text-align-right" style="margin: 0px;">Servant of Christ
                               </p>
                        <p class="text-align-right">
                            - Bro. Mathews Vattiprolu</p>
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<blockquote>--}}
                                    {{--Fear not, little flock; for it is your father’s good pleasure to give you the kingdom--}}
                                    {{--- Luke 12:32--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>--}}
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <iframe width="200" height="150" src="https://www.youtube.com/embed/nwwwOW8eyj0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>