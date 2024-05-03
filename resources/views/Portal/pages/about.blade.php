<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jakarta+Sans:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('/public/fonts/Proxima/Fontspring-DEMO-proximanova-extrabold.otf') format('woff2');
            font-weight: 600;
            font-style: normal;
        }

        body {
            margin: 0;
            padding: 0;
            /* Grey background */
            min-height: 100vh;
            /* Fill entire viewport height */
            /* Center vertically */
            justify-content: center;
            /* Center horizontally */
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 500;
            /* Medium */
            color: black;
        }

        .about-section {
            margin-top: 70px;
            display: flex;
            align-items: center;
            background-color: white;
        }

        .title {
            color: #ff9505;
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

        .user-dropdown {
            left: 0;
            width: 100%;
        }

        .user-dropdown a {
            text-align: center;
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

        .row {
            display: flex;
            flex-wrap: wrap;
            background-color: #D3C5E5;
            /* Dark background */
            max-width: 1800px;
            /* Maximum width */
            width: 90%;
            /* Use a bit less than 100% for some margin */
            box-sizing: border-box;
            /* Include padding in width calculation */
            margin: 20px auto;
            /* Centering the row, with some margin */
            border-radius: 15px;
            /* Soften the corners */
            overflow: hidden;
            /* Ensures the child elements respect border radius */
            margin-top: 100px;
        }

        .left-col {
            flex: 1;
            /* More flexible than using flex-basis with a percentage */
            padding: 2%;
            /* Proportional padding */
        }

        .right-col {
            flex: 1;
            /* Equal flex value to left-col for 50/50 split */
            display: flex;
            padding: 2%;
            /* Proportional padding */
            justify-content: space-around;
            /* Space out the inner columns */
            margin-bottom: 50px;
        }

        .col-md-3 {
            width: calc(50% - 4%);
            /* Subtracting the padding from the width */
            margin: 2%;
            /* Adds some space between the columns */
        }

        h1,
        h2,
        p {
            margin-bottom: 0.5em;
            /* Consistent bottom margin */
        }

        h1 {
            font-size: 3em;
            font-family: 'Proxima Nova', sans-serif;
            font-weight: bolder;
            text-align: center;
            padding-top: 50px;
            background: linear-gradient(90deg, #735DA5, #000);
            /* Gradient background */
            -webkit-background-clip: text;
            /* Clip the background to text */
            -webkit-text-fill-color: transparent;
            /* Make the text transparent */
            margin: 0 auto;
        }


        h2 {
            font-size: 2.5em;
            /* Subheading size */
        }

        p {
            font-size: 1, 5em;
            /* Paragraph text size */
        }

        .image-wrapper {
            text-align: center;
            /* Center the images within the div */
        }

        .image-wrapper img {
            max-width: 80%;
            /* Limit image size */
            height: 200px;
            /* Maintain aspect ratio */
            margin-bottom: 1em;
            /* Space below the image */
        }

        .video-wrapper iframe {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 9;
            /* Maintain a 16:9 aspect ratio */
        }

        .view-more {
            display: block;
            /* Make it a block to take up its own line */
            width: fit-content;
            /* Only as wide as its content */
            text-align: center;
            /* Center the text inside the button */
            text-decoration: none;
            color: #000;
            background-color: #fff;
            padding: 10px 15px;
            margin: 1em auto;
            /* Center the button and add margin */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            /* Animation for hover effect */
        }

        .view-more:hover {
            background-color: #735DA5;
            /* Darken the button on hover */
            color: #fff;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {

            .left-col {
                width: 100%;
                flex-direction: column-reverse;

            }

            .right-col {
                width: 100%;
                flex-direction: flex;
                display: table-column;
                /* Full width on smaller screens */
            }

            .col-md-3 {
                width: 100%;
                /* Stack the sections on smaller screens */
                margin: 2% 0;
                /* Adjust margin for vertical layout */
            }

            .video-wrapper iframe {
                height: auto;
                /* Adjust height for smaller screens */
            }

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

    </style>
</head>

<body>



    <nav class="navbar">
        <div class="logo">
            <img src="{{URL::asset('/images/logoputihsm.png') }}" alt="Logo"> <!-- Replace with your logo path -->
        </div>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/portal/service">Service</a></li>
            <li><a href="/portal/portofolio">Portofolio</a></li>
            <li><a href="/portal/ourteam">Our Team</a></li>
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

    <div class="row">
        <!-- <div class="left-col">
            <h1>Welcome to Suara Merdeka Generation</h1>
            <div class="video-wrapper" style="margin-top: 30px;">
                <iframe src="https://www.youtube.com/embed/B8FQdScywIU" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div> -->
        <h1>Welcome to Suara Merdeka</h1>
        <hr class="hr" style="width: 90%; margin:20px auto; border-bottom: 5px solid;">
        <div class="right-col">
            <div class="col-md-3 image-wrapper">
                <img src="{{URL::asset('/images/smlogoclean.png') }}" alt="Suara Merdeka Network Logo">
                <h2>Suara Merdeka Network</h2>
                <p>Sudah lebih dari 72 tahun, <b>Harian Suara Merdeka</b> menemani masyarakat Jawa Tengah dan menjadi
                    satu satunya koran di Indonesia yang dimiliki oleh satu keluarga dan tetap bertahan hingga saat ini
                    tanpa adanya pergantian pemilik. Seiring dengan perkembangan teknologi informasi yang pesat, Suara
                    Merdeka terus tumbuh dan berkembang, baik dari sisi tampilan, kualitas berita, hingga kemudahan
                    mengakses berita. Suara Merdeka konsisten melakukan inovasi dan pengembangan produk yang bertujuan
                    memberikan pelayanan terbaik untuk masyarakat Jawa Tengah.</p>
                <a href="/portal/aboutnet" class="view-more">View More</a>
            </div>
            <div class="col-md-3 image-wrapper">
                <img src="{{URL::asset('/images/logosmgen.png') }}" alt="Suara Merdeka Generation Logo">
                <h2>Suara Merdeka Generation</h2>
                <p> <b> SUARA MERDEKA GENERATION </b> <br>Dibentuk sejak tahun 2022, berkedudukan di Kota Semarang, untuk pertama kalinya beralamat di Jalan Pandanaran nomor 30, Kota semarang <br> SMGen bergerak dalam bidang Media, Percetakan, Periklanan, Pelatihan Kerja, Penyelenggara Acara (Event Organizer).
</p>
                <a href="/portal/aboutgen" class="view-more">View More</a>
            </div>
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



</body>

</html>
