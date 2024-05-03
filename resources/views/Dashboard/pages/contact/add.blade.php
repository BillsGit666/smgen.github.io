@extends('Dashboard.layouts.templates')
@section('content')

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


    <style>
        .select2-container--bootstrap-5 .select2-selection {
            border: 1px solid #ced4da;
            /* Sesuaikan warna border sesuai kebutuhan */
            border-radius: 0.25rem;
            /* Sesuaikan radius border jika perlu */
            padding: 0.375rem 0.75rem;
            /* Sesuaikan padding jika perlu */
        }

        .select2-container--bootstrap-5 .select2-selection--multiple {
            min-height: calc(2.25rem + 2px);
            /* Menyesuaikan minimal tinggi untuk multi-select */
        }

        /* Mengatur placeholder agar mirip dengan input biasa */
        .select2-container--bootstrap-5 .select2-selection__placeholder {
            color: #6c757d;
            /* Warna placeholder */
            margin-left: 0.75rem;
            /* Menyesuaikan posisi teks placeholder */
        }

        .select2-container--bootstrap-5 .select2-selection--single,
        .select2-container--bootstrap-5 .select2-selection--multiple {
            position: relative;
        }

        .select2-container--bootstrap-5 .select2-selection--single::after,
        .select2-container--bootstrap-5 .select2-selection--multiple::after {
            content: "\f107";
            /* FontAwesome icon code for down arrow */
            font-family: 'FontAwesome';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        /* CSS existing Anda */
        .select2-container--bootstrap-5 .select2-selection {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
        }

        .select2-container--bootstrap-5 .select2-selection--multiple {
            min-height: calc(2.25rem + 2px);
        }

        .select2-container--bootstrap-5 .select2-selection__placeholder {
            color: #6c757d;
            margin-left: 0.75rem;
        }

    </style>
</head>
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand"> Add Contact Us </a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <span class="d-lg-none">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form id="logout-form" action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-logout" style="color: blue; border-color: blue"><i
                                        class="fa-solid fa-right-from-bracket"></i>&nbsp&nbspLogout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <main class="d-flex flex-column gap-3 grow">
                        <div class="body-content d-flex flex-column">
                            <main class="d-flex flex-column gap-3 grow">
                                <section class="d-flex dlex-column gap-2 mt-4">
                                    <div class="page-inner" style="width: 100%">
                                        <div id="add-data-paket" class="card">
                                            @if(session('success'))
                                            <script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Data Berhasil Ditambahkan !',
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
                                            <div class="card-header pb-2">
                                                <div class="d-flex align-items-center">
                                                    <h4 class="card-title">Tambah Data Project</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="\cms\addcontact" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label"
                                                                    style="color: black">Nama klien</label>
                                                                <input name="klien" class="form-control" type="text"
                                                                    value="{{ old('klien') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Email</label>
                                                                <input name="email" class="form-control" type="email"
                                                                    value="{{ old('email') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Telepon</label>
                                                                <input name="telepon" class="form-control" type="text"
                                                                    value="{{ old('telepon') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="service" class="form-control-label">
                                                                    Services</label>
                                                                <select name="service[]" class="form-select" id="select"
                                                                    multiple>
                                                                    @foreach($card['service'] as $service)
                                                                    <option value="{{ $service->title_services }}">
                                                                        {{ $service->title_services }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kantorwilayah" class="form-control-label">
                                                                    Kantor Wilayah Penanggung Jawab</label>
                                                                <select name="kantorwilayah[]" class="form-select"
                                                                    id="select2" multiple>
                                                                    @foreach($card['kantorwilayah'] as $kantorwilayah)
                                                                    <option
                                                                        value="{{ $kantorwilayah->name_kantorwilayah }}">
                                                                        {{ $kantorwilayah->name_kantorwilayah }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Detail Project</label>
                                                                <textarea name="detail" class="form-control"
                                                                    rows="3">{{ old('detail') }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Deadline</label>
                                                                <input name="deadline" class="form-control" type="date"
                                                                    value="{{ old('deadline') }}" id="deadline">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Status</label>
                                                                <input name="status" class="form-control" type="tetx"
                                                                    value="{{ old('status') }}">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-4">
                                                            <button type="button"
                                                                class="btn btn-sm bg-warning me-2 text-black"
                                                                onclick="goBack()">
                                                                Cancel
                                                            </button>
                                                            <button type="submit"
                                                                class="btn btn-sm bg-primary mr-2 text-black">
                                                                Save Data
                                                            </button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </main>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        demo.initDashboardPageCharts();

        demo.showNotification();

    });

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.form-select').select2({
            theme: "bootstrap-5",
            width: '100%',
            closeOnSelect: false,
        });

        $('<style>.select2-container--bootstrap-5 .select2-selection__placeholder { color: black !important; }</style>')
            .appendTo('head');
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
            alert('Please select a date starting from today + 1 .');
            this.value = '';
        }
    });

</script>
@endsection
