<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 10:59:08 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('LOGO SMKN 2.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets-admin/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets-admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets-admin/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets-admin/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/css/header-colors.css') }}" />
    <link href="{{ asset('assets-admin/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
    <title>Tracker Study</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('layouts.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('layouts.navbar')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2022. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->


    <!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header gap-2">
                    <div class="position-relative popup-search w-100">
                        <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                            placeholder="Search" autofocus>
                        <span
                            class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
                                class='bx bx-search'></i></span>
                    </div>
                    <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <!-- end search modal -->


    <!--start switcher-->
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script>
        // Ambil elemen input pencarian
        var searchInput = document.querySelector('#SearchModal input[type="search"]');

        // Tambahkan event listener untuk event input
        searchInput.addEventListener('input', function(event) {
            var keyword = event.target.value.toLowerCase(); // Ambil keyword pencarian dan ubah menjadi lowercase

            // Ambil elemen modal body
            var modalBody = document.querySelector('#SearchModal .modal-body');

            // Ambil data yang akan dicari (misalnya dari web service atau array data)
            var data = [{
                    name: 'Dashboard',
                    route: '{{ route('dashboard') }}',
                    imageSrc: "{{ asset('assets-admin/images/county/03.png') }}"
                },
                {
                    name: 'Alumni',
                    route: '/data2',
                    imageSrc: "{{ asset('assets-admin/images/county/02.png') }}"
                },
                {
                    name: 'Statistik',
                    route: '/data3',
                    imageSrc: "{{ asset('assets-admin/images/county/04.png') }}"
                },
                {
                    name: 'Survey',
                    route: '/data3',
                    imageSrc: "{{ asset('assets-admin/images/county/05.png') }}"
                },
                {
                    name: 'Staff',
                    route: '/data3',
                    imageSrc: "{{ asset('assets-admin/images/county/01.png') }}"
                },
                {
                    name: 'Perusahaan',
                    route: '/data3',
                    imageSrc: "{{ asset('assets-admin/images/county/06.png') }}"
                },
                {
                    name: 'Lowongan pekerjaan',
                    route: '/data3',
                    imageSrc: "{{ asset('assets-admin/images/county/08.png') }}"
                },
            ];

            // Hapus konten sebelumnya di modal body
            modalBody.innerHTML = '';

            // Buat variabel untuk melacak apakah ada data yang cocok dengan pencarian
            var dataFound = false;

            // Loop melalui data dan cek apakah nama mengandung huruf "d" dan mengandung keyword pencarian
            for (var i = 0; i < data.length; i++) {
                var item = data[i];

                if (item.name.toLowerCase().includes(keyword) && item.name.toLowerCase().includes(keyword)) {
                    // Buat elemen baru untuk menampilkan data yang cocok dengan pencarian
                    var newItem = document.createElement('div');
                    var link = document.createElement('a');
                    link.classList.add("dropdown-item", "d-flex", "align-items-center", "px-4", "rounded", "py-2");
                    link.href = "javascript:;";
                    newItem.appendChild(link);

                    var image = document.createElement('img');
                    image.src = item.imageSrc;
                    image.width = 20;
                    image.alt = "";
                    link.appendChild(image);

                    var span = document.createElement('span');
                    span.classList.add("ms-2");
                    span.style.fontWeight = "bold"; // Menambahkan gaya CSS untuk membuat teks lebih tebal
                    span.textContent = item.name;
                    link.appendChild(span);

                    // Tambahkan event listener pada elemen baru untuk pengalihan rute
                    newItem.addEventListener('click', (function(item) {
                        return function() {
                            window.location.href = item
                            .route; // Arahkan pengguna ke rute yang sesuai dengan item yang dipilih
                        };
                    })(item));

                    // Tambahkan gaya CSS untuk mengubah warna latar belakang dan teks saat dihover
                    link.addEventListener('mouseover', function() {
                        this.style.backgroundColor = 'green';
                        this.style.color = 'white';
                    });

                    // Hapus gaya CSS saat tidak dihover
                    link.addEventListener('mouseout', function() {
                        this.style.backgroundColor = '';
                        this.style.color = '';
                    });

                    // Tambahkan jarak pada elemen jika ada lebih dari satu data
                    if (dataFound) {
                        newItem.style.marginTop = '10px';
                    }

                    // Tambahkan elemen baru ke modal body
                    modalBody.appendChild(newItem);

                    dataFound = true;
                }
            }

            // Tampilkan pesan "Data tidak tersedia" jika tidak ada data yang cocok dengan pencarian
            if (!dataFound) {
                var noDataItem = document.createElement('div');
                noDataItem.textContent = 'Data tidak tersedia';
                modalBody.appendChild(noDataItem);
            }
        });
    </script>
    <script src="{{ asset('assets-admin/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets-admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/chartjs/js/chart.js') }}"></script>
    <script src="{{ asset('assets-admin/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets-admin/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/highcharts-more.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/variable-pie.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/solid-gauge.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/highcharts-3d.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/cylinder.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/funnel3d.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/exporting.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/export-data.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/accessibility.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/highcharts/js/highcharts-custom.script.js') }}"></script>
    <script src="{{ asset('assets-admin/js/app.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/apexcharts-bundle/js/apex-custom.js') }}"></script>
    <script>
        new PerfectScrollbar(".app-container")
    </script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 11:00:40 GMT -->

</html>
