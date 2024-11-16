@extends('layouts.main.index')

@section('content')
<section class="container pt-5 mt-5">

    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('main.blog')}}">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">

            <!-- Post title + post meta -->
            <h2 class="pb-2 pb-lg-3">{{$news->title}}</h2>
            <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
                <div class="d-flex align-items-center mb-4 me-4">
                    {{-- <span class="fs-sm me-2">By:</span> --}}
                    <a class="nav-link position-relative fw-semibold p-0" href="#" data-scroll=""
                        data-scroll-offset="80">
                        {{-- @if ($news->created_at->diffInHours(now()) < 1) @if ($news->created_at->diffInMinutes(now()) <
                                1) {{ explode('.', $news->created_at->diffInSeconds(now()))[0] }}
                                Seconds Ago
                                @else
                                {{ explode('.', $news->created_at->diffInMinutes(now()))[0] }}
                                Minutes Ago
                                @endif
                                @else
                                {{ explode('.', $news->created_at->diffInHours(now()))[0] }}
                                Hours Ago
                                @endif --}}
                                {{$news->created_at->format('F j, Y g:i A')}}
                                <span class="d-block position-absolute start-0 bottom-0 w-100"
                                    style="background-color: currentColor; height: 1px;"></span>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <span class="fs-sm me-2">Share post:</span>
                    <div class="d-flex">
                        <a class="nav-link p-2 me-2" target="__blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{route('main.single_blog', ['title'=>$news->title])}}" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="LinkedIn" data-bs-original-title="LinkedIn">
                            <i class="ai-linkedin"></i>
                        </a>
                        <a class="nav-link p-2 me-2" target="__blank" href="https://www.facebook.com/sharer/sharer.php?u={{route('main.single_blog', ['title'=>$news->title])}}" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="Facebook" data-bs-original-title="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        {{-- <a class="nav-link p-2 me-2" target="__blank href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="Telegram" data-bs-original-title="Telegram">
                            <i class="ai-telegram fs-sm"></i>
                        </a> --}}
                        <a class="nav-link p-2" href="https://twitter.com/intent/tweet?url={{route('main.single_blog', ['title'=>$news->title])}}&text={{$news->title}}" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="X"
                            data-bs-original-title="X">
                            <i class="ai-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Post content -->
            <figure class="figure">
                @if ($news->image)
                <img class="figure-img rounded-5 mb-3" src="{{$news->image}}" alt="{{$news->heading}}">
                @endif
                {{-- <figcaption class="figure-caption">Image source tristique justo et pharetra</figcaption> --}}
            </figure>
            <p class="fs-lg pt-2 pt-sm-3">{{$news->description}}</p>

            {{-- Post sub content --}}
            @if (count($news->news_contents))
            @foreach ($news->news_contents as $nc)
            <h6 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">{{$nc->heading}}</h6>
            <figure class="figure">
                @if ($nc->image)
                <img class="figure-img rounded-5 mb-3" src="/storage/news/{{$nc->image}}" alt="{{$nc->heading}}">
                @endif
                {{-- <figcaption class="figure-caption">Image source tristique justo et pharetra</figcaption> --}}
            </figure>
            <p class="fs-lg pb-4 pb-xl-5">{{$nc->content}}</p>
            @endforeach
            @endif


            <!-- Tags -->
            <div class="d-flex flex-wrap pb-5 pt-3 pt-md-4 pt-xl-5 mt-xl-n2">
                <h3 class="h6 py-1 mb-0 me-4">Relevant tags:</h3>
                @foreach ($news->tags as $t)
                <a class="nav-link fs-sm py-1 px-0 me-3" href="{{route('main.tag_blog', ['tag_name'=>$t->name])}}">
                    <span class="text-primary">#</span>{{$t->name}}
                </a>
                @endforeach
            </div>

            <!-- Comments -->
            <div class="pt-4 pt-xl-2 mt-4" id="comments">
                <h2 class="h1 py-lg-1 py-xl-3">{{count($news->comments)}} comments</h2>

                <!-- Comment -->
                {{-- <div class="border-bottom py-4 mt-2 mb-4">
                    <div class="d-flex align-items-center pb-1 mb-3">
                        <img class="rounded-circle" src="assets/img/avatar/08.jpg" width="48" alt="Comment author">
                        <div class="ps-3">
                            <h6 class="mb-0">Albert Flores</h6>
                            <span class="fs-sm text-body-secondary">5 hours ago</span>
                        </div>
                    </div>
                    <p class="pb-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tellus lectus,
                        tempus eu urna eu, imperdiet dignissim augue. Aliquam fermentum est a ligula bibendum, ac
                        gravida ipsum dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos. Curabitur suscipit quam ut velit condimentum, nec mollis risus semper.
                        Curabitur quis mauris eget ligula tincidunt venenatis. Sed congue pulvinar hendrerit.</p>
                    <button class="nav-link fs-sm fw-semibold px-0 py-2" type="button">
                        Reply
                        <i class="ai-redo fs-xl ms-2"></i>
                    </button>
                </div> --}}

                <!-- Comment form -->
                @livewire('user.blog_comment', ['news' => $news], key($news->id))
            </div>
        </div>


        <!-- Sidebar (offcanvas on sreens < 992px) -->
        <aside class="col-lg-3 offset-xl-1">
            <div class="offcanvas-lg offcanvas-end" id="sidebar">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title">Sidebar</h4>
                    <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas"
                        data-bs-target="#sidebar" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <!-- Search box -->
                    @livewire('user.blog_search')
                    {{-- <div class="position-relative mb-4 mb-lg-5">
                        <i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input class="form-control ps-5" type="search" placeholder="Enter keyword">
                    </div> --}}

                    <!-- Popular posts -->
                    {{-- <h4 class="pt-1 pt-lg-0 mt-lg-n2">Most popular:</h4>
                    <div class="mb-lg-5 mb-4">
                        <article class="position-relative pb-2 mb-3 mb-lg-4">
                            <img class="rounded-5" src="assets/img/blog/list/01.jpg" alt="Post image">
                            <h5 class="h6 mt-3 mb-0">
                                <a class="stretched-link" href="blog-single-v1.html">The fashion for eco bags with
                                    vintage prints will still be relevant for more than one year</a>
                            </h5>
                        </article>
                        <article class="position-relative">
                            <img class="rounded-5" src="assets/img/blog/list/06.jpg" alt="Post image">
                            <h5 class="h6 mt-3 mb-0">
                                <a class="stretched-link" href="blog-single-v2.html">A session with a psychologist as a
                                    personal choice or a fashion trend</a>
                            </h5>
                        </article>
                    </div> --}}

                    <!-- Recent posts -->
                    <h4 class="pt-3 pt-lg-1 mb-4">Recent posts:</h4>
                    <ul class="list-unstyled mb-lg-5 mb-4">
                        @foreach ($recent_news as $n)
                        <li class="border-bottom pb-3 mb-3">
                            <span class="h6 mb-0">
                                <a href="{{route('main.single_blog', ['title'=>$n->title])}}">{{$n->title}}</a>
                            </span>
                        </li>
                        @endforeach
                    </ul>

                    <!-- Relevant topics -->
                    <h4 class="pt-3 pt-lg-1 mb-4">Relevant topics:</h4>
                    <div class="d-flex flex-wrap mt-n3 ms-n3 mb-lg-5 mb-4 pb-3 pb-lg-0">
                        @foreach ($news->categories as $c)
                        <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">{{$c->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection
