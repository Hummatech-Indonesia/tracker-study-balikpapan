@extends('layouts.landing-page.app-landing')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <style>
        @media (max-width: 890px) {
            #home>div.container>div>div.col-12.col-md-3.col-lg-6>iframe {
                border: 4px solid #fff;
                border-radius: 10px;
                width: 100%;
                height: 300px;
            }
        }

        @media(min-width:1200px) {
            #home>div.container>div>div.col-12.col-md-3.col-lg-6>iframe {
                border: 4px solid #fff;
                border-radius: 10px;
                width: 600px;
                height: 400px;
            }
        }

        .container__card {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card__content {
            margin-inline: 1.75rem;
            border-radius: 1.25rem;
            overflow: hidden;
        }

        .card__article {
            width: 300px;
            border-radius: 1.25rem;
            overflow: hidden;
        }

        .card__image {
            position: relative;
            padding-top: 1.5rem;
            margin-bottom: -.75rem;
        }

        .card__data {
            background-color: greenyellow;
            padding: 1.5rem 2rem;
            border-radius: 1rem;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        .card__img {
            /* width: 180px; */
            margin: 0 auto;
            position: relative;
            z-index: 5;

        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            content: '';
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: initial;
            height: initial;
            font-size: 3rem;
            color: var(--second-color);
            /* display: none; */
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-pagination-bullet {
            background-color: hsl(212, 32%, 40%)
        }

        @media screen and (max-width:320px) {
            .card__data {
                padding: 1rem;
            }
        }
    </style>
@endsection
@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="welcome-intro">
                        <h2 class="text-white fs-6">SELAMAT DATANG DI TRACER STUDY SMK 2 PENAJAM</h2>
                        <p class="text-white my-4">Nikmati pengalaman eksklusif melalui situs web kami, Tracer Study, yang
                            dirancang khusus untuk membantu Anda melacak dan memahami perjalanan karir alumni kami.
                            Menyajikan informasi yang komprehensif, platform ini memungkinkan Anda menjelajahi prestasi dan
                            perkembangan mereka setelah meninggalkan lembaga pendidikan.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-6">
                    @if ($alumniVidio == null)
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="190" height="190"
                                        viewBox="0 0 190 190" fill="none">
                                        <g clip-path="url(#clip0_168_607)">
                                            <path
                                                d="M167.049 41.5497H52.6795C40.0661 41.5497 29.6787 51.7554 29.6787 64.3019V155.318C29.6787 167.865 40.0661 178.07 52.6795 178.07H166.941C179.555 178.07 189.942 168.358 189.942 155.812V64.3019C189.942 51.7554 179.673 41.5497 167.049 41.5497ZM138.428 64.3057C141.798 64.3262 145.088 65.3444 147.88 67.232C150.673 69.1196 152.844 71.7919 154.12 74.9119C155.395 78.0319 155.718 81.4598 155.048 84.7632C154.378 88.0666 152.745 91.0976 150.354 93.4738C147.963 95.85 144.923 97.465 141.615 98.1151C138.308 98.7652 134.882 98.4212 131.77 97.1266C128.657 95.832 125.998 93.6447 124.128 90.8407C122.257 88.0367 121.259 84.7414 121.259 81.3707C121.276 76.8319 123.094 72.4855 126.313 69.2854C129.532 66.0853 133.889 64.2931 138.428 64.3019V64.3057ZM52.5274 166.696C46.2207 166.696 41.4499 161.595 41.4499 155.322V131.271L75.0088 101.3C78.2895 98.4139 82.5424 96.8793 86.9099 97.0053C91.2774 97.1313 95.4348 98.9085 98.5437 101.979L121.782 125.02L79.8612 166.692L52.5274 166.696ZM178.071 155.318C178.07 156.813 177.775 158.294 177.202 159.675C176.629 161.056 175.79 162.31 174.732 163.366C173.674 164.423 172.418 165.26 171.036 165.831C169.654 166.402 168.173 166.694 166.678 166.692H96.0841L139.518 123.536C142.601 120.936 146.501 119.505 150.533 119.494C154.566 119.483 158.473 120.893 161.569 123.477L178.071 137.481V155.318Z"
                                                fill="#FFAE1F" />
                                            <path
                                                d="M142.456 11.8713H23.7427C17.4458 11.8713 11.4067 14.3728 6.95408 18.8254C2.50146 23.278 0 29.3171 0 35.6141L0 130.585C0.00434238 135.849 1.75488 140.963 4.97732 145.125C8.19976 149.287 12.712 152.263 17.807 153.586V56.3889C17.807 49.3049 20.6212 42.5109 25.6304 37.5017C30.6396 32.4925 37.4335 29.6784 44.5176 29.6784H165.457C164.134 24.5833 161.159 20.0711 156.996 16.8487C152.834 13.6262 147.72 11.8757 142.456 11.8713Z"
                                                fill="#FFAE1F" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_168_607">
                                                <rect width="189.942" height="189.942" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h4 class="text-center mt-3 mb-4">
                                    Video
                                </h4>
                            </div>
                        </div>
                    @else
                        <iframe width="600" height="400" src="{{ asset('storage/' . $alumniVidio->video) }}"
                            frameborder="0" allow="autoplay" style="border: 4px solid #fff; border-radius: 10px;"></iframe>
                    @endif
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

    {{-- <section id="" class="section screenshots-area ptb_100">
        <div class="container">
            <div class="">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Galery Alumni SMKN 2 Penajam</h2>
                </div>
            </div>
            <div class="" style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:1.4rem">
                @forelse ($slidergaleryalumnis->chunk(2) as $chunk)
                    @foreach ($chunk as $slidergaleryalumni)
                        <div class="" style="background-color: gray; border-radius: 0.375rem; height:350px">
                            <img style="object-fit: cover; width: 100%; height: 100%; border-radius: 0.375rem;"
                                src="{{ asset('storage/' . $slidergaleryalumni->photo) }}" alt="">
                        </div>
                    @endforeach
                @empty
                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="{{ asset('showNoData.png') }}" alt="">
                            <h3 class="text-center">Data Masih Kosong</h3>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        <!-- Slider main container -->
    </section> --}}
    <section class="container__card">
        <div class="card__container swiper">
            <div class="card__content">
                <div class="swiper-wrapper">
                    <article class="card__article swiper-slide">
                        <div class="card_image">
                            <img src="{{ asset('1.png') }}" alt="" class="card__img">
                            <div class="card__shadow"></div>
                        </div>
                        <div class="card__data">
                            <h3 class="card__name">Darwin Nunez</h3>
                            <p class="class__description">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, illum!
                            </p>

                            <a href="" class="card__button">View More</a>
                        </div>
                    </article>
                    <article class="card__article swiper-slide">
                        <div class="card_image">
                            <img src="{{ asset('1.png') }}" alt="" class="card__img">
                            <div class="card__shadow"></div>
                        </div>
                        <div class="card__data">
                            <h3 class="card__name">Darwin Nunez</h3>
                            <p class="class__description">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, illum!
                            </p>

                            <a href="" class="card__button">View More</a>
                        </div>
                    </article>
                    <article class="card__article swiper-slide">
                        <div class="card_image">
                            <img src="{{ asset('1.png') }}" alt="" class="card__img">
                            <div class="card__shadow"></div>
                        </div>
                        <div class="card__data">
                            <h3 class="card__name">Darwin Nunez</h3>
                            <p class="class__description">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, illum!
                            </p>

                            <a href="" class="card__button">View More</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>
    </section>

    <section id="" class="section screenshots-area blog-area">
        <div class="container2">
            <div class="row">
                <div class="col-12">
                    <div class="app-screenshots">
                        @forelse ($galleryAlumnis as $galleryAlumni)
                            <div class="single-screenshot">
                                <div class="single-blog res-margin">
                                    <div class="blog-thumb">
                                        <img style="width: 800px; height: 400px; object-fit: cover;"
                                            src="{{ asset('storage/' . $galleryAlumni->photo) }}" alt="">
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="blog-content p-4">
                                        <!-- Blog Title -->
                                        <h5 style="text-overflow: ellipsis;overflow: hidden ;max-width: 300px ;white-space: nowrap"
                                            class="blog-title mb-2"><a href="#">{{ $galleryAlumni->title }}</a></h5>
                                        <div class="blog-btn" style="font-size: 14px">
                                            {{ \Carbon\Carbon::parse($galleryAlumni->created_at)->locale('id')->isoFormat('LL') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('showNoData.png') }}" alt="">
                                    <h3 class="text-center">Data Masih Kosong</h3>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--====== Height Emulator Area Start ======-->
    <div class="height-emulator d-none d-lg-block"></div>
    <!--====== Height Emulator Area End ======-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script>
        let swiperCards = new Swiper('.card__content', {
            loop: true,
            spaceBetween: 32,
            grabCursor: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                600: {
                    slidePerView: 2,
                },
                968: {
                    slidePerView: 3,
                },
            },
        });
    </script>
@endsection
