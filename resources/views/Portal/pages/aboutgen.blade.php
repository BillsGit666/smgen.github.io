<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>About Gen</title>
    <link href="{{ asset('css/aboutgen.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/platform.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 0.5rem 2rem;
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

        /* Dropdown Menu Styling */
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

        .user-dropdown {
            left: 0;
            width: 100%;
        }

        .user-dropdown a {
            text-align: center;
        }
        /* user dropdown */

        /* video player setting */
        .video-player {
            max-width: 100%;
            max-height: 80%;
            margin: 0 auto;
            position: relative;
            border-radius: 15px;
            /* Menambahkan border radius */
            overflow: hidden;
            /* Mengatasi overflow */
        }

        .video-player video {
            width: 100%;
            border-radius: 15px;
            /* Menambahkan border radius */
        }

        .video-player .video-controls {
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 1;
            color: white;
            display: flex;
            align-items: center;
        }

        .video-player .video-controls img {
            width: 40px;
            cursor: pointer;
            margin-right: 10px;
        }

        /* Hide default video controls */
        video::-webkit-media-controls {
            display: none !important;
        }

        .cta {
            border: none;
            background: none;
            cursor: pointer;
            padding-top: 2px;
            padding-left: 5px;
        }

        .cta span {
            padding-bottom: 7px;
            font-size: 18px;
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

        /* video player setting */


        /* card */
        .carousel {
            display: flex;
            overflow-x: auto;
            /* Enable horizontal scrolling */
            scrollbar-width: none;
            /* For Firefox */
            -ms-overflow-style: none;
        }

        .carousel-container {
            position: relative;
            /* Set the relative positioning context for absolute children */
        }

        .carousel::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar for Chrome, Safari, and Opera */
        }

        .card {
            position: relative;
            /* Menetapkan konteks posisi untuk elemen anak yang diatur posisinya secara absolut */
            flex: 0 0 auto;
            width: 411px;
            max-height: 600px;
            margin-right: 16px;
            background-color: #f7f7f7;
            border-radius: 10px;
            overflow: hidden;
            /* Pastikan semua konten di dalam card tidak meluap keluar batas */
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            /* Rounded corners for the images */
        }

        /* Adjust button container to be a part of each card */
        .button-container {
            position: absolute;
            bottom: 10px;
            right: 10px;
            display: flex;
        }

        /* Style the buttons */
        .prev-button,
        .next-button {
            border: none;
            background-color: transparent;
            /* You can change the color to fit your design */
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            /* Slight rounding on the buttons themselves */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            /* Optional: some shadow for depth */
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .prev-button:hover,
        .next-button:hover {
            background-color: #333;
            color: #fff;
        }

        .text-overlay {
            position: absolute;
            /* Mengatur posisi relatif terhadap .card */
            bottom: 0;
            /* Menempatkan teks di bagian bawah kartu */
            left: 0;
            /* Menempatkan teks mulai dari sisi kiri kartu */
            width: 100%;
            /* Membuat teks menyebar sepanjang lebar kartu */
            background-color: transparent;
            /* Latar belakang semi-transparan untuk meningkatkan kontras */
            color: white;
            /* Warna teks */
            padding: 10px;
            /* Padding untuk teks */
            box-sizing: border-box;
            /* Memastikan padding dihitung sebagai bagian dari lebar/ketinggian total */
        }

        .text-overlay h4,
        .text-overlay h6 {
            margin: 5px 0;
            /* Menambahkan sedikit margin vertikal */
        }

        /* Hide buttons by default and show them on hover of the carousel container */
        .carousel-container:hover .button-container {
            display: flex;
        }

        .button-container {
            text-align: center;
            padding: 20px;
        }

        .prev-button,
        .next-button {
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
        }

        /* Image will cover the whole card */
        .card img {
            width: 100%;
            max-height: 600px;
            object-fit: cover;
        }

        .cd-horizontal-timeline .filling-line {
            background-color: #735DA5 !important;
        }

        .no-touch .cd-horizontal-timeline .events a:hover::after {
    background-color: #D3C5E5 !important;
    border-color: #D3C5E5 !important;
  }
  .cd-horizontal-timeline .events a.selected {
    pointer-events: none !important;
  }
  .cd-horizontal-timeline .events a.selected::after {
    background-color: #D3C5E5 !important;
    border-color: #D3C5E5 !important;
  }
  .cd-horizontal-timeline .events a.older-event::after {
    border-color: #D3C5E5 !important;
  }

        @media screen and (max-width: 992px) {
            .navbar-brand {
                margin-left: 0;
                /* Reset margin */
            }

            .navbar-collapse {
                margin-right: 0 !important;
                /* Reset margin */
            }

            .navbar-toggler {
                background-color: transparent !important;

            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0,.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
            }
        }

        @media screen and (max-width: 768px) {
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

            .navbar .user-menu a {
                justify-content: center;
            }

            .user-dropdown {
                left: 0;
                width: 100%;
            }

            .user-dropdown a {
                text-align: center;
            }

            /* Additional responsive adjustments for container and sections */
            .timeline .events-wrapper {
                /* Hapus atau sesuaikan properti yang menambahkan gradasi warna putih */
                background-image: none;
            }

            .timeline .events::before,
            .timeline .events::after {
                /* Jika Anda menggunakan pseudo-elements untuk gradasi, atur ini juga */
                content: none;
            }

            .timeline .events-wrapper {
                /* Mengatur ulang lebar wrapper untuk mengakomodasi ukuran layar yang lebih kecil */
                width: 100%;
                padding: 0 30px;
                /* Menambahkan padding pada sisi untuk mencegah konten menempel terlalu dekat ke tepi layar */
                overflow-x: auto;
                /* Memungkinkan scrolling horizontal jika konten lebih lebar dari viewport */
            }

            .timeline .events {
                /* Mengatur ulang ukuran dan margin event */
                display: flex;
                flex-wrap: nowrap;
                /* Memastikan semua event tetap dalam satu baris */
            }

            .timeline .events a {
                font-size: 8px;
                /* Mengurangi ukuran font untuk event label pada viewport yang lebih kecil */
                padding: 10px;
                /* Mengurangi padding untuk menghemat ruang */
            }

            .timeline .events-content li {
                font-size: 8px;
                /* Mengatur ulang ukuran font untuk konten */
            }

            .timeline .cd-timeline-navigation {
                /* Menyesuaikan tombol navigasi jika diperlukan */
                width: 100%;
                justify-content: space-between;
                /* Memastikan tombol navigasi tetap berada di kedua sisi timeline */
            }

            
            .cd-horizontal-timeline .events-wrapper {
                margin-left: 0;
            }

            .cd-horizontal-timeline .events ol {
                padding-left: 20px;
            }

            .cd-horizontal-timeline .events ol li {
                padding-left: 10px;
            }

            .cd-horizontal-timeline .events-content ol {
                padding-left: 20px;
            }

            .cd-horizontal-timeline .events-content ol li {
                padding-left: 10px;
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

        @media screen and (max-width: 576px) {
            .navbar-brand {
                font-size: 20px;
            }

            .navbar-nav .nav-link {
                font-size: 18px;
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
            <li><a href="/portal/about">↖ Exit</a></li>
            <li><a href="/portal">Beranda</a></li>
            <li><a href="/portal/service">Service</a></li>
            <li><a href="/portal/portofolio">Portfolio</a></li>
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
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="title d-flex justify-content-center"
                style="background: linear-gradient(to right, #735DA5, #D3C5E5); padding:20px; border-radius:10px;">
                <h1 style="color: white;">Suara Merdeka Generation</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="video-player">
                <video id="myVideo" preload="none" autoplay loop muted>
                    <source src="{{URL::asset('/videos/jogja (landscape).mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <div class="video-controls">
                    <img src="{{URL::asset('/images/pause.png') }}" alt="Pause" id="playButton">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="title justify-content-start">
                <h2>Kenali SM Generation lebih dalam.</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <section class="cd-horizontal-timeline">
                <div class="timeline">
                    <div class="events-wrapper" style="background: transparant;">
                        <div class="events">
                            <ol>
                                <li><a href="#0" data-date="11/02/1950" class="selected" style="color: #000"> <span> 11
                                        Februari 1950 </span></a></li>
                                <li><a href="#0" data-date="03/03/1970" style="color: #000">Maret 1963</a></li>
                                <li><a href="#0" data-date="11/02/1982" style="color: #000">11 Februari 1982</a></li>
                                <li><a href="#0" data-date="01/01/2010" style="color: #000">Sejak Tahun 2010</a></li>
                            </ol>

                            <span class="filling-line" aria-hidden="true"></span>
                        </div>
                    </div>

                </div> <!-- .timeline -->

                <div class="events-content">
                    <ol>
                        <li class="selected" data-date="11/02/1950">
                            <h2 style="text-align: center;">Terbit Pertama</h2>
                            <em style="text-align: center;">11 Februari 1950 -</em>
                            <p style="text-align: justify;">
                                Terbit pertama 11 Februari 1950, didirikan oleh H. Hetami. Hetami menjabat pemimpin umum,
                                sekaligus pemimpin perusahaan dan pemimpin redaksi.
                                Kali pertama terbit, suara merdeka dicetak sebanyak 5000 eksemplar. Hetami dan awak
                                suara merdeka masa itu memegang betul ungkapan “pembaca koran adalah raja”. Meski
                                terkendala minimnya fasilitas, mereka tetap berikhtiar memberi pelayanan sebaik-baiknya.
                                Selain mutu berita, koran sebisa mungkin sampai ke tangan pembaca tepat waktu.

                            </p>
                        </li>

                        <li data-date="03/03/1970">
                            <h2 style="text-align: center;">Gedung Pertama</h2>
                            <em style="text-align: center;">Maret 1963 -</em>
                            <p style="text-align: justify;">
                                Suara merdeka menempati bangunan milik sendiri di Jalan Merak 11A, bangunan itu
                                digunakan sekaligus sebagai kantor dan percetakan. Areal gedung yang relatif luas
                                disekat-sekat menjadi ruang redaksi, tata usaha, ekspedisi, gudang kertas, dan
                                percetakan.
                            </p>
                        </li>

                        <li data-date="11/02/1982">
                            <h2 style="text-align: center;">Ulang Tahun Ke-32</h2>
                            <em style="text-align: center;">11 Februari 1982 -</em>
                            <p style="text-align: justify;">
                                Tepat pada peringatan ulang tahun Suara Merdeka ke-32, berbarengan dengan peresmian
                                kantor redaksi serta percetakan baru, Masscom Graphy, berlokasi di Jalan Kaligawe KM. 5 Semarang,
                                Hetami secara resmi menyerahkan tongkat kepemimpinannya kepada Budi Santoso, sang
                                menantu. Hetami yakin bahwa suami putrinya, Sarsa Winiarsih, mampu mengembangkan perusahaan
                                penerbitan yang dirintisnya.
                            </p>
                        </li>

                        <li data-date="01/01/2010">
                            <h2 style="text-align: center;">Pergantian Kepemimpinan</h2>
                            <em style="text-align: center;">Sejak Tahun 2010 -</em>
                            <p style="text-align: justify;">
                                Harian suara merdeka dipimpin oleh Kukrit Suryo Wicaksono, anak sulung dari Budi
                                Santoso. Kukrit kini memimpin Suara Merdeka sebagai Chief Executive Officer (CEO) Suara
                                Merdeka Network Semarang dan sukses melanjutkan usaha tersebut dengan berbagai inovasi.
                            </p>
                        </li>
                    </ol>
                </div> <!-- .events-content -->
            </section>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="title d-flex justify-content-between">
                <h2>Kenalan dengan jajaran kami.</h2>
                <a href="/portal/ourteam" target="_blank" class="cta" style="text-decoration: none;">
                    <span class="hover-underline-animation" style="color: #000000"> Selengkapnya</span>
                    <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10"
                        viewBox="0 0 46 16">
                        <path id="Path_10" data-name="Path 10"
                            d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                            transform="translate(30)" fill="#000000"></path>
                    </svg>
                </a>
                </a>
            </div>
        </div>

        <div class="carousel-container">
            <div class="carousel" id="carousel">
                @foreach ($data['get_smgen'] as $smgen)
                <div class="card">
                    <img src="{{ asset('storage/' . $smgen->thumbnail_team) }}" alt="Card 1 image">
                    <div class="text-overlay">
                        <h4>{{ $smgen->name_team }}</h4>
                        <h6>{{ $smgen->position->name }}</h6>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="button-container">
                <button class="prev-button" onclick="slideLeft();">&#10094;</button>
                <button class="next-button" onclick="slideRight();">&#10095;</button>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="title d-flex justify-content-between">
                <h2>Yang bisa kita lakukan.</h2>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="service-containier">
                <div class="col">
                    <div class="row g-4">
                        @foreach ($data['get_service'] as $service)
                        <div class="mt-5 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded-box">
                                <h3 class="mb-3 mt-3"><strong>{{ $service->title_services }}</strong></h3>
                                <p class="mb-5">{{ $service->description_services }}</p>
                                <img class="image-rounded" src="{{ asset('storage/' . $service->thumbnail_services) }}"
                                    style="max-height: 250px" alt="">
                                <a class="btn btn-square" href="/portal/service"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @Include('Portal.components.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Kode JavaScript yang menggunakan jQuery
        $(document).ready(function () {
            jQuery(document).ready(function ($) {
                var timelines = $('.cd-horizontal-timeline'),
                    eventsMinDistance = 60;

                (timelines.length > 0) && initTimeline(timelines);

                function initTimeline(timelines) {
                    timelines.each(function () {
                        var timeline = $(this),
                            timelineComponents = {};
                        //cache timeline components
                        timelineComponents['timelineWrapper'] = timeline.find(
                            '.events-wrapper');
                        timelineComponents['eventsWrapper'] = timelineComponents[
                            'timelineWrapper'].children('.events');
                        timelineComponents['fillingLine'] = timelineComponents['eventsWrapper']
                            .children('.filling-line');
                        timelineComponents['timelineEvents'] = timelineComponents[
                            'eventsWrapper'].find('a');
                        timelineComponents['timelineDates'] = parseDate(timelineComponents[
                            'timelineEvents']);
                        timelineComponents['eventsMinLapse'] = minLapse(timelineComponents[
                            'timelineDates']);
                        timelineComponents['timelineNavigation'] = timeline.find(
                            '.cd-timeline-navigation');
                        timelineComponents['eventsContent'] = timeline.children(
                            '.events-content');

                        //assign a left postion to the single events along the timeline
                        setDatePosition(timelineComponents, eventsMinDistance);
                        //assign a width to the timeline
                        var timelineTotWidth = setTimelineWidth(timelineComponents,
                            eventsMinDistance);
                        //the timeline has been initialize - show it
                        timeline.addClass('loaded');

                        //detect click on the next arrow
                        timelineComponents['timelineNavigation'].on('click', '.next', function (
                            event) {
                            event.preventDefault();
                            updateSlide(timelineComponents, timelineTotWidth, 'next');
                        });
                        //detect click on the prev arrow
                        timelineComponents['timelineNavigation'].on('click', '.prev', function (
                            event) {
                            event.preventDefault();
                            updateSlide(timelineComponents, timelineTotWidth, 'prev');
                        });
                        //detect click on the a single event - show new event content
                        timelineComponents['eventsWrapper'].on('click', 'a', function (event) {
                            event.preventDefault();
                            timelineComponents['timelineEvents'].removeClass(
                                'selected');
                            $(this).addClass('selected');
                            updateOlderEvents($(this));
                            updateFilling($(this), timelineComponents['fillingLine'],
                                timelineTotWidth);
                            updateVisibleContent($(this), timelineComponents[
                                'eventsContent']);
                        });

                        //on swipe, show next/prev event content
                        timelineComponents['eventsContent'].on('swipeleft', function () {
                            var mq = checkMQ();
                            (mq == 'mobile') && showNewContent(timelineComponents,
                                timelineTotWidth, 'next');
                        });
                        timelineComponents['eventsContent'].on('swiperight', function () {
                            var mq = checkMQ();
                            (mq == 'mobile') && showNewContent(timelineComponents,
                                timelineTotWidth, 'prev');
                        });

                        //keyboard navigation
                        $(document).keyup(function (event) {
                            if (event.which == '37' && elementInViewport(timeline.get(
                                    0))) {
                                showNewContent(timelineComponents, timelineTotWidth,
                                    'prev');
                            } else if (event.which == '39' && elementInViewport(timeline
                                    .get(0))) {
                                showNewContent(timelineComponents, timelineTotWidth,
                                    'next');
                            }
                        });
                    });
                    eventsMinDistance = Math.max.apply(Math, timelineComponents['timelineEvents'].map(
                        function (event) {
                            return $(event).width();
                        }).get()) + 10;
                }

                function updateSlide(timelineComponents, timelineTotWidth, string) {
                    //retrieve translateX value of timelineComponents['eventsWrapper']
                    var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
                        wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width')
                            .replace('px', ''));
                    //translate the timeline to the left('next')/right('prev')
                    (string == 'next') ?
                    translateTimeline(timelineComponents, translateValue - wrapperWidth +
                        eventsMinDistance, wrapperWidth - timelineTotWidth): translateTimeline(
                        timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
                }

                function showNewContent(timelineComponents, timelineTotWidth, string) {
                    //go from one event to the next/previous one
                    var visibleContent = timelineComponents['eventsContent'].find('.selected'),
                        newContent = (string == 'next') ? visibleContent.next() : visibleContent.prev();

                    if (newContent.length > 0) { //if there's a next/prev event - show it
                        var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
                            newEvent = (string == 'next') ? selectedDate.parent('li').next('li')
                            .children('a') : selectedDate.parent('li').prev('li').children('a');

                        updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
                        updateVisibleContent(newEvent, timelineComponents['eventsContent']);
                        newEvent.addClass('selected');
                        selectedDate.removeClass('selected');
                        updateOlderEvents(newEvent);
                        updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
                    }
                }

                function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
                    //translate timeline to the left/right according to the position of the selected event
                    var eventStyle = window.getComputedStyle(event.get(0), null),
                        eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
                        timelineWidth = Number(timelineComponents['timelineWrapper'].css('width')
                            .replace('px', '')),
                        timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width')
                            .replace('px', ''));
                    var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

                    if ((string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (
                            string == 'prev' && eventLeft < -timelineTranslate)) {
                        translateTimeline(timelineComponents, -eventLeft + timelineWidth / 2,
                            timelineWidth - timelineTotWidth);
                    }
                }

                function translateTimeline(timelineComponents, value, totWidth) {
                    var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
                    value = (value > 0) ? 0 : value; //only negative translate value
                    value = (!(typeof totWidth === 'undefined') && value < totWidth) ? totWidth :
                        value; //do not translate more than timeline width
                    setTransformValue(eventsWrapper, 'translateX', value + 'px');
                    //update navigation arrows visibility
                    (value == 0) ? timelineComponents['timelineNavigation'].find('.prev').addClass(
                            'inactive'): timelineComponents['timelineNavigation'].find('.prev')
                        .removeClass('inactive');
                    (value == totWidth) ? timelineComponents['timelineNavigation'].find('.next')
                        .addClass('inactive'): timelineComponents['timelineNavigation'].find('.next')
                        .removeClass('inactive');
                }

                function updateFilling(selectedEvent, filling, totWidth) {
                    //change .filling-line length according to the selected event
                    var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
                        eventLeft = eventStyle.getPropertyValue("left"),
                        eventWidth = eventStyle.getPropertyValue("width");
                    eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px',
                        '')) / 2;
                    var scaleValue = eventLeft / totWidth;
                    setTransformValue(filling.get(0), 'scaleX', scaleValue);
                }

                function setDatePosition(timelineComponents, min) {
                    for (i = 0; i < timelineComponents['timelineDates'].length; i++) {
                        var distance = daydiff(timelineComponents['timelineDates'][0],
                                timelineComponents['timelineDates'][i]),
                            distanceNorm = Math.round(distance / timelineComponents['eventsMinLapse']) +
                            2;
                        timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm * min +
                            'px');
                    }
                }

                function setTimelineWidth(timelineComponents, width) {
                    var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents[
                            'timelineDates'][timelineComponents['timelineDates'].length - 1]),
                        timeSpanNorm = timeSpan / timelineComponents['eventsMinLapse'],
                        timeSpanNorm = Math.round(timeSpanNorm) + 4,
                        totalWidth = timelineComponents['timelineEvents'].last()
                        .outerWidth(); // Add the width of the last event
                    timelineComponents['eventsWrapper'].css('width', totalWidth + 'px');
                    updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents[
                        'fillingLine'], totalWidth);

                    return totalWidth;
                }

                function updateVisibleContent(event, eventsContent) {
                    var eventDate = event.data('date'),
                        visibleContent = eventsContent.find('.selected'),
                        selectedContent = eventsContent.find('[data-date="' + eventDate + '"]'),
                        selectedContentHeight = selectedContent.height();

                    if (selectedContent.index() > visibleContent.index()) {
                        var classEnetering = 'selected enter-right',
                            classLeaving = 'leave-left';
                    } else {
                        var classEnetering = 'selected enter-left',
                            classLeaving = 'leave-right';
                    }

                    selectedContent.attr('class', classEnetering);
                    visibleContent.attr('class', classLeaving).one(
                        'webkitAnimationEnd oanimationend msAnimationEnd animationend',
                        function () {
                            visibleContent.removeClass('leave-right leave-left');
                            selectedContent.removeClass('enter-left enter-right');
                        });
                    eventsContent.css('height', selectedContentHeight + 'px');
                }

                function updateOlderEvents(event) {
                    event.parent('li').prevAll('li').children('a').addClass('older-event').end().end()
                        .nextAll('li').children('a').removeClass('older-event');
                }

                function getTranslateValue(timeline) {
                    var timelineStyle = window.getComputedStyle(timeline.get(0), null),
                        timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
                        timelineStyle.getPropertyValue("-moz-transform") ||
                        timelineStyle.getPropertyValue("-ms-transform") ||
                        timelineStyle.getPropertyValue("-o-transform") ||
                        timelineStyle.getPropertyValue("transform");

                    if (timelineTranslate.indexOf('(') >= 0) {
                        var timelineTranslate = timelineTranslate.split('(')[1];
                        timelineTranslate = timelineTranslate.split(')')[0];
                        timelineTranslate = timelineTranslate.split(',');
                        var translateValue = timelineTranslate[4];
                    } else {
                        var translateValue = 0;
                    }

                    return Number(translateValue);
                }

                function setTransformValue(element, property, value) {
                    element.style["-webkit-transform"] = property + "(" + value + ")";
                    element.style["-moz-transform"] = property + "(" + value + ")";
                    element.style["-ms-transform"] = property + "(" + value + ")";
                    element.style["-o-transform"] = property + "(" + value + ")";
                    element.style["transform"] = property + "(" + value + ")";
                }

                //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
                function parseDate(events) {
                    var dateArrays = [];
                    events.each(function () {
                        var dateComp = $(this).data('date').split('/'),
                            newDate = new Date(dateComp[2], dateComp[1] - 1, dateComp[0]);
                        dateArrays.push(newDate);
                    });
                    return dateArrays;
                }

                function parseDate2(events) {
                    var dateArrays = [];
                    events.each(function () {
                        var singleDate = $(this),
                            dateComp = singleDate.data('date').split('T');
                        if (dateComp.length > 1) { //both DD/MM/YEAR and time are provided
                            var dayComp = dateComp[0].split('/'),
                                timeComp = dateComp[1].split(':');
                        } else if (dateComp[0].indexOf(':') >= 0) { //only time is provide
                            var dayComp = ["2000", "0", "0"],
                                timeComp = dateComp[0].split(':');
                        } else { //only DD/MM/YEAR
                            var dayComp = dateComp[0].split('/'),
                                timeComp = ["0", "0"];
                        }
                        var newDate = new Date(dayComp[2], dayComp[1] - 1, dayComp[0], timeComp[
                            0], timeComp[1]);
                        dateArrays.push(newDate);
                    });
                    return dateArrays;
                }

                function daydiff(first, second) {
                    return Math.round((second - first));
                }

                function minLapse(dates) {
                    //determine the minimum distance among events
                    var dateDistances = [];
                    for (i = 1; i < dates.length; i++) {
                        var distance = daydiff(dates[i - 1], dates[i]);
                        dateDistances.push(distance);
                    }
                    return Math.min.apply(null, dateDistances);
                }

                /*
                	How to tell if a DOM element is visible in the current viewport?
                	http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
                */
                function elementInViewport(el) {
                    var top = el.offsetTop;
                    var left = el.offsetLeft;
                    var width = el.offsetWidth;
                    var height = el.offsetHeight;

                    while (el.offsetParent) {
                        el = el.offsetParent;
                        top += el.offsetTop;
                        left += el.offsetLeft;
                    }

                    return (
                        top < (window.pageYOffset + window.innerHeight) &&
                        left < (window.pageXOffset + window.innerWidth) &&
                        (top + height) > window.pageYOffset &&
                        (left + width) > window.pageXOffset
                    );
                }

                function checkMQ() {
                    //check if mobile or desktop device
                    return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'),
                        '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
                }
            });
        });

    </script>

    <script>
        window.addEventListener('load', function () {
            const video = document.getElementById("myVideo");
            video.play();
        });


        const burgerMenu = document.querySelector('.burger-menu');
        const navLinks = document.querySelector('.nav-links');

        burgerMenu.addEventListener('click', () => {
            navLinks.classList.toggle('active');

            burgerMenu.classList.toggle('toggle');
        });

        const video = document.getElementById("myVideo");
        const playButton = document.getElementById("playButton");

        playButton.addEventListener("click", function () {
            if (video.paused) {
                video.play();
                playButton.src = "{{URL::asset('/images/pause.png') }}";
            } else {
                video.pause();
                playButton.src = "{{URL::asset('/images/play.png') }}";
            }
        });

        function slideLeft() {
            const carousel = document.getElementById("carousel");
            // Scroll by half the width of the carousel to the left
            carousel.scrollBy({
                left: -carousel.offsetWidth / 2,
                behavior: 'smooth'
            });
        }

        function slideRight() {
            const carousel = document.getElementById("carousel");
            // Scroll by half the width of the carousel to the right
            carousel.scrollBy({
                left: carousel.offsetWidth / 2,
                behavior: 'smooth'
            });
        }

    </script>

</body>

</html>
