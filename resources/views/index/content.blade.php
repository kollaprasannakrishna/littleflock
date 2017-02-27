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
                <h3>Latest Sermon</h3>
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <iframe width="200" height="150" src="https://www.youtube.com/embed/nwwwOW8eyj0"></iframe>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <span class="date">Dec 31, 2016</span>
                        <div class="spacer-20"></div>
                        <h4><a href="#">Fear Not Little Flock</a> - Luke 12:32</h4>
                        <p class="text-justify">We are an assembly of believers in Lord Jesus Christ, from
                            different countries and cultures. We have one common bond:
                            we are redeemed by the blood of the Lamb of God –Jesus
                            Christ our Savior (Rev. 5:9; Acts 20:28). All who know the Lord
                            Jesus Christ as their Savior or desire to know Him are welcome.
                            We believe it is the Lord who will satisfy the hungry souls – and
                            not us – when they come into the house of God – according to
                            His promise: The Lord shall bless thee out of Zion (Ps.28:5). We
                            believe that all those who are saved by faith in the Lord Jesus
                            Christ are equally precious and equally important in His body,
                            the church. We firmly believe that the Bible is the inspired
                            Word of God, and we constantly seek His grace for us to ground
                            all our ministries in His Word.
                            Please look at other pages of this web site for more
                            information about the vision and the ministries of The Little
                            Flock Christian Fellowship. It is our prayer and hope that this
                            web site will be of some spiritual help to you.</p>
                            <p class="text-align-right">- Dr. Rao Gollapalli, Pastor</p>
                        <div class="row">
                            <div class="col-md-12">
                                <blockquote>
                                    Fear not, little flock; for it is your father’s good pleasure to give you the kingdom
                                    - Luke 12:32
                                </blockquote>
                            </div>
                        </div>
                        <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>