<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset("backend/images/logo m.png") }}">
    <title>Posyandu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lp/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lp/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lp/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('lp/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('lp/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5 navbar-brand brand-logo mr-5">
            <img src="{{ asset('backend/images/logo_fiks.png') }}" class="mr-2" alt="logo" style="width: 200px"/>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">LOG IN<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Posyandu Sahabat Masyarakat</h1>
                <h3 class="display-4 text-white mb-5" style="text-shadow: 2px 2px 8px #000000"><i>Desa Renggeang</i></h3>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">{{ $balita->count() }}</h2>
                            <p class="text-light mb-0">Balita</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">{{ $hamil->count() }}</h2>
                            <p class="text-light mb-0">Ibu Hamil</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">{{ $pus->count() }}</h2>
                            <p class="text-light mb-0">Pasangan Usia Subur</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel"> 
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('lp/img/carousel_1.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <h3 class="display-1 text-white mb-0" style="text-shadow: 2px 2px 8px #000000">Perkembangan Balita</h3>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('lp/img/carousel_2.jpeg') }}" alt="">
                        <div class="owl-carousel-text">
                            <h3 class="display-1 text-white mb-0" style="text-shadow: 2px 2px 8px #000000">Kesehatan Ibu Hamil</h3>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('lp/img/carousel_3.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <h3 class="display-1 text-white mb-0" style="text-shadow: 2px 2px 8px #000000">Konsultasi KB</h3>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('lp/img/carousel_4.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <h3 class="display-1 text-white mb-0" style="text-shadow: 2px 2px 8px #000000">Program Pasangan Usia Subur</h3>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('lp/img/carousel_5.jpg') }}" alt="">
                        <div class="owl-carousel-text">
                            <h3 class="display-1 text-white mb-0" style="text-shadow: 2px 2px 8px #000000">Controlling Pasca Melahirkan</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('lp/img/about_2.jpg') }}" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('lp/img/about_1.jpg') }}" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4">Kenapa Harus Ke Posyandu? Ini Alasan Pentingnya Rutin Membawa Balita ke Posyandu!</h1>
                    <p>Membawa balita ke Posyandu secara rutin menjadi hal yang perlu dilakukan. Melalui Posyandu, ibu bisa memantau pertumbuhan dan perkembangan sang buah hati, termasuk pemenuhan gizinya.</p>
                    <p class="mb-4">Tak hanya untuk anak, Posyandu juga membawa manfaat untuk ibu hamil dan menyusui. Ibu hamil dapat memeriksakan kondisi kehamilan, tekanan darah, hingga berat badan di Posyandu. Selain itu, ibu hamil juga bisa bertanya pada petugas tentang persiapan persalinan dan pemberian ASI pertama.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
                <h1>Health Care Solutions</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Cardiology</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Pulmonary</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Neurology</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row">
                    <h5 class="col text-light mb-4">Alamat</h5>
                    <p class="col mb-2"><i class="fa fa-map-marker-alt me-3"></i>Desa Renggeang, Kecamatan Limboro, Kabupaten Polman</p>
                    <p class="col mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="col mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#"></a> Production by PPL_4 INF B 20
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Created By <a class="border-bottom" href="https://htmlcodex.com">Bar Kheun</a>
                        </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lp/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lp/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lp/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lp/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lp/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lp/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lp/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lp/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('lp/js/main.js') }}"></script>
</body>

</html>