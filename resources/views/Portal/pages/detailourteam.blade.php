<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 0.5rem 2rem;
        }

        .nav-logo img {
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
            background-color: #d3c5e5 !important;
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

        /*  */

        .wrapper .title {
            text-align: center;
            margin-top: 150px;
        }

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

        .banner {
            text-align: center;
        }

        .banner-image {
            margin: 20px 0 0;
            /* Menambahkan margin di atas pada tampilan mobile */
        }


        .title h6 {
            display: inline-block;
            padding: 20px;
            color: #585757;
            font-size: 30px;
            font-weight: 500;
            letter-spacing: 1.2px;
            word-spacing: 5px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            text-transform: uppercase;
            backdrop-filter: blur(15px);
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            word-wrap: break-word;
        }

        .wrapper .card_Container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 40px 0;
        }

        .card_Container .card {
            position: relative;
            width: 300px;
            height: 400px;
            margin: 20px;
            overflow: hidden;
            box-shadow: 0 30px 30px -20px rgba(0, 0, 0, 1),
                inset 0 0 0 1000px rgba(67, 52, 109, .6);
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card .imbBx,
        .imbBx img {
            width: 100%;
            height: 100%;
        }

        .card .content {
            position: absolute;
            bottom: -160px;
            width: 100%;
            height: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            backdrop-filter: blur(15px);
            box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: bottom 0.5s;
            transition-delay: 0.65s;
        }

        .card:hover .content {
            bottom: 0;
            transition-delay: 0s;
        }

        .content .contentBx h3 {
            text-transform: uppercase;
            color: #fff;
            letter-spacing: 2px;
            font-weight: 600;
            font-size: 20px;
            text-align: center;
            margin: 20px 0 15px;
            line-height: 1.1em;
            transition: 0.5s;
            transition-delay: 0.6s;
            opacity: 0;
            transform: translateY(-20px);
        }

        .card:hover .content .contentBx h3 {
            opacity: 1;
            transform: translateY(0);
        }

        .content .contentBx h3 span {
            font-size: 15px;
            font-weight: 300;
            text-transform: initial;
        }

        .content .sci {
            position: relative;
            bottom: 10px;
            display: flex;
        }

        .content .sci li {
            list-style: none;
            margin: 0 10px;
            transform: translateY(40px);
            transition: 0.5s;
            opacity: 0;
            transition-delay: calc(0.2s * var(--i));
        }

        .card:hover .content .sci li {
            transform: translateY(0);
            opacity: 1;
        }

        .content .sci li a {
            color: #fff;
            font-size: 24px;
        }

        .card-lain {
            width: 400px;
            height: 280px;
            background: white;
            border-radius: 32px;
            padding: 3px;
            margin: 0 20px;
            position: relative;
            box-shadow: #604b4a30 0px 70px 30px -50px;
            transition: all 0.5s ease-in-out;
        }

        .card-lain .mail {
            position: absolute;
            right: 2rem;
            top: 1.4rem;
            background: transparent;
            border: none;
        }

        .card-lain .mail svg {
            stroke: #fbb9b6;
            stroke-width: 3px;
        }

        .card-lain .mail svg:hover {
            stroke: #f55d56;
        }

        .card-lain .profile-pic {
            position: absolute;
            width: calc(100% - 6px);
            height: calc(100% - 6px);
            top: 3px;
            left: 3px;
            border-radius: 29px;
            z-index: 1;
            border: 0px solid #fbb9b6;
            overflow: hidden;
            transition: all 0.5s ease-in-out 0.2s, z-index 0.5s ease-in-out 0.2s;
        }

        .card-lain .profile-pic img {
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 100%;
            -o-object-position: 0px 0px;
            object-position: 0px 0px;
            transition: all 0.5s ease-in-out 0s;
        }

        .card-lain .profile-pic svg {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: 0px 0px;
            object-position: 0px 0px;
            transform-origin: 45% 20%;
            transition: all 0.5s ease-in-out 0s;
        }

        .card-lain .bottom {
            position: absolute;
            bottom: 3px;
            left: 3px;
            right: 3px;
            background: #fbb9b6;
            top: 80%;
            border-radius: 29px;
            z-index: 2;
            box-shadow: rgba(96, 75, 74, 0.1882352941) 0px 5px 5px 0px inset;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0s;
        }

        .card-lain .bottom .content {
            position: absolute;
            bottom: 0;
            left: 1.5rem;
            right: 1.5rem;
            height: 160px;
        }

        .card-lain .bottom .content .name {
            display: block;
            font-size: 1.2rem;
            color: white;
            font-weight: bold;
            padding-top: 24px;
        }

        .card-lain .bottom .content .about-me {
            display: block;
            font-size: 0.9rem;
            color: white;
            margin-top: 1rem;
        }

        .card-lain .bottom .bottom-bottom {
            position: absolute;
            bottom: 1rem;
            left: 1.5rem;
            right: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-lain .bottom .bottom-bottom .social-links-container {
            display: flex;
            gap: 1rem;
        }

        .card-lain .bottom .bottom-bottom .social-links-container svg {
            height: 20px;
            fill: white;
            filter: drop-shadow(0 5px 5px rgba(165, 132, 130, 0.1333333333));
        }

        .card-lain .bottom .bottom-bottom .social-links-container svg:hover {
            fill: #f55d56;
            transform: scale(1.2);
        }

        .card-lain .bottom .bottom-bottom .button {
            background: white;
            color: #fbb9b6;
            border: none;
            border-radius: 20px;
            font-size: 0.6rem;
            padding: 0.4rem 0.6rem;
            box-shadow: rgba(165, 132, 130, 0.1333333333) 0px 5px 5px 0px;
        }

        .card-lain .bottom .bottom-bottom .button:hover {
            background: #f55d56;
            color: white;
        }

        .card-lain:hover {
            border-top-left-radius: 55px;
        }

        .card-lain:hover .bottom {
            top: 20%;
            border-radius: 80px 29px 29px 29px;
            transition: all 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0.2s;
        }

        .card-lain:hover .profile-pic {
            width: 100px;
            height: 100px;
            aspect-ratio: 1;
            top: 10px;
            left: 10px;
            border-radius: 50%;
            z-index: 3;
            border: 7px solid #fbb9b6;
            box-shadow: rgba(96, 75, 74, 0.1882352941) 0px 5px 5px 0px;
            transition: all 0.5s ease-in-out, z-index 0.5s ease-in-out 0.1s;
        }

        .card-lain:hover .profile-pic:hover {
            transform: scale(1.3);
            border-radius: 0px;
        }

        .card-lain:hover .profile-pic img {
            transform: scale(2.5);
            -o-object-position: 0px 25px;
            object-position: 0px 25px;
            transition: all 0.5s ease-in-out 0.5s;
        }

        .card-lain:hover .profile-pic svg {
            transform: scale(2.5);
            transition: all 0.5s ease-in-out 0.5s;
        }

        @media screen and (max-width: 768px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

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

    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-logo">
            <img src="{{URL::asset('/images/logoputihsm.png') }}" alt="Logo" id="navbarLogo">
        </div>
        <ul class="nav-links">
            <li><a href="/">↖ Exit</a></li>
            <li><a href="/portal/about">About</a></li>
            <li><a href="/portal/service">Service</a></li>
            <li><a href="/portal/portofolio">Portofolio</a></li>
            <li><a href="/portal/platform">Platform</a></li>
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
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <h1 class="banner-heading">Team {{ $data['kantorwilayah']->name_kantorwilayah }}</h1>
                <p class="banner-text">Kenalan lebih dalam dengan team {{ $data['kantorwilayah']->name_kantorwilayah }}
                </p>
                <a href="#ourteam" class="btn btn-primary">Disvocer More</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{!! asset('images/ourteambanner.png') !!}" alt="Banner Image" class="img-fluid banner-image">
            </div>
        </div>
    </div>
    <div class="wrapper" id="ourteam">

        <div class="title">
            <h6>{{ $data['kantorwilayah']->name_kantorwilayah }}</h6>
        </div>


        {{-- start team lain --}}
        <div class="card_Container">
            @foreach ($data['get_data'] as $struktur)
            <div class="card">
                <div class="imbBx">
                    <img src="{{ asset('storage/' . $struktur->thumbnail_struktur) }}" alt="">
                </div>
                <div class="content">
                    <div class="contentBx">
                        <h3>{{ $struktur->name_struktur }} <br><span>{{ $struktur->position->name }}</span></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- end team lain --}}


    </div>

    @Include('Portal.components.footer')

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

</body>

</html>
