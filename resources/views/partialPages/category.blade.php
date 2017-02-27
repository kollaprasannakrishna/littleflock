<div class="widget sidebar-widget">
    <div class="sidebar-widget-title">
        <h3>Post Categories</h3>
    </div>
    <ul>
        @foreach($sideCategories as $category)
        <li><a href="#">{{$category->name}}</a> ({{count($category->posts)}})</li>
        @endforeach
    </ul>
</div>