@extends('template')
@section('content')

<!--======= Navbar ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <h2 class="logo"><a href="/">jrCodeStudio</a></h2>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link active" href="/portofolio">Portofolio</a></li>
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
    <!--======= Hero Section ======= -->

    <!-- <div class="header">
            <div class="text-group">
                <h1 class="title"> Lorem ipsum dolor sit amet</h1>
                <p class="lorem-ipsum-dolor-si">
                    Lorem ipsum dolor sit amet, consectetur elit. Ut a enim, convallis condimentum etiam id ornare.
                </p>
                <div>
                    <button class="btn btn-primary" style="width:200px;">Coba Sekarang!</button>
                </div>
            </div>
            <div>
                <img class="picture1 w-100" src="assets/img/Rectangle_1.png" alt="Picture1" />
            </div>
        </div> -->
    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="card w-100" style="border: 0px;">
                    <div>
                        <h1 class="title">Lorem ipsum dolor sit amet.</h1>
                    </div>
                    <div>
                        <p style="text-align:justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quis, fuga natus sit rem nemo rerum aspernatur accusantium, ipsa inventore assumenda unde ad et eveniet architecto vel qui perspiciatis. Exercitationem.</p>
                    </div>
                    <div>
                        <button class="btn btn-primary">Coba Sekarang</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="border:0px;">
                    <img width="100%" src="{{$url}}/img/Rectangle_1.png" alt="Picture1" />
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card bg-primary" style="color:white; flex-direction:row; height:20rem; border:none; border-radius:20px">
                    <div class="row">
                        <div class="col d-flex justify-content-center align-items-center">
                            <img style="width: 200px; height:200px" class="picture" src="{{$url}}/img/rectangle_2.png" alt="Picture" />
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div>
                                <p style="text-align: justify; margin-right: 30px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis architecto, illo, nesciunt dolor deleniti saepe eligendi et rem veritatis sit repellat hic fugiat neque amet ducimus vel? Est aut aperiam, tempora doloribus magni maiores ab! Aspernatur nulla totam veniam voluptatum.</p>
                                <div>
                                    <img class="picture" src="{{$url}}/img/Picture14.png" alt="Picture" style="border-radius: 50px;" />
                                    <span style="margin-left: 20px;"><b>ipsum dolor sit amet.</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5" style="margin-top: 100px;">
            <div class="title text-center">
                <h1>Project Portofolio JrCodeStudio</h1>
            </div>
            <div class="container" style="margin-top: 50px;">
                @foreach ($data as $item)
                    <div class="row mb-5">
                        <div class="col">
                            <div class="card border-0">
                                <img src="{{ asset('storage/' . $item->image) }}" class="w-100" alt="">
                                {{-- <span>{{$item->image}}</span> --}}
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                            <div>
                                <div>
                                    <h3>{{$item->title}}</h3>
                                </div>
                                <div class="mb-3">
                                    <article>
                                        {{$item->body}}
                                    </article>
                                </div>
                                <div>
                                    <a href="{{$item->link}}" class="btn btn-primary">Coba Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end align-items-center">
                <div class="card border-0" style="width: 20rem;">
                    <img src="{{$url}}/img/message.jpg" alt="">
                    <div class="card-body text-center">
                        <a href="" class="btn btn-primary">
                            <i class="bi bi-whatsapp"></i>
                            Chat via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <div class="card border-0" style="width: 20rem;">
                    <img src="{{$url}}/img/schedule.jpg" alt="">
                    <div class="card-body text-center">
                        <a href="/portofolio/schedule" class="btn btn-primary">
                            <i class="bi bi-calendar-plus"></i>
                            Jadwalkan Sekarang!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======= Section 2 ======= -->
    <!-- <div class="section-2">
            <div class="overlap-group4">
                <div class="rectangle-3">
                    <div class="bio">
                        <img class="line-1" src="assets/img/Ellipse_1.png" alt="Line 1" />
                        <img class="picture" src="assets/img/Rectangle_4.png" alt="Picture" />
                        <div class="flex-col">
                            <div class="name">Rita Dewi</div>
                            <div class="position inter-normal-white-16px">Lorem ipsum</div>
                        </div>
                    </div>
                </div>
                <p class="text inter-normal-white-16px">
                    "Lorem ipsum dolor sit amet, consectetur adipscing elit. Egestas..."
                </p>
                <img class="picture-1" src="assets/img/picture1.jpg" alt="Picture" />
            </div>
        </div> -->

    <!--======= Project Section ======= -->
    <!-- <div class="frame-6">
        <div class="title-1 inter-semi-bold-32px text-center fs-4" style="font-weight: bold;">Projek Portofolio jrCodeStudio</div>
        <div class="flex-row">
            <img class="picture-2" src="assets/img/Picture1.png" alt="Picture" />
            <div class="flex-col-1">
                <div class="title-project fw-bold">Sistem Informasi Pelayanan Warga Berbasis Web</div>
                <p class="description">
                    Rukun Tetangga merupakan gambaran menyeluruh tentang karakter suatu RT, profil Rukun Tetangga berguna untuk informasi dan kegiatan untuk menentukan langkah dalam kemajuan Rukun Tetangga.
                </p>
                <div>
                    <button class="btn btn-primary">Coba Sekarang</button>
                </div>
            </div>
        </div>
        <div class="flex-row">
            <img class="picture-2" src="assets/img/Picture2.png" alt="Picture" />
            <div class="flex-col-1">
                <div class="title-project">SISTEM REPOSITORI SKRIPSI DI PROGRAM STUDI TEKNIK INFORMATIKA FAKULTAS TEKNIK UMJ</div>
                <p class="description">
                    Web yang mempermudahkan mahasiswa sehingga dapat menghasilkan sarana pengelolaan berkas skripsi di Program Studi Teknik Informatika (FT - UMJ).
                </p>
                <div>
                    <button class="btn btn-primary">Coba Sekarang</button>
                    
                </div>
            </div>
        </div>
        <div class="flex-row">
            <img class="picture-2" src="assets/img/Picture3.png" alt="Picture" />
            <div class="flex-col-1">
                <div class="title-project">APLIKASI DIREKTORI USAHA MIKRO KECIL MENENGAH (UMKM)</div>
                <p class="description">
                    Memudahkan promosi dan pencarian produk UMKM sehingga dapat menarik calon investor untuk bekerja sama dengan pelaku UMKM dan menanamkan modal.
                </p>
                <div>
                    <button class="btn btn-primary">Coba Sekarang</button>
                    
                </div>
            </div>
        </div>
        <div class="flex-row">
            <img class="picture-2" src="assets/img/Picture4.png" alt="Picture" />
            <div class="flex-col-1">
                <div class="title-project">Point Of Sale (POS)</div>
                <p class="description">
                    Basis mobile yang dirancang untuk kasir dan owner dibuat agar lebih fleksibel pemakainanya.
                </p>
                <div>
                    <button class="btn btn-primary">Coba Sekarang</button>
                    
                </div>
            </div>
        </div>
    </div> -->

    <!--======= Project Section ======= -->
    <!-- <div class="frame-7">
        <div class="title-2 inter-semi-bold-black-32px">Lorem ipsum</div>
        <div class="overloap-group-container">
            <div class="overloap-group3">
                <img class="akar-iconschat-dota" src="assets/img/Vector_2.png" alt="akar-icons:chat-dots" />
                <div class="live-chat inter-medium-black-24px">Live Chat</div>
                <div class="whatsapp-container">
                    <img class="logoswhatsapp-icon" src="logos-whatsapp-icon.svg" alt="logos:whatsapp-icon" />
                    <div class="chat-via-whatsapp inter-normal-white-14px">Chat via Whatsapp</div>
                </div>
            </div>
            <div class="overloap-group2">
                <div class="overloap-group1">
                    <div class="jadwalkan-meeting inter-medium-black-24px">Jadwalkan Meeting</div>
                    <div class="overloap-group">
                        <div class="jadwalkan-sekarang inter-normal-white-14px">Jadwalkan Sekarang</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</main>

@endsection