<!-- Recent Posts Widget -->
<div class="widget-recent-posts widget">
    <div class="sidebar-widget-title">
        <h3>Recent Posts</h3>
    </div>
    <ul>
        @foreach($sidePosts as $post)
            <li class="clearfix"><a href="#" class="media-box post-image"> <img
                            src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail">
                </a>
                <div class="widget-blog-content"><a href="#">{{$post->title}}</a> <span class="meta-data"><i
                                class="fa fa-calendar"></i> on {{$post->created_at}}</span></div>
            </li>
        @endforeach
    </ul>
</div>