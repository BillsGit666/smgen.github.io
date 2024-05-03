<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" <!--
        Customized Bootstrap Stylesheet -->


    <!-- Template Stylesheet -->
    <link href="{{ asset('css/service.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/banner.css') }}" rel="stylesheet" type="text/css" />


    <style>
        html {
            scroll-behavior: smooth;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #735DA5;
            padding: 0.5rem 2rem;
            position: fixed;
            /* Membuat navbar tetap pada posisi */
            top: 0;
            /* Mengatur navbar agar berada di paling atas halaman */
            width: 100%;
            /* Memastikan navbar membentang di seluruh lebar halaman */
            z-index: 1000;
            /* Memastikan navbar selalu di atas konten lain */
        }

        .logo img {
            margin-left: 50px;
            height: 50px;
            /* Adjust based on your logo's size */
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            padding: 0 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            transition: color 0.3s ease-in-out;
        }

        .nav-links a:hover {
            color: white;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.7), 0 0 10px rgba(255, 255, 255, 0.5), 0 0 12px rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* banner.css */
        .banner {
            background-color: #FFFFFF;
            padding: 80px 0;
            padding-top: 100px;
        }

        .banner-heading {
            margin-top: 50px;
            font-size: 2rem;
            /* Contoh ukuran font */
            font-weight: bold;
        }

        .banner-text {
            font-size: 1rem;
            /* Contoh ukuran font untuk teks */
            margin-bottom: 20px;
        }

        .banner-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin-left: auto;
            /* Mendorong gambar ke kanan */

        }

        /* Burger menu styling */
        .burger-menu {
            display: none;
            cursor: pointer;
        }

        .burger-menu div {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 5px;
            transition: all 0.3s ease;
        }

        .rounded-box {
            border-radius: 40px;
        }

        .image-rounded {
            border-radius: 10px;
        }

        .service-item {
            min-height: 450px;
        }

        /*  */

        @media screen and (max-width: 768px) {
            .navbar .burger-menu {
                display: block;
            }

            .navbar .nav-links {
                flex-direction: column;
                background-color: #D3C5E5;
                position: absolute;
                top: 58px;
                /* Adjust based on the height of your navbar */
                right: 0;
                width: 100%;
                display: none;
                padding-top: 1rem;
                /* Optional: Adds some space at the top */
            }

            .navbar .nav-links li {
                padding: 10px 0;
                width: 100%;
                margin-left: 20px;
            }

            .navbar .nav-links.active {
                display: block;
                /* This will display the nav-links when .active is added */
            }

            .navbar .logo img {
                margin-left: 0;
                /* Optional: Removes the margin in the mobile view */
            }

            .banner {
                text-align: center;
            }

            .banner-image {
                margin: 20px 0 0;
                /* Menambahkan margin di atas pada tampilan mobile */
            }

            .burger-menu.toggle .line1 {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .burger-menu.toggle .line2 {
                opacity: 0;
            }

            .burger-menu.toggle .line3 {
                transform: rotate(45deg) translate(-5px, -6px);
            }
        }
    </style>
</head>

<body>

    <!-- Banner Start -->
    <div class="container-xxl banner">
        <div class="container">
            <div class="row align-items-center">
                <!-- Tulisan di sisi kiri, berikan order lebih besar pada tampilan kecil -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <h1 class="banner-heading">Our Service</h1>
                    <p class="banner-text">Jelajahi untuk tahu lebih layanan apa yang bisa kita berikan kepada anda</p>
                    <a href="#service" class="btn btn-primary">Disvocer More</a>
                </div>
                <!-- Gambar di sisi kanan, berikan order lebih kecil pada tampilan kecil -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{!! asset('images/service-banner.png') !!}" alt="Banner Image" class="img-fluid banner-image">
                </div>
            </div>
        </div>
    </div>


    <!-- Banner End -->


    <nav class="navbar">
        <div class="logo">
            <img src="{{URL::asset('/images/logoputihsm.png')}}" alt="Logo"> <!-- Adjust the logo path -->
        </div>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/portal/about">About</a></li>
            <li><a href="/portal/portofolio">Portofolio</a></li>
            <li><a href="/portal/platform">Platform</a></li>
            <li><a href="/portal/ourteam">Our Team</a></li>
            <li><a href="/portal/contact">Contact Us</a></li>
            @if($data['user'])
            <li class="user-menu">
                <a href="javascript:void(0)">
                    <i class="fas fa-user"></i> {{ $data['user']['name'] }}
                </a>
                <div class="user-dropdown">
                    <a href="/profile">Profile</a>
                    <a href="/portal/logout_portal">Logout</a>
                </div>
            </li>
            @else
            <li class="user-menu">
                <a href="#">
                    <i class="fas fa-user"></i>
                </a>
                <div class="user-dropdown">
                    <a href="/portal/login_user">Login</a>
                </div>
            </li>
            @endif
        </ul>
        <div class="burger-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="text-title"></div>
                <div class="image"></div>
            </div>
        </div>
    </div>

    <div id="service" class="container-xxl bg-white p-0">

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our
                        Services<span></span></p>
                    <h1 class="text-center mb-5">What Solutions We Provide</h1>
                </div>
                <div class="row g-4">
                    @foreach ($data['get_service'] as $service)
                    <div class="mt-5 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded-box">
                            <img class="image-rounded" src="{{URL::asset('storage/' . $service->thumbnail_services) }}"
                                style="max-height: 250px" alt="">
                            <h5 class="mb-3 mt-3"><b>{{ $service->title_services }}</b></h5>
                            <p class="m-0">{{ $service->description_services }}</p>
                            <a class="btn btn-square" href="/portal/contact"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->

    </div>

    @Include('Portal.components.footer')



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoint/waypoint.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        const burgerMenu = document.querySelector('.burger-menu');
        const navLinks = document.querySelector('.nav-links');

        burgerMenu.addEventListener('click', () => {
            // Toggle Nav
            navLinks.classList.toggle('active');

            // Burger Animation
            burgerMenu.classList.toggle('toggle');
        });
    </script>
</body>

</html>
