<div class="widget sidebar-widget">
    <div class="sidebar-widget-title">
        <h3>Post Tags</h3>
    </div>
    <div class="tag-cloud">
    @foreach($sideTags as $tag)
        <a href="#">{{$tag->name}}</a>
        @endforeach
    </div>
</div>