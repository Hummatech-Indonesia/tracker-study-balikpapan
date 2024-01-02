<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('logo.png') }}" class="logo-icon w-100" alt="logo icon">
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">H O M E</li>
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 36 36" fill="currentColor">
                        <path
                            d="M14.3438 16.875H4.78125C4.10992 16.875 3.46609 16.6083 2.99139 16.1336C2.51668 15.6589 2.25 15.0151 2.25 14.3438V4.78125C2.25 4.10992 2.51668 3.46609 2.99139 2.99139C3.46609 2.51668 4.10992 2.25 4.78125 2.25H14.3438C15.0151 2.25 15.6589 2.51668 16.1336 2.99139C16.6083 3.46609 16.875 4.10992 16.875 4.78125V14.3438C16.875 15.0151 16.6083 15.6589 16.1336 16.1336C15.6589 16.6083 15.0151 16.875 14.3438 16.875Z"
                            fill="currentColor" />
                        <path
                            d="M31.2188 16.875H21.6562C20.9849 16.875 20.3411 16.6083 19.8664 16.1336C19.3917 15.6589 19.125 15.0151 19.125 14.3438V4.78125C19.125 4.10992 19.3917 3.46609 19.8664 2.99139C20.3411 2.51668 20.9849 2.25 21.6562 2.25H31.2188C31.8901 2.25 32.5339 2.51668 33.0086 2.99139C33.4833 3.46609 33.75 4.10992 33.75 4.78125V14.3438C33.75 15.0151 33.4833 15.6589 33.0086 16.1336C32.5339 16.6083 31.8901 16.875 31.2188 16.875Z"
                            fill="currentColor" />
                        <path
                            d="M14.3438 33.75H4.78125C4.10992 33.75 3.46609 33.4833 2.99139 33.0086C2.51668 32.5339 2.25 31.8901 2.25 31.2188V21.6562C2.25 20.9849 2.51668 20.3411 2.99139 19.8664C3.46609 19.3917 4.10992 19.125 4.78125 19.125H14.3438C15.0151 19.125 15.6589 19.3917 16.1336 19.8664C16.6083 20.3411 16.875 20.9849 16.875 21.6562V31.2188C16.875 31.8901 16.6083 32.5339 16.1336 33.0086C15.6589 33.4833 15.0151 33.75 14.3438 33.75Z"
                            fill="currentColor" />
                        <path
                            d="M31.2188 33.75H21.6562C20.9849 33.75 20.3411 33.4833 19.8664 33.0086C19.3917 32.5339 19.125 31.8901 19.125 31.2188V21.6562C19.125 20.9849 19.3917 20.3411 19.8664 19.8664C20.3411 19.3917 20.9849 19.125 21.6562 19.125H31.2188C31.8901 19.125 32.5339 19.3917 33.0086 19.8664C33.4833 20.3411 33.75 20.9849 33.75 21.6562V31.2188C33.75 31.8901 33.4833 32.5339 33.0086 33.0086C32.5339 33.4833 31.8901 33.75 31.2188 33.75Z"
                            fill="currentColor" />
                    </svg></i>
                </div>
                <div class="menu-title mt-1">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('alumni.job.survey') }}">
                <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 38 38" fill="currentColor">
                    <path d="M31.7656 16.625H21.375C20.4302 16.625 19.524 16.2497 18.8559 15.5816C18.1878 14.9135 17.8125 14.0073 17.8125 13.0625V2.67188C17.8125 2.59314 17.7812 2.51763 17.7255 2.46195C17.6699 2.40628 17.5944 2.375 17.5156 2.375H10.6875C9.42772 2.375 8.21954 2.87545 7.32874 3.76624C6.43794 4.65704 5.9375 5.86522 5.9375 7.125V30.875C5.9375 32.1348 6.43794 33.343 7.32874 34.2338C8.21954 35.1246 9.42772 35.625 10.6875 35.625H27.3125C28.5723 35.625 29.7805 35.1246 30.6713 34.2338C31.5621 33.343 32.0625 32.1348 32.0625 30.875V16.9219C32.0625 16.8431 32.0312 16.7676 31.9755 16.712C31.9199 16.6563 31.8444 16.625 31.7656 16.625ZM24.9375 28.5H13.0625C12.7476 28.5 12.4455 28.3749 12.2228 28.1522C12.0001 27.9295 11.875 27.6274 11.875 27.3125C11.875 26.9976 12.0001 26.6955 12.2228 26.4728C12.4455 26.2501 12.7476 26.125 13.0625 26.125H24.9375C25.2524 26.125 25.5545 26.2501 25.7772 26.4728C25.9999 26.6955 26.125 26.9976 26.125 27.3125C26.125 27.6274 25.9999 27.9295 25.7772 28.1522C25.5545 28.3749 25.2524 28.5 24.9375 28.5ZM24.9375 22.5625H13.0625C12.7476 22.5625 12.4455 22.4374 12.2228 22.2147C12.0001 21.992 11.875 21.6899 11.875 21.375C11.875 21.0601 12.0001 20.758 12.2228 20.5353C12.4455 20.3126 12.7476 20.1875 13.0625 20.1875H24.9375C25.2524 20.1875 25.5545 20.3126 25.7772 20.5353C25.9999 20.758 26.125 21.0601 26.125 21.375C26.125 21.6899 25.9999 21.992 25.7772 22.2147C25.5545 22.4374 25.2524 22.5625 24.9375 22.5625Z" fill="currentColor"/>
                    <path d="M31.114 13.9978L20.4406 3.32442C20.4198 3.30378 20.3934 3.28974 20.3647 3.28407C20.336 3.27839 20.3063 3.28133 20.2792 3.29251C20.2522 3.3037 20.229 3.32263 20.2127 3.34692C20.1964 3.37122 20.1876 3.3998 20.1875 3.42906V13.0634C20.1875 13.3783 20.3126 13.6804 20.5353 13.9031C20.758 14.1258 21.0601 14.2509 21.375 14.2509H31.0093C31.0386 14.2508 31.0672 14.242 31.0915 14.2257C31.1158 14.2094 31.1347 14.1862 31.1459 14.1592C31.1571 14.1321 31.16 14.1024 31.1543 14.0737C31.1487 14.045 31.1346 14.0186 31.114 13.9978Z" fill="currentColor"/>
                  </svg></i>
                </div>
                <div class="menu-title mt-1">Survey Pekerjaan</div>
            </a>
        </li>
        <li>
            <a href="{{ route('job.vacancy') }}">
                <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 38 38" fill="currentColor">
                    <path d="M31.7656 16.625H21.375C20.4302 16.625 19.524 16.2497 18.8559 15.5816C18.1878 14.9135 17.8125 14.0073 17.8125 13.0625V2.67188C17.8125 2.59314 17.7812 2.51763 17.7255 2.46195C17.6699 2.40628 17.5944 2.375 17.5156 2.375H10.6875C9.42772 2.375 8.21954 2.87545 7.32874 3.76624C6.43794 4.65704 5.9375 5.86522 5.9375 7.125V30.875C5.9375 32.1348 6.43794 33.343 7.32874 34.2338C8.21954 35.1246 9.42772 35.625 10.6875 35.625H27.3125C28.5723 35.625 29.7805 35.1246 30.6713 34.2338C31.5621 33.343 32.0625 32.1348 32.0625 30.875V16.9219C32.0625 16.8431 32.0312 16.7676 31.9755 16.712C31.9199 16.6563 31.8444 16.625 31.7656 16.625ZM24.9375 28.5H13.0625C12.7476 28.5 12.4455 28.3749 12.2228 28.1522C12.0001 27.9295 11.875 27.6274 11.875 27.3125C11.875 26.9976 12.0001 26.6955 12.2228 26.4728C12.4455 26.2501 12.7476 26.125 13.0625 26.125H24.9375C25.2524 26.125 25.5545 26.2501 25.7772 26.4728C25.9999 26.6955 26.125 26.9976 26.125 27.3125C26.125 27.6274 25.9999 27.9295 25.7772 28.1522C25.5545 28.3749 25.2524 28.5 24.9375 28.5ZM24.9375 22.5625H13.0625C12.7476 22.5625 12.4455 22.4374 12.2228 22.2147C12.0001 21.992 11.875 21.6899 11.875 21.375C11.875 21.0601 12.0001 20.758 12.2228 20.5353C12.4455 20.3126 12.7476 20.1875 13.0625 20.1875H24.9375C25.2524 20.1875 25.5545 20.3126 25.7772 20.5353C25.9999 20.758 26.125 21.0601 26.125 21.375C26.125 21.6899 25.9999 21.992 25.7772 22.2147C25.5545 22.4374 25.2524 22.5625 24.9375 22.5625Z" fill="#currentColor"/>
                    <path d="M31.114 13.9968L20.4406 3.32344C20.4198 3.30281 20.3934 3.28877 20.3647 3.28309C20.336 3.27742 20.3063 3.28035 20.2792 3.29154C20.2522 3.30272 20.229 3.32165 20.2127 3.34595C20.1964 3.37024 20.1876 3.39882 20.1875 3.42809V13.0624C20.1875 13.3774 20.3126 13.6794 20.5353 13.9021C20.758 14.1248 21.0601 14.2499 21.375 14.2499H31.0093C31.0386 14.2498 31.0672 14.241 31.0915 14.2247C31.1158 14.2084 31.1347 14.1853 31.1459 14.1582C31.1571 14.1312 31.16 14.1014 31.1543 14.0727C31.1487 14.044 31.1346 14.0176 31.114 13.9968V13.9968Z" fill="#currentColor"/>
                  </svg></i>
                </div>
                <div class="menu-title mt-1">Lowongan</div>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                        viewBox="0 0 36 36" fill="currentColor">
                        <path
                            d="M20.2501 18C23.9619 18 27.2412 14.5048 27.5626 10.208C27.7222 8.04937 27.0451 6.03633 25.6557 4.54078C24.2811 3.06352 22.3594 2.25 20.2501 2.25C18.1238 2.25 16.2008 3.05859 14.836 4.52672C13.4558 6.01102 12.7829 8.02828 12.9376 10.2066C13.2533 14.5041 16.5319 18 20.2501 18Z"
                            fill="currentColor" />
                        <path
                            d="M34.8314 30.9206C34.238 27.6286 32.3853 24.8632 29.4743 22.9226C26.8889 21.1992 23.6131 20.25 20.25 20.25C16.887 20.25 13.6111 21.1992 11.0257 22.9219C8.1148 24.8625 6.26207 27.6279 5.66863 30.9199C5.53293 31.6744 5.71715 32.4204 6.17418 32.9667C6.38147 33.2157 6.64176 33.4152 6.93602 33.5507C7.23028 33.6862 7.5511 33.7543 7.87504 33.75H32.625C32.9492 33.7546 33.2702 33.6867 33.5647 33.5513C33.8593 33.416 34.1198 33.2164 34.3273 32.9674C34.7829 32.4211 34.9671 31.6751 34.8314 30.9206Z"
                            fill="currentColor" />
                        <path
                            d="M7.3125 20.25V17.4375H10.125C10.4234 17.4375 10.7095 17.319 10.9205 17.108C11.1315 16.897 11.25 16.6109 11.25 16.3125C11.25 16.0141 11.1315 15.728 10.9205 15.517C10.7095 15.306 10.4234 15.1875 10.125 15.1875H7.3125V12.375C7.3125 12.0766 7.19397 11.7905 6.983 11.5795C6.77202 11.3685 6.48587 11.25 6.1875 11.25C5.88913 11.25 5.60298 11.3685 5.392 11.5795C5.18103 11.7905 5.0625 12.0766 5.0625 12.375V15.1875H2.25C1.95163 15.1875 1.66548 15.306 1.4545 15.517C1.24353 15.728 1.125 16.0141 1.125 16.3125C1.125 16.6109 1.24353 16.897 1.4545 17.108C1.66548 17.319 1.95163 17.4375 2.25 17.4375H5.0625V20.25C5.0625 20.5484 5.18103 20.8345 5.392 21.0455C5.60298 21.2565 5.88913 21.375 6.1875 21.375C6.48587 21.375 6.77202 21.2565 6.983 21.0455C7.19397 20.8345 7.3125 20.5484 7.3125 20.25Z"
                            fill="currentColor" />
                    </svg></i>
                </div>
                <div class="menu-title mt-1">Verifikasi Akun</div>
            </a>
            <ul>
                <li> <a href="{{ route('account.siswa') }}"><i class='bx bx-radio-circle'></i>Akun Siswa</a>
                </li>
                <li> <a href="{{ route('alumni.register') }}"><i class='bx bx-radio-circle'></i>Akun Alumni</a>
                </li>
        </li>
    </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                    viewBox="0 0 36 36" fill="currentColor">
                    <path
                        d="M7.875 5.625H28.125V3.9375C28.125 3.48995 27.9472 3.06072 27.6307 2.74426C27.3143 2.42779 26.8851 2.25 26.4375 2.25H4.64062C4.00659 2.25 3.39853 2.50187 2.9502 2.9502C2.50187 3.39853 2.25 4.00659 2.25 4.64062V26.4375C2.25 26.8851 2.42779 27.3143 2.74426 27.6307C3.06072 27.9472 3.48995 28.125 3.9375 28.125H5.625V7.875C5.625 7.27826 5.86205 6.70597 6.28401 6.28401C6.70597 5.86205 7.27826 5.625 7.875 5.625Z"
                        fill="currentColor" />
                    <path
                        d="M32.0625 7.875H9.5625C9.11495 7.875 8.68572 8.05279 8.36926 8.36926C8.05279 8.68572 7.875 9.11495 7.875 9.5625V32.0625C7.875 32.5101 8.05279 32.9393 8.36926 33.2557C8.68572 33.5722 9.11495 33.75 9.5625 33.75H32.0625C32.5101 33.75 32.9393 33.5722 33.2557 33.2557C33.5722 32.9393 33.75 32.5101 33.75 32.0625V9.5625C33.75 9.11495 33.5722 8.68572 33.2557 8.36926C32.9393 8.05279 32.5101 7.875 32.0625 7.875ZM27.5625 21.9375H21.9375V27.5625H19.6875V21.9375H14.0625V19.6875H19.6875V14.0625H21.9375V19.6875H27.5625V21.9375Z"
                        fill="currentColor" />
                </svg></i>
            </div>
            <div class="menu-title mt-1">Tambah Ajaran</div>
        </a>
        <ul>
            <li> <a href="{{ route('school-years.index') }}"><i class='bx bx-radio-circle'></i>Tambah Tahun Ajaran</a>
            </li>
            <li> <a href="{{ route('majors.index') }}"><i class='bx bx-radio-circle'></i>Tambah Jurusan</a>
            </li>
            <li> <a href="{{ route('classrooms.index') }}"><i class='bx bx-radio-circle'></i>Tambah Kelas</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    viewBox="0 0 36 36" fill="currentColor">
                    <path
                        d="M29.25 4.5H6.75C5.55693 4.5013 4.41309 4.97583 3.56946 5.81946C2.72583 6.66309 2.2513 7.80693 2.25 9V27C2.2513 28.1931 2.72583 29.3369 3.56946 30.1805C4.41309 31.0242 5.55693 31.4987 6.75 31.5H29.25C30.4431 31.4987 31.5869 31.0242 32.4305 30.1805C33.2742 29.3369 33.7487 28.1931 33.75 27V9C33.7487 7.80693 33.2742 6.66309 32.4305 5.81946C31.5869 4.97583 30.4431 4.5013 29.25 4.5ZM23.625 9C24.2925 9 24.945 9.19794 25.5 9.56879C26.0551 9.93964 26.4876 10.4667 26.7431 11.0834C26.9985 11.7001 27.0654 12.3787 26.9352 13.0334C26.8049 13.6881 26.4835 14.2895 26.0115 14.7615C25.5395 15.2335 24.9381 15.5549 24.2834 15.6852C23.6287 15.8154 22.9501 15.7485 22.3334 15.4931C21.7167 15.2376 21.1896 14.8051 20.8188 14.25C20.4479 13.695 20.25 13.0425 20.25 12.375C20.2509 11.4802 20.6068 10.6223 21.2395 9.98954C21.8723 9.35681 22.7302 9.00093 23.625 9ZM6.75 29.25C6.15326 29.25 5.58097 29.0129 5.15901 28.591C4.73705 28.169 4.5 27.5967 4.5 27V22.2448L11.1684 16.3174C11.8118 15.7468 12.6486 15.443 13.5082 15.4678C14.3678 15.4926 15.1856 15.8442 15.795 16.451L20.3618 21.008L12.1198 29.25H6.75ZM31.5 27C31.5 27.5967 31.2629 28.169 30.841 28.591C30.419 29.0129 29.8467 29.25 29.25 29.25H15.3021L23.8395 20.7127C24.4439 20.1986 25.211 19.9154 26.0044 19.9134C26.7979 19.9113 27.5664 20.1905 28.1735 20.7014L31.5 23.4731V27Z"
                        fill="currentColor" />
                </svg></i>
            </div>
            <div class="menu-title mt-1">Upload Galery</div>
        </a>
        <ul>
            <li> <a href="{{ route('teacher.gallery') }}"><i class='bx bx-radio-circle'></i>Galery Guru</a>
            </li>
            <li> <a href="{{ route('alumni.gallery') }}"><i class='bx bx-radio-circle'></i>Galery Alumni</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('news.index') }}">
            <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 40" fill="currentColor">
                <path d="M31.6667 33.3332H8.33333C6.49238 33.3332 5 31.8408 5 29.9998L5 9.99984C5 8.15889 6.49239 6.6665 8.33333 6.6665L25 6.6665C26.841 6.6665 28.3333 8.15889 28.3333 9.99984V11.6665M31.6667 33.3332C29.8257 33.3332 28.3333 31.8408 28.3333 29.9998L28.3333 11.6665M31.6667 33.3332C33.5076 33.3332 35 31.8408 35 29.9998V14.9998C35 13.1589 33.5076 11.6665 31.6667 11.6665L28.3333 11.6665M21.6667 6.6665L15 6.6665M11.6667 26.6665H21.6667M11.6667 13.3332H21.6667V19.9998H11.6667V13.3332Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></i>
            </div>
            <div class="menu-title mt-1">Upload Berita</div>
        </a>
    </li>
    <li>
        <a href="{{ route('verify.company') }}">
            <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 38 38" fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.0625 29.6875C13.7183 29.6875 14.25 30.2192 14.25 30.875V35.625C14.25 36.2808 13.7183 36.8125 13.0625 36.8125C12.4067 36.8125 11.875 36.2808 11.875 35.625V30.875C11.875 30.2192 12.4067 29.6875 13.0625 29.6875Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5.9375 3.5625C5.62256 3.5625 5.32051 3.68761 5.09781 3.91031C4.87511 4.13301 4.75 4.43506 4.75 4.75V34.4375H21.375V4.75C21.375 4.43506 21.2499 4.13301 21.0272 3.91031C20.8045 3.68761 20.5024 3.5625 20.1875 3.5625H5.9375ZM5.9375 1.1875H20.1875C21.1323 1.1875 22.0385 1.56283 22.7066 2.23093C23.3747 2.89903 23.75 3.80517 23.75 4.75V35.3281C23.75 35.7218 23.5936 36.0994 23.3152 36.3777C23.0369 36.6561 22.6593 36.8125 22.2656 36.8125H3.5625C2.90666 36.8125 2.375 36.2808 2.375 35.625V4.75C2.375 3.80517 2.75033 2.89903 3.41843 2.23093C4.08653 1.56283 4.99267 1.1875 5.9375 1.1875Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.0706 13.7581C22.516 13.3127 23.1201 13.0625 23.75 13.0625H32.0625C33.0073 13.0625 33.9135 13.4378 34.5816 14.1059C35.2497 14.774 35.625 15.6802 35.625 16.625V35.625C35.625 36.2808 35.0933 36.8125 34.4375 36.8125H22.5625C21.9067 36.8125 21.375 36.2808 21.375 35.625V15.4375C21.375 14.8076 21.6252 14.2035 22.0706 13.7581ZM32.0625 15.4375L23.75 15.4375L23.75 34.4375H33.25V16.625C33.25 16.3101 33.1249 16.008 32.9022 15.7853C32.6795 15.5626 32.3774 15.4375 32.0625 15.4375Z"
                        fill="currentColor" />
                    <path
                        d="M7.27936 32.0525C7.03342 32.0846 6.78359 32.039 6.56491 31.9219C6.34624 31.8049 6.16972 31.6223 6.06011 31.3998C5.9505 31.1773 5.91331 30.926 5.95377 30.6813C5.99423 30.4366 6.11029 30.2107 6.28568 30.0353C6.46106 29.8599 6.68697 29.7439 6.93168 29.7034C7.17639 29.6629 7.42763 29.7001 7.65013 29.8097C7.87263 29.9193 8.05523 30.0959 8.17229 30.3145C8.28935 30.5332 8.33501 30.7831 8.30284 31.029C8.2689 31.2885 8.15015 31.5296 7.96506 31.7147C7.77997 31.8998 7.53891 32.0185 7.27936 32.0525Z"
                        fill="currentColor" />
                    <path
                        d="M7.27936 26.115C7.03342 26.1471 6.78359 26.1015 6.56491 25.9844C6.34624 25.8674 6.16972 25.6848 6.06011 25.4623C5.9505 25.2398 5.91331 24.9885 5.95377 24.7438C5.99423 24.4991 6.11029 24.2732 6.28568 24.0978C6.46106 23.9224 6.68697 23.8064 6.93168 23.7659C7.17639 23.7254 7.42763 23.7626 7.65013 23.8722C7.87263 23.9818 8.05523 24.1584 8.17229 24.377C8.28935 24.5957 8.33501 24.8456 8.30284 25.0915C8.2689 25.351 8.15015 25.5921 7.96506 25.7772C7.77997 25.9623 7.53891 26.081 7.27936 26.115Z"
                        fill="currentColor" />
                    <path
                        d="M7.27936 20.1775C7.03342 20.2096 6.78359 20.164 6.56491 20.0469C6.34624 19.9299 6.16972 19.7473 6.06011 19.5248C5.9505 19.3023 5.91331 19.051 5.95377 18.8063C5.99423 18.5616 6.11029 18.3357 6.28568 18.1603C6.46106 17.9849 6.68697 17.8689 6.93168 17.8284C7.17639 17.7879 7.42763 17.8251 7.65013 17.9347C7.87263 18.0443 8.05523 18.2209 8.17229 18.4395C8.28935 18.6582 8.33501 18.9081 8.30284 19.154C8.2689 19.4135 8.15015 19.6546 7.96506 19.8397C7.77997 20.0248 7.53891 20.1435 7.27936 20.1775Z"
                        fill="currentColor" />
                    <path
                        d="M7.27936 14.24C7.03342 14.2721 6.78359 14.2265 6.56491 14.1094C6.34624 13.9924 6.16972 13.8098 6.06011 13.5873C5.9505 13.3648 5.91331 13.1135 5.95377 12.8688C5.99423 12.6241 6.11029 12.3982 6.28568 12.2228C6.46106 12.0474 6.68697 11.9314 6.93168 11.8909C7.17639 11.8504 7.42763 11.8876 7.65013 11.9972C7.87263 12.1068 8.05523 12.2834 8.17229 12.502C8.28935 12.7207 8.33501 12.9706 8.30284 13.2165C8.2689 13.476 8.15015 13.7171 7.96506 13.9022C7.77997 14.0873 7.53891 14.206 7.27936 14.24Z"
                        fill="currentColor" />
                    <path
                        d="M7.27936 8.30247C7.03342 8.33464 6.78359 8.28899 6.56491 8.17192C6.34624 8.05486 6.16972 7.87227 6.06011 7.64976C5.9505 7.42726 5.91331 7.17603 5.95377 6.93131C5.99423 6.6866 6.11029 6.4607 6.28568 6.28531C6.46106 6.10993 6.68697 5.99386 6.93168 5.9534C7.17639 5.91295 7.42763 5.95013 7.65013 6.05974C7.87263 6.16935 8.05523 6.34588 8.17229 6.56455C8.28935 6.78322 8.33501 7.03306 8.30284 7.279C8.2689 7.53854 8.15015 7.7796 7.96506 7.96469C7.77997 8.14978 7.53891 8.26853 7.27936 8.30247Z"
                        fill="currentColor" />
                    <path
                        d="M13.2169 26.115C12.9709 26.1471 12.7211 26.1015 12.5024 25.9844C12.2837 25.8674 12.1072 25.6848 11.9976 25.4623C11.888 25.2398 11.8508 24.9885 11.8913 24.7438C11.9317 24.4991 12.0478 24.2732 12.2232 24.0978C12.3986 23.9224 12.6245 23.8064 12.8692 23.7659C13.1139 23.7254 13.3651 23.7626 13.5876 23.8722C13.8101 23.9818 13.9927 24.1584 14.1098 24.377C14.2269 24.5957 14.2725 24.8456 14.2403 25.0915C14.2064 25.351 14.0876 25.5921 13.9026 25.7772C13.7175 25.9623 13.4764 26.081 13.2169 26.115Z"
                        fill="currentColor" />
                    <path
                        d="M13.2169 20.1775C12.9709 20.2096 12.7211 20.164 12.5024 20.0469C12.2837 19.9299 12.1072 19.7473 11.9976 19.5248C11.888 19.3023 11.8508 19.051 11.8913 18.8063C11.9317 18.5616 12.0478 18.3357 12.2232 18.1603C12.3986 17.9849 12.6245 17.8689 12.8692 17.8284C13.1139 17.7879 13.3651 17.8251 13.5876 17.9347C13.8101 18.0443 13.9927 18.2209 14.1098 18.4395C14.2269 18.6582 14.2725 18.9081 14.2403 19.154C14.2064 19.4135 14.0876 19.6546 13.9026 19.8397C13.7175 20.0248 13.4764 20.1435 13.2169 20.1775Z"
                        fill="currentColor" />
                    <path
                        d="M13.2169 14.24C12.9709 14.2721 12.7211 14.2265 12.5024 14.1094C12.2837 13.9924 12.1072 13.8098 11.9976 13.5873C11.888 13.3648 11.8508 13.1135 11.8913 12.8688C11.9317 12.6241 12.0478 12.3982 12.2232 12.2228C12.3986 12.0474 12.6245 11.9314 12.8692 11.8909C13.1139 11.8504 13.3651 11.8876 13.5876 11.9972C13.8101 12.1068 13.9927 12.2834 14.1098 12.502C14.2269 12.7207 14.2725 12.9706 14.2403 13.2165C14.2064 13.476 14.0876 13.7171 13.9026 13.9022C13.7175 14.0873 13.4764 14.206 13.2169 14.24Z"
                        fill="currentColor" />
                    <path
                        d="M13.2169 8.30247C12.9709 8.33464 12.7211 8.28899 12.5024 8.17192C12.2837 8.05486 12.1072 7.87227 11.9976 7.64976C11.888 7.42726 11.8508 7.17603 11.8913 6.93131C11.9317 6.6866 12.0478 6.4607 12.2232 6.28531C12.3986 6.10993 12.6245 5.99386 12.8692 5.9534C13.1139 5.91295 13.3651 5.95013 13.5876 6.05974C13.8101 6.16935 13.9927 6.34588 14.1098 6.56455C14.2269 6.78322 14.2725 7.03306 14.2403 7.279C14.2064 7.53854 14.0876 7.7796 13.9026 7.96469C13.7175 8.14978 13.4764 8.26853 13.2169 8.30247Z"
                        fill="currentColor" />
                    <path
                        d="M19.1544 32.0525C18.9084 32.0846 18.6586 32.039 18.4399 31.9219C18.2212 31.8049 18.0447 31.6223 17.9351 31.3998C17.8255 31.1773 17.7883 30.926 17.8288 30.6813C17.8692 30.4366 17.9853 30.2107 18.1607 30.0353C18.3361 29.8599 18.562 29.7439 18.8067 29.7034C19.0514 29.6629 19.3026 29.7001 19.5251 29.8097C19.7476 29.9193 19.9302 30.0959 20.0473 30.3145C20.1644 30.5332 20.21 30.7831 20.1778 31.029C20.1439 31.2885 20.0251 31.5296 19.8401 31.7147C19.655 31.8998 19.4139 32.0185 19.1544 32.0525Z"
                        fill="currentColor" />
                    <path
                        d="M19.1544 26.115C18.9084 26.1471 18.6586 26.1015 18.4399 25.9844C18.2212 25.8674 18.0447 25.6848 17.9351 25.4623C17.8255 25.2398 17.7883 24.9885 17.8288 24.7438C17.8692 24.4991 17.9853 24.2732 18.1607 24.0978C18.3361 23.9224 18.562 23.8064 18.8067 23.7659C19.0514 23.7254 19.3026 23.7626 19.5251 23.8722C19.7476 23.9818 19.9302 24.1584 20.0473 24.377C20.1644 24.5957 20.21 24.8456 20.1778 25.0915C20.1439 25.351 20.0251 25.5921 19.8401 25.7772C19.655 25.9623 19.4139 26.081 19.1544 26.115Z"
                        fill="currentColor" />
                    <path
                        d="M19.1544 20.1775C18.9084 20.2096 18.6586 20.164 18.4399 20.0469C18.2212 19.9299 18.0447 19.7473 17.9351 19.5248C17.8255 19.3023 17.7883 19.051 17.8288 18.8063C17.8692 18.5616 17.9853 18.3357 18.1607 18.1603C18.3361 17.9849 18.562 17.8689 18.8067 17.8284C19.0514 17.7879 19.3026 17.8251 19.5251 17.9347C19.7476 18.0443 19.9302 18.2209 20.0473 18.4395C20.1644 18.6582 20.21 18.9081 20.1778 19.154C20.1439 19.4135 20.0251 19.6546 19.8401 19.8397C19.655 20.0248 19.4139 20.1435 19.1544 20.1775Z"
                        fill="currentColor" />
                    <path
                        d="M19.8412 13.9031C20.3035 13.4408 20.3017 12.6894 19.837 12.2247C19.3724 11.7601 18.621 11.7583 18.1587 12.2206C17.6964 12.6829 17.6983 13.4343 18.1629 13.8989C18.6275 14.3635 19.3789 14.3654 19.8412 13.9031Z"
                        fill="currentColor" />
                    <path
                        d="M19.1544 8.30247C18.9084 8.33464 18.6586 8.28899 18.4399 8.17192C18.2212 8.05486 18.0447 7.87227 17.9351 7.64976C17.8255 7.42726 17.7883 7.17603 17.8288 6.93131C17.8692 6.6866 17.9853 6.4607 18.1607 6.28531C18.3361 6.10993 18.562 5.99386 18.8067 5.9534C19.0514 5.91295 19.3026 5.95013 19.5251 6.05974C19.7476 6.16935 19.9302 6.34588 20.0473 6.56455C20.1644 6.78322 20.21 7.03306 20.1778 7.279C20.1439 7.53854 20.0251 7.7796 19.8401 7.96469C19.655 8.14978 19.4139 8.26853 19.1544 8.30247Z"
                        fill="currentColor" />
                    <path
                        d="M29.6875 29.6875C29.4526 29.6875 29.223 29.7571 29.0278 29.8876C28.8325 30.0181 28.6803 30.2036 28.5904 30.4206C28.5005 30.6376 28.477 30.8763 28.5228 31.1067C28.5686 31.337 28.6817 31.5486 28.8478 31.7147C29.0139 31.8808 29.2255 31.9939 29.4558 32.0397C29.6862 32.0855 29.9249 32.062 30.1419 31.9721C30.3589 31.8822 30.5444 31.73 30.6749 31.5347C30.8054 31.3395 30.875 31.1099 30.875 30.875C30.875 30.5601 30.7499 30.258 30.5272 30.0353C30.3045 29.8126 30.0024 29.6875 29.6875 29.6875Z"
                        fill="currentColor" />
                    <path
                        d="M29.6875 23.75C29.4526 23.75 29.223 23.8196 29.0278 23.9501C28.8325 24.0806 28.6803 24.2661 28.5904 24.4831C28.5005 24.7001 28.477 24.9388 28.5228 25.1692C28.5686 25.3995 28.6817 25.6111 28.8478 25.7772C29.0139 25.9433 29.2255 26.0564 29.4558 26.1022C29.6862 26.148 29.9249 26.1245 30.1419 26.0346C30.3589 25.9447 30.5444 25.7925 30.6749 25.5972C30.8054 25.402 30.875 25.1724 30.875 24.9375C30.875 24.6226 30.7499 24.3205 30.5272 24.0978C30.3045 23.8751 30.0024 23.75 29.6875 23.75Z"
                        fill="currentColor" />
                    <path
                        d="M29.6875 17.8125C29.4526 17.8125 29.223 17.8821 29.0278 18.0126C28.8325 18.1431 28.6803 18.3286 28.5904 18.5456C28.5005 18.7626 28.477 19.0013 28.5228 19.2317C28.5686 19.462 28.6817 19.6736 28.8478 19.8397C29.0139 20.0058 29.2255 20.1189 29.4558 20.1647C29.6862 20.2105 29.9249 20.187 30.1419 20.0971C30.3589 20.0072 30.5444 19.855 30.6749 19.6597C30.8054 19.4645 30.875 19.2349 30.875 19C30.875 18.6851 30.7499 18.383 30.5272 18.1603C30.3045 17.9376 30.0024 17.8125 29.6875 17.8125Z"
                        fill="currentColor" />
                    <path
                        d="M24.9375 29.6875C24.7026 29.6875 24.473 29.7571 24.2778 29.8876C24.0825 30.0181 23.9303 30.2036 23.8404 30.4206C23.7505 30.6376 23.727 30.8763 23.7728 31.1067C23.8186 31.337 23.9317 31.5486 24.0978 31.7147C24.2639 31.8808 24.4755 31.9939 24.7058 32.0397C24.9362 32.0855 25.1749 32.062 25.3919 31.9721C25.6089 31.8822 25.7944 31.73 25.9249 31.5347C26.0554 31.3395 26.125 31.1099 26.125 30.875C26.125 30.5601 25.9999 30.258 25.7772 30.0353C25.5545 29.8126 25.2524 29.6875 24.9375 29.6875Z"
                        fill="currentColor" />
                    <path
                        d="M24.9375 23.75C24.7026 23.75 24.473 23.8196 24.2778 23.9501C24.0825 24.0806 23.9303 24.2661 23.8404 24.4831C23.7505 24.7001 23.727 24.9388 23.7728 25.1692C23.8186 25.3995 23.9317 25.6111 24.0978 25.7772C24.2639 25.9433 24.4755 26.0564 24.7058 26.1022C24.9362 26.148 25.1749 26.1245 25.3919 26.0346C25.6089 25.9447 25.7944 25.7925 25.9249 25.5972C26.0554 25.402 26.125 25.1724 26.125 24.9375C26.125 24.6226 25.9999 24.3205 25.7772 24.0978C25.5545 23.8751 25.2524 23.75 24.9375 23.75Z"
                        fill="currentColor" />
                    <path
                        d="M24.9375 17.8125C24.7026 17.8125 24.473 17.8821 24.2778 18.0126C24.0825 18.1431 23.9303 18.3286 23.8404 18.5456C23.7505 18.7626 23.727 19.0013 23.7728 19.2317C23.8186 19.462 23.9317 19.6736 24.0978 19.8397C24.2639 20.0058 24.4755 20.1189 24.7058 20.1647C24.9362 20.2105 25.1749 20.187 25.3919 20.0971C25.6089 20.0072 25.7944 19.855 25.9249 19.6597C26.0554 19.4645 26.125 19.2349 26.125 19C26.125 18.6851 25.9999 18.383 25.7772 18.1603C25.5545 17.9376 25.2524 17.8125 24.9375 17.8125Z"
                        fill="currentColor" />
                </svg></i>
            </div>
            <div class="menu-title mt-1">Verifikasi Perusahaan</div>
        </a>
    </li>
    </ul>
    <!--end navigation-->
</div>
