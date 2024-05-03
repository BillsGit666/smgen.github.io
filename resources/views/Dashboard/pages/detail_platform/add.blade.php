@extends('Dashboard.layouts.templates')
@section('content')
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand"> Add Detail Platform </a>
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
                                                    <h4 class="card-title">Tambah Data Detail Platform</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <script src="{{ asset('js/pisahTitik.js') }}"></script>
                                                <form action="/cms/{{ $platform->id }}/detail_platform/adddetail"
                                                    enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Profile Picture</label>
                                                                <input name="profile_platform" class="form-control" type="file">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="platform_id" class="form-control"
                                                                    type="hidden"
                                                                    value="{{ $platform ? $platform->id : '' }}"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label"
                                                                    style="color: black">Username Platform</label>
                                                                <input name="username_platform" class="form-control"
                                                                    type="text" value="{{ old('username_platform') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Link Platform</label>
                                                                <input name="link_platform" class="form-control"
                                                                    type="text" value="{{ old('link_platform') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Followers</label>
                                                                <input name="followers" class="form-control"
                                                                    type="number" inputmode="numeric"
                                                                    value="{{ old('followers') }}">
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
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });

</script>
<script>
    const followersInput = document.querySelector('input[name="followers"]');

    followersInput.addEventListener('input', () => {
        // Validasi input
        const value = followersInput.value;
        if (!/^[0-9]+$/.test(value)) {
            // Hapus karakter non-angka
            followersInput.value = value.replace(/[^0-9]/g, '');
        }
    });

</script>
@endsection
