@extends('layouts.app')
@section('content')
<div class="p-6 lg:p-8">
    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 mb-8">
        <div class="w-full">
            <div
                class="relative flex flex-col text-secondary-500 bg-white shadow-lg rounded dark:bg-dark-card p-6">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <h6 class="mb-0 dark:text-white font-medium">Jumlah Alumni</h6>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <h3 class="dark:text-white font-bold"> 34.850</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-full">
            <div
                class="relative flex flex-col text-secondary-500 bg-white shadow-lg rounded dark:bg-dark-card p-6">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <h6 class="mb-0 dark:text-white font-medium">Alumni Lanjut Kuliah</h6>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <h3 class="dark:text-white font-bold"> 4.850</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-full">
            <div
                class="relative flex flex-col text-secondary-500 bg-white shadow-lg rounded dark:bg-dark-card p-6">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <h6 class="mb-0 dark:text-white font-medium">Alumni Bekerja</h6>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <h3 class="dark:text-white font-bold"> 30.000</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-full">
            <div
                class="relative flex flex-col text-secondary-500 bg-white shadow-lg rounded dark:bg-dark-card p-6">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <h6 class="mb-0 dark:text-white font-medium">Rata Rata Masa Tunggu Kerja</h6>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <h3 class="dark:text-white font-bold"> 87 Hari</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="px-6 lg:px-8 mx-auto main-container " x-bind:class="setting.page_layout">
    <div class="grid gird-cols-1 lg:grid-cols-3 lg:gap-8">
        <div class="relative flex flex-col mb-8 md:mb-0 bg-white rounded shadow dark:bg-dark-card ">
            <div class=" flex flex-wrap  justify-between items-center p-5 border-b dark:border-secondary-800">
                <div>
                    <h4 class="dark:text-white mb-0">Jumlah Pekerjaan Integrasi</h4>
                </div>
            </div>
            <div class="px-6 p-6">
                <div id="analytics-chart-04"></div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="col flex items-center">
                        <svg class=" text-primary-500" width="10" height="10" viewBox="0 0 10 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
                        </svg>
                        <p class="ml-2 mb-0 text-secondary-700 dark:text-white mr-2">Instansi</p>
                    </div>
                    <div class="col flex items-center">
                        <svg width="20" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.34933 11.8579C3.38553 11.8579 0 12.4702 0 14.9175C0 17.3668 3.364 18.0002 7.34933 18.0002C11.3131 18.0002 14.6987 17.3879 14.6987 14.9405C14.6987 12.4913 11.3347 11.8579 7.34933 11.8579Z"
                                fill="#6D6D6D"></path>
                            <path opacity="0.4"
                                d="M7.34935 9.52482C10.049 9.52482 12.2124 7.40617 12.2124 4.76241C12.2124 2.11865 10.049 0 7.34935 0C4.65072 0 2.48633 2.11865 2.48633 4.76241C2.48633 7.40617 4.65072 9.52482 7.34935 9.52482Z"
                                fill="#6D6D6D"></path>
                            <path opacity="0.4"
                                d="M14.1738 4.84873C14.1738 6.19505 13.7609 7.45129 13.0368 8.4948C12.9614 8.60212 13.028 8.74682 13.1591 8.76981C13.3411 8.79952 13.528 8.81773 13.7188 8.82156C15.617 8.87043 17.3205 7.6736 17.7912 5.87116C18.4888 3.19674 16.4419 0.79541 13.8342 0.79541C13.5515 0.79541 13.2804 0.824157 13.0162 0.87686C12.98 0.884526 12.9409 0.901774 12.9213 0.932437C12.8959 0.971725 12.9145 1.02251 12.9399 1.05605C13.7237 2.13214 14.1738 3.44205 14.1738 4.84873Z"
                                fill="#6D6D6D"></path>
                            <path
                                d="M19.7794 12.1693C19.4321 11.4439 18.5935 10.9465 17.3176 10.7022C16.7158 10.5585 15.0857 10.3544 13.57 10.3831C13.5475 10.386 13.5348 10.4013 13.5328 10.4109C13.5299 10.4262 13.5368 10.4492 13.5661 10.4655C14.2667 10.8047 16.9741 12.2804 16.6336 15.3927C16.619 15.5288 16.7295 15.6438 16.8675 15.6246C17.5338 15.5317 19.2481 15.1704 19.7794 14.0474C20.074 13.4533 20.074 12.7634 19.7794 12.1693Z"
                                fill="#6D6D6D"></path>
                        </svg>
                        <p class="mb-1 ml-2 mt-1 text-secondary-700 dark:text-white mr-2">8.62k</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="col flex items-center">
                        <svg class=" text-teal-500" width="10" height="10" viewBox="0 0 10 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
                        </svg>
                        <p class="ml-2 mb-0 text-secondary-700 dark:text-white mr-2">Wirausaha</p>
                    </div>
                    <div class="col flex items-center">
                        <svg width="20" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.34933 11.8579C3.38553 11.8579 0 12.4702 0 14.9175C0 17.3668 3.364 18.0002 7.34933 18.0002C11.3131 18.0002 14.6987 17.3879 14.6987 14.9405C14.6987 12.4913 11.3347 11.8579 7.34933 11.8579Z"
                                fill="#6D6D6D"></path>
                            <path opacity="0.4"
                                d="M7.34935 9.52482C10.049 9.52482 12.2124 7.40617 12.2124 4.76241C12.2124 2.11865 10.049 0 7.34935 0C4.65072 0 2.48633 2.11865 2.48633 4.76241C2.48633 7.40617 4.65072 9.52482 7.34935 9.52482Z"
                                fill="#6D6D6D"></path>
                            <path opacity="0.4"
                                d="M14.1738 4.84873C14.1738 6.19505 13.7609 7.45129 13.0368 8.4948C12.9614 8.60212 13.028 8.74682 13.1591 8.76981C13.3411 8.79952 13.528 8.81773 13.7188 8.82156C15.617 8.87043 17.3205 7.6736 17.7912 5.87116C18.4888 3.19674 16.4419 0.79541 13.8342 0.79541C13.5515 0.79541 13.2804 0.824157 13.0162 0.87686C12.98 0.884526 12.9409 0.901774 12.9213 0.932437C12.8959 0.971725 12.9145 1.02251 12.9399 1.05605C13.7237 2.13214 14.1738 3.44205 14.1738 4.84873Z"
                                fill="#6D6D6D"></path>
                            <path
                                d="M19.7794 12.1693C19.4321 11.4439 18.5935 10.9465 17.3176 10.7022C16.7158 10.5585 15.0857 10.3544 13.57 10.3831C13.5475 10.386 13.5348 10.4013 13.5328 10.4109C13.5299 10.4262 13.5368 10.4492 13.5661 10.4655C14.2667 10.8047 16.9741 12.2804 16.6336 15.3927C16.619 15.5288 16.7295 15.6438 16.8675 15.6246C17.5338 15.5317 19.2481 15.1704 19.7794 14.0474C20.074 13.4533 20.074 12.7634 19.7794 12.1693Z"
                                fill="#6D6D6D"></path>
                        </svg>
                        <p class="mb-1 ml-2 mt-1 text-secondary-700 dark:text-white mr-2">5.24k</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="col flex items-center">
                        <svg class=" text-emerald-500" width="10" height="10" viewBox="0 0 10 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
                        </svg>
                        <p class="ml-2 mb-0 text-secondary-700 dark:text-white mr-2">Lain Lain</p>
                    </div>
                    <div class="col flex items-center">
                        <svg width="20" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.34933 11.8579C3.38553 11.8579 0 12.4702 0 14.9175C0 17.3668 3.364 18.0002 7.34933 18.0002C11.3131 18.0002 14.6987 17.3879 14.6987 14.9405C14.6987 12.4913 11.3347 11.8579 7.34933 11.8579Z"
                                fill="#6D6D6D"></path>
                            <path opacity="0.4"
                                d="M7.34935 9.52482C10.049 9.52482 12.2124 7.40617 12.2124 4.76241C12.2124 2.11865 10.049 0 7.34935 0C4.65072 0 2.48633 2.11865 2.48633 4.76241C2.48633 7.40617 4.65072 9.52482 7.34935 9.52482Z"
                                fill="#6D6D6D"></path>
                            <path opacity="0.4"
                                d="M14.1738 4.84873C14.1738 6.19505 13.7609 7.45129 13.0368 8.4948C12.9614 8.60212 13.028 8.74682 13.1591 8.76981C13.3411 8.79952 13.528 8.81773 13.7188 8.82156C15.617 8.87043 17.3205 7.6736 17.7912 5.87116C18.4888 3.19674 16.4419 0.79541 13.8342 0.79541C13.5515 0.79541 13.2804 0.824157 13.0162 0.87686C12.98 0.884526 12.9409 0.901774 12.9213 0.932437C12.8959 0.971725 12.9145 1.02251 12.9399 1.05605C13.7237 2.13214 14.1738 3.44205 14.1738 4.84873Z"
                                fill="#6D6D6D"></path>
                            <path
                                d="M19.7794 12.1693C19.4321 11.4439 18.5935 10.9465 17.3176 10.7022C16.7158 10.5585 15.0857 10.3544 13.57 10.3831C13.5475 10.386 13.5348 10.4013 13.5328 10.4109C13.5299 10.4262 13.5368 10.4492 13.5661 10.4655C14.2667 10.8047 16.9741 12.2804 16.6336 15.3927C16.619 15.5288 16.7295 15.6438 16.8675 15.6246C17.5338 15.5317 19.2481 15.1704 19.7794 14.0474C20.074 13.4533 20.074 12.7634 19.7794 12.1693Z"
                                fill="#6D6D6D"></path>
                        </svg>
                        <p class="mb-1 ml-2 mt-1 text-secondary-700 dark:text-white mr-2">12.24k</p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="relative flex flex-col mb-8 col-span-2 bg-white rounded shadow-lg dark:bg-dark-card grid gird-cols-1">
            <div
                class="flex flex-col overflow-hidden bg-white rounded-lg dark:bg-dark-card dark:text-secondary-600">
                <div class="">
                    <div class="mb-8">
                        <div class="flex justify-center items-center mb-2 p-5"
                            style="background-color: #1D9375;">
                            <p
                                class="text-heading dark:text-white font-medium text-xl text-white font-semibold flex justify-center">
                                Sebaran Bidang Pekerjaan</p>
                        </div>
                    </div>
                    <div class="px-5 pb-5">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="p-3 rounded" style="background-color: #E0FFED; color: #1D9375;">
                                <svg width="35" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                        fill="currentColor"></path>
                                    <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="w-full">
                                <div class="flex justify-between">
                                    <h6 class="mb-0 dark:text-white">Keuangan</h6>
                                    <p class="leading-tight font-medium text-secondary-600">2.386</p>
                                </div>
                                <div
                                    class="flex w-full h-1.5 mt-2 align-middle bg-primary-500/10 dark:bg-dark-strip rounded-full">
                                    <div class="w-1/4 text-xs leading-none text-center text-white rounded-l-full"
                                        style="background-color: #1D9375;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 mb-8">
                            <div class="bg-info-500/10 p-3 rounded text-info-500">
                                <svg width="35" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M6.447 22C3.996 22 2 19.9698 2 17.4755V12.5144C2 10.0252 3.99 8 6.437 8L17.553 8C20.005 8 22 10.0302 22 12.5256V17.4846C22 19.9748 20.01 22 17.563 22H16.623H6.447Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M11.455 2.22103L8.54604 5.06682C8.24604 5.36094 8.24604 5.83427 8.54804 6.12742C8.85004 6.41959 9.33704 6.41862 9.63704 6.12547L11.23 4.56623V6.06119V14.4515C11.23 14.8654 11.575 15.2014 12 15.2014C12.426 15.2014 12.77 14.8654 12.77 14.4515V4.56623L14.363 6.12547C14.663 6.41862 15.15 6.41959 15.452 6.12742C15.603 5.98036 15.679 5.78849 15.679 5.59566C15.679 5.40477 15.603 5.21291 15.454 5.06682L12.546 2.22103C12.401 2.07981 12.205 1.99995 12 1.99995C11.796 1.99995 11.6 2.07981 11.455 2.22103Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="w-full">
                                <div class="flex justify-between">
                                    <h6 class="mb-0 dark:text-white">Transportasi</h6>
                                    <p class="leading-tight font-medium text-secondary-600">4.765</p>
                                </div>
                                <div
                                    class="flex w-full h-1.5 mt-2 align-middle bg-info-500/10 dark:bg-dark-strip rounded-full">
                                    <div
                                        class="w-3/5 text-xs leading-none text-center text-white bg-info-500 rounded-l-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 mb-8">
                            <div class="bg-success-500/10 p-3 rounded text-success-500">
                                <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="w-full">
                                <div class="flex justify-between">
                                    <h6 class="mb-0 dark:text-white">Importir</h6>
                                    <p class="leading-tight font-medium text-secondary-600">8.224</p>
                                </div>
                                <div
                                    class="flex w-full h-1.5 mt-2 align-middle bg-success-500/10 dark:bg-dark-strip rounded-full">
                                    <div
                                        class="w-4/5 text-xs leading-none text-center text-white bg-success-500 rounded-l-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 ">
                            <div class="bg-danger-500/10 p-3 rounded text-danger-500">
                                <svg width="35" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                        fill="currentColor"></path>
                                    <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="w-full">
                                <div class="flex justify-between">
                                    <h6 class="mb-0 dark:text-white">Pertanian</h6>
                                    <p class="leading-tight font-medium text-secondary-600">1.224</p>
                                </div>
                                <div
                                    class="flex w-full h-1.5 mt-2 align-middle bg-danger-500/10 dark:bg-dark-strip rounded-full">
                                    <div
                                        class="w-1/5 text-xs leading-none text-center text-white bg-danger-500 rounded-l-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection