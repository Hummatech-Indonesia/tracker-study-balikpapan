@extends('layouts.app')
@section('style')
    <style>
        .photo-stack {
            position: relative;
            margin: auto;
            width: 300px;
            height: 250px;
        }

        .photo-stack>p {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            text-align: center;
            font-weight: bold;
            z-index: 1000;
        }

        .photo-stack img {
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid white;
            box-shadow: 0 1px 3px -2px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-out;
        }

        .photo-stack img:nth-child(1) {
            z-index: 999;
        }

        .photo-stack img:nth-child(2) {
            transform: rotate3d(0, 0, 1, 3deg);
        }

        .photo-stack img:nth-child(3) {
            transform: rotate3d(0, 0, 1, -3deg);
        }

        .photo-stack img:nth-child(4) {
            transform: rotate3d(0, 0, 1, 2deg);
        }

        .photo-stack:hover img:nth-child(1) {
            transform: scale(1.02);
        }

        .photo-stack:hover img:nth-child(2) {
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 3deg);
        }

        .photo-stack:hover img:nth-child(3) {
            transform: translate3d(-10%, 0, 0) rotate3d(0, 0, 1, -3deg);
        }

        .photo-stack:hover img:nth-child(4) {
            transform: translate3d(2%, -5%, 0) rotate3d(0, 0, 1, 2deg);
        }

        .photo-stack:hover img:nth-child(5) {
            transform: translate3d(-5%, -2%, 0) rotate3d(0, 0, 1, 2deg);
        }
    </style>
