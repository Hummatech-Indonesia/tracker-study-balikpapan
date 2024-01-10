<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('logo.png') }}" class="logo-icon w-100" alt="logo icon">
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
        @if (auth()->user()->roles[0]->name == 'admin')
            <li>
                <a href="{{ route('students.index') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                        </svg>
                    </div>
                    <div class="menu-title mt-1">Siswa</div>
                </a>
            </li>
            <li>
                <a href="{{ route('school-years.index') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></svg>
                    </div>
                    <div class="menu-title mt-1">Tahun Ajaran</div>
                </a>
            </li>
            <li>
                <a href="{{ route('majors.index') }}">
                    <div class="parent-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M4 21q-.825 0-1.412-.587T2 19V5q0-.825.588-1.412T4 3h14q.825 0 1.413.588T20 5v2h2v2h-2v2h2v2h-2v2h2v2h-2v2q0 .825-.587 1.413T18 21zm0-2h14V5H4zm2-2h5v-4H6zm6-7h4V7h-4zm-6 2h5V7H6zm6 5h4v-6h-4zM4 5v14z"/></svg>
                    </div>
                    <div class="menu-title mt-1">Jurusan</div>
                </a>
            </li>
            <li>
                <a href="{{ route('classrooms.index') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6.75 19V7h1v11h7v1zm4-12.5q-.71 0-1.201-.491q-.491-.492-.491-1.201q0-.71.491-1.201q.491-.492 1.201-.492q.71 0 1.201.492t.491 1.2q0 .71-.491 1.202T10.75 6.5m5.5 15V17h-7.5V9.73q0-.857.571-1.428t1.429-.571q.858 0 1.429.57q.571.572.571 1.43V15h4.5v6.5z"/></svg>
                    </div>
                    <div class="menu-title mt-1">Kelas</div>
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
                        </svg>
                    </div>
                    <div class="menu-title mt-1">Verifikasi Akun</div>
                </a>
                <ul>
                    <li> <a href="{{ route('account.siswa') }}"><i class='bx bx-radio-circle'></i>Verifikasi Siswa</a>
                    </li>
                    <li> <a href="{{route('account.alumni')}}"><i class='bx bx-radio-circle'></i>Verifikasi Alumni</a>
                    </li>
                    <li> <a href="{{ route('verify.company') }}"><i class='bx bx-radio-circle'></i>Verifikasi
                            Perusahaan</a>
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
                    <div class="menu-title mt-1">Unggah Foto Galeri</div>
                </a>
                <ul>
                    <li> <a href="{{ route('teacher-gallery.index') }}"><i class='bx bx-radio-circle'></i>Galeri
                            Guru</a>
                    </li>
                    <li> <a href="{{ route('alumni.gallery') }}"><i class='bx bx-radio-circle'></i>Galleri Alumni</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('news.index') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            viewBox="0 0 40 40" fill="currentColor">
                            <path
                                d="M31.6667 33.3332H8.33333C6.49238 33.3332 5 31.8408 5 29.9998L5 9.99984C5 8.15889 6.49239 6.6665 8.33333 6.6665L25 6.6665C26.841 6.6665 28.3333 8.15889 28.3333 9.99984V11.6665M31.6667 33.3332C29.8257 33.3332 28.3333 31.8408 28.3333 29.9998L28.3333 11.6665M31.6667 33.3332C33.5076 33.3332 35 31.8408 35 29.9998V14.9998C35 13.1589 33.5076 11.6665 31.6667 11.6665L28.3333 11.6665M21.6667 6.6665L15 6.6665M11.6667 26.6665H21.6667M11.6667 13.3332H21.6667V19.9998H11.6667V13.3332Z"
                                stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Unggah Berita</div>
                </a>
            </li>
            <li>
                <a href="{{ route('survey.index') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 36 36" fill="currentColor">
                            <path
                                d="M31.5 3.375L29.25 2.25L27 3.375L24.75 2.25L22.5 3.375L20.25 2.25L18 3.375L15.75 2.25L13.5 3.375L10.125 2.25V20.25V20.2535H25.875V29.8125C25.875 31.9873 28.2002 33.75 30.375 33.75H31.2188C33.3935 33.75 34.875 31.9873 34.875 29.8125V2.25L31.5 3.375ZM19.1602 16.875L19.125 14.625H30.3398L30.375 16.875H19.1602ZM14.6602 11.25L14.625 9H30.3398L30.375 11.25H14.6602Z"
                                fill="currentColor" />
                            <path
                                d="M23.625 29.8125V22.5H1.125V24.75C1.125 28.3043 1.53141 29.7858 2.14172 30.9115C3.17742 32.8219 5.05266 33.75 7.875 33.75H25.875C25.875 33.75 23.625 32.3438 23.625 29.8125Z"
                                fill="currentColor" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Survei Alumni</div>
                </a>
            </li>
            <li>
                <a href="{{ route('student.classroom') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 36 36" fill="none">
                            <path
                                d="M16.1998 10.8004C16.1998 13.7827 13.7821 16.2004 10.7998 16.2004C7.81747 16.2004 5.3998 13.7827 5.3998 10.8004C5.3998 7.81805 7.81747 5.40039 10.7998 5.40039C13.7821 5.40039 16.1998 7.81805 16.1998 10.8004Z"
                                fill="currentColor" />
                            <path
                                d="M30.5998 10.8004C30.5998 13.7827 28.1821 16.2004 25.1998 16.2004C22.2175 16.2004 19.7998 13.7827 19.7998 10.8004C19.7998 7.81805 22.2175 5.40039 25.1998 5.40039C28.1821 5.40039 30.5998 7.81805 30.5998 10.8004Z"
                                fill="currentColor" />
                            <path
                                d="M23.2722 30.6004C23.3563 30.0125 23.3998 29.4115 23.3998 28.8004C23.3998 25.8571 22.3906 23.1494 20.6994 21.0047C22.0233 20.2388 23.5604 19.8004 25.1998 19.8004C30.1704 19.8004 34.1998 23.8298 34.1998 28.8004V30.6004H23.2722Z"
                                fill="currentColor" />
                            <path
                                d="M10.7998 19.8004C15.7704 19.8004 19.7998 23.8298 19.7998 28.8004V30.6004H1.7998V28.8004C1.7998 23.8298 5.82924 19.8004 10.7998 19.8004Z"
                                fill="currentColor" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Status Siswa & Alumni</div>
                </a>
            </li>
            <li>
                <a href="{{ Route('users.index') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            viewBox="0 0 40 40" fill="currentColor">
                            <path
                                d="M31.6667 33.3332H8.33333C6.49238 33.3332 5 31.8408 5 29.9998L5 9.99984C5 8.15889 6.49239 6.6665 8.33333 6.6665L25 6.6665C26.841 6.6665 28.3333 8.15889 28.3333 9.99984V11.6665M31.6667 33.3332C29.8257 33.3332 28.3333 31.8408 28.3333 29.9998L28.3333 11.6665M31.6667 33.3332C33.5076 33.3332 35 31.8408 35 29.9998V14.9998C35 13.1589 33.5076 11.6665 31.6667 11.6665L28.3333 11.6665M21.6667 6.6665L15 6.6665M11.6667 26.6665H21.6667M11.6667 13.3332H21.6667V19.9998H11.6667V13.3332Z"
                                stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Kelola Akun</div>
                </a>
            </li>
        @elseif(auth()->user()->roles[0]->name == 'company')
            <li>
                <a href="{{ route('job-vacancy.index') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 38 38" fill="currentColor">
                            <path
                                d="M31.7656 16.625H21.375C20.4302 16.625 19.524 16.2497 18.8559 15.5816C18.1878 14.9135 17.8125 14.0073 17.8125 13.0625V2.67188C17.8125 2.59314 17.7812 2.51763 17.7255 2.46195C17.6699 2.40628 17.5944 2.375 17.5156 2.375H10.6875C9.42772 2.375 8.21954 2.87545 7.32874 3.76624C6.43794 4.65704 5.9375 5.86522 5.9375 7.125V30.875C5.9375 32.1348 6.43794 33.343 7.32874 34.2338C8.21954 35.1246 9.42772 35.625 10.6875 35.625H27.3125C28.5723 35.625 29.7805 35.1246 30.6713 34.2338C31.5621 33.343 32.0625 32.1348 32.0625 30.875V16.9219C32.0625 16.8431 32.0312 16.7676 31.9755 16.712C31.9199 16.6563 31.8444 16.625 31.7656 16.625ZM24.9375 28.5H13.0625C12.7476 28.5 12.4455 28.3749 12.2228 28.1522C12.0001 27.9295 11.875 27.6274 11.875 27.3125C11.875 26.9976 12.0001 26.6955 12.2228 26.4728C12.4455 26.2501 12.7476 26.125 13.0625 26.125H24.9375C25.2524 26.125 25.5545 26.2501 25.7772 26.4728C25.9999 26.6955 26.125 26.9976 26.125 27.3125C26.125 27.6274 25.9999 27.9295 25.7772 28.1522C25.5545 28.3749 25.2524 28.5 24.9375 28.5ZM24.9375 22.5625H13.0625C12.7476 22.5625 12.4455 22.4374 12.2228 22.2147C12.0001 21.992 11.875 21.6899 11.875 21.375C11.875 21.0601 12.0001 20.758 12.2228 20.5353C12.4455 20.3126 12.7476 20.1875 13.0625 20.1875H24.9375C25.2524 20.1875 25.5545 20.3126 25.7772 20.5353C25.9999 20.758 26.125 21.0601 26.125 21.375C26.125 21.6899 25.9999 21.992 25.7772 22.2147C25.5545 22.4374 25.2524 22.5625 24.9375 22.5625Z"
                                fill="#currentColor" />
                            <path
                                d="M31.114 13.9968L20.4406 3.32344C20.4198 3.30281 20.3934 3.28877 20.3647 3.28309C20.336 3.27742 20.3063 3.28035 20.2792 3.29154C20.2522 3.30272 20.229 3.32165 20.2127 3.34595C20.1964 3.37024 20.1876 3.39882 20.1875 3.42809V13.0624C20.1875 13.3774 20.3126 13.6794 20.5353 13.9021C20.758 14.1248 21.0601 14.2499 21.375 14.2499H31.0093C31.0386 14.2498 31.0672 14.241 31.0915 14.2247C31.1158 14.2084 31.1347 14.1853 31.1459 14.1582C31.1571 14.1312 31.16 14.1014 31.1543 14.0727C31.1487 14.044 31.1346 14.0176 31.114 13.9968V13.9968Z"
                                fill="#currentColor" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Lowongan</div>
                </a>
            </li>
            <li>
                <a href="/job-applicant">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 36 36" fill="currentColor">
                            <path
                                d="M23.3888 4.54078C22.0205 3.06352 20.1094 2.25 18.0001 2.25C15.8794 2.25 13.962 3.05859 12.6001 4.52672C11.2233 6.01102 10.5526 8.02828 10.7101 10.2066C11.0223 14.5041 14.2925 18 18.0001 18C21.7076 18 24.9723 14.5048 25.2894 10.208C25.449 8.04937 24.774 6.03633 23.3888 4.54078Z"
                                fill="currentColor" />
                            <path
                                d="M30.3754 33.75H5.6254C5.30145 33.7542 4.98063 33.6862 4.68628 33.5508C4.39194 33.4154 4.13147 33.2161 3.92384 32.9674C3.46681 32.4211 3.28259 31.6751 3.419 30.9206C4.01243 27.6286 5.86446 24.8632 8.7754 22.9219C11.3615 21.1985 14.6374 20.25 18.0004 20.25C21.3634 20.25 24.6393 21.1992 27.2254 22.9219C30.1363 24.8625 31.9884 27.6279 32.5818 30.9199C32.7182 31.6744 32.534 32.4204 32.077 32.9667C31.8694 33.2155 31.609 33.415 31.3146 33.5505C31.0203 33.686 30.6994 33.7541 30.3754 33.75Z"
                                fill="currentColor" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Pelamar Kerja</div>
                </a>
            </li>
        @elseif (auth()->user()->roles[0]->name == 'student')
            <li>
                <a href="{{ route('portofolio') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 38 38" fill="currentColor">
                            <path
                                d="M31.7656 16.625H21.375C20.4302 16.625 19.524 16.2497 18.8559 15.5816C18.1878 14.9135 17.8125 14.0073 17.8125 13.0625V2.67188C17.8125 2.59314 17.7812 2.51763 17.7255 2.46195C17.6699 2.40628 17.5944 2.375 17.5156 2.375H10.6875C9.42772 2.375 8.21954 2.87545 7.32874 3.76624C6.43794 4.65704 5.9375 5.86522 5.9375 7.125V30.875C5.9375 32.1348 6.43794 33.343 7.32874 34.2338C8.21954 35.1246 9.42772 35.625 10.6875 35.625H27.3125C28.5723 35.625 29.7805 35.1246 30.6713 34.2338C31.5621 33.343 32.0625 32.1348 32.0625 30.875V16.9219C32.0625 16.8431 32.0312 16.7676 31.9755 16.712C31.9199 16.6563 31.8444 16.625 31.7656 16.625ZM24.9375 28.5H13.0625C12.7476 28.5 12.4455 28.3749 12.2228 28.1522C12.0001 27.9295 11.875 27.6274 11.875 27.3125C11.875 26.9976 12.0001 26.6955 12.2228 26.4728C12.4455 26.2501 12.7476 26.125 13.0625 26.125H24.9375C25.2524 26.125 25.5545 26.2501 25.7772 26.4728C25.9999 26.6955 26.125 26.9976 26.125 27.3125C26.125 27.6274 25.9999 27.9295 25.7772 28.1522C25.5545 28.3749 25.2524 28.5 24.9375 28.5ZM24.9375 22.5625H13.0625C12.7476 22.5625 12.4455 22.4374 12.2228 22.2147C12.0001 21.992 11.875 21.6899 11.875 21.375C11.875 21.0601 12.0001 20.758 12.2228 20.5353C12.4455 20.3126 12.7476 20.1875 13.0625 20.1875H24.9375C25.2524 20.1875 25.5545 20.3126 25.7772 20.5353C25.9999 20.758 26.125 21.0601 26.125 21.375C26.125 21.6899 25.9999 21.992 25.7772 22.2147C25.5545 22.4374 25.2524 22.5625 24.9375 22.5625Z"
                                fill="#currentColor" />
                            <path
                                d="M31.114 13.9968L20.4406 3.32344C20.4198 3.30281 20.3934 3.28877 20.3647 3.28309C20.336 3.27742 20.3063 3.28035 20.2792 3.29154C20.2522 3.30272 20.229 3.32165 20.2127 3.34595C20.1964 3.37024 20.1876 3.39882 20.1875 3.42809V13.0624C20.1875 13.3774 20.3126 13.6794 20.5353 13.9021C20.758 14.1248 21.0601 14.2499 21.375 14.2499H31.0093C31.0386 14.2498 31.0672 14.241 31.0915 14.2247C31.1158 14.2084 31.1347 14.1853 31.1459 14.1582C31.1571 14.1312 31.16 14.1014 31.1543 14.0727C31.1487 14.044 31.1346 14.0176 31.114 13.9968Z"
                                fill="#currentColor" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Portofolio</div>
                </a>
            </li>
        @elseif (auth()->user()->roles[0]->name == 'alumni')
            <li>
                <a href="{{ route('portofolio') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 38 38" fill="currentColor">
                            <path
                                d="M31.7656 16.625H21.375C20.4302 16.625 19.524 16.2497 18.8559 15.5816C18.1878 14.9135 17.8125 14.0073 17.8125 13.0625V2.67188C17.8125 2.59314 17.7812 2.51763 17.7255 2.46195C17.6699 2.40628 17.5944 2.375 17.5156 2.375H10.6875C9.42772 2.375 8.21954 2.87545 7.32874 3.76624C6.43794 4.65704 5.9375 5.86522 5.9375 7.125V30.875C5.9375 32.1348 6.43794 33.343 7.32874 34.2338C8.21954 35.1246 9.42772 35.625 10.6875 35.625H27.3125C28.5723 35.625 29.7805 35.1246 30.6713 34.2338C31.5621 33.343 32.0625 32.1348 32.0625 30.875V16.9219C32.0625 16.8431 32.0312 16.7676 31.9755 16.712C31.9199 16.6563 31.8444 16.625 31.7656 16.625ZM24.9375 28.5H13.0625C12.7476 28.5 12.4455 28.3749 12.2228 28.1522C12.0001 27.9295 11.875 27.6274 11.875 27.3125C11.875 26.9976 12.0001 26.6955 12.2228 26.4728C12.4455 26.2501 12.7476 26.125 13.0625 26.125H24.9375C25.2524 26.125 25.5545 26.2501 25.7772 26.4728C25.9999 26.6955 26.125 26.9976 26.125 27.3125C26.125 27.6274 25.9999 27.9295 25.7772 28.1522C25.5545 28.3749 25.2524 28.5 24.9375 28.5ZM24.9375 22.5625H13.0625C12.7476 22.5625 12.4455 22.4374 12.2228 22.2147C12.0001 21.992 11.875 21.6899 11.875 21.375C11.875 21.0601 12.0001 20.758 12.2228 20.5353C12.4455 20.3126 12.7476 20.1875 13.0625 20.1875H24.9375C25.2524 20.1875 25.5545 20.3126 25.7772 20.5353C25.9999 20.758 26.125 21.0601 26.125 21.375C26.125 21.6899 25.9999 21.992 25.7772 22.2147C25.5545 22.4374 25.2524 22.5625 24.9375 22.5625Z"
                                fill="#currentColor" />
                            <path
                                d="M31.114 13.9968L20.4406 3.32344C20.4198 3.30281 20.3934 3.28877 20.3647 3.28309C20.336 3.27742 20.3063 3.28035 20.2792 3.29154C20.2522 3.30272 20.229 3.32165 20.2127 3.34595C20.1964 3.37024 20.1876 3.39882 20.1875 3.42809V13.0624C20.1875 13.3774 20.3126 13.6794 20.5353 13.9021C20.758 14.1248 21.0601 14.2499 21.375 14.2499H31.0093C31.0386 14.2498 31.0672 14.241 31.0915 14.2247C31.1158 14.2084 31.1347 14.1853 31.1459 14.1582C31.1571 14.1312 31.16 14.1014 31.1543 14.0727C31.1487 14.044 31.1346 14.0176 31.114 13.9968Z"
                                fill="#currentColor" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Portofolio</div>
                </a>
            </li>
            <li>
                <a href="{{ route('alumni.job.survey') }}">
                    <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 38 38" fill="currentColor">
                            <path
                                d="M31.7656 16.625H21.375C20.4302 16.625 19.524 16.2497 18.8559 15.5816C18.1878 14.9135 17.8125 14.0073 17.8125 13.0625V2.67188C17.8125 2.59314 17.7812 2.51763 17.7255 2.46195C17.6699 2.40628 17.5944 2.375 17.5156 2.375H10.6875C9.42772 2.375 8.21954 2.87545 7.32874 3.76624C6.43794 4.65704 5.9375 5.86522 5.9375 7.125V30.875C5.9375 32.1348 6.43794 33.343 7.32874 34.2338C8.21954 35.1246 9.42772 35.625 10.6875 35.625H27.3125C28.5723 35.625 29.7805 35.1246 30.6713 34.2338C31.5621 33.343 32.0625 32.1348 32.0625 30.875V16.9219C32.0625 16.8431 32.0312 16.7676 31.9755 16.712C31.9199 16.6563 31.8444 16.625 31.7656 16.625ZM24.9375 28.5H13.0625C12.7476 28.5 12.4455 28.3749 12.2228 28.1522C12.0001 27.9295 11.875 27.6274 11.875 27.3125C11.875 26.9976 12.0001 26.6955 12.2228 26.4728C12.4455 26.2501 12.7476 26.125 13.0625 26.125H24.9375C25.2524 26.125 25.5545 26.2501 25.7772 26.4728C25.9999 26.6955 26.125 26.9976 26.125 27.3125C26.125 27.6274 25.9999 27.9295 25.7772 28.1522C25.5545 28.3749 25.2524 28.5 24.9375 28.5ZM24.9375 22.5625H13.0625C12.7476 22.5625 12.4455 22.4374 12.2228 22.2147C12.0001 21.992 11.875 21.6899 11.875 21.375C11.875 21.0601 12.0001 20.758 12.2228 20.5353C12.4455 20.3126 12.7476 20.1875 13.0625 20.1875H24.9375C25.2524 20.1875 25.5545 20.3126 25.7772 20.5353C25.9999 20.758 26.125 21.0601 26.125 21.375C26.125 21.6899 25.9999 21.992 25.7772 22.2147C25.5545 22.4374 25.2524 22.5625 24.9375 22.5625Z"
                                fill="currentColor" />
                            <path
                                d="M31.114 13.9978L20.4406 3.32442C20.4198 3.30378 20.3934 3.28974 20.3647 3.28407C20.336 3.27839 20.3063 3.28133 20.2792 3.29251C20.2522 3.3037 20.229 3.32263 20.2127 3.34692C20.1964 3.37122 20.1876 3.3998 20.1875 3.42906V13.0634C20.1875 13.3783 20.3126 13.6804 20.5353 13.9031C20.758 14.1258 21.0601 14.2509 21.375 14.2509H31.0093C31.0386 14.2508 31.0672 14.242 31.0915 14.2257C31.1158 14.2094 31.1347 14.1862 31.1459 14.1592C31.1571 14.1321 31.16 14.1024 31.1543 14.0737C31.1487 14.045 31.1346 14.0186 31.114 13.9978Z"
                                fill="currentColor" />
                        </svg></i>
                    </div>
                    <div class="menu-title mt-1">Survei</div>
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
                    <div class="menu-title mt-1">Lowongan Kerja</div>
                </a>
                <ul>
                    <li> <a href="{{ route('alumni.vacancies.available') }}"><i
                                class='bx bx-radio-circle'></i>Lowongan
                            Tersedia</a>
                    </li>
                    <li> <a href="{{ route('alumni.job.vacancy.page') }}"><i class='bx bx-radio-circle'></i>Lowongan
                            Yang di
                            Lamar</a>
                    </li>
            </li>
        @endif

    </ul>
    <!--end navigation-->
</div>
