@extends('web.master')
@foreach($categories as $c)
@section('title')
{{$c->name}}
@endsection
@include('web.layout.menu')
<!-- =========== Start of Blog Body ============ -->
<section class="blog-details">
    <div class="header-area header-area--no-image space--top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <header class="entry-header">
                        <div class="entry-image">
                            <figure>
                                <img src="{{asset('web/image/single-blog-image-1.jpg')}}" alt="Image">
                            </figure>
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
                    <div class="ht-page__content">
                        <div class="ht-categoryheader  hkb-category--style7 hkb-category--withicon hkb-category--3281">
                            <div class="ht-categoryheader__content">
                                <h1 class="ht-categoryheader__title">
                                {{$c->display_order}}. {{$c->name}} </h1>
                            </div>
                        </div>                       
                        <ul class="ht-articlelist">
                        @foreach($posts as $post)
                            <li>
                                <article id="post-14635" class="hkb-articlemini" itemscope="" itemtype="https://schema.org/CreativeWork">
                                    <a class="hkb-article__link" href="{{ route('web.page.post', $post->slug) }}">
                                        <h2 class="hkb-article__title" itemprop="headline">
                                            {{$post->title}} </h2>
                                    </a>    
                                </article>
                            </li>
                            @endforeach
                        </ul>
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