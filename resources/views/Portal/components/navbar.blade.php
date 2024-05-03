<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-JsOKDPUzB6Q+kqJyPHDgFj4+zxSlPJxc7w0r5RnAvvF5+PK9yn6o/GfL9MDAjM4f" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">

    <style>
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

        /*  */

        .burger-menu.toggle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .burger-menu.toggle .line2 {
            opacity: 0;
        }

        .burger-menu.toggle .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        @media (max-width: 760px) {
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
            <li><a href="/portal/contact">Contact Us</a></li>
            <li class="user-menu">
                <a href="javascript:void(0)">
                    <i class="fas fa-user"></i> User Name
                </a>
                <div class="user-dropdown">
                    <a href="/profile">Profile</a>
                    <a href="/logout">Logout</a>
                </div>
            </li>
        </ul>
        <div class="burger-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    
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
