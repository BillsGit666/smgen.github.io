<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('/public/fonts/Proxima/Fontspring-DEMO-proximanova-extrabold.otf') format('woff2');
            font-weight: 600;
            font-style: normal;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f4f4;
            margin-top: 100px;
        }

               /* Navbar styling */
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

        .cta {
            border: none;
            background: none;
            cursor: pointer;
            padding-top: 2px;
            padding-left: 5px;
        }

        .cta span {
            padding-bottom: 7px;
            font-size: 11px;
            padding-right: 5px;
        }

        .cta svg {
            transform: translateX(-8px);
            transition: all 0.3s ease;
            padding-left: 6px;
        }

        .cta:hover svg {
            transform: translateX(0);
        }

        .cta:active svg {
            transform: scale(0.9);
        }

        .hover-underline-animation {
            position: relative;
            color: #F94D63;
            padding-bottom: 20px;
        }

        .hover-underline-animation:after {
            content: "";
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #F94D63;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .cta:hover .hover-underline-animation:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }


        .margin-up {
            margin-top: 30px;
        }

        .store-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            font-family: 'Proxima Nova', sans-serif;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.6); /* Atur nilai yang sesuai */
            border-radius: 10px;
        }

        .store-logo {
            max-width: 100px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .store-details {
            flex-grow: 1;
        }

        .store-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .store-activity {
            color: #9b9b9b;
        }

        .store-follow {
            font-size: 16px;
            font-weight: bold;
        }

        .store-follow-count {
            font-size: 14px;
            color: #9b9b9b;
        }

        .store-follow-divider {
            border-right: 2px solid #9b9b9b;
            margin: 0 10px;
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .action-button {
            padding: 8px 16px;
            text-align: center;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            margin: 5px;
        }

        .follow-button {
            background-color: #606C5D;
        }

        .chat-button,
        .share-button,
        .info-button {
            background-color: white;
            color: black;
            border: 2px solid black;
        }

        .info-button {
            font-size: 20px;
            padding: 6px 10px;
        }

        .tab-list {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            margin: 5px;
        }

        .active-tab {
            color: black;
            border-bottom: 2px solid blue;
        }

        .right-filter {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .urutkan {
            padding-top: 10px;
            padding-right: 10px;
            font-weight: bold;
        }

        .filter-dropdown {
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
            max-width: 200px;
            border: 2px solid;
        }

        .product-image {
            width: 100%;
            max-width: 100px;
            /* Adjust size as needed */
            height: auto;
            margin: auto;
            display: block;
        }

        .harga,
        .diskon {
            color: #171520;
            font-weight: 500;
            line-height: 22.715px;
        }

        .harga {
            font-size: 18.172px;
        }

        .diskon {
            font-size: 15px;
        }

        .lokasi {
            display: flex;
            width: 100%;
            height: 22.715px;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
        }

        .custom-initial {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .card-body {
            padding: 0.5rem;
            /* Smaller padding */
        }

        .card-title {
            font-size: 13px;
            padding-left: 5px;
        }

        .card-text {
            margin-bottom: 0.25rem;
            margin-left: 4px;
            /* Reduce margin between text */
        }

        .btn-primary {
            font-size: 0.75rem;
            /* Smaller button font size */
            padding: 0.25rem 0.5rem;
            /* Smaller button padding */
            margin-top: 0.5rem;
            /* Add some margin to top of the button */
        }

        .badge {
            font-size: 0.6rem;
            /* Smaller badge font size */
        }

        .product-image {
            width: 100%;
            max-width: 80px;
            /* Adjust size as needed */
            height: auto;
            margin: auto;
            display: block;
        }

        @media (min-width: 768px) {
            .store-info {
                flex-direction: row;
                text-align: left;
            }

            .store-logo {
                margin-bottom: 0;
                margin-right: 20px;
            }

            .action-buttons,
            .tab-list,
            .right-filter {
                justify-content: flex-start;
            }

            .right-filter {
                justify-content: flex-end;
            }
        }

    </style>
</head>

<body>

<nav class="navbar">
        <div class="logo">
            <img src="{{URL::asset('/images/logoputihsm.png') }}" alt="Logo"> <!-- Replace with your logo path -->
        </div>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/portal/about">About</a></li>
            <li><a href="/portal/service">Service</a></li>
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

    <div class="container margin-up">
        <div class="store-info">
            <a href="#infotoko">
                <img class="store-logo" src="{{ asset('storage/' . $data['platform']->thumbnail_platform) }}"
                    alt="Store Logo">
            </a>
            <div class="store-details">
                <?php
                    $totalFollowers = 0;
                    foreach ($data['get_data'] as $detail) {
                        $totalFollowers += $detail->followers;
                    }
                ?>
                <div class="store-title">{{ $data['platform']->name_socmed }}</div>
                <div class="store-activity">Lihat {{ $data['total_children'] }} platform
                    {{ $data['platform']->name_socmed }} kami</div>
                <div class="store-follow">Total pengikut {{ $data['platform']->name_socmed }} kami :
                    {{ number_format($totalFollowers, 0, ',', '.') }} orang</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tab-list">
            <div id="tab-beranda" class="tab active-tab">Platform</div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($data['get_data'] as $detail)
            <div class="col-md-2 mt-5">
                <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.8); border-radius: 10px;">
                    <img class="card-img-top" style="border-radius: 10px;" src="{{ asset('storage/' . $detail->profile_platform) }}"
                        alt="Profile picture">
                    <div class="card-body">
                        <h5 class="card-title">{{ $detail->username_platform }}</h5>
                        <p class="card-text"><strong>{{ number_format($detail->followers, 0, ',', '.') }}</strong></p>
                        <a href="{{ $detail->link_platform }}" target="_blank" class="cta"
                            style="text-decoration: none;">
                            <span class="hover-underline-animation" style="color: #6D7588"> Selengkapnya</span>
                            <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10"
                                viewBox="0 0 46 16">
                                <path id="Path_10" data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(x30)"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
