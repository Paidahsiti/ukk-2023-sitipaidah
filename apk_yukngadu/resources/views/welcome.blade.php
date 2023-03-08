<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>APLIKASI | YUKngadu!</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/youlogo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    @include('includes.landing.stylesheet')


    <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    @include('includes.landing.navbar')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center bg-primary">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Layanan Pengaduan Masyarakat Berbasis Online</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Adukan masalah Anda di sini, kami akan
                        memprosesnya dengan cepat, aman dan nyaman.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ url('login') }}" class="btn-get-started scrollto">Laporkan!</a>

                        <a href="#about" class="btn-get-started-2 scrollto">Alur laporan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('img/landing.svg') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
              </div>
      
              <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                  <p>
                    <h3>YUKngadu!</h3>
                    merupakan aplikasi yan dapat dipergunakan oleh masyarakat untuk menyampaikan pengaduan atau keluhan mengenai pelayanan publik tertentu.
                  </p>
                  <ul>
                    <h3>Tujuan YUKngadu!</h3>
                    <li><i class="ri-check-double-line"></i>Meningkatkan kualitas pelayanan publik.</li>
                    <li><i class="ri-check-double-line"></i>Penyelenggara dapat mengelola pengaduan dari masyarakat secara sederhana, cepat, tepat, tuntas, dan terkoordinasi dengan baik.</li>
                    <li><i class="ri-check-double-line"></i>Penyelenggara memberikan akses untuk partisipasi masyarakat dalam menyampaikan pengaduan.</li>
                  </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <p>
                    <h3>Visi YUKngadu</h3>
                    “Terwujudnya Pelayanan Pengaduan yang Optimal untuk Memenuhi Hak Pengadu Sesuai dengan Ketentuan Peraturan Perundang-Undangan”<br><br>
      
                    <ul><h3>Misi YUKngadu</h3>
                    <li><i class="ri-check-double-line"></i>Meningkatkan pengelolaan dan pelayanan pengaduan msyarakat yang berkualitas</li>
                    <li><i class="ri-check-double-line"></i>Membangun dan mengembangkan sistem penyediaan dan layanan pengaduan masyarakat</li>
                    <li><i class="ri-check-double-line"></i>Meningkatkan kompetensi sumber daya manusia</li>
                  </ul>
                  </p>
                </div>
              </div>
      
            </div>
          </section>


        <!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts">
            <div class="section-title" data-aos="fade-up">
                <h2>KATA MEREKA</h2>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row g-4">
                    <div class="col-6">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/create-account-office.jpeg') }}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Siti</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/create-account-office.jpeg') }}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Usep</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section --> --}}

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>TATA CARA</h2>
                    <p>Nah ini dia alur pelaporan yang ada website APLIKASIKU</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box bg-primary" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-edit-alt bg-'></i></div>
                            <h4 class="title"><a href="">Kirim Laporan</a></h4>
                            <p class="description">Tulis laporan keluhan Anda dengan jelas.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-shuffle"></i></div>
                            <h4 class="title"><a href="">Proses Verifikasi</a></h4>
                            <p class="description">Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Tindak Lanjut</a></h4>
                            <p class="description">Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class='bx bx-check-shield'></i></div>
                            <h4 class="title"><a href="">Selesai</a></h4>
                            <p class="description">Laporan pengaduan telah selesai ditindak.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section --> --}}


        @include('includes.landing.footer')







        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        @include('includes.landing.javascript')

</body>

</html>
