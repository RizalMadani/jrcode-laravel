@extends('template')
@section('content')
    <!-- ======= Navbar ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h2 class="logo"><a href="/">jrCodeStudio</a></h2>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link" href="/portofolio">Portofolio</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Kursus</a></li>
                    <li><a class="nav-link scrollto" href="#Artikel">Artikel</a></li>
                    <li><a class="nav-link scrollto" href="#Magang">Magang</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    {{-- <li><a class="nav-link scrollto btn btn-pri" href="#pricing">Login</a></li> --}}
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard/masterAdmin"> Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/auth/logout" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth

                    {{-- <?php if (empty(session('nama_lengkap'))) { ?>
                    <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= session('nama_lengkap') ? session('nama_lengkap') : '' ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/Detail">My Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/Auth/logout"> Logout</a></li>
                            </ul>
                        </li>
                    <?php } ?> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
                <h1>Semua Orang Bisa Jago Coding</h1>
                <h2>Perdalam kemampuan desain dan coding secara fokus dan terarah serta dapatkan sertifikat resminya</h2>
                <h2>Ayoo tunggu apalagi</h2>
                &nbsp;
                <a href="/pendaftaran" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Segera
                    daftarkan diri anda</a>
                <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
                <img src="{{ $url }}/img/home-page.jpg" class="img-fluid hero-img" alt=""
                    data-aos="zoom-in" data-aos-delay="150">
            </div>
        </section>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3>jrCodeStudio Bootcamp Student</h3>
                            <p>
                                jrCodeStudio merupakan perusahaan yang bergerak dibidang pelayanan bootcamp student dengan
                                mengkombinasikan pembelajaran IT dengan menggunakan metode offline/online
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Satu-satunya dan Nomor Satu di Indonesia</h4>
                                    <p>Kami menawarkan kurikulum teknologi terbaik, yang mencakup perencanaan dasar
                                        pengkodean design, dan pemecahan masalah berbasis logika</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Belajar Secara Langsung dari Pakar di Industri</h4>
                                    <p>Dapatkan pengalaman belajar langsung dari para instruktur dan mentor jrCodeStudio
                                        yang telah berpengalaman bekerja di berbagai perusahaan nasional dan multinasional
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-book"></i>
                                    <h4>Kecerdasan akademik yang unggul</h4>
                                    <p>Dengan menggunakan program eksplorasi ilmiah yang unik dan satu-satunya, Pengguna
                                        akan mengembangkan pemahaman mendalam tentang berbagai konsep matematika & sains</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bxl-unity"></i>
                                    <h4>Bahasa Masa Depan</h4>
                                    <p>Bahasa coding akan menjadi bahasa di abad ke-21. Tiga juta programmer di Indonesia
                                        sampai 2030 akan sangat dibutuhkan untuk memecahkan hambatan besar dalam bidang
                                        ekonomi dan digital development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $url }}/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $url }}/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $url }}/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $url }}/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $url }}/img/clients/client-5.png" class="img-fluid" alt="">F
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $url }}/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Features Section ======= -->
        <section id="features" class="features" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>Apa Saja yang Akan Kamu Pelajari?</h2>
                    <p>Kamu akan dibimbing untuk menguasai dasar-dasar pemorograman sampai kamu mampu membangun sebuah
                        website yang responsive</p>
                    <p>dengan metode belajar yang sesuai dan lebih nyaman</p>
                </div>

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ $url }}/img/features-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                        <h3>Programming Fundamental & Data Structure and Algorithm (using Javascript)</h3>
                        <p class="fst-italic">
                            Dalam modul ini, peserta akan mempelajari dasar-dasar pemrograman menggunakan bahasa
                            pemrograman, Javascript. Peserta akan mempelajari Tipe Data yang terkandung dalam javascript
                            seperti angka, array, Boolean, dll dan juga akan belajar tentang Operator Perbandingan, if, else
                            if, dan pernyataan lain, untuk loop, loop while, fungsi, dll. Kamu akan juga belajar HTML, CSS,
                            Git & Github.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Instruktur yang berpengalaman dibidang nya</li>
                            <li><i class="bi bi-check-circle"></i> Berbagai macam modul dan vidio pembelajaran</li>
                            <li><i class="bi bi-check-circle"></i> Kamu akan mendapatkan portfolio dan sertifikat Kelulusan
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ $url }}/img/features-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <h3>Web Frontend Development<br>(using HTML, CSS, and React JS)</h3>
                        <p class="fst-italic">
                            Dalam modul ini, peserta akan mempelajari Frontend Development, yaitu membuat UI untuk Web
                            Aplikasi menggunakan HTML, CSS, React JS, dll. Peserta juga akan belajar cara membuat API palsu
                            dan menghubungkannya ke Front End untuk membuat Aplikasi Web interaktif.
                        </p>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right">
                        <img src="{{ $url }}/img/features-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5" data-aos="fade-left">
                        <h3>Backend Development<br>(Node JS, Express JS, Mongo DB, and MySQL)</h3>
                        <p class="fst-italic">Dalam modul ini, peserta akan mempelajari Backend Development, yaitu cara
                            membuat REST API dan Database untuk Aplikasi Web menggunakan Express JS, MySQL, MongoDB, dll.
                            Peserta juga akan belajar menghubungkan API dan Database dengan Aspek Front End untuk membuat
                            Aplikasi Web yang lengkap.</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Instruktur yang berpengalaman dibidang nya</li>
                            <li><i class="bi bi-check-circle"></i> Berbagai macam modul dan vidio pembelajaran</li>
                            <li><i class="bi bi-check-circle"></i> Kamu akan mendapatkan portfolio dan sertifikat Kelulusan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Steps Section ======= -->
        <section id="steps" class="steps">
            <div class="container">
                <div class="row no-gutters" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                        <span>01</span>
                        <h4>HTML & CSS</h4>
                        <p>Bahasa pemograman yang digunakan untuk membuat dan mendesain tampilan sebuah situs website.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                        <span>02</span>
                        <h4>React JS</h4>
                        <p>Merupakan framework (frontend) javascript yang digunakan untuk membuat sebuah tampilan website.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                        <span>03</span>
                        <h4>Node JS</h4>
                        <p>Merupakan runtime environtment javascript untuk mengembangkan aplikasi server-side.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                        <span>04</span>
                        <h4>SQL</h4>
                        <p>Bahasa pemograman yang digunakan untuk mendesign, merancang, dan membuat sebuah database.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                        <span>05</span>
                        <h4>Laravel</h4>
                        <p>Merupakan framework (backend) php yang digunakan untuk membuat sebuah aplikasi website.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                        <span>06</span>
                        <h4>Java</h4>
                        <p>Bahasa pemograman yang digunakan untuk pengembangan perangkat lunak, aplikasi dashboard, dan
                            lainnya.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Metode Pembayaran</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"></div>
                            <h4 class="title"><a href="">E-Wallet</a></h4>
                            <p class="description">Gunakan ShopeePay, OVO, Dana, dan berbagai macam e-wallet lainnya.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"></div>
                            <h4 class="title"><a href="">Virtual Account</a></h4>
                            <p class="description">Gunakan BCA Virtual Account, BRI Virtual Account, dan Mandiri Virtual
                                Account.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"></div>
                            <h4 class="title"><a href="">Convenience Store</a></h4>
                            <p class="description">Gunakan kode pembayaran dan bayar di Indomaret, Alfamart, dan gerai toko
                                lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pilihan kursus yang kami hadirkan</h2>
                </div>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ $url }}/img/portfolio/portfolio-1.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>HTML & CSS</h4>
                                <p>Basic Frontend</p>
                                <div class="portfolio-links">
                                    <!-- <a href="{{ $url }}/img/portfolio/portfolio-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="HTML & CSS"><i class="bx bx-plus"></i></a> -->
                                    {{-- <?= $pendaftaran == true ? '<a href="/pendaftaran/detail" title="More Details"><i class="bx bx-link"></i></a>' : '<a href="/kursus/html" title="More Details"><i class="bx bx-link"></i></a>' ?> --}}
                                    <a href="/kursus/html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ $url }}/img/portfolio/portfolio-2.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>React JS</h4>
                                <p>Framework Frontend JS</p>
                                <div class="portfolio-links">
                                    <!-- <a href="{{ $url }}/img/portfolio/portfolio-2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="React"><i class="bx bx-plus"></i></a> -->
                                    <!-- <a href="/Kursus/react" title="More Details"><i class="bx bx-link"></i></a> -->
                                    {{-- <?= $pendaftaran == true ? '<a href="/pendaftaran/detail" title="More Details"><i class="bx bx-link"></i></a>' : '<a href="/kursus/react" title="More Details"><i class="bx bx-link"></i></a>' ?> --}}
                                    <a href="/kursus/react" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ $url }}/img/portfolio/portfolio-3.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Node JS</h4>
                                <p>Library Frontend JS</p>
                                <div class="portfolio-links">
                                    <!-- <a href="{{ $url }}/img/portfolio/portfolio-3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Node JS"><i class="bx bx-plus"></i></a> -->
                                    <!-- <a href="/Kursus/node" title="More Details"><i class="bx bx-link"></i></a> -->
                                    {{-- <?= $pendaftaran == true ? '<a href="/pendaftaran/detail" title="More Details"><i class="bx bx-link"></i></a>' : '<a href="/kursus/node" title="More Details"><i class="bx bx-link"></i></a>' ?> --}}
                                    <a href="/kursus/node" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ $url }}/img/portfolio/portfolio-4.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>SQL</h4>
                                <p>Bahasa Pemograman Databases</p>
                                <div class="portfolio-links">
                                    <!-- <a href="{{ $url }}/img/portfolio/portfolio-4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SQL"><i class="bx bx-plus"></i></a> -->
                                    <!-- <a href="/Kursus/sql" title="More Details"><i class="bx bx-link"></i></a> -->
                                    {{-- <?= $pendaftaran == true ? '<a href="/pendaftaran/detail" title="More Details"><i class="bx bx-link"></i></a>' : '<a href="/kursus/sql" title="More Details"><i class="bx bx-link"></i></a>' ?> --}}
                                    <a href="/kursus/sql" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ $url }}/img/portfolio/portfolio-5.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Laravel</h4>
                                <p>Framework Backend PHP</p>
                                <div class="portfolio-links">
                                    <!-- <a href="{{ $url }}/img/portfolio/portfolio-5.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Laravel"><i class="bx bx-plus"></i></a> -->
                                    {{-- <?= $pendaftaran == true ? '<a href="/pendaftaran/detail" title="More Details"><i class="bx bx-link"></i></a>' : '<a href="/kursus/laravel" title="More Details"><i class="bx bx-link"></i></a>' ?> --}}
                                    <a href="/kursus/laravel" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ $url }}/img/portfolio/portfolio-6.png" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Java</h4>
                                <p>Bahasa Pemograman</p>
                                <div class="portfolio-links">
                                    <!-- <a href="{{ $url }}/img/portfolio/portfolio-6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Java"><i class="bx bx-plus"></i></a> -->
                                    <!-- <a href="/Kursus/java" title="More Details"><i class="bx bx-link"></i></a> -->
                                    {{-- <?= $pendaftaran == true ? '<a href="/pendaftaran/detail" title="More Details"><i class="bx bx-link"></i></a>' : '<a href="/kursus/java" title="More Details"><i class="bx bx-link"></i></a>' ?> --}}
                                    <a href="/kursus/java" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ $url }}/img/portfolio/porto-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Consultant IT</h4>
                                <div class="portfolio-links">
                                    <!-- <a href="{{ $url }}/img/portfolio/portfolio-6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Java"><i class="bx bx-plus"></i></a> -->
                                    <!-- <a href="/Kursus/Consultant" title="More Details"><i class="bx bx-link"></i></a> -->
                                    {{-- <?= $pendaftaran == true ? '<a href="/pendaftaran/detail" title="More Details"><i class="bx bx-link"></i></a>' : '<a href="/kursus/consultant" title="More Details"><i class="bx bx-link"></i></a>' ?> --}}
                                    <a href="/kursus/consultant" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Mentornya keren cara menyampaikan setiap materinya juga detail dan mudah dipahami. Kelas
                                    yang paling recommended pokoknya buat investasi ilmu di era revolusi industri 4.0.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ $url }}/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Dwi Duta Mahardewantoro</h3>
                                <h4>Student</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Mentornya keren cara menyampaikan setiap materinya juga detail dan mudah dipahami. Kelas
                                    yang paling recommended pokoknya buat investasi ilmu di era revolusi industri 4.0.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ $url }}/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Agil Haubi Zikri</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Mentornya keren cara menyampaikan setiap materinya juga detail dan mudah dipahami. Kelas
                                    yang paling recommended pokoknya buat investasi ilmu di era revolusi industri 4.0.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ $url }}/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Rehan Septyawan</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Belajar di Jrcodestudio sangat menarik dan juga mentornya baik
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ $url }}/img/testimonials/Pictures2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Dena Risky Rysmawan</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Alhamdulillah setelah saya mengikuti pelatihan mengenai html dan css ini saya
                                    mendapatkan ilmu dan relasi yang sangat baik untuk masa depan saya
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ $url }}/img/testimonials/Picture1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Abdul Rezak</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- ======= Team Section ======= -->
        <section id="team" class="testimonials section-bg team">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Struktur Organisasi</h2>
                </div>

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="col-lg" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member">
                                        <img src="{{ $url }}/img/team/pictures3.jpg" class="img-fluid"
                                            alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Jumail</h4>
                                                <span>Chief Executive Officer</span>
                                            </div>
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="col-lg" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member">
                                        <img src="{{ $url }}/img/team/pictures4.jpg" class="img-fluid"
                                            alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Taufik</h4>
                                                <span>Team</span>
                                            </div>
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="col-lg" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member">
                                        <img src="{{ $url }}/img/team/pictures-2.jpg" class="img-fluid"
                                            alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Rita</h4>
                                                <span>Team</span>
                                            </div>
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="col-lg" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member">
                                        <img src="{{ $url }}/img/team/pictures1.jpg" class="img-fluid"
                                            alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>Aulia</h4>
                                                <span>Team</span>
                                            </div>
                                            <div class="social">
                                                <a href=""><i class="bi bi-twitter"></i></a>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pricing</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <h3>1 Bulan</h3>
                            <h3>Potongan 100%</h3>
                            <h4><sup>FREE</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box featured">
                            <h3>3 Bulan</h3>
                            <h3>Potongan Hingga 20%</h3>
                            <h4><sup>Rp</sup>500.000</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <h3>6 Bulan</h3>
                            <h3>Potongan Hingga 20%</h3>
                            <h4><sup>Rp</sup>700.000</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pertanyaan yang sering diajukan</h2>
                </div>

                <ul class="faq-list">
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Bagaimana peluang karir
                            seorang full stack web developer? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Jumlah pengguna internet di Indonesia mencapai 196,7 juta jiwa per Juni 2020. Ukuran pasar
                                yang semakin luas ini memikat perhatian berbagai perusahaan dan startup untuk meningkatkan
                                daya saing mereka di dunia maya. Oleh karena itu, mereka sangat membutuhkan full stack web
                                developers yang dapat mengembangkan website dan software yang berkualitas dan mengutamakan
                                kenyamanan pengguna.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apakah saya harus
                            memiliki latar belakang IT untuk mengikuti program ini? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Kami membuka kesempatan untuk siapa saja yang ingin bergabung di dalam program Job
                                Connection walaupun tidak memiliki latar belakang IT. Namun, untuk dapat menguasai keahlian
                                coding, tidak cukup hanya mengikuti kegiatan kelas atau workshop yang kami sediakan. Kamu
                                juga membutuhkan banyak latihan di luar sesi kelas ataupun workshop untuk terus mengasah
                                keahlian coding kamu lebih lagi. Ada banyak kisah sukses dari para lulusan kami yang tidak
                                memiliki latar belakang IT sebelumnya bahkan juga dari lulusan IPS yang terbukti dapat lulus
                                dari program Job Connector Job Connection dan berhasil dikoneksikan kerja sebagai Software
                                Developer di Perusahaan jrCodeStudio.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apa saja profesi yang
                            dapat saya miliki setelah lulus dari program ini? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Industri digital Indonesia bertransformasi dengan pesat. Hal ini memicu demand yang besar
                                untuk pekerja yang memiliki kualifikasi di bidang Job Connection. Varian pekerjaan yang
                                dapat kamu lakukan dengan skill yang didapat dari program ini termasuk : <br><br>
                                • Application Developer<br>
                                • Backend Developer<br>
                                • Frontend Developer<br>
                                • Full Stack Developer<br>
                                • Software Developer<br>
                                • Web Developer<br>
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apakah ada tes masuk
                            untuk mengikuti program ini? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tidak ada tes masuk untuk dapat mendaftar di program Job Connection. Siapa saja mendapatkan
                                kesempatan untuk dapat mengikuti program ini.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apakah saya pasti
                            dijamin mendapatkan pekerjaan setelah mengikuti program ini? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Setelah dinyatakan lulus dari program Job Connection, jrCodeStudio memberikan jaminan untuk
                                terus menyediakan fasilitas Job Connection yang dapat menghubungkan dengan +500 Perusahaan
                                Hiring Partner yang Purwadhika miliki melalui Purwadhika Career Network. Namun, perlu
                                diingat dalam hal ini Purwadhika hanya menjadi perantara antara para lulusan dengan
                                Perusahaan Hiring Partner. Segala hal mengenai gaji dan hal lainnya bukan merupakan tanggung
                                jawab kami karena hal tersebut adalah hak sepenuhnya dari para perusahaan Hiring Partner.
                                Kamu juga memiliki hak sepenuhnya untuk memilih pekerjaan di Perusahaan Hiring Partner yang
                                Kamu inginkan.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
