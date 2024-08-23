@extends('layouts.main.index')

@section('content')

<section class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('main.blog')}}">Blog list</a></li>
            <li class="breadcrumb-item ">Category</li>
            <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
        </ol>
    </nav>

    <div class="row mb-md-2 mb-xl-4">

        <!-- Blog posts -->
        <div class="col-lg-9 pe-lg-4 pe-xl-5">
            @if (count($news)>0)
            <h1 class="pb-3 pb-lg-4">{{$category->name}}</h1>
            @foreach ($news as $n)
            <!-- Post -->
            <article class="row g-0 border-0 mb-4">
                <a class="col-sm-5 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="{{route('main.single_blog',['title'=>$n->title])}}"
                    style="background-image: url({{$n->image}}); min-height: 14rem"
                    aria-label="Post image"></a>
                <div class="col-sm-7">
                    <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                        <h4>
                            <a href="{{route('main.single_blog', ['title'=>$n->title])}}">{{$n->title}}</a>
                        </h4>
                        <?php

                        $words = explode(" ", $n->description);
                        $first20Words = implode(" ", array_slice($words, 0, 20));
                         ?>
                        <p class="d-sm-none d-md-block">{{$first20Words}}...</p>
                        <div class="d-flex flex-wrap align-items-center mt-n2">

                            {{-- <a class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2"
                                href="#">
                                12
                                <i class="ai-message fs-lg ms-1"></i>
                            </a>
                            <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                            --}}
                            <span class="fs-sm text-body-secondary mt-2">
                                @if ($n->created_at->diffInHours(now()) < 1)
                                    @if ($n->created_at->diffInMinutes(now()) < 1)
                                    {{ explode('.', $n->created_at->diffInSeconds(now()))[0] }}
                                    Seconds Ago
                                    @else
                                    {{ explode('.', $n->created_at->diffInMinutes(now()))[0] }}
                                    Minutes Ago
                                    @endif
                                @else
                                {{  explode('.', $n->created_at->diffInHours(now()))[0] }}
                                Hours Ago
                                @endif
                            </span>
                            <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                            <?php
                                for($i=0; $i<=0; $i++){
                                    ?>
                                    <a class="badge text-nav fs-xs border mt-2" href="{{route('main.tag_blog', ['tag_name'=> $n->tags[$i]->name ])}}">{{$n->tags[$i]->name}}</a>
                                    <?php
                                }
                            ?>
                            {{-- @foreach ($n->tags as $t)
                            <a class="badge text-nav fs-xs border mt-2" href="#">{{$t->name}}</a>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
            <!-- Pagination -->
            {{-- <div class="row gy-3 align-items-center mt-lg-5 pt-2 pt-md-4 pt-lg-0">
                <div class="col col-md-4 col-6 order-md-1 order-1">
                    <div class="d-flex align-items-center">
                        <span class="text-body-secondary fs-sm">Show</span>
                        <select class="form-select form-select-flush w-auto">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="25">25</option>
                        </select>
                    </div>
                </div>
                <div class="col col-md-4 col-12 order-md-2 order-3 text-center">
                    <button class="btn btn-primary w-md-auto w-100" type="button">Load more posts</button>
                </div>
                <div class="col col-md-4 col-6 order-md-3 order-2">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm justify-content-end">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
            @else
            <article class="row g-0 border-0 mb-4">
                <div class="col-sm-7">
                    <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                        <h3>
                            <a href="#">No Post Yet</a>
                        </h3>
                    </div>
                </div>
            </article>
            @endif
        </div>


        <!-- Sidebar (offcanvas on sreens < 992px) -->
        <aside class="col-lg-3">
            <div class="offcanvas-lg offcanvas-end" id="sidebarBlog">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title">Sidebar</h4>
                    <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas"
                        data-bs-target="#sidebarBlog" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <!-- Search box -->
                    @livewire('user.blog_search')

                    <!-- Category links -->
                    <h4 class="pt-1 pt-lg-0 mt-lg-n2">Categories:</h4>
                    <ul class="nav flex-column mb-lg-5 mb-4">
                        <li class="mb-2">
                            <a class="nav-link d-flex p-0" href="{{route('main.blog')}}">
                                All categories
                                <span class="fs-sm text-body-secondary ms-2">({{count($news)}})</span>
                            </a>
                        </li>
                        @if (count($categories) > 0)
                        @foreach ($categories as $c)
                        <li class="mb-2">
                            <a class="nav-link d-flex p-0" href="{{route('main.category_blog', ['cat_name'=>$c->name])}}">
                                {{$c->name}}
                                <span class="fs-sm text-body-secondary ms-2">({{count($c->news)}})</span>
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>

                    <!-- Featured posts widget -->

                    <!-- Social buttons -->
                    <h4 class="pt-3 pt-lg-0 pb-1">Join us:</h4>
                    <div class="d-flex mt-n3 ms-n3 mb-lg-5 mb-4 pb-3 pb-lg-0">
                        <a class="btn btn-secondary btn-icon btn-sm btn-instagram rounded-circle mt-3 ms-3" href="#"
                            aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle mt-3 ms-3" href="#"
                            aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-secondary btn-icon btn-sm btn-telegram rounded-circle mt-3 ms-3" href="#"
                            aria-label="Telegram">
                            <i class="ai-telegram"></i>
                        </a>
                    </div>

                    <!-- Banner -->
                    <div class="position-relative mb-3">
                        <div class="position-absolute w-100 text-center top-0 start-50 translate-middle-x pt-4"
                            style="max-width: 15rem;" data-bs-theme="light">
                            <h3 class="h2 pt-3 mb-0">The CANs Park Banner</h3>
                        </div>
                        <img class="rounded-5" src="/assets/img/blog/sidebar/banner.jpg" alt="The Can's Banner">
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>

@endsection
