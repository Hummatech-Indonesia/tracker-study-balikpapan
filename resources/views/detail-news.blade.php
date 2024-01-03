@extends('layouts.landing-page.app-landing')
@section('style')
<style>
        .button {
            font-size: 1rem;
            font-weight: 500;
            color: #fff;
            line-height: 1;
            background-color: #5D87FF;
            padding: 10px 10px;
            border-radius: 6px;
            outline: 0 none;
            position: relative;
            z-index: 1;
        }
    </style>
@endsection
@section('content')
@php
use Carbon\Carbon;
@endphp
    <!-- ***** Welcome Area Start ***** -->
    <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white text-capitalize">DETAIL BERITA
                            SMKN 2 PENAJAM</h2>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item text-white">TRACER STUDY SMKN 2 PENAJAM </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <section id="blog" class="section blog-area ptb_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-2">
                    <div class="button text-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                            fill="none">
                            <path
                                d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976314 8.31658 0.292893 8.70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928933C7.68054 0.538409 7.04738 0.538409 6.65685 0.928933L0.292892 7.29289ZM18 7L1 7L1 9L18 9L18 7Z"
                                fill="white" />
                        </svg> Kembali
                    </div>
                </div>
                <div class="col-4">
                    <div class="button text-center mb-3">
                        Latest News
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Blog Details -->
                    <article class="single-blog-details">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <img src="{{ asset('storage/' . $newsDetail->thumbnail) }}" alt="">
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content sApp-blog">
                            <!-- Blog Details -->
                            <div class="blog-details">
                                <h3 class="blog-title py-2 py-sm-3">
                                    <div>{{ $newsDetail->title }}</div>
                                </h3>
                                <div class="mb-2" style="color: #5D87FF">{{ Carbon::parse($newsDetail->created_at)->locale('id_ID')->isoFormat('DD MMMM Y') }}</div>
                                <p class="d-none d-sm-block">{{ $newsDetail->content }}</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-4">
                    @foreach ($latestNews as $latest)
                    <aside class="sidebar pt-5 pt-lg-0">
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <a href="{{ route('detail-news', ['news' => $latest->id]) }}" class="single-post align-items-center align-items-lg-start media p-3 shadow p-3 mb-3 bg-body-tertiary rounded">
                                    <!-- Post Thumb -->
                                    <div class="post-thumb avatar-md">
                                        <img class="align-self-center" style="border-radius: 20%; height:100%;
                                        "  src="{{ asset('storage/' . $latest->thumbnail) }}" alt="">
                                    </div>
                                    <div class="post-content media-body pl-3">
                                        <h6 class="mb-2">{{ $latest->title }}</h6>
                                        <p>{{ Carbon::parse($latest->created_at)->locale('id_ID')->isoFormat('DD MMMM Y') }}</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </aside>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="height-emulator d-none d-lg-block"></div>
@endsection

