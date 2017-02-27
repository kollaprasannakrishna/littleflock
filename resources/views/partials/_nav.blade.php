<div class="main-menu-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navigation">
                    <ul class="sf-menu">

                        <li><a href="/">Home</a></li>

                        <li><a href="#">About Us</a>
                            <ul class="dropdown">
                                <li><a href="{{route('greetings')}}">Greetings</a></li>
                                <li><a href="{{route('whoWeAre')}}">Who We Are</a></li>
                                <li><a href="{{route('whatWeBelieve')}}">What We Believe</a></li>
                                <li><a href="{{route('calendar')}}">Calendar</a></li>
                            </ul>
                        </li>

                        <li class="megamenu"><a href="#">Ministries</a>
                            <ul class="dropdown">
                                <li>
                                    <div class="megamenu-container container">
                                        <div class="row">
                                            <div class="col-md-4 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class="fa fa-bell"></i> Today's Prayer</span>
                                                <iframe width="200" height="150" src="http://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                                            </div>
                                            <div class="col-md-4"> <span class="megamenu-sub-title"><i class="fa fa-pagelines"></i> Our Ministries</span>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('sundayMinistry')}}">Sunday worship Service</a></li>
                                                    <li><a href="{{route('prayerMeetings')}}">Prayer Meetings</a></li>
                                                    <li><a href="{{route('bibleStudies')}}">Bible Studies</a></li>
                                                    <li><a href="{{route('childernsMinistry')}}">Childern Ministry</a></li>
                                                    <li><a href="{{route('gospelMinistry')}}">Gospel Meetings</a></li>
                                                    <li><a href="{{route('otherMinistry')}}">Other Meetings</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4"> <span class="megamenu-sub-title"><i class="fa fa-clock-o"></i> Upcoming Events</span>
                                                <ul class="sub-menu">
                                                    @foreach($upcomingEvents as $event)
                                                        <li><a href="#">{{$event->name}}</a> <span class="meta-data">{{$event->day}} | {{date('H:i A',strtotime($event->time) )}}</span> </li>
                                                    @endforeach

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">Messages</a>
                            <ul class="dropdown">
                                <li><a href="{{route('atLittleFlock')}}">At Little Flock</a></li>
                                <li><a href="{{route('atOthers')}}">Others</a></li>
                            </ul>
                        </li>

                        <li><a href="{{route('gallery')}}">Gallery</a></li>

                        <li><a href="{{route('blog')}}">Blog</a></li>


                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>