@extends('Dashboard.layouts.templates')
@section('content')
<style>
    .loading-overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.7);
  z-index: 9999;
}

.spinner {
  border: 8px solid #000000;
  border-top: 8px solid #0099ff;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 1s linear infinite;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand">Edit User Portal </a>
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
                                <button type="submit" class="btn btn-logout" style="color: blue; border-color: blue"><i class="fa-solid fa-right-from-bracket"></i>&nbsp&nbspLogout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div id="loading" class="spinner-container loading-overlay">
                <div class="spinner">
                    <div class="spinner">
                        <div class="spinner">
                            <div class="spinner">
                                <div class="spinner">
                                    <div class="spinner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <main class="d-flex flex-column gap-3 grow">                       
                        <div class="body-content d-flex flex-column">
                            <main class="d-flex flex-column gap-3 grow">
                                <section class="d-flex dlex-column gap-2 mt-4">
                                    <div class="page-inner" style="width: 100%">
                                        <div id="add-data-paket" class="card">
                                            @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
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
                                                    <h4 class="card-title">Edit User Portal</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="\cms\user_portal\{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-control-label" style="color: black">Membership</label>
                                                                <input name="name" class="form-control" type="text"
                                                                    value="{{ $data->membership }}" readonly>
                                                            <div class="form-group">
                                                                <label class="form-control-label" style="color: black">Nama User</label>
                                                                <input name="name" class="form-control" type="text"
                                                                    value="{{ $data->name }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Email</label>
                                                                <input name="email" class="form-control" type="email"
                                                                    value="{{ $data->email }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Role</label>
                                                                <input name="role_id" class="form-control" type="text" value="{{ $data->role->name }}" readonly>
                                                                <input type="hidden" name="role_id" value="{{ $data->role->id }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Asal Provinsi</label>
                                                                <div class="input-group">
                                                                    <select name="provinsi" id="provinsi" class="dynamic form-control" data-dependent="provinsi">
                                                                        <option value="" disabled selected>~ Pilih Provinsi ~</option>
                                                                        @foreach($card['get_provinsi'] as $provinsi)
                                                                        <option value="{{ $provinsi->id }}" {{ $provinsi->id == $data->provinces_id ? 'selected' : '' }}> {{ $provinsi->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fa fa-caret-down"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Asal Kota / Kabupaten</label>
                                                                <div class="input-group">
                                                                    <label for="kota"><i class="zmdi zmdi-pin-drop"></i></label>
                                                                    <select name="kota" id="kota" class="dynamic form-control" data-dependent="kota">
                                                                        <option value="{{ $data->regencies->id }}" {{ $data->regencies->id == $data->provinces_id ? 'selected' : '' }}> {{ $data->regencies->name }}</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fa fa-caret-down"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Asal Kecamatan</label>
                                                                <div class="input-group">
                                                                    <label for="kecamatan"><i class="zmdi zmdi-pin"></i></label>
                                                                    <select name="kecamatan" id="kecamatan" class="dynamic form-control" data-dependent="kecamatan">
                                                                        <option value="{{ $data->districts->id }}" {{ $data->districts->id == $data->districts_id ? 'selected' : '' }}> {{ $data->districts->name }}</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fa fa-caret-down"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Asal Kelurahan</label>
                                                                <div class="input-group">
                                                                    <label for="kelurahan"><i class="zmdi zmdi-pin-drop"></i></label>
                                                                    <select name="kelurahan" id="kelurahan" class="dynamic form-control" data-dependent="kelurahan">
                                                                        <option value="">~ Pilih Kelurahan ~</option>
                                                                        <option value="{{ $data->villages->id }}" {{ $data->villages->id == $data->villages_id ? 'selected' : '' }}> {{ $data->villages->name }}</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="fa fa-caret-down"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label class="form-control-label">Password</label>
                                                                <div class="input-group">
                                                                    <input id="password" name="password" class="form-control" type="password" value="{{ $data->password }}">
                                                                    <div id="eyeicon" class="btn btn-outline-secondary"><i class="fa-solid fa-eye"></i></div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-4">
                                                            <button type="button" class="btn btn-sm bg-warning me-2 text-black"
                                                                onclick="goBack()">
                                                                Cancel
                                                            </button>
                                                            <button type="submit" class="btn btn-sm bg-primary mr-2 text-black">
                                                                Update data
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });

</script>
<script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");

    eyeicon.onclick = function() {
        if(password.type == "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
</script>
<script>
    $(document).ready(function () {
        // Event change untuk menangani pemilihan provinsi
        $('#provinsi').change(function () {
            $('#loading').show();
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                var provinsiValue = $('#provinsi option:selected').val();
                
                $.ajax({
                    url: "{{ route('getkota.fetch')}}",
                    method: "POST",
                    data: {
                        select: select,
                        value: value,
                        provinsi: provinsiValue,
                        _token: _token,
                        dependent: dependent
                    },
                    success: function (result) {
                        $('#kota').html(result);
                    },
                    complete: function () {
                        $('#loading').hide();
                    }
                });
            }
        });

        // Event change untuk menangani pemilihan kota
        $('#kota').change(function () {
            $('#loading').show();
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                var kotaValue = $('#kota option:selected').val();
                
                $.ajax({
                    url: "{{ route('getkecamatan.fetch')}}",
                    method: "POST",
                    data: {
                        select: select,
                        value: value,
                        kota: kotaValue,
                        _token: _token,
                        dependent: dependent
                    },
                    success: function (result) {
                        $('#kecamatan').html(result);
                    },
                    complete: function () {
                        $('#loading').hide();
                    }
                });
            }
        });

        // Event change untuk menangani pemilihan kecamatan
        $('#kecamatan').change(function () {
            $('#loading').show();
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                var kecamatanValue = $('#kecamatan option:selected').val();
                
                $.ajax({
                    url: "{{ route('getkelurahan.fetch')}}",
                    method: "POST",
                    data: {
                        select: select,
                        value: value,
                        kecamatan: kecamatanValue,
                        _token: _token,
                        dependent: dependent
                    },
                    success: function (result) {
                        $('#kelurahan').html(result);
                    },
                    complete: function () {
                        $('#loading').hide();
                    }
                });
            }
        });
    });
</script>
@endsection