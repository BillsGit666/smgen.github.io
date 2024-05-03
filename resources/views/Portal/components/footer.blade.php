<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Tambahkan Font Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #eef8ff;
            font-size: 16px;
        }

        footer {
            width: 100%;
            background: linear-gradient(to right, #735DA5, #D3C5E5);
            color: #fff;
            padding: 100px 0 30px;
            border-top-left-radius: 125px;
            font-size: 13px;
            line-height: 20px;
            position: relative;
            margin-top: 150px;
        }

        .row-crot {
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }

        .desc-crot {
            font-size: 14px;
        }

        .col-crot {
            flex-basis: 25%;
            padding: 10px;
        }

        .col-crot:nth-child(2),
        .col-crot:nth-child(3) {
            flex-basis: 15%;
        }

        .logo-foot {
            width: 150px;
        }

        .col-crot h3 {
            margin-bottom: 40px;
            position: relative;
            font-size: 16px;
        }

        .email-id-crot {
            width: fit-content;
            border-bottom: 1px solid #ccc;
            margin: 20px 0;
        }

        .col-crot ul li a {
            text-decoration: none;
            color: #fff;
        }

        .col-crot ul li a:hover {
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.7), 0 0 10px rgba(255, 255, 255, 0.5), 0 0 12px rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .form-crot {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
            margin-bottom: 30px;
            /* Adjusted margin to create space */
        }

        .underline-crot{
            width: 30%;
            height: 5px;
            background: #767676;
            border-radius: 3px;
            position: absolute;
            top: 25px;
            left: 0;
            overflow: hidden;
        }

        .underline-crot span{
            width: 15px;
            height: 100%;
            background: #fff;
            border-radius: 3px;
            position: absolute;
            top: 0;
            left: 10px;
            animation: moving 2s linear infinite;
        }

        @keyframes moving{
            0%{
                left: -20px;
            }
            100%{
                left: 100%;
            }
        }

        .social-icons-crot .fab {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #000;
            background: #fff;
            margin-right: 15px;
            margin-left: 10px;
            cursor: pointer;
            margin-top: 20px;
            /* Added margin-top to create space between this section and the form above */
        }

        .hr-crot {
            width: 90%;
            border-bottom: 1px solid #ccc;
            margin: 20px auto;
        }

        /* footer list */

        .footer-list__notes-crot {
    display: flex;
    align-items: center;
    margin-top: 20px;
    width: 350px;
    padding: 20px; /* menambahkan ruang atas dan bawah */
    background-color: #999;
    color: #000;
    border-radius: 10px; /* menambahkan border radius */
}

        .footer-list__notes-crot img {
            width: 40px;
            /* Sesuaikan dengan ukuran ikon Anda */
            height: auto;
            margin-right: 10px;
        }

        .footer-list__notes-crot h3 {
            margin: 0;
            font-size: 14px;
        }

        .footer-list__notes-crot i {
            font-weight: bolder;
            /* Warna sesuai kebutuhan */
        }


        @media (max-width: 768px) {
            footer {
                position: unset;
            }

            .col {
                flex-basis: 100%;
            }

            .col:nth-child(2),
            .col:nth-child(3) {
                flex-basis: 100%;
            }
        }

    </style>
</head>

<body>

    <footer>
        <div class="row-crot">
            <div class="col-crot">
                <img src="{{URL::asset('/images/logoputihsm.png')}}" class="logo-foot">
                <p class="desc-crot">PT. Media Merdeka Network <br style="margin-top:5px;">Jl. Kawi No.20, Kec.
                    Candisari </p>
                <p class="desc-crot">
                    <i class="fas fa-phone"></i> +62 123456789 <br style="margin-top:5px;">
                    <i class="fas fa-envelope"></i>muda@smgen.id
                </p>
                <div class="footer-list__notes-crot">
                <img src="https://static.promediateknologi.id/promedia/news/desktop/images/icon-verify.svg?v=1"
                    alt="Verified Icon">
                <h3>Suara Merdeka <br>
                    Telah diverifikasi oleh Dewan Pers<br>
                    Sertifikat Nomor<i> 247/DP-Verifikasi/K/V/2018</i>
                </h3>
            </div>
    </div>

    <div class="col-crot">
                <h3>Media <div class="underline-crot"><span></span></div>
                </h3>
                <ul style="font-size: 14px;">
                    <li><a href="https://www.suaramerdeka.com/pemilu-2024">Pemilu 2024</a></li>
                    <li><a href="https://www.suaramerdeka.com/semarang-raya">Semarang Raya</a></li>
                    <li><a href="https://www.suaramerdeka.com/jawa-tengah">Jawa Tengah</a></li>
                    <li><a href="https://www.suaramerdeka.com/sm-gen">SM Gen</a></li>
                    <li><a href="https://www.suaramerdeka.com/nasional">Nasional</a></li>
                    <li><a href="https://www.suaramerdeka.com/internasional">Internasional</a></li>
                    <li><a href="https://www.suaramerdeka.com/ekonomi">Ekonomi</a></li>
                    <li><a href="https://www.suaramerdeka.com/olahraga">Olahraga</a></li>
                    <li><a href="https://www.suaramerdeka.com/bola">Bola</a></li>
                    <li><a href="https://www.suaramerdeka.com/psis">PSIS</a></li>
                    <li><a href="https://www.suaramerdeka.com/teknologi">Tekhnologi</a></li>
                    <li><a href="https://www.suaramerdeka.com/hiburan">Hiburan</a></li>
                    <li><a href="https://www.suaramerdeka.com/gaya-hidup">Gaya Hidup</a></li>
                    <li><a href="https://www.suaramerdeka.com/otomotif">Otomatif</a></li>
                    <li><a href="https://www.suaramerdeka.com/pendidikan">Pendidikan</a></li>
                    <li><a href="https://www.suaramerdeka.com/religi">Religi</a></li>
                    <li><a href="https://www.suaramerdeka.com/haji">Haji 2024</a></li>
                    <li><a href="https://www.suaramerdeka.com/opini">Opini</a></li>
                </ul>
            </div>

            <div class="col-crot">
                <h3>Links <div class="underline-crot"><span></span></div>
                </h3>
                <ul style="font-size: 14px;">
                    <li><a href="/portal">Home</a></li>
                    <li><a href="/portal/about">About</a></li>
                    <li><a href="/portal/service">Services</a></li>
                    <li><a href="/portal/portofolio">Portfolio</a></li>
                    <li><a href="/portal/platform">Platform</a></li>
                    <li><a href="/portal/ourteam">Our Team</a></li>
                    <li><a href="/portal/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-crot">
                <h3>Newsletter <div class="underline-crot"><span></span></div>
                </h3>
                <form class="from-crot" action="">
                    <i class="far fa-envelope" style="margin-right: 5px;"></i>
                    <input type="email" placeholder="Enter your email ID" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons-crot">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://wa.me/yourphonenumber" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <hr class="hr-crot">
        {{-- <p class="copyright"> Suara Merdeka Generation © 2024 - All Rights Reserved </p> --}}
        <p class="copyright-crot" style="text-align: center">
            Suara Merdeka Generation ©
            <script>
                document.write(new Date().getFullYear())

            </script>
        </p>
        <!-- Tambahkan tautan ke website Kaluna -->
        <p class="powered-by-crot" style="text-align: center">
            this website design and powered by <a href="https://kaluna.io" target="_blank" class="powered-by-link"
                style="color: white">Kaluna</a>
        </p>
    </footer>

</body>

</html>
