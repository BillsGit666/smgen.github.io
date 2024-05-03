<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Horizontal Scroll Website</title>
    <!-- Tambahkan link ke font Jakarta Sans -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jakarta+Sans:wght@400;700&display=swap">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Menghilangkan scrolling vertikal */
        }

        .container {
            overflow-x: scroll;
            /* Membuat scrolling horizontal */
            white-space: nowrap;
            /* Membuat konten tidak wrap ke baris baru */
            overflow-y: none;
        }

        .content {
    width: 11651px; /* Lebar konten sesuai lebar gambar latar belakang */
    height: 100vh; /* Tinggi konten sesuai tinggi viewport */
    background-image: url('../images/bgindex.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    overflow-x: auto; /* Mengaktifkan scrolling horizontal */
        }
        
        /*LOADING*/
        
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
        
        @keyframes fadeInOut {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }
        
        /*cursor-flare*/
        
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
        
        .smooth-fire-trail {
            position: fixed;
            pointer-events: none;
            border-radius: 50%;
            z-index: 9999;
            mix-blend-mode: screen;
        }
        
        /*konten*/
        
        .profile,
        .service,
        .portofolio,
        .ourteam,
        .platform,
        .contact {
            position: relative;
            /* Position each link fixed within the viewport */
            width: 150px;
            /* Contoh lebar, sesuaikan sesuai kebutuhan */
            height: 50px;
            /* Contoh tinggi, sesuaikan sesuai kebutuhan */
            cursor: pointer;
            /* Memberikan indikasi bahwa ini clickable */
        }
        
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
        
        /*konten_position*/
        
        .profile {
            top: 50%;
            left: 12%;
            transform: translate(-50%, -50%);
        }

        /* Sesuaikan nilai ini */
        .service {
            top: 69%;
            left: 31%;
            transform: translate(-50%, -50%);
        }

        /* Sesuaikan nilai ini */
        .portofolio {
            top: 40%;
            left: 33%;
            transform: translate(-50%, -50%);
        }

        /* Sesuaikan nilai ini */
        .ourteam {
            top: 40%;
            left: 48%;
            transform: translate(-50%, -50%);
        }

        /* Sesuaikan nilai ini */
        .platform {
            top: 10%;
            left: 79%;
            transform: translate(-50%, -50%);
        }

        /* Sesuaikan nilai ini */
        .contact {
            top: 26%;
            left: 89%;
            transform: translate(-50%, -50%);
        }
        
        
    @media only screen and (max-width: 14in)  {
    /* CSS untuk laptop 14 inci */
    .content {
        width: 6000px; /* Lebar konten sesuai lebar viewport */
        height: 100vh; /* Tinggi konten sesuai tinggi viewport */
        background-image: url('../images/bgindex.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        overflow-x: auto; /* Mengaktifkan scrolling horizontal */
    }
}

        /* @media untuk tablet */
    @media only screen (max-width: 1024px) {
    
            .content {
                background-size: cover;
            }
            
        .service {
            top: 70%;
            left: 27%;
        }
        }
        
        /* @media untuk smartphone */
    @media only screen and (max-width: 599px) {
            .content {
                background-size: cover;
            }
            
        /*konten_position*/

        .service {
            top: 70%;
            left: 31%;
        }

        /* Sesuaikan nilai ini */
        .contact {
            top: 24%;
            left: 89%;
            transform: translate(-50%, -50%);
        }
        }
    </style>
</head>

<body>
    
        <!-- Loading Screen -->
    <!--<div class="loading-screen">-->
    <!--    <img src="{{URL::asset('images/logoputihsm.png') }}" alt="Logo" width="600px" class="loading-logo">-->
    <!--    <div class="loading-text">Mohon Tunggu Sayang ...</div>-->
    <!--</div>-->
    
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
    
    <div class="container">
        <div class="content">
                    <div class='profile'>
                        <a href="portal/about">  About → </a>
                    </div>
                    <div class='service'>
                        <a href="portal/service"> Service <br> ↲ </a>
                    </div>
                    <div class='portofolio'>
                        <a href="portal/portofolio"> Portofolio <br> ↘ </a>
                    </div>
                    <div class='ourteam'>
                        <a href="portal/ourteam">← Our Team → </a>
                    </div>
                    <div class='platform'>
                        <a href="portal/platform"> Platform <br> ↘ </a>
                    </div>
                    <div class='contact'>
                        <a href="portal/contact" style="font-size: 2em; width: 500px;"> Kontak Kami <br> ↙</a>
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
        window.addEventListener('load', function() {
    var bgImageWidth = 11651; // Lebar gambar latar belakang
    document.querySelector('.content').style.width = bgImageWidth + 'px';
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