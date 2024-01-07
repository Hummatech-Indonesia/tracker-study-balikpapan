    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand" href="index.html">
                <img class="navbar-brand-regular" width="10%" src="{{ asset('LOGO SMKN 2.png') }}" alt="brand-logo">
                <img class="navbar-brand-sticky" width="10%" src="{{ asset('LOGO SMKN 2.png') }}" alt="sticky brand-logo">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-inner">
                <!--  Mobile Menu Toggler -->
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll fw-5" href="#features">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-5" href="javascript:;" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Galeri
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{ route('gallery-teacher') }}">Galery Guru</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/galery-alumni">Galery Alumni</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-5" href="">Survei</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-5" href="{{ route('landing-page-news') }}">Berita</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-5" href="#pricing">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="/pilih-role" class="btn" style="margin-top:18px;font-weight:600">
                                Register
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="/login" class="btn" style="margin-top:18px;font-weight:600">
                                Login
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