@endsection
@section('content')
    <h4 class="mb-3">
        Pengalaman Project
    </h4>
    <div class="d-flex justify-content-between mb-4">
        <div class="">
            <select name="" class="form-select" id="">
                <option value="">Pilih Filter</option>
                <option value="">Terbaru ke Terlama</option>
                <option value="">Terlama ke Terbaru</option>
            </select>
        </div>
        <div class="">
            <a href="{{ route('add.portofolio') }}" class="btn btn-primary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 19 19" fill="none">
                    <path d="M9.5 2L9.5 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M2 9.5L17 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Project
            </a>
        </div>
    </div>
    <div class="card">
        @foreach ($portofolios as $portofolio)
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="photo-stack mt-4">
                        <img src="http://placekitten.com/300/200" />
                        <img src="http://placekitten.com/300/200?image=2" />
                        <img src="http://placekitten.com/300/200?image=3" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="text-primary text-end ">
                            12 September 2023 -30 September 2023
                        </p>
                        <h5 class="card-title">Project Tracer Study Nomer 2 Malang</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and the printing and
                            typesetting industry. Lorem Ipsum has been the industry's the industry's
                            standard dummy text ever since the 1500s, when an galley of type and scrambled
                            unknown printer took a galley of type and scrambled galley of type and scrambled....</p>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4 gap-3 px-4">
                    <div class="">
                        <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 38 38" fill="none">
                                <path d="M14.981 22.7949L14.981 18.0879" stroke="white" stroke-width="3"
                                    stroke-linecap="round" />
                                <path d="M22.8254 22.7949L22.8254 18.0879" stroke="white" stroke-width="3"
                                    stroke-linecap="round" />
                                <path
                                    d="M4.78223 10.2422H33.0242V10.2422C30.5229 10.2422 29.2722 10.2422 28.4621 10.9772C28.3942 11.0388 28.3293 11.1037 28.2676 11.1717C27.5327 11.9817 27.5327 13.2324 27.5327 15.7337V24.9725C27.5327 27.6438 27.5327 28.9794 26.7028 29.8093C25.8729 30.6391 24.5373 30.6391 21.866 30.6391H15.9404C13.2691 30.6391 11.9334 30.6391 11.1036 29.8093C10.2737 28.9794 10.2737 27.6438 10.2737 24.9725V15.7337C10.2737 13.2324 10.2737 11.9817 9.53874 11.1717C9.47709 11.1037 9.41218 11.0388 9.34424 10.9772C8.53418 10.2422 7.28353 10.2422 4.78223 10.2422V10.2422Z"
                                    stroke="white" stroke-width="3" stroke-linecap="round" />
                                <path
                                    d="M14.9804 5.53617C14.9804 5.53617 15.7649 3.9668 18.9029 3.9668C22.0409 3.9668 22.8254 5.53579 22.8254 5.53579"
                                    stroke="white" stroke-width="3" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="">
                        <a href="{{ route('edit.portofolio', $portofolio->id) }}" class="btn btn-warning"><svg
                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 38 38"
                                fill="none">
                                <path
                                    d="M6.84778 28.4972L8.30299 28.861L6.84778 28.4972C6.84378 28.5132 6.83958 28.5299 6.83523 28.5472C6.78335 28.7535 6.70953 29.047 6.68399 29.3081C6.6545 29.6096 6.64333 30.2817 7.19232 30.8307L8.25298 29.77L7.19233 30.8307C7.74132 31.3797 8.41342 31.3685 8.71489 31.339C8.97594 31.3135 9.26951 31.2396 9.47581 31.1878C9.4931 31.1834 9.50978 31.1792 9.52577 31.1752L13.8951 30.0829C13.8974 30.0823 13.8997 30.0817 13.902 30.0811C13.9253 30.0753 13.9493 30.0694 13.974 30.0633C14.2675 29.991 14.6523 29.8961 15.0054 29.6962C15.3585 29.4963 15.6378 29.2151 15.8509 29.0007C15.8706 28.9809 15.8897 28.9616 15.9082 28.9431L27.4708 17.3805L27.4708 17.3805L26.4101 16.3198L27.4708 17.3805C27.4897 17.3616 27.5085 17.3428 27.5273 17.324C27.9504 16.9011 28.367 16.4847 28.6652 16.0938C29.0031 15.651 29.3268 15.0696 29.3268 14.3164C29.3268 13.5631 29.0031 12.9818 28.6652 12.5389C28.3669 12.148 27.9504 11.7316 27.5273 11.3087C27.5085 11.2899 27.4897 11.2711 27.4708 11.2522L26.7708 10.5522L25.7101 11.6128L26.7708 10.5522C26.7519 10.5333 26.7331 10.5145 26.7143 10.4957C26.2914 10.0726 25.875 9.65604 25.4841 9.35781C25.0412 9.0199 24.4599 8.69618 23.7066 8.69618C22.9534 8.69618 22.372 9.0199 21.9291 9.35781C21.5383 9.65604 21.1219 10.0726 20.699 10.4957C20.6802 10.5145 20.6613 10.5333 20.6425 10.5522L9.07993 22.1148C9.06137 22.1333 9.04213 22.1524 9.02232 22.1721C8.80785 22.3852 8.5267 22.6645 8.32677 23.0176C8.12685 23.3707 8.032 23.7555 7.95965 24.049C7.95296 24.0761 7.94647 24.1024 7.94011 24.1279L6.84778 28.4972Z"
                                    stroke="white" stroke-width="3" />
                                <path d="M19.7842 11.9622L24.4912 8.82422L29.1982 13.5312L26.0602 18.2382L19.7842 11.9622Z"
                                    stroke="white" stroke-width="2.5" />
                            </svg>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('detail.portofolio') }}" class="btn btn-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 38 38"
                                fill="none">
                                <path
                                    d="M19.0968 23.579C21.6964 23.579 23.8037 21.4716 23.8037 18.872C23.8037 16.2724 21.6964 14.165 19.0968 14.165C16.4972 14.165 14.3898 16.2724 14.3898 18.872C14.3898 21.4716 16.4972 23.579 19.0968 23.579Z"
                                    fill="white" />
                                <path
                                    d="M29.3065 10.4273C26.0911 8.2224 22.6498 7.10449 19.0791 7.10449C15.8659 7.10449 12.7335 8.0606 9.76884 9.93457C6.77916 11.8284 3.84833 15.2682 1.44556 18.872C3.38866 22.108 6.04664 25.4353 8.81494 27.3431C11.9907 29.5303 15.4437 30.6394 19.0791 30.6394C22.6829 30.6394 26.1286 29.5311 29.3242 27.3453C32.1373 25.4176 34.8144 22.0948 36.748 18.872C34.8078 15.6778 32.1219 12.3587 29.3065 10.4273ZM19.0968 25.9324C17.7003 25.9324 16.3353 25.5184 15.1742 24.7425C14.0131 23.9667 13.1081 22.864 12.5737 21.5739C12.0393 20.2838 11.8995 18.8641 12.1719 17.4945C12.4444 16.1249 13.1168 14.8669 14.1042 13.8794C15.0917 12.892 16.3497 12.2196 17.7193 11.9471C19.0889 11.6747 20.5086 11.8145 21.7987 12.3489C23.0888 12.8833 24.1915 13.7883 24.9673 14.9494C25.7432 16.1105 26.1572 17.4755 26.1572 18.872C26.1551 20.7439 25.4105 22.5385 24.0869 23.8621C22.7633 25.1857 20.9687 25.9303 19.0968 25.9324Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
