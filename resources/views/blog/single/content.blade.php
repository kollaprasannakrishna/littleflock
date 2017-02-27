<!-- Start Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <header class="single-post-header clearfix">
                        <div class="pull-right post-comments-count"> <a href="#comments"><i class="fa fa-comment"></i> 23</a> </div>
                        <h2 class="post-title">{{$post->title}}</h2>
                    </header>
                    <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> Posted on {{$post->created_at}}</span> <span><i class="fa fa-archive"></i> Categories: <a href="#">{{$post->category->name}}</a></span></span>
                        <div class="featured-image"> <img src="{{asset('images/posts/'.$post->image)}}" alt=""> </div>
                        <div class="text-justify">
                            {!! $post->body !!}
                        </div>

                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                        </blockquote>
                        <div class="post-meta"> <i class="fa fa-tags"></i> <a href="#">Faith</a>, <a href="#">Heart</a>, <a href="#">Love</a>, <a href="#">Praise</a>, <a href="#">Sin</a>, <a href="#">Soul</a> </div>
                    </article>

                    {{--@include('blog.single.comments')--}}
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-3 sidebar">
                    @include('partialPages.searchPost')
                    @include('partialPages.category')
                    @include('partialPages.tags')

                </div>
            </div>
        </div>
    </div>
</div>