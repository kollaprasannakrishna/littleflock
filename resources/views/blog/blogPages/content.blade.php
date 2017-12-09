<!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-9 posts-archive">
                    @if(count($posts) == 0)
                        <div><h2>No Posts Available Now!</h2></div>
                    @else
                        @foreach($posts as $post)
                        <article class="post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4"> <a href="{{route('blog.single',$post->slug)}}"><img src="{{asset('images/posts/'.$post->small_image)}}" alt="" class="img-thumbnail"></a> </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3><a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a></h3>
                             cd        <span class="post-meta meta-data"> <span><i class="fa fa-calendar"></i> 28th Jan, 2014</span><span><i class="fa fa-archive"></i> <a href="#">Uncategorized</a></span> <span><a href="#"><i class="fa fa-comment"></i> 12</a></span></span>
                                    <p>{{substr(strip_tags($post->body),0,200)}}{{strlen($post->body)>5?"....":""}}</p>
                                    <p><a href="{{route('blog.single',$post->slug)}}" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    @endif

                    {{$posts->links()}}
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-3 sidebar">
                    <div class="widget sidebar-widget search-form-widget">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Search Posts...">
                            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search fa-lg"></i></button>
                </span> </div>
                    </div>
                   @include('partialPages.category')
                    @include('partialPages.tags')

                </div>
            </div>
        </div>
    </div>
</div>