<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <!-- font Jakarta Sans -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jakarta+Sans:wght@400;700&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Jakarta Sans', sans-serif;
            scroll-behavior: smooth;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100vh;
            /* Match the width of the outer-wrapper */
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            z-index: 1000;
            /* Make sure it's above other items */
            display: flex;
            justify-content: space-around;
            /* This will space out the nav links evenly */
            transform: rotate(-90deg) translateX(-100vh);
            transform-origin: top left;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .navbar a:hover {
            color: white;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.7), 0 0 10px rgba(255, 255, 255, 0.5), 0 0 12px rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }


        /* This ensures the navbar doesn't interfere with touch events for the swipe functionality */
        .navbar a {
            pointer-events: all;
        }

        .content {
            display: block;
            /* You can remove 'display: none;' to make it visible for testing */
        }


        .content {
            display: none;
            /* Initially hide the main content */
        }

        .slide {
            width: 100vw;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            flex-direction: row;
            width: 590vw;
            transform: rotate(90deg) translateY(-100vh);
            transform-origin: top left;
        }

        .one {
            background: url("images/bgindex.jpg") no-repeat center center;
            background-size: cover;
            width: 590vw;
            /* Set width to 100% of viewport width */
            height: 100vh;
            /* Set height to 100% of viewport height */
        }


        .outer-wrapper {
            width: 100vh;
            height: 100vw;
            transform: rotate(-90deg) translateX(-100vh);
            transform-origin: top left;
            overflow-y: scroll;
            overflow-x: hidden;
            position: absolute;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        /* Kelas untuk styling posisi masing-masing href */
        .profile,
        .service,
        .portofolio,
        .ourteam,
        .platform,
        .contact {
            position: absolute;
            /* Position each link absolutely within the .slide */
            width: 150px;
            /* Contoh lebar, sesuaikan sesuai kebutuhan */
            height: 50px;
            /* Contoh tinggi, sesuaikan sesuai kebutuhan */
            cursor: pointer;
            /* Memberikan indikasi bahwa ini clickable */
        }

        .profile {
            top: 87vh;
            left: 90vw;
        }

        /* Sesuaikan nilai ini */
        .service {
            top: 80vh;
            left: 163vw;
        }

        /* Sesuaikan nilai ini */
        .portofolio {
            top: 50vh;
            left: 190vw;
        }

        /* Sesuaikan nilai ini */
        .ourteam {
            top: 50vh;
            left: 255vw;
        }

        /* Sesuaikan nilai ini */
        .platform {
            top: 8vh;
            left: 480vw;
        }

        /* Sesuaikan nilai ini */
        .contact {
            top: 58vh;
            left: 525vw;
        }

        /* Sesuaikan nilai ini */

        /* Style your links */
        .profile a,
        .service a,
        .portofolio a,
        .ourteam a,
        .platform a,
        .contact a {
            font-family: 'Jakarta Sans', sans-serif;
            font-weight: bolder;
            font-size: 2.5em;
            /* Adjust the font size as needed */
            text-decoration: none;
            color: #fff;
            /* A darker color for better readability */
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.8s ease, color 0.8s ease, text-shadow 0.8s ease;
            text-align: center;
            /* For the hover effect */
            padding: 10px 20px;
            /* Spacing inside the links */
        }

        .profile a:hover,
        .service a:hover,
        .portofolio a:hover,
        .ourteam a:hover,
        .platform a:hover,
        .contact a:hover {
            color: black;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.7), 0 0 10px rgba(255, 255, 255, 0.5), 0 0 12px rgba(255, 255, 255, 0.3);
            transform: translateY(-2px) scale(1.4);
        }


        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 9999;
            opacity: 1;
            transition: opacity 1s ease;
        }

        .loading-screen.hide {
            opacity: 0;
            visibility: hidden;
            transition: opacity 1s ease, visibility 1s ease;
        }

        .loading-text {
            color: #fff;
            font-size: 36px;
            animation: fadeInOut 2s ease-out infinite;
            position: fixed;
            /* Tetapkan posisi */
            bottom: 20px;
            /* Tetapkan ke dasar halaman dengan jarak 10px dari bawah */
        }

        .smooth-fire-trail {
            position: fixed;
            pointer-events: none;
            border-radius: 50%;
            z-index: 9999;
            mix-blend-mode: screen;
        }


        @keyframes fadeInOut {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }

        /* For Tablets */
        @media (min-width: 768px) and (max-width: 1024px) {
            .slide {
                min-width: 590vw;
                /* Show two slides at a time */
            }

            .wrapper {
                width: auto;
            }
        }

        /* For Mobile Phones */
        @media (max-width: 768px) {

            .navbar a {
                padding: 5px;
            }

            .slide {
                width: 2000vw;
                /* Show a bit of the next slide */
            }

            .wrapper {
                width: 2000vw;
            }

            .loading-text {
                font-size: 20px;
                position: fixed;
                bottom: 30px;
                /* Smaller font for loading text */
            }

            .profile {
                top: 85vh;
                left: 300vw;
            }

            /* Sesuaikan nilai ini */
            .service {
                top: 80vh;
                left: 550vw;
            }

            /* Sesuaikan nilai ini */
            .portofolio {
                top: 50vh;
                left: 635vw;
            }

            /* Sesuaikan nilai ini */
            .ourteam {
                font-size: 2em;
                width: 50vw;
                top: 45vh;
                left: 835vw;
            }

            /* Sesuaikan nilai ini */
            .platform {
                top: 5vh;
                left: 1622vw;
            }

            /* Sesuaikan nilai ini */
            .contact {
                top: 58vh;
                left: 1760vw;
            }

            /* Sesuaikan nilai ini */

            .loading-screen img {
                max-width: 50%;
            }

            .profile a:hover,
            .service a:hover,
            .portofolio a:hover,
            .ourteam a:hover,
            .platform a:hover,
            .contact a:hover {
                transform: translateY(-2px) scale(1.2);
            }
        }

        .circle {
            height: 24px;
            width: 24px;
            border-radius: 24px;
            background-color: black;
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 99999999;
            /* so that it stays on top of all other elements */
        }

    </style>
