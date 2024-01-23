@extends('layouts.app')
@section('content')
    <h3>Detail Pelamar Kerja</h3>
    <div class="card mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-xl-2 col-lg-5">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('default.jpg') }}" height="200px" width="200px" style="object-fit: cover;"
                            alt="" id="img-student">
                    </div>
                </div>
                <div class="col-12 col-xl-6 col- mt-3">
                    <h1 class="text-student text-dark mb-3" style="font-weight:500; ">
                        {{ $applyJobVacancy->student->user->name }}
                    </h1>
                    <div class="text-student d-flex justify-content-header gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 34 34"
                            fill="none">
                            <path
                                d="M31.2807 11.18L17.4808 4.3621C17.3312 4.28836 17.1667 4.25 17 4.25C16.8333 4.25 16.6688 4.28836 16.5192 4.3621L2.72266 11.18C2.54425 11.2668 2.39371 11.4018 2.28808 11.5698C2.18246 11.7377 2.12596 11.9319 2.125 12.1303V28.6874C2.12578 28.8277 2.15422 28.9666 2.20868 29.096C2.26314 29.2253 2.34256 29.3427 2.44241 29.4414C2.54225 29.5401 2.66056 29.6181 2.79057 29.671C2.92058 29.724 3.05975 29.7507 3.20012 29.7499H30.7999C30.9403 29.7507 31.0794 29.724 31.2094 29.671C31.3394 29.6181 31.4578 29.5401 31.5576 29.4414C31.6574 29.3427 31.7369 29.2253 31.7913 29.096C31.8458 28.9666 31.8742 28.8277 31.875 28.6874V12.1303C31.8743 11.9323 31.8183 11.7383 31.7133 11.5704C31.6083 11.4025 31.4585 11.2673 31.2807 11.18ZM17 6.50038L28.4883 12.1741L16.8207 17.9369L5.33242 12.2631L17 6.50038Z"
                                fill="#0F172A" />
                        </svg>
                        <div class="">
                            {{ $applyJobVacancy->student->user->email }}
                        </div>
                    </div>
                    <div class="text-student d-flex justify-content-header gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 34 34"
                            fill="none">
                            <path
                                d="M25.9652 31.8754C24.6689 31.8754 22.848 31.4065 20.1214 29.8832C16.8057 28.0238 14.2411 26.3072 10.9434 23.0181C7.76387 19.8406 6.2166 17.7833 4.0511 13.8427C1.60469 9.39352 2.02172 7.06134 2.48789 6.06458C3.04305 4.87325 3.8625 4.16071 4.92168 3.45349C5.52329 3.05932 6.15994 2.72143 6.82356 2.44411C6.88996 2.41556 6.95172 2.38833 7.00684 2.36376C7.33555 2.21567 7.8336 1.99188 8.46446 2.23095C8.88547 2.38899 9.26133 2.71239 9.84969 3.29345C11.0563 4.48345 12.7052 7.13372 13.3134 8.43528C13.7218 9.31251 13.9921 9.89157 13.9928 10.541C13.9928 11.3014 13.6103 11.8877 13.1461 12.5206C13.0591 12.6395 12.9728 12.753 12.8891 12.8633C12.3838 13.5273 12.2729 13.7192 12.3459 14.0619C12.494 14.7505 13.5983 16.8005 15.4132 18.6114C17.2281 20.4223 19.2189 21.4569 19.9102 21.6043C20.2675 21.6807 20.4634 21.5651 21.1487 21.0418C21.247 20.9668 21.3479 20.8891 21.4535 20.8114C22.1614 20.2848 22.7205 19.9123 23.463 19.9123H23.467C24.1131 19.9123 24.6663 20.1925 25.5827 20.6547C26.778 21.2577 29.5079 22.8853 30.7052 24.0932C31.2876 24.6802 31.6123 25.0548 31.7711 25.4751C32.0101 26.108 31.785 26.604 31.6382 26.9361C31.6137 26.9912 31.5864 27.0516 31.5579 27.1187C31.2784 27.7811 30.9385 28.4164 30.5425 29.0166C29.8366 30.0724 29.1214 30.8899 27.9275 31.4457C27.3143 31.7357 26.6434 31.8826 25.9652 31.8754Z"
                                fill="#0F172A" />
                        </svg>
                        <div class="">
                            {{ $applyJobVacancy->student->user->phone_number }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 mt-3">
                    <a href="{{ asset('storage/' . $applyJobVacancy->cv) }}" target="_blank"
                        download="CV {{ $applyJobVacancy->student->user->name }}">
                        <button class="btn btn-primary w-100">Download CV</button>
                    </a>
                    <a href="{{ route('detail.applicant.portofolio', ['student' => $applyJobVacancy->student->id]) }}">
                        <button class="btn btn-warning text-white w-100 mt-3">Lihat Portofolio</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="text-dark fs-6" style="font-weight: 600">
                Pesan
            </p>
            <p>
                {{ $applyJobVacancy->message ? $applyJobVacancy->message : 'Belum Anda Pesan' }}
            </p>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#company').addClass('mm-active')
    </script>
@endsection
@section('style')
    <style>
        @media only screen and (max-width: 600px) {}

        @media only screen and (min-width: 601px) and (max-width: 1024px) {}

        @media only screen and (min-width: 1025px) {
            #img-student {
                margin-left: 60px;
            }

            .text-student {
                margin-left: 60px;
            }
        }
    </style>
@endsection
