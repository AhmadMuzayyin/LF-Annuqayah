<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="{{ url('/') }}" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto" href="#pustaka">Pustaka LFA</a></li>
                <li><a class="nav-link scrollto" href="#articel">Artikel</a></li>
                <li><a class="nav-link scrollto" href="#academy">Academy</a></li>
                <li><a class="nav-link scrollto" href="#join">Join</a></li>
                <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Struktur</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Pengurus</a></li>
                                <li><a href="#">Pengurus Demisioner</a></li>
                                <li><a href="#">Ketua Demisioner</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Anggota</a></li>
                        <li><a href="#">Event</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="#">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
            Appointment</a> --}}

    </div>
</header><!-- End Header -->
