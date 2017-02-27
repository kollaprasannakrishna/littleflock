<!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-8 sermon-archive">
                    <!-- Sermons Listing -->
                    @if(count($sermons) == 0)
                        <div><h2>No Sermons</h2>
                    @else
                    @foreach($sermons as $sermon)
                    <article class="post sermon">
                        <header class="post-title">
                            <div class="row">
                                <div class="col-md-9 col-sm-9">
                                    <h3><a href="{{route('sermon.single',$sermon->title)}}">{{$sermon->title}}</a></h3>
                                    <span class="meta-data"><i class="fa fa-calendar"></i> Posted on 17th Dec, 2013 | Pastor: <a href="#">Admin</a></span> </div>
                                <div class="col-md-3 col-sm-3 sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online" ><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF" ><i class="fa fa-book"></i></a> </div>
                            </div>
                        </header>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-4"> <a href="single-sermon.html" class="media-box"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a> </div>
                                <div class="col-md-8">
                                    <p>{!! $sermon->description !!}</p>
                                    <p><a href="" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    @endif


                    {{$sermons->links()}}
                    {{--<ul class="pagination">--}}
                        {{--<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>--}}
                        {{--<li class="active"><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><a href="#">5</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>--}}
                    {{--</ul>--}}
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4 sidebar">
                    @if(count($sermons) != 0)
                    @include('partialPages.sermonSerice')
                    @include('partialPages.sermonSpeakers')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>