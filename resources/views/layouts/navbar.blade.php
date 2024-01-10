<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <div class="search-bar d-lg-block d-none ">
                <a class="nav-link toggle-icon ms-auto nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#000000"
                            d="M7 5h14v2H7V5m0 8v-2h14v2H7M4 4.5A1.5 1.5 0 0 1 5.5 6A1.5 1.5 0 0 1 4 7.5A1.5 1.5 0 0 1 2.5 6A1.5 1.5 0 0 1 4 4.5m0 6A1.5 1.5 0 0 1 5.5 12A1.5 1.5 0 0 1 4 13.5A1.5 1.5 0 0 1 2.5 12A1.5 1.5 0 0 1 4 10.5M7 19v-2h14v2H7m-3-2.5A1.5 1.5 0 0 1 5.5 18A1.5 1.5 0 0 1 4 19.5A1.5 1.5 0 0 1 2.5 18A1.5 1.5 0 0 1 4 16.5Z" />
                    </svg>
                </a>
            </div>

            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                        data-bs-target="#SearchModal">
                        <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-app">
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="app-container p-2 my-2">
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-large">

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">Notifications</p>
                                    <p class="msg-header-badge">8 New</p>
                                </div>
                            </a>
                            <div class="header-notifications-list">
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">
                                    <button class="btn btn-primary w-100">View All Notifications</button>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">My Cart</p>
                                    <p class="msg-header-badge">10 Items</p>
                                </div>
                            </a>
                            <div class="header-message-list">
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                                <a class="dropdown-item" href="javascript:;">

                                </a>
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="mb-0">Total</h5>
                                        <h5 class="mb-0 ms-auto">$489.00</h5>
                                    </div>
                                    <button class="btn btn-primary w-100">Checkout</button>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img  src="{{ asset(auth()->user()->photo == null ? 'default.jpg' : 'storage/'. auth()->user()->photo) }}" class="user-img"
                        alt="user avatar" style="object-fit: cover">
                    <div class="user-info">
                        <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                        <p class="designattion mb-0">{{ auth()->user()->roles[0]->name }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @if (auth()->user()->roles[0]->name != 'company')
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}"><i
                        class="bx bx-user fs-5"></i><span>Profile</span></a>
                    @else
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('profile-company') }}"><i
                        class="bx bx-user fs-5"></i><span>Profile</span></a>
                    @endif

                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-log-out-circle"></i><span>Logout</span></button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
