<aside class="col-12 col-md-5 col-lg-4 mt-6 mt-md-0 blog-sidebar">
    <div class="widget widget_search mb-4">
        <form method="GET" action="{{route('search')}}" class="form border--around rounded--05 bg-white">
            <div class="input-group d-flex">
                @if(isset($query))
                <input type="search" name="search_query" class="form-control" placeholder="Type to search..." value="{{$query}}">
                @else
                <input type="search" name="search_query" class="form-control" placeholder="Type to search...">
                @endif
                <button class="btn btn-hover--splash btn-bg--primary" type="submit"><span class="btn__text icon icon-zoom-bold"></span></button>
            </div>
        </form>
    </div>
    <!-- end of search -->
    <div class="widget widget_categories">
        <img src="https://helpact.misa.vn/wp-content/uploads/2022/11/img_banner.png" alt="" width="325">
    </div>
    <!-- end of single widget -->
    <div class="widget widget_recent_entries">
        <h2 class="widget-title">Bài viết mới nhất</h2>
        <ul>
            @foreach($posts->sortByDesc('id')->take(3) as $post)
            <li><a href=" {{route('web.page.post', $post->slug) }}">{{$post->title}} </a></li>
            @endforeach
        </ul>
    </div>
    <!-- end of single widget -->
</aside>
<!-- end of sidebar col -->