<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view test</title>
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





        /* Responsiveness */
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
            <li><a href="#service">Service</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#ourteam">Our Team</a></li>
            <li><a href="#contactus">Contact Us</a></li>
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