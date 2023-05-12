@extends('web.master')
@foreach($posts as $post)
@section('title')
{{$post->title}}
@endsection
@include('web.layout.menu')
<!-- =========== Start of Blog Body ============ -->
<section class="blog-details">
    <div class="header-area header-area--no-image space--top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <header class="entry-header">
                        <div class="entry-author">
                            <span class="byline">
                                <span class="author">
                                    <a href="#" class="avatar"><img src="{{asset('web/image/author-avatar-10.png')}}" alt="avatar"></a>
                                    <a class="url" href="#">{{$post->user->name}}</a>
                                </span>
                            </span>
                        </div>
                    </header>
                    <!-- end of header -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of header -->
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-8 mx-auto">
                <article class="article-content">
                    <div class="entry-content">
                        {!! $post->content !!}
                    </div>
                </article>
            </div>
            <!-- end of single card col-->
            @include('web.layout.sidebar')
        </div>
        <!-- end of blog post row -->
    </div>
    <!-- end of article details body container-->
</section>
<!-- =========== End of Blog Body ============ -->
@endforeach
@include('web.layout.footer')