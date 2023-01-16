@extends('template')
@section('content')
    
<!-- ======= Navbar ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <h2 class="logo"><a href="/Home">jrCodeStudio</a></h2>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link" href="/portofolio">Portofolio</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Kursus</a></li>
                <li><a class="nav-link scrollto" href="#Artikel">Artikel</a></li>
                <li><a class="nav-link scrollto" href="#Magang">Magang</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <?= (session('nama_lengkap')) ? session('nama_lengkap') : ''; ?>
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

    <div class="container" style="margin-top: 150px;">
        <div class="row">

            <div>
                <h3>Jadwalkan Meeting</h3>
            </div>
            <div>
                <p>Konsultasikan kebutuhan kamu dengan JrCodeStudio, dan kami akan membantu anda dengan memberikan solusi yang terbaik.</p>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img src="image.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class=" card border-0 mt-5" style="width: 90%;">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">Nomor Ponsel</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat E-Mail</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" style="width: 300px;" type="submit">Jadwalkan Pertemuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="frame-1 screen">
       <div class="flex-row">
           <div class="flex-col">
               <h1 class="title">Jadwalkan Meeting</h1>
               <p class="konsultasi-kebutu">Konsultasikan kebutuhan kamu dengan Jrcodestudio, dan kami akan membantu dengan solusi yang terbaik.</p>
           </div>
           <div class="scheduleamico"></div>
       </div>
       <div class="overlap-group1">
           <div class="overlap-group">
               <div class="nama-lengkap inter-semi-bold-black-14px">Nama Lengkap</div>
               <div class="rectangle-1"></div>
               <div class="overlap-group-item inter-semi-bold-black-14px">Nomor Ponsel</div>
               <div class="rectangle-1"></div>
               <div class="overlap-group-item inter-semi-bold-black-14px">Alamat Email</div>
               <div class="rectangle-1"></div>
           </div>
           <div class="button">
               <div class="coba-sekarang">Jadwalkan Meeting</div>
           </div>
       </div>
   </div> -->

</main>

@endsection