<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <!-- Load Select2 CSS first -->
    <link href="path/to/select2.css" rel="stylesheet" />

    <!-- Then load your custom styles -->
    <link href="path/to/your-custom-styles.css" rel="stylesheet" />

    <!-- Import CSS dari Ant Design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/antd/4.16.13/antd.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Import CSS Bootstrap untuk keperluan lainnya -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap" rel="stylesheet">
    <style>
        /* Custom CSS */
        @font-face {
            font-family: 'Proxima Nova';
            src: url('/public/fonts/Proxima/Fontspring-DEMO-proximanova-extrabold.otf') format('woff2');
            font-weight: 600;
            font-style: normal;
        }

        body {
            font-size: 17px;
            background-color: #D3C5E5;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Attempting a more specific selector */
        body .select2-container--bootstrap-5 .select2-selection .select2-selection__placeholder {
            color: black !important;
        }


        .container {
            max-width: 1200px;
            /* Atur ukuran container sesuai kebutuhan */
            margin: auto;
            /* Tengahkan container */
        }

        .select2-container--bootstrap-5 .select2-selection {
            border-bottom: 2px solid #000000;

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

        /*  */


        .contact-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
            font-family: 'Proxima Nova', sans-serif;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        .input {
            margin: 0.5em 0;
            /* Mengubah margin atas dan bawah */
        }

        .input input,
        textarea {
            padding: 0.5em;
            /* Mengubah padding */
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


        .input,
        textarea {
            margin: 1em 0 1em 0;
            width: 100%;
            position: relative;
        }

        .input input,
        textarea {
            font-size: 100%;
            padding: 0.7em;
            outline: none;
            color: #000000;
            border: none;
            border-bottom: 2px solid #000000;
            background: transparent;
            border-radius: none;
            width: 100%;
            resize: none;
        }

        .input label {
            font-size: 100%;
            position: absolute;
            left: 0;
            color: #000000;
            margin-left: 0.1em;
            pointer-events: none;
            transition: all 0.5s ease;
            text-transform: uppercase;
        }

        .input :is(input:focus, input:valid)~label {
            transform: translateY(-50%) scale(.9);
            margin: 0em;
            padding: 0.4em;
            background: transparent;
        }

        .input textarea:focus~label,
        .input textarea:valid~label {
            transform: translateY(-50%) scale(.9);
            margin: 0em;
            padding: 0.4em;
            background: transparent;
        }

        .inputGroup :is(input:focus, input:valid) {
            border-color: rgb(37, 37, 211);
        }

        .form button {
            color: #000000;
            font-size: 15px;
            align-self: flex-start;
            padding: 0.6em;
            border: none;
            cursor: pointer;
            margin-bottom: 50px;
            background: transparent;
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .form button:before {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #e8e8e8;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .form button:hover:before {
            opacity: 0.2;
        }

        .form button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Override Select2 dropdown background */
        .select2-container--bootstrap-5 .select2-dropdown {
            background-color: #fff !important;
        }

        /* Override Select2 dropdown items background */
        .select2-container--bootstrap-5 .select2-results>.select2-results__options {
            background-color: #fff !important;
        }

        /* Optional: Change the background color of the selected item in the dropdown */
        .select2-container--bootstrap-5 .select2-results__option--highlighted[aria-selected] {
            background-color: #735DA5 !important;
            /* A lighter or different shade for highlighted selection */
        }

        /* Optional: Change the background color of the select box itself */
        .select2-container--bootstrap-5 .select2-selection {
            border: none !important;
            /* Remove the default border */
            background-color: transparent !important;
            /* Ensure the background is transparent */
            border-bottom: 2px solid black !important;
            /* Apply a black bottom border */
            box-shadow: none !important;
            /* Remove any box-shadow if present */

        }

        /* Change the placeholder text color */
        .select2-container--bootstrap-5 .select2-selection .select2-selection__placeholder {
            color: black !important;
        }

        .select2-container--bootstrap-5 .select2-selection__placeholder {
            color: black !important;
        }

        /* If you also want to ensure that the text entered by the user is black for better visibility */
        .select2-container--bootstrap-5 .select2-selection .select2-selection__rendered {
            color: black !important;
        }

        /* To change the dropdown items text color to black, if needed */
        .select2-container--bootstrap-5 .select2-dropdown .select2-results__option {
            color: black !important;
        }

        .select2-container--bootstrap-5 .select2-selection--single {
            height: 38px !important;
            /* Adjust based on your form inputs' height */
        }

        /* Adjust line-height for text alignment if necessary */
        .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
            line-height: 36px !important;
            /* Adjust based on your form inputs' line-height */
        }

        /* Placeholder and text color adjustments */
        .select2-container--bootstrap-5 .select2-selection .select2-selection__placeholder,
        .select2-container--bootstrap-5 .select2-selection .select2-selection__rendered {
            color: black !important;
        }

        /* To adjust the dropdown icon color if necessary */
        .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow b {
            border-color: black transparent transparent transparent !important;
        }

        /* Ensure the focus state matches other inputs */
        .select2-container--bootstrap-5.select2-container--focus .select2-selection {
            border-color: #EBD9B4 !important;
            border-bottom: 2px solid #000000 !important;
            /* Reinforce bottom border for consistency */
        }


        .btn-primary {
            font-size: 24px;
            padding: 15px 30px;
            border-radius: 8px;
        }

        /* CSS untuk dropdown dari Ant Design */
        .ant-select-selection-item-content {
            white-space: normal !important;
        }

        /* Styling untuk dropdown dari Ant Design */
        .ant-select-single .ant-select-selector {
            height: auto !important;
            padding: 10px 15px !important;
            border-radius: 8px !important;
            border: 1px solid #000000 !important;
        }

        .ant-select-dropdown-menu-item {
            padding: 10px 15px !important;
            border-radius: 8px !important;
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

        @media screen and (max-width: 576px) {
            .navbar-brand {
                font-size: 20px;
            }

            .navbar-nav .nav-link {
                font-size: 18px;
            }

            .contact-title {
                font-size: 24px;
            }

            .form-group label {
                font-size: 20px;
            }

            .form-control {
                font-size: 18px;
                padding: 12px;
                height: 20px;
            }

            .btn-primary {
                font-size: 20px;
                padding: 12px 24px;
            }
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{URL::asset('/images/logoputihsm.png') }}" alt="Logo" id="navbarLogo">
        </div>
        <ul class="nav-links">
            <li><a href="{{ url('/portal') }}">↖ Exit</a></li>
            <li><a href="/portal/about">About</a></li>
            <li><a href="/portal/service">Service</a></li>
            <li><a href="/portal/portofolio">Portofolio</a></li>
            <li><a href="/portal/platform">Platform</a></li>
            <li><a href="/portal/ourteam">Our Team</a></li>
            @if($card['user'])
            <li class="user-menu">
                <a href="javascript:void(0)">
                    <i class="fas fa-user"></i> {{ $card['user']['name'] }}
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

    <div class="container mt-5">
        @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Terima kasih kami telah menerima pesan anda, kami akan menghubungi anda untuk info lebih lanjut !',
                text: '{{ session('
                success ') }}',
            });

        </script>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <!-- Left Content -->
            <div class="col-md-6">
                <div class="contact-title">Mencari Generasi Muda yang Siap Melakukan Inovasi & Social Movement</div>
                <br>
                <p><b>Email: suaramerdekageneration@gmail.com<br>Phone: +xxxxxxxxxxx</b></p>
            </div>

            <!-- Right Content -->
            <div class="col-md-6">
                <form class="form" method="POST" action="{{ url('/portal/contact') }}">
                    @csrf
                    <div class="input">
                        <input required="" autocomplete="off" name="klien" type="text" value="{{ old('klien') }}">
                        <label for="klien">Name / Corporation</label>
                    </div>

                    <div class="input">
                        <input required="" autocomplete="off" name="email" type="text">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="input">
                        <input required="" autocomplete="off" name="telepon" type="text">
                        <label for="telepon">Telepon</label>
                    </div>
                    <div class="input">
                        <select name="service[]" class="form-select" id="select"
                            data-placeholder="What Can We Do For You" multiple>
                            @foreach($card['service'] as $service)
                            <option value="{{ $service->title_services }}">{{ $service->title_services }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input">
                        <select name="kantorwilayah[]" class="form-select" id="select2"
                            data-placeholder="Project Handle By" multiple>
                            @foreach($card['kantorwilayah'] as $kantorwilayah)
                            <option value="{{ $kantorwilayah->name_kantorwilayah }}">
                                {{ $kantorwilayah->name_kantorwilayah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input">
                        <textarea required="" cols="30" rows="1" name="detail" id="message"></textarea>
                        <label for="detail">Detail Project</label>
                    </div>

                    <div class="input">
                        <input type="date" required="" name="deadline" id="deadline"></input>
                        <label for="deadline" placeholder="search your content" style="margin-top: -30px;">Deadline Project</label>
                    </div>
                    <div class="input">
                        <input type="hidden" name="status" id="status" value="inputan baru">
                    </div>

                    <button type="submit">Send message →</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Import JavaScript dari Ant Design -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/antd/4.16.13/antd.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Import JavaScript Bootstrap untuk keperluan lainnya -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <!-- Import JavaScript Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#multiple-select-optgroup-field').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ?
                    '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            });
        });

    </script>
    <script>
        $('#multiple-select-optgroup-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $(document).ready(function () {
            $('.form-select').on('focus', function () {
                $(this).parent('.input').addClass('is-focused');
            }).on('blur', function () {
                $(this).parent('.input').removeClass('is-focused');
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            // Initialize the Select2 component
            $('.form-select').select2({
                theme: "bootstrap-5",
                width: '100%',
                placeholder: "WHAT CAN WE DO FOR YOUR PROJECT",
                closeOnSelect: false,
            });

            // Dynamically inject CSS for the placeholder color
            // Ensure this runs after the Select2 initialization
            $('<style>.select2-container--bootstrap-5 .select2-selection__placeholder { color: black !important; }</style>')
                .appendTo('head');
        });

    </script>

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
    <script>
        var deadlineInput = document.getElementById('deadline');

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        deadlineInput.min = yyyy + '-' + mm + '-' + dd;

        deadlineInput.addEventListener('change', function () {
            var selectedDate = new Date(this.value);
            if (selectedDate < today) {
                alert('Please select a date starting from today + 1.');
                this.value = ''
            }
        });

    </script>


</body>

</html>
