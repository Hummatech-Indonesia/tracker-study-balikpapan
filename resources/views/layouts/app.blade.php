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
    <link rel="stylesheet" href="{{ asset('assets/js/sweetalert2/dist/sweetalert2.min.css') }}">
    @yield('style')
    <title>Tracer Study</title>
    <style>
        .user-circle {
            border-radius: 50%;
        }

        .border-custom {
            border: 7px solid #5D87FF !important;
        }
    </style>
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
            <p class="mb-0">Copyright © 2023. Team Study Tracer SMKN 2 PENAJAM.</p>
        </footer>
    </div>
    <!--end wrapper-->



    <!--start switcher-->
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <script src="{{ asset('assets/js/sweetalert2/dist/sweetalert2.min.js') }}"></script>
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
    <script src="{{ asset('assets-admin/plugins/form-repeater/repeater.js') }}"></script>
    <script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
    <script>
        new PerfectScrollbar(".app-container")
    </script>
    @yield('script')
    <script>
        // const authToken = localStorage.getItem('token')
        // $.ajaxSetup({
        //     headers: {
        //         'Accept': 'application/json',
        //         'Authorization': 'Bearer ' + authToken,
        //     }
        // });


        $('#logoutBtn').on('click', function() {
            $('.preloader').show()
            $.ajax({
                url: "{{ config('app.api_url') }}/logout",
                type: "POST",
                dataType: "JSON",
                success: function(response) {
                    $('.preloader').fadeOut()
                    localStorage.removeItem('token');
                    window.location.href =
                        "/login";
                },
                error: function(response) {
                    $('.preloader').fadeOut()
                    console.log(response);
                }
            });
        });

        function handleValidate(messages, type) {
            const keys = Object.keys(messages);
            for (const key of keys) {
                const text = messages[key];
                var ErrorList = $('<li>').text(text[0])
                let inputElement = $(`#${type}-${key}`)
                let select2Element = $(`#${type}-${key}`).siblings('.select2-container');
                if (!inputElement.is('div')) {
                    inputElement.addClass('error')
                    select2Element.addClass('error');
                }
                inputElement.next('ul').html(ErrorList)
                select2Element.next('ul').html(ErrorList)
            }
            $('.error').change(function() {
                $(this).removeClass('error')
                $(this).next('ul').html('')
            })
        }

        function handlePaginate(pagination) {
            const paginate = $('<ul>').addClass('pagination')
            const currentPage = pagination.current_page
            const lastPage = pagination.last_page
            if (lastPage >= 11) {
                var startPage = currentPage
                var endPage = currentPage + 1
                if (startPage > 1) startPage = currentPage - 1
                if (currentPage == lastPage) endPage -= 1
                for (var page = startPage; page <= endPage; page++) {
                    const pageItem = $('<li>').addClass('page-item')
                    page == currentPage ? pageItem.addClass('active') : '';
                    const pageLink =
                        `<button class="page-link" onclick="get(${page})" >${page}</button>`
                    pageItem.html(pageLink)
                    paginate.append(pageItem)
                }
                const morePage = `<li class="page-item disabled">
                            <button
                            class="page-link"
                            tabindex="-1"
                            aria-disabled="true"
                            >...</button>
                        </li>`
                if (currentPage >= 3) {
                    var leftPage = 3;
                    if (currentPage == 3) leftPage = 1
                    if (currentPage == 4) leftPage = 2
                    if (currentPage >= 6) paginate.prepend(morePage)
                    for (var page = leftPage; page >= 1; page--) {
                        const pageItem = $('<li>').addClass('page-item')
                        const pageLink =
                            `<button  class="page-link" onclick="get(${page})">${page}</button>`
                        pageItem.html(pageLink)
                        paginate.prepend(pageItem)
                    }
                }
                if (currentPage <= (lastPage - 2)) {
                    var rightPage = 1
                    if (currentPage == (lastPage - 2)) rightPage = 0
                    if (currentPage == (lastPage - 3)) rightPage = 1
                    if (currentPage < (lastPage - 4)) paginate.append(morePage)
                    for (var page = (lastPage - rightPage); page <= lastPage; page++) {
                        const pageItem = $('<li>').addClass('page-item')
                        const pageLink = `<button class="page-link" onclick="get(${page})">${page}</button>`
                        pageItem.html(pageLink)
                        paginate.append(pageItem)
                    }
                }
            } else {
                for (var page = 1; page <= lastPage; page++) {
                    const pageItem = $('<li>').addClass('page-item')
                    page == currentPage ? pageItem.addClass('active') : '';
                    const pageLink = `<button class="page-link" onclick="get(${page})">${page}</button>`
                    pageItem.append(pageLink)
                    paginate.append(pageItem)
                }
            }
            const previous = `<li class="page-item ${currentPage == 1 ? 'disabled' : ''}" ${currentPage != 1 ? 'onclick="get('+(currentPage - 1)+')"' : ''}>
                            <button
                            class="page-link"
                            tabindex="-1"
                            aria-disabled="true"
                            >Previous</button>
                        </li>`
            const next = `<li class="page-item ${currentPage == lastPage ? 'disabled' : ''}" ${currentPage != lastPage ? 'onclick="get('+(pagination.current_page + 1)+')"' : ''}>
                                <button class="page-link" href="#">Next</button>
                        </li>`
            paginate.prepend(previous)
            paginate.append(next)
            return paginate
        }

        function emptyForm(formId) {
            const form = $('#' + formId)
            form.find('input').each(function() {
                if ($(this).attr('type') === 'checkbox' || $(this).attr('type') === 'radio') {
                    $(this).prop('checked', false);
                } else if ($(this).attr('type') === 'file') {
                    $(this).val(null);
                } else {
                    $(this).val('');
                }
            });
            form.find('select').prop('selectedIndex', 0);
            form.find('.select2-with-bg').val(null).trigger('change');
            form.find('.select2').val(null).trigger('change');
            form.find('textarea').val('');
        }

        function getDataAttributes(elementId) {
            const dataAttributes = {};
            const element = $('#' + elementId);
            if (element.length === 0) {
                console.error('Element with ID "' + elementId + '" not found.');
                return null;
            }
            $.each(element[0].attributes, function() {
                if (this.name.startsWith('data-')) {
                    const key = this.name.substring(5);
                    const value = this.value;
                    dataAttributes[key] = value;
                }
            });
            return dataAttributes;
        }

        function setFormValues(formId, values) {
            const form = $('#' + formId);
            for (const key in values) {
                if (values.hasOwnProperty(key)) {
                    const value = values[key];
                    const input = form.find('[name="' + key + '"]');
                    if (input.length > 0) {
                        const type = input.attr('type');
                        if (type === 'radio') {
                            input.filter('[value="' + value + '"]').prop('checked', true);
                        } else if (input.is('select')) {
                            if (input.hasClass('select2')) {
                                input.val(value).trigger('change'); // Trigger change event for Select2
                            } else {
                                input.val(value).trigger('change');
                            }
                        } else {
                            input.val(value);
                        }
                    } else {
                        const textarea = form.find('textarea[name="' + key + '"]');
                        if (textarea.length > 0) {
                            textarea.html(value);
                        }
                    }
                }
            }
        }

        function handleDetail(data) {
            const keys = Object.keys(data);
            for (const key of keys) {
                const text = data[key];
                $('#detail-' + key).html(text)
            }
        }

        function handleFile(data) {
            const thumbnailUrl = data['thumbnail'];
            $('#detail-file-thumbnail').attr('src', thumbnailUrl);
        }


        function showLoading() {
            return `<div class="d-flex justify-content-center" style="margin-top:11rem">
                        <div class="spinner-border my-auto" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>`
        }

        function showNoData(message) {
            return `<div class="d-flex justify-content-center" style="min-height:16rem">
                        <div class="my-auto ">
                            <img src="{{ asset('no-data.svg') }}" width="400" height="400"/>
                            <h4 class="text-center">${message}</h4>
                            </div>
                    </div>`
        }
        $("#inputDate").on("change", function() {
            const inputDateValue = $(this).val();
            const parts = inputDateValue.split("-");
            const year = parts[0];
            const month = parts[1];
            const day = parts[2];
            const formattedDate = `${year}/${month}/${day}`;
            $(this).val(formattedDate);
        });
    </script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 11:00:40 GMT -->

</html>
