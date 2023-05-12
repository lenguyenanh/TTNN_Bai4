@extends('web.master')

@section('title')
Trang chủ
@endsection
<!-- <link rel="stylesheet" id="ht-theme-style-css" href="https://helpact.misa.vn/wp-content/themes/knowall/css/style.css?ver=1.9.0" type="text/css" media="all"> -->

@section('content')
<!-- =========== Start of Loader ============ -->
<div class="preloader">
    <div class="wrapper">
        <div class="blobs">
            <div class="blob-center"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
        </div>
        <div>
            <div class="loader-canvas canvas-left"></div>
            <div class="loader-canvas canvas-right"></div>
        </div>
    </div>
</div>
<!-- =========== End of Loader ============ -->

<main class="main">
    <!-- =========== Start of Navigation (main menu) ============ -->
    @include('web.layout.menu')
    <!-- =========== End of Navigation (main menu)  ============ -->

    <!-- =========== Start of Search ============ -->
    <section class="space d-flex align-items-center">
        <div class="background-holder background--cover">
            <img src="{{asset('web/image/image-1.jpg')}}" alt="image" class="background-image-holder">
        </div>
        <!-- end of backgound image -->
        <div class="background-holder bg-color--primary opacity--80"></div>
        <!-- end of overlay backgound color-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center pt-7 pt-lg-9">
                    <h1 class="h2-font color--white mb-4 mb-lg-6">Chúng tôi có thể giúp gì cho bạn?</h1>
                    <div class="form--v7 box-shadow--1 mb-3">
                        <form method="GET" action="{{route('search')}}" class="form border--around rounded--05 bg-white">
                            <div class="input-group d-flex">
                                <input type="text" name="search_query" class="form-control" placeholder="Nhập nội dung tìm kiếm..." required>
                                <button class="btn btn-hover--splash btn-bg--primary" type="submit"><span class="btn__text icon icon-zoom-bold"></span></button>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of form wrapper-->
                </div>
            </div>
        </div>
    </section>
    <!-- =========== End of Search ============ -->

    <!-- =========== Start of Blog Body ============ -->
    <section class="pb-10 pt-0 blog-articles bg-color--primary-light--1" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="row mb-5">
                        @foreach($categories as $category)
                        @if($category->status == 'show')
                        <div class="col-12 col-sm-6 col-md-12 col-lg-6 mb-3">
                            <article class="article">
                                <div class="card">
                                    <!-- end of author avatar & name -->
                                    <div class="card-body">
                                        <a href="{{ route('web.page.category', $category->id) }}" class="article__title">
                                            <h2>{{$category->name}}</h2>
                                        </a>
                                        @foreach($posts->where('category_id', '=', $category->id)->take(10) as $post)
                                        @if($post->status == 'show')
                                        <div class="list-group list-group-flush">
                                            <a href="{{ route('web.page.post', $post->slug) }}" class="list-group-item text-color--400">
                                                @if($post->display_order != 0 ){{$post->display_order}}. @endif {{$post->title}}</a>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <!-- end of body content -->
                                </div>
                            </article>
                            <!-- end of single card -->
                        </div>
                        <!-- end of single card col-->
                        @endif
                        @endforeach
                    </div>
                    <!-- end of blog post row -->
                </div>
                <!-- end of blog post body col -->
                <aside class="col-12 col-md-5 col-lg-4 mt-6 mt-md-0 blog-sidebar">
                    <div class="widget widget_categories">
                        <img src="https://helpact.misa.vn/wp-content/uploads/2022/11/img_banner.png" alt="" width="325">
                    </div>
                    <!-- end of single widget -->
                    <div class="widget widget_recent_entries">
                        <h2 class="widget-title">Bài viết mới nhất</h2>
                        <ul>
                            @foreach($posts->sortByDesc('created_at')->take(3) as $post)
                            <li><a href="{{route('web.page.post', $post->slug)}}">{{$post->title}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end of single widget -->
                </aside>
                <!-- end of sidebar col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- =========== End of Blog Body ============ -->

    <!-- =========== Start of Contact ============ -->
    @include('web.layout.footer')
    <!-- =========== End of Footer ============ -->
</main>
@endsection