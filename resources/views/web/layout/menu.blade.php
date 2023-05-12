<!-- =========== Start of Navigation (main menu) ============ -->
<header class="navbar navbar-bg-white navbar-sticky sticky-bg-color--white navbar-expand-lg navbar-light ">
    <div class="container position-relative">
        <a class="navbar-brand" href="{{route('home')}}">
            <img class="navbar-brand__regular" src="{{asset('web/image/logo.png')}}" alt="brand-logo" height="30">
            <img class="navbar-brand__sticky" src="{{asset('web/image/logo.png')}}" alt="sticky brand-logo" height="30">
        </a>
        <!--  End of brand logo -->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- end of Nav toggler -->

        <div class="navbar-inner">
            <!--  Nav close button inside off-canvas/ mobile menu -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end of Nav Toggoler -->
            <nav>
                <ul class="navbar-nav" id="navbar-nav">
                    @foreach ($menus as $item)
                    @if ($item->children->count())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('web.page.menu', $item->url) }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$item->title}}</a>
                        <ul class="dropdown-menu">
                            @if(!empty($item->children))
                            @foreach ($item->children as $key => $child)
                            <li>
                                @if(in_array($child->id, ['38', '39','40','42','44']))
                                <a class="dropdown-item" href="{{ $child->url }}">{{ $key + 1 }}. {{ $child->title }}</a>
                                @elseif(in_array($child->id, ['36', '37','41','43']))
                                <a class="dropdown-item" href="{{ route('web.page.menu', $child->url) }}">{{ $key + 1 }}. {{ $child->title }}</a>
                                @else
                                <a class="dropdown-item" href="{{ route('web.page.post', $child->url) }}">{{ $key + 1 }}. {{ $child->title }}</a>
                                @endif
                            </li>
                            @endforeach
                            @endif
                        </ul> 
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.page.menu', $item->url) }}">{{$item->title}}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
                <!-- end of nav menu items -->
            </nav>
        </div>
    </div>
    <!-- end of container -->
</header>
<!-- =========== End of Navigation (main menu)  ============ -->
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
<div class="pt-5 pt-lg-9"></div>