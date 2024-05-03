@extends('Dashboard.layouts.templates')
@section('content')
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand"> Add Struktur Kantor Wilayah </a>
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
                                                    <h4 class="card-title">Tambah Data Struktur Kantor Wilayah</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="/cms/{{ $kanwil->id }}/struktur_kanwil/editstruktur/{{ $data->id }}"
                                                    enctype="multipart/form-data" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input name="kantorwilayah_id" class="form-control"
                                                                    type="text"
                                                                    value="{{ $kanwil ? $kanwil->id : '' }}"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label"
                                                                    style="color: black">Photos</label>
                                                                <input name="thumbnail_struktur" class="form-control" type="file">
                                                                <img class="mt-3" style="max-height: 100px"
                                                                src="{{ asset('storage/' . $data->thumbnail_struktur) }}" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Name</label>
                                                                <input name="name_struktur" class="form-control"
                                                                    type="text" value="{{ $data->name_struktur }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Position</label>
                                                                <div class="input-group">
                                                                    <select name="position_id" class="form-control">
                                                                        <option value="">Silhakan pilih Jabatan</option>
                                                                        @foreach($card['position'] as $position)
                                                                        <option value="{{ $position->id }}" {{ $position->id == $data->position_id ? 'selected' : '' }}> {{ $position->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-caret-down"></i></span>
                                                                    </div>
                                                                </div>
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
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });

</script>
@endsection