</head>

<body>

    <!-- Loading Screen -->
    <div class="loading-screen">
        <img src="{{URL::asset('/images/logoputihsm.png') }}" alt="Logo" width="600px" class="loading-logo">
        <div class="loading-text">Mohon Tunggu Sayang ...</div>
    </div>

    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="/portal/about">About</a>
        <a href="/portal/service">Services</a>
        <a href="/portal/portofolio">Portofolio</a>
        <a href="/portal/platform">Platform</a>
        <a href="/portal/ourteam">Our Team</a>
        <a href="/portal/contact">Contact</a>
    </nav>


    <!-- Main Content -->
    <div class="content">
        <div class="outer-wrapper">
            <div class="wrapper">
                <div class="slide one">
                    <div class='profile'>
                        <a href="portal/about"> ↑ <br> About </a>
                    </div>
                    <div class='service'>
                        <a href="portal/service"> Service <br> ↲ </a>
                    </div>
                    <div class='portofolio'>
                        <a href="portal/portofolio"> Portofolio <br> ↘ </a>
                    </div>
                    <div class='ourteam' style="font-size: 2em; width: 1000px">
                        <a href="portal/ourteam">← Our Team → </a>
                    </div>
                    <div class='platform'>
                        <a href="portal/platform"> Platform <br> ↙ </a>
                    </div>
                    <div class='contact'>
                        <a href="portal/contact" style="font-size: 2em; width: 500px;"> Kontak Kami <br> ↘ </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                document.querySelector('.loading-screen').classList.add('hide');
                document.querySelector('.content').style.display = 'block';
            }, 2000); // Adjust the delay here
        });

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let touchStartX = 0;
            let touchEndX = 0;

            function handleSwipe() {
                if (touchEndX < touchStartX) {
                    // Swipe Left - Next
                    document.querySelector('.outer-wrapper').scrollLeft += window.innerWidth;
                }
                if (touchEndX > touchStartX) {
                    // Swipe Right - Prev
                    document.querySelector('.outer-wrapper').scrollLeft -= window.innerWidth;
                }
            }

            document.querySelector('.outer-wrapper').addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            }, false);

            document.querySelector('.outer-wrapper').addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, false);

            // Initial hide of loading screen and show content
            setTimeout(function () {
                document.querySelector('.loading-screen').classList.add('hide');
                document.querySelector('.content').style.display = 'block';
            }, 2000); // Adjust the delay as needed
        });

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var outerWrapper = document.querySelector('.outer-wrapper');
            var hammertime = new Hammer(outerWrapper);

            hammertime.on('swipeleft', function (e) {
                outerWrapper.scrollLeft += window.innerWidth;
            });

            hammertime.on('swiperight', function (e) {
                outerWrapper.scrollLeft -= window.innerWidth;
            });

            // Your existing timeout code can remain unchanged
        });

    </script>

    <script>
        const coords = {
            x: 0,
            y: 0
        };
        const circles = document.querySelectorAll(".circle");

        const colors = [
            "#ffb56b",
            "#fdaf69",
            "#f89d63",
            "#f59761",
            "#ef865e",
            "#ec805d",
            "#e36e5c",
            "#df685c",
            "#d5585c",
            "#d1525c",
            "#c5415d",
            "#c03b5d",
            "#b22c5e",
            "#ac265e",
            "#9c155f",
            "#950f5f",
            "#830060",
            "#7c0060",
            "#680060",
            "#60005f",
            "#48005f",
            "#3d005e"
        ];

        circles.forEach(function (circle, index) {
            circle.x = 0;
            circle.y = 0;
            circle.style.backgroundColor = colors[index % colors.length];
        });

        window.addEventListener("mousemove", function (e) {
            coords.x = e.clientX;
            coords.y = e.clientY;

        });

        function animateCircles() {

            let x = coords.x;
            let y = coords.y;

            circles.forEach(function (circle, index) {
                circle.style.left = x - 12 + "px";
                circle.style.top = y - 12 + "px";

                circle.style.scale = (circles.length - index) / circles.length;

                circle.x = x;
                circle.y = y;

                const nextCircle = circles[index + 1] || circles[0];
                x += (nextCircle.x - x) * 0.3;
                y += (nextCircle.y - y) * 0.3;
            });

            requestAnimationFrame(animateCircles);
        }

        animateCircles();

    </script>

</body>

</html>
