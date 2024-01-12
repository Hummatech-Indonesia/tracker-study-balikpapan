@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-xxl-6 col-12">
            <div class="card radius-10 mb-3 w-100">
                <div class="card-header">
                    <div class="d-flex justify-content-center mt-2 mb-2">
                        <div>
                            <h6 class="mb-0 text-center">Jumlah Pekrjaan Intergrasi</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div id="chart-pie"></div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center border-top">
                        Bekerja <span class="badge bg-success rounded-pill">25%</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Kuliah <span class="badge bg-primary rounded-pill">10%</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Berwirausaha <span class="badge bg-warning rounded-pill">65%</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Menganggur <span class="badge bg-danger rounded-pill">14%</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card radius-10 mb-3 border-start border-0 border-4 border-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Jumlah Lulusan</p>
                            <h4 class="my-1 text-primary mb-4">{{ $countAlumni }}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #ECF2FF;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44"
                                fill="none">
                                <path
                                    d="M13.0625 22C16.4798 22 19.25 19.2298 19.25 15.8125C19.25 12.3952 16.4798 9.625 13.0625 9.625C9.64524 9.625 6.875 12.3952 6.875 15.8125C6.875 19.2298 9.64524 22 13.0625 22Z"
                                    fill="#5D87FF" />
                                <path
                                    d="M20.1094 25.4375C17.6894 24.2086 15.0184 23.7188 13.0625 23.7188C9.23141 23.7188 1.375 26.0683 1.375 30.7656V34.375H14.2656V32.994C14.2656 31.3612 14.9531 29.7241 16.1562 28.3594C17.1162 27.2697 18.4602 26.2582 20.1094 25.4375Z"
                                    fill="#5D87FF" />
                                <path
                                    d="M29.2188 24.75C24.744 24.75 15.8125 27.5138 15.8125 33V37.125H42.625V33C42.625 27.5138 33.6935 24.75 29.2188 24.75Z"
                                    fill="#5D87FF" />
                                <path
                                    d="M29.2188 22C33.3954 22 36.7812 18.6142 36.7812 14.4375C36.7812 10.2608 33.3954 6.875 29.2188 6.875C25.0421 6.875 21.6562 10.2608 21.6562 14.4375C21.6562 18.6142 25.0421 22 29.2188 22Z"
                                    fill="#5D87FF" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 mb-3 border-start border-0 border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Lulusan Yang Berwirausaha</p>
                            <h4 class="my-1 text-warning mb-4">345</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #FEF5E5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44"
                                fill="none">
                                <path
                                    d="M41.5783 2.78867C41.2528 2.71128 40.9105 2.75305 40.6132 2.90641L38.5 3.96172L36.3687 2.89609C36.1778 2.80064 35.9673 2.75095 35.7539 2.75095C35.5404 2.75095 35.3299 2.80064 35.139 2.89609L32.9811 3.96258L30.8516 2.89609C30.6601 2.79994 30.4488 2.74987 30.2345 2.74987C30.0203 2.74987 29.809 2.79994 29.6175 2.89609L27.5 3.95914L25.3988 2.89867C25.2079 2.80186 24.9969 2.75098 24.7828 2.75009C24.5687 2.74919 24.3574 2.7983 24.1656 2.89351L22 3.96344L19.8687 2.89523C19.6775 2.79983 19.4667 2.75017 19.253 2.75017C19.0393 2.75017 18.8285 2.79983 18.6373 2.89523L16.5 3.96172L14.3653 2.89523C14.0901 2.75728 13.7766 2.71567 13.4749 2.77706C13.1733 2.83845 12.9009 2.99929 12.7016 3.23383C12.4866 3.48997 12.3708 3.81473 12.375 4.14906V24.75L12.3793 24.7543H28.875C29.6043 24.7543 30.3038 25.044 30.8195 25.5598C31.3353 26.0755 31.625 26.7749 31.625 27.5043V36.4375C31.625 39.0955 34.4669 41.25 37.125 41.25H38.1562C39.3414 41.25 40.4781 40.7792 41.3161 39.9411C42.1542 39.1031 42.625 37.9664 42.625 36.7812V4.125C42.6252 3.81725 42.5222 3.51831 42.3325 3.27603C42.1427 3.03376 41.8771 2.86215 41.5783 2.78867ZM35.75 20.625H24.793C24.0505 20.625 23.4094 20.0544 23.3767 19.3119C23.3683 19.1263 23.3977 18.941 23.4629 18.7671C23.5282 18.5932 23.628 18.4343 23.7563 18.3C23.8846 18.1657 24.0389 18.0588 24.2096 17.9858C24.3804 17.9127 24.5642 17.875 24.75 17.875H35.707C36.4495 17.875 37.0906 18.4456 37.1233 19.1881C37.1316 19.3737 37.1023 19.559 37.0371 19.7329C36.9718 19.9068 36.872 20.0657 36.7437 20.2C36.6153 20.3343 36.4611 20.4412 36.2903 20.5142C36.1196 20.5873 35.9357 20.625 35.75 20.625ZM35.75 13.75H19.293C18.5505 13.75 17.9094 13.1794 17.8767 12.4369C17.8683 12.2513 17.8977 12.066 17.9629 11.8921C18.0282 11.7182 18.128 11.5593 18.2563 11.425C18.3846 11.2907 18.5389 11.1838 18.7096 11.1108C18.8804 11.0377 19.0642 11 19.25 11H35.707C36.4495 11 37.0906 11.5706 37.1233 12.3131C37.1316 12.4987 37.1023 12.684 37.0371 12.8579C36.9718 13.0318 36.872 13.1907 36.7437 13.325C36.6153 13.4593 36.4611 13.5662 36.2903 13.6392C36.1196 13.7123 35.9357 13.75 35.75 13.75Z"
                                    fill="#F4A71E" />
                                <path
                                    d="M28.875 36.4375V28.875C28.875 28.5103 28.7301 28.1606 28.4723 27.9027C28.2144 27.6449 27.8647 27.5 27.5 27.5H4.125C3.39561 27.5023 2.6968 27.7933 2.18145 28.3095C1.66609 28.8256 1.37613 29.5249 1.375 30.2543C1.375 34.5984 1.87172 36.4048 2.61766 37.7798C3.88352 40.1148 6.17547 41.25 9.625 41.25H30.7381C30.8059 41.2501 30.8723 41.23 30.9287 41.1925C30.9852 41.1549 31.0293 41.1015 31.0555 41.039C31.0817 40.9764 31.0888 40.9075 31.0759 40.8409C31.063 40.7743 31.0307 40.713 30.983 40.6648C30.1701 39.8492 28.875 38.7578 28.875 36.4375Z"
                                    fill="#F4A71E" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 mb-3 border-start border-0 border-4" style="border-color: #8D1C6D !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Alumni Yang Mengisi Survei</p>
                            <h4 class="my-1 mb-4" style="color:#8D1C6D;">{{ $countAlumniSubmitSurvey }}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #FBD9F2;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 58 58"
                                fill="none">
                                <path
                                    d="M29 5.4375C16.0078 5.4375 5.4375 16.0078 5.4375 29C5.4375 41.9922 16.0078 52.5625 29 52.5625C41.9922 52.5625 52.5625 41.9922 52.5625 29C52.5625 16.0078 41.9922 5.4375 29 5.4375ZM23.311 18.671C24.7463 17.1496 26.7661 16.3125 29 16.3125C31.2339 16.3125 33.2356 17.1553 34.6765 18.6846C36.1367 20.2343 36.847 22.3164 36.6793 24.5548C36.344 29 32.9003 32.625 29 32.625C25.0997 32.625 21.6492 29 21.3207 24.5537C21.1541 22.2971 21.8633 20.2082 23.311 18.671ZM29 48.9375C26.3384 48.9393 23.7036 48.4065 21.2517 47.3709C18.7999 46.3353 16.581 44.8179 14.7266 42.9087C15.7886 41.3941 17.1419 40.1063 18.7073 39.1205C21.5948 37.2695 25.2493 36.25 29 36.25C32.7507 36.25 36.4052 37.2695 39.2893 39.1205C40.856 40.1058 42.2105 41.3936 43.2734 42.9087C41.4192 44.8181 39.2003 46.3357 36.7484 47.3713C34.2965 48.4069 31.6616 48.9395 29 48.9375V48.9375Z"
                                    fill="#8D1C6D" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-3">
            <div class="card radius-10 mb-3 border-start border-0 border-4" style="border-color: #1D9375 !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Lulusan Yang Bekerja</p>
                            <h4 class="my-1 mb-4" style="color: #1D9375;">$84,245</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #C3FDF1;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44"
                                fill="none">
                                <path
                                    d="M16.5 22C18.688 22 20.7865 21.1308 22.3336 19.5836C23.8808 18.0365 24.75 15.938 24.75 13.75C24.75 11.562 23.8808 9.46354 22.3336 7.91637C20.7865 6.36919 18.688 5.5 16.5 5.5C14.312 5.5 12.2135 6.36919 10.6664 7.91637C9.11919 9.46354 8.25 11.562 8.25 13.75C8.25 15.938 9.11919 18.0365 10.6664 19.5836C12.2135 21.1308 14.312 22 16.5 22ZM2.75 38.5C2.75 38.5 0 38.5 0 35.75C0 33 2.75 24.75 16.5 24.75C30.25 24.75 33 33 33 35.75C33 38.5 30.25 38.5 30.25 38.5H2.75ZM30.25 9.625C30.25 9.26033 30.3949 8.91059 30.6527 8.65273C30.9106 8.39487 31.2603 8.25 31.625 8.25H42.625C42.9897 8.25 43.3394 8.39487 43.5973 8.65273C43.8551 8.91059 44 9.26033 44 9.625C44 9.98967 43.8551 10.3394 43.5973 10.5973C43.3394 10.8551 42.9897 11 42.625 11H31.625C31.2603 11 30.9106 10.8551 30.6527 10.5973C30.3949 10.3394 30.25 9.98967 30.25 9.625ZM31.625 16.5C31.2603 16.5 30.9106 16.6449 30.6527 16.9027C30.3949 17.1606 30.25 17.5103 30.25 17.875C30.25 18.2397 30.3949 18.5894 30.6527 18.8473C30.9106 19.1051 31.2603 19.25 31.625 19.25H42.625C42.9897 19.25 43.3394 19.1051 43.5973 18.8473C43.8551 18.5894 44 18.2397 44 17.875C44 17.5103 43.8551 17.1606 43.5973 16.9027C43.3394 16.6449 42.9897 16.5 42.625 16.5H31.625ZM37.125 24.75C36.7603 24.75 36.4106 24.8949 36.1527 25.1527C35.8949 25.4106 35.75 25.7603 35.75 26.125C35.75 26.4897 35.8949 26.8394 36.1527 27.0973C36.4106 27.3551 36.7603 27.5 37.125 27.5H42.625C42.9897 27.5 43.3394 27.3551 43.5973 27.0973C43.8551 26.8394 44 26.4897 44 26.125C44 25.7603 43.8551 25.4106 43.5973 25.1527C43.3394 24.8949 42.9897 24.75 42.625 24.75H37.125ZM37.125 33C36.7603 33 36.4106 33.1449 36.1527 33.4027C35.8949 33.6606 35.75 34.0103 35.75 34.375C35.75 34.7397 35.8949 35.0894 36.1527 35.3473C36.4106 35.6051 36.7603 35.75 37.125 35.75H42.625C42.9897 35.75 43.3394 35.6051 43.5973 35.3473C43.8551 35.0894 44 34.7397 44 34.375C44 34.0103 43.8551 33.6606 43.5973 33.4027C43.3394 33.1449 42.9897 33 42.625 33H37.125Z"
                                    fill="#1D9375" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 mb-3 border-start border-0 border-4" style="border-color: #FA896B !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Lulusan Yang Belum Bekerja</p>
                            <h4 class="my-1 mb-4" style="color: #FA896B;">84</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #FEE8E0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44"
                                fill="none">
                                <path
                                    d="M22 4.125C12.1284 4.125 4.125 12.1284 4.125 22C4.125 31.8716 12.1284 39.875 22 39.875C31.8716 39.875 39.875 31.8716 39.875 22C39.875 12.1284 31.8716 4.125 22 4.125ZM30.25 24.75H22C21.6353 24.75 21.2856 24.6051 21.0277 24.3473C20.7699 24.0894 20.625 23.7397 20.625 23.375V11C20.625 10.6353 20.7699 10.2856 21.0277 10.0277C21.2856 9.76987 21.6353 9.625 22 9.625C22.3647 9.625 22.7144 9.76987 22.9723 10.0277C23.2301 10.2856 23.375 10.6353 23.375 11V22H30.25C30.6147 22 30.9644 22.1449 31.2223 22.4027C31.4801 22.6606 31.625 23.0103 31.625 23.375C31.625 23.7397 31.4801 24.0894 31.2223 24.3473C30.9644 24.6051 30.6147 24.75 30.25 24.75Z"
                                    fill="#FA896B" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 mb-3 border-start border-0 border-4" style="border-color: #8D441C !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">ALumni Tidak Mengisi Survei</p>
                            <h4 class="my-1 mb-4" style="color: #8D441C;">{{ $countAlumniNotSubmitSurvey }}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #FFEDE3;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44"
                                fill="none">
                                <path
                                    d="M24.75 22C29.2867 22 33.2948 17.728 33.6875 12.4764C33.8826 9.83812 33.055 7.37773 31.3569 5.54984C29.6768 3.7443 27.3281 2.75 24.75 2.75C22.1513 2.75 19.8009 3.73828 18.1328 5.53266C16.4459 7.3468 15.6235 9.81234 15.8125 12.4747C16.1984 17.7272 20.2056 22 24.75 22Z"
                                    fill="#8D441C" />
                                <path
                                    d="M42.5718 37.7919C41.8465 33.7683 39.582 30.3884 36.0242 28.0165C32.8643 25.9102 28.8604 24.75 24.75 24.75C20.6397 24.75 16.6358 25.9102 13.4759 28.0156C9.91809 30.3875 7.65364 33.7674 6.92833 37.791C6.76247 38.7131 6.98762 39.6249 7.54622 40.2927C7.79958 40.5969 8.1177 40.8408 8.47736 41.0064C8.83701 41.1721 9.22912 41.2553 9.62505 41.25H39.875C40.2712 41.2556 40.6636 41.1727 41.0236 41.0072C41.3835 40.8417 41.702 40.5979 41.9556 40.2935C42.5125 39.6258 42.7376 38.714 42.5718 37.7919Z"
                                    fill="#8D441C" />
                                <path
                                    d="M12.375 18.5625H2.75C2.38533 18.5625 2.03559 18.7074 1.77773 18.9652C1.51987 19.2231 1.375 19.5728 1.375 19.9375C1.375 20.3022 1.51987 20.6519 1.77773 20.9098C2.03559 21.1676 2.38533 21.3125 2.75 21.3125H12.375C12.7397 21.3125 13.0894 21.1676 13.3473 20.9098C13.6051 20.6519 13.75 20.3022 13.75 19.9375C13.75 19.5728 13.6051 19.2231 13.3473 18.9652C13.0894 18.7074 12.7397 18.5625 12.375 18.5625Z"
                                    fill="#8D441C" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xxl-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-2">
                        <h5 style="font-weight: 700">
                            Jumlah Alumni Perjurusan
                        </h5>
                        <p>
                            Klik Untuk Melihat Presentase persen
                        </p>
                    </div>
                    <div id="chart10" class="mt-4"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script>
        $.ajax({
            url: "{{ route('chart.alumni') }}",
            type: "GET",
            dataType: "json",
            success: function(data) {
                chartAlumni(data)
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });

        function chartAlumni(data) {
            var students = data.data;
            "use strict";
            Highcharts.chart('chart10', {
                chart: {
                    type: 'column',
                    styledMode: true
                },
                credits: {
                    enabled: false
                },
                title: {
                    text: ''
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'Kategori'
                },
                yAxis: {
                    title: {
                        text: 'Total Alumni'
                    }
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{y}'
                        }
                    }
                },
                series: [{
                    name: "Jurusan",
                    colorByPoint: true,
                    data: $.each(students, function(indexInArray, student) {
                        console.log(student.user_id)
                    })
                }],
            });
        }
    </script>
@endsection
