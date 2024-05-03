<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-JsOKDPUzB6Q+kqJyPHDgFj4+zxSlPJxc7w0r5RnAvvF5+PK9yn6o/GfL9MDAjM4f" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Galada&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* Your existing styles plus Bootstrap override if needed */
        @font-face {
            font-family: 'Proxima Nova';
            src: url('/public/fonts/Proxima/Fontspring-DEMO-proximanova-extrabold.otf') format('woff2');
            font-weight: 600;
            font-style: normal;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            margin: 0;
            background-color: #D3C5E5;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .banner-head {
            padding-top: 220px;
        }

        .banner-title {
            font-size: 70px;
            font-weight: 900;
        }

        .banner-flex {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .bagian-kiri {
            flex: 1;
            text-align: center;
            position: relative;
            left: 00px;
        }

        .bagian-kanan {
            flex: 1;
            text-align: center;
            position: relative;
            right: 81px;
        }

        .heading-kiri,
        .heading-kanan {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
        }

        .bagian-kiri img,
        .bagian-kanan img {
            display: block;
            /* Mengatur gambar agar berada di tengah */
            margin: 0 auto;
            max-width: 595px;
        }

        .beberapa {
            font-family: "Galada", cursive;
            font-weight: 400;
            letter-spacing: 6px;
            font-size: 40px;
            margin-top: 140px;
        }

        .main-content {
            margin-top: 250px;
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


        .title-container {
            position: relative;
            /* background-color: #735DA5; */
            background-image: url('{{ asset('images/wave3.png') }}');
            background-size: cover;
            height: 290px;
        }

        .title-page {
            position: relative;
            z-index: 1;
            color: white;
            padding-top: 120px;
            padding-bottom: 30px;
            /* Sesuaikan padding top dengan kebutuhan */
            text-align: center;
        }


        /* card start */
        .container-card {
            margin-top: 60px;
        }

        .card {
            position: relative;
            width: 190px;
            height: 254px;
            background-color: #000;
            display: flex;
            flex-direction: column;
            justify-content: end;
            padding: 12px;
            gap: 12px;
            border-radius: 8px;
            cursor: pointer;
            color: white;
        }

        .card::before {
            content: '';
            position: absolute;
            inset: 0;
            left: -5px;
            margin: auto;
            width: 200px;
            height: 264px;
            border-radius: 10px;
            background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100%);
            z-index: -10;
            pointer-events: none;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card::after {
            content: "";
            z-index: -1;
            position: absolute;
            inset: 0;
            background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100%);
            transform: translate3d(0, 0, 0) scale(0.95);
            filter: blur(20px);
        }

        .heading {
            font-size: 18px;
            text-transform: capitalize;
            font-weight: 700;
        }

        .card p:not(.heading) {
            font-size: 14px;
        }

        .card p:last-child {
            color: #e81cff;
            font-weight: 600;
        }

        .card:hover::after {
            filter: blur(30px);
        }

        .card:hover::before {
            transform: rotate(-90deg) scaleX(1.34) scaleY(0.77);
        }


        /* card end */
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
            background-color: #f7f7f7;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .cta:hover .hover-underline-animation:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        @media (max-width: 992px) {

            .burger-menu {
                display: block;
            }

            .nav-links {
                flex-direction: column;
                background-color: #333;
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
        }

        @media (max-width: 768px) {

            /* Navbar */
            .logo img {
                margin-left: 20px;
                /* Atur margin kiri logo */
                height: 40px;
                /* Atur tinggi logo */
            }

            .nav-links {
                flex-direction: column;
                background-color: #333;
                position: fixed;
                right: 0;
                top: 58px;
                width: 100%;
                display: none;
                padding: 10px 0;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                text-align: center;
                padding: 10px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            /* Burger menu styling */
            .burger-menu {
                display: block;
                position: absolute;
                top: 0;
                right: 20px;
                margin-top: 5px;
            }

            .burger-menu div {
                width: 25px;
                height: 3px;
                background-color: white;
                margin: 5px;
                transition: all 0.3s ease;
            }

            /* Banner */
            .banner-head {
                padding-top: 100px;
                /* Kurangi padding atas banner */
            }

            .banner-title {
                font-size: 40px;
                /* Kurangi ukuran teks judul banner */
            }

            .bagian-kiri {
                display: none;
            }

            .heading-kiri,
            .subtitle-kiri {
                display: none;
            }

            /* Bagian Kiri dan Kanan Banner */
            .bagian-kiri,
            .bagian-kanan {
                margin-top: 20px;
                /* Sesuaikan margin atas untuk menyesuaikan dengan padding banner */
            }

            /* Ukuran Gambar */
            .bagian-kiri img,
            .bagian-kanan img {
                max-width: 80%;
                /* Agar gambar tidak keluar dari kontainer */
            }

            .bagian-kanan {
                margin-left: 150px;
            }


            /* Konten Utama */
            .container-card {
                margin-top: 30px;
                /* Atur margin atas konten utama */
                margin-left: -10px;
            }

            .card {
                width: calc(30% - 10px);
                /* Lebar kartu diatur agar 2 kartu dapat muat dalam satu baris */
                margin-bottom: 20px;
            }

            .card::before {
                width: 100%;
                /* Lebar latar belakang kartu */
                height: 200px;
                /* Tinggi latar belakang kartu */
            }
        }

        @media (max-width: 576px) {

            .card {
                width: 365px;
                margin-top: 95px;
            }

            .burger-menu {
                display: block;
            }

            .nav-links {
                flex-direction: column;
                background-color: #333;
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

            .card::before {
                width: 200px;
                /* Atur lebar yang lebih kecil */
                height: 264px;
                /* Atur tinggi yang lebih kecil */
            }
        }

        @media (max-width: 400px) {
            .card::before {
                width: 160px;
                /* Atur lebar yang lebih kecil */
                height: 204px;
                /* Atur tinggi yang lebih kecil */
            }
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
            <img src="{{URL::asset('/images/logoputihsm.png') }}" alt="Logo"> <!-- Replace with your logo path -->
        </div>
        <ul class="nav-links">
            <li><a href="/portal">↖ Exit</a></li>
            <li><a href="/portal/about">About</a></li>
            <li><a href="/portal/service">Service</a></li>
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
    <div class="container banner-head text-center">
        <div class="row">
            <div class="col">
                <h1 class="banner-title"><b>Portofolio</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="banner-flex">
                    <div class="bagian-kiri">
                        <img src="{{URL::asset('/images/porto-kiri.png') }}" class="banner-kiri" alt="">
                        <h2 class="heading-kiri"><strong>Event Semarak Semarang</strong></h2>
                        <p class="subtitle-kiri">Bintang tamu Denny Caknan</p>
                    </div>
                    <div class="bagian-kanan">
                        <img src="{{URL::asset('/images/porto-kanan.png') }}" class="banner-kanan" alt="">
                        <h2 class="heading-kanan"><strong>Event Semarak Semarang</strong></h2>
                        <p class="subtitle-kanan">Bintang Tamu Sandiaga Uno</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h2 class="beberapa">Beberapa Project yang Sudah Kami Kerjakan</h2>
            </div>
        </div>
    </div>


    <div class="container text-center container-card">
        <div class="row">
            @foreach ($data['get_portofolio'] as $portofolio)
            <div class="col-sm-3 mb-4" style="margin-bottom: 60px; margin-top:60px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/' . $portofolio->thumbnail_portofolio) }}" alt="">
                    <p class="heading">{{ $portofolio->title_portofolio }}</p>
                    <p>{{ $portofolio->description }}</p>
                    <a href="{{ $portofolio->link_portofolio }}" target="_blank" class="cta"
                        style="text-decoration: none;">
                        <span class="hover-underline-animation" style="color: #f2f2f2"> Selengkapnya</span>
                        <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10"
                            viewBox="0 0 46 16">
                            <path id="Path_10" data-name="Path 10"
                                d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                transform="translate(30)" fill="#ffffff"></path>
                        </svg>
                    </a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
