<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="{{ asset('css/platform.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('/public/fonts/Proxima/Fontspring-DEMO-proximanova-extrabold.otf') format('woff2');
            font-weight: 600;
            font-style: normal;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 0.5rem 2rem;
            font-size: 14px;
        }
        .user-menu {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .user-menu a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            /* Space between icon and username */
        }

        .user-menu i {
            font-size: 1rem;
            /* Adjust icon size */
        }

        .user-dropdown {
            display: none;
            position: absolute;
            right: 0;
            /* margin-top: 5px; */
            background-color: black;
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            overflow: hidden;
            z-index: 1;
        }

        .user-dropdown a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }

        .user-dropdown a:hover {
            background-color: #333;
        }

        .user-menu:hover .user-dropdown {
            display: block;
        }

        .logo img {
            margin-left: 50px;
            height: 40px;
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
            color: #ffffff;
            transition: color 0.3s ease-in-out;
        }

        .nav-links a:hover {
            color: #4c4177;
        }

        /* edit navbar*/
        .navbar {
            position: -webkit-sticky;
            /* For Safari */
            position: sticky;
            top: 0;
            z-index: 1000;
            /* Make sure the navbar is above other content */
        }

        .navbar-scrolled {
            background-color: #fff !important;
            /* Override other background styles */
            transition: background-color 0.3s;
            /* Smooth transition */
        }

        .navbar-scrolled .nav-links a {
            color: #000 !important;
            /* Change link color for better visibility on white background */
        }

        .navbar-scrolled .nav-links a:hover {
            color: blueviolet !important;
            /* Change link color for better visibility on white background */
        }

        .navbar-scrolled .burger-menu div {
            background-color: #333 !important;
            /* Change burger menu color for visibility */
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

        .description {
            color: #000;
            /* Warna teks putih untuk kontras yang baik dengan background gelap */
            background-color: rgba(0, 0, 0, 0.5);
            /* Memberikan sedikit transparansi */
            margin: 1rem 0;
            /* Memberikan margin atas dan bawah */
            padding: 2rem;
            /* Memberikan padding untuk ruang di dalam box */
            border-radius: 15px;
            /* Memberikan border-radius untuk soft corner */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Menambahkan box-shadow untuk efek depth */
        }

        /*  banner */


        @media (max-width: 768px) {
            .burger-menu {
                display: block;
            }

            .nav-links {
                flex-direction: column;
                background-color: #ffffff;
                position: absolute;
                right: 0;
                top: 58px;
                width: 100%;
                display: none;
            }

            .nav-links li {
                text-align: center;
                padding: 10px 0;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                color: #000;
            }

            .navbar-scrolled .nav-links {
                background-color: #333 !important;
                /* Change burger menu color for visibility */
            }

            .navbar-scrolled .nav-links a {
                color: #ffffff !important;
                /* Change link color for better visibility on white background */
            }

            /* Additional responsive adjustments for container and sections */
        }

        /* Burger menu animation */
        .burger-menu.toggle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .burger-menu.toggle .line2 {
            opacity: 0;
        }

        .burger-menu.toggle .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
        }

    </style>


</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{URL::asset('/images/logoputihsm.png') }}" alt="Logo" id="navbarLogo">
        </div>
        <ul class="nav-links">
            <li><a href="/portal">↖ Exit</a></li>
            <li><a href="/portal/about">About</a></li>
            <li><a href="/portal/service">Service</a></li>
            <li><a href="/portal/portofolio">Portofolio</a></li>
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


    <section id="tranding">
        <div class="container banner-head">
            <h2 class="banner-text">Platform.</h2>
            <h4 class="banner-text-sub-1">Ketahui Lebih <br>Tentang Kami</h4>
            <h4 class="banner-text-sub-2">Jangkau Informasi <br> Lebih Banyak</h4>
            <h4 class="banner-text-sub-3">Telusuri Lebih PLatform Kami</h4>
        </div>
        <div class="container" style="margin-top: 50px;">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    @foreach ($data['get_platform'] as $platform)
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('storage/' . $platform->thumbnail_platform) }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name" style="color: #FFD601; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                    {{ $platform->name_socmed }}
                                </h2>
                                <h3 class="food-rating">
                                    <span><a style="--clr: #7808d0" class="button" href="/portal/platform/{{ $platform->name_socmed }}">
                                            <span class="button__icon-wrapper">
                                                <svg width="10" class="button__icon-svg"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                                                    <path fill="currentColor"
                                                        d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z">
                                                    </path>
                                                </svg>

                                                <svg class="button__icon-svg  button__icon-svg--copy"
                                                    xmlns="http://www.w3.org/2000/svg" width="10" fill="none"
                                                    viewBox="0 0 14 15">
                                                    <path fill="currentColor"
                                                        d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z">
                                                    </path>
                                                </svg>
                                            </span>
                                            Selengkapnya
                                        </a></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    @endforeach
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>  
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>

      @Include('Portal.components.footer')

    <script>
        // Burger menu functionality
        document.addEventListener('DOMContentLoaded', function () {
            const burgerMenu = document.querySelector('.burger-menu');
            const navLinks = document.querySelector('.nav-links');

            burgerMenu.addEventListener('click', function () {
                navLinks.classList.toggle('active');
                burgerMenu.classList.toggle('toggle');
            });
        });

    </script>

    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 20) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

    </script>

    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            const logo = document.getElementById(
                'navbarLogo'); // Akses logo menggunakan ID yang baru ditambahkan

            if (window.scrollY > 20) {
                navbar.classList.add('navbar-scrolled');
                logo.src =
                    "{{URL::asset('/images/logosmgen.png') }}"; // Ganti dengan path logo baru saat discroll
            } else {
                navbar.classList.remove('navbar-scrolled');
                logo.src =
                    "{{URL::asset('/images/logoputihsm.png') }}"; // Kembalikan ke logo asli saat kembali ke atas
            }
        });

    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/platform.js') }}"></script>
    <script src="https://kit.fontawesome.com/73c0197af7.js" crossorigin="anonymous"></script>

</body>

</html>
