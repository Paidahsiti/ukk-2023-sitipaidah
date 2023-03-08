<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center bg-primary">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1> <img src="{{ asset('img/mylogo.png') }}" style="width: 50px;height: 50px;" class="img-fluid"
                    alt="poto">
                <span class="ms-2 text-light">YUKngadu!</span>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->

        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang kami</a></li>
                <div> <a class="border-solid" href="{{ url('login') }}">Masuk</a></div>
                <div> <a class="border-solid" href="{{ url('register') }}">Daftar</a></div>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
