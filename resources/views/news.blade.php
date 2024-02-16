@extends('layouts.landing-page.app-landing')
@section('style')
    <style>
        .button {
            font-size: 1rem;
            font-weight: 500;
            color: #5D87FF;
            line-height: 1;
            text-align: center;
            padding: 10px 10px;
            border: 1px solid #5D87FF;
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
    <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-md-3 col-lg-5">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('Group 9359.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-0 col-md-0 col-lg-1"></div>
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="welcome-intro">
                        <h2 class="text-white fs-6">Berita Terbaru SMKN 2 Penajam Paser Utara</h2>
                        <p class="text-white my-4">"Selamat datang di Halaman Berita kami! Temukan berita terkini seputar
                            prestasi, inovasi, dan peristiwa terbaru dari komunitas kami. Dapatkan informasi relevan dan
                            artikel menarik untuk tetap terhubung dengan perkembangan terkini. Stay informed, stay
                            inspired!"</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape Bottom -->
        <div class="shape-bottom">
            <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                <title>sApp Shape</title>
                <desc>Created with Sketch</desc>
                <defs></defs>
                <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                        <path
                            d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395"
                            id="sApp-v1.0"></path>
                    </g>
                </g>
            </svg>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <section id="screenshots" class="section screenshots-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Berita Paling Baru</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($latestNews == null)
                    <div class="col-12 col-md-3 col-lg-12">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('showNoData.png') }}" alt="">
                                <h4 class="text-center">Tidak ada Berita</h4>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-12 col-md-3 col-lg-7">
                        <div class="card">
                            <img src="{{ asset('storage/' . $latestNews->thumbnail) }}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-5">
                        <div class="welcome-intro">
                            <h3 class="text-black fs-3 text-center">{{ $latestNews->title }}</h3>
                            <p class="text-black my-4">
                                @if (strlen(strip_tags($latestNews->content)) > 500)
                                    {{ substr(strip_tags($latestNews->content), 0, 500) }}...
                                    <a href="{{ route('detail-news', ['news' => $latestNews->id]) }}">
                                        <div class=" btn-outline-primary mt-3 button">Lihat Selengkapnya</div>
                                    </a>
                                @else
                                    {!! $latestNews->content !!}
                                @endif
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section id="blog" class="section blog-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Berita Bulan Ini</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                @forelse ($news as $new)
                    <div class="col-12 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <img style="width: 400px; height: 200px; object-fit: cover;"
                                    src="{{ asset('storage/' . $new->thumbnail) }}" alt="">

                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <p class="blog-btn">
                                    {{ Carbon::parse($new->created_at)->locale('id_ID')->isoFormat('DD MMMM Y') }}</p>
                                <!-- Blog Title -->
                                <h5 style="text-overflow: ellipsis;overflow: hidden ;max-width: 300px ;white-space: nowrap"
                                    class="blog-title my-3">{{ $new->title }}</h5>

                                <p style="text-overflow: ellipsis;overflow: hidden ;max-width: 300px ;white-space: nowrap"
                                    class="blog">{!! Illuminate\Support\Str::limit($new->content, 150, $end = '...') !!}</p>
                                <a href="{{ route('detail-news', ['news' => $new->id]) }}">
                                    <div class="button btn-outline-primary mt-3">Lihat Selengkapnya</div>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="{{ asset('showNoData.png') }}" alt="">
                            <h4 class="text-center">Tidak ada Berita</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <div class="height-emulator d-none d-lg-block"></div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection
