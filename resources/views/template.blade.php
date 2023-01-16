<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jrcodestudio | {{$title}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{$url}}/img/favicon/jrCodeStudio.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <!-- Vendor CSS Files -->
    <link href="{{$url}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{$url}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$url}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{$url}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{$url}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{$url}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{$url}}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Content ======= -->
    <div>
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>jrCodeStudio</h3>
                        <p>
                            Jl. Cempaka Putih Tengah Nomor XXII<br>
                            Kota Jakarta Pusat, Kode POS 10510<br>
                            Indonesia<br><br>
                            <strong>Phone:</strong> +62 8129390252<br>
                            <strong>Email:</strong> info@jrCodeStudio.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pricing</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus SQL</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus Node JS</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus Laravel</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus React JS</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus HTML & CSS</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus Consultant IT</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Bergabung Sekarang dan Dapatkan Informasi Menarik tentang Promosi Akademik dari Kami</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>jrCodeStudio</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">jrCodeStudio</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- jQuery Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{$url}}/vendor/aos/aos.js"></script>
    <script src="{{$url}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{$url}}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{$url}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{$url}}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{$url}}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{$url}}/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#pembayaran').on('change', function() {
                var getBank = $('#pembayaran').val();


                if (getBank == "Bank BCA") {
                    $('#NoVa').text("8398391093");
                    $('#img').attr('src', '{{$url}}/img/payment/logo-bca.png')
                } else if (getBank == "Bank BTN") {
                    $('#NoVa').text("0293883728");
                    $('#img').attr('src', '{{$url}}/img/payment/logo-btn.png')
                } else if (getBank == "Bank BNI") {
                    $('#NoVa').text("9392003847");
                    $('#img').attr('src', '{{$url}}/img/payment/logo-bni.png')
                } else if (getBank == "Indomaret") {
                    $('#NoVa').text("9283728910");
                    $('#img').attr('src', '{{$url}}/img/payment/logo-indomaret.png')
                } else if (getBank == "Alfamaret") {
                    $('#NoVa').text("9283728910");
                    $('#img').attr('src', '{{$url}}/img/payment/logo-alfamaret.png')
                } else if (getBank == "OVO") {
                    $('#NoVa').text("0892837727");
                    $('#img').attr('src', '{{$url}}/img/payment/logo-ovo.png')
                } else {
                    $('#NoVa').text("0892837727");
                    $('#img').attr('src', '{{$url}}/img/payment/logo-ovo.png')
                }
            });

            $('#test').on('change', function() {
                var getPaket = $('#test').val();

                if (getPaket == "1 Bulan") {
                    $('#harga').text("IDR. 150.000,-")
                    $('#getHarga').val('150.000');

                } else if (getPaket == "3 Bulan") {
                    $('#harga').text("IDR. 500.000,-")
                    $('#getHarga').val('500.000');
                } else {
                    $('#harga').text("IDR. 700.000,-")
                    $('#getHarga').val('700.000');
                }

            });
        });
    </script>


</body>

</html>