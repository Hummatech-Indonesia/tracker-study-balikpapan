@extends('layouts.app')
@section('content')
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Jumlah Lulusan</p>
                            <h4 class="my-1 text-success mb-4">4805</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i
                                class='bx bxs-cart'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Lulusan Yang Bekerja</p>
                            <h4 class="my-1 text-danger mb-4">$84,245</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto">
                            <i class='bx bxs-wallet'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Rata Rata Masa Tunggu
                                Kerja</p>
                            <h4 class="my-1 text-success mb-4">34.6%</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                            <i class='bx bxs-bar-chart-alt-2'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Yang Berwira Usaha</p>
                            <h4 class="my-1 text-warning mb-4">8.4K</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i
                                class='bx bxs-group'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-xxl-5 col-12">
            <div class="card radius-10 w-100">
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
        <div class="col-lg-7 col-xxl-7 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-2">
                        <h5 style="font-weight: 700">
                            Sebaran Bidang Pekerjaan
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
