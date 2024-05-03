@extends('Dashboard.layouts.templates')
@section('content')
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand">Edit Portofolio</a>
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
                                                    <h4 class="card-title">Edit Data Portofolio</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="\cms\portofolio\{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Thumbnail</label>
                                                                <input name="thumbnail_portofolio" class="form-control" type="file">
                                                                <img class="mt-3" style="max-height: 100px"
                                                                src="{{ asset('storage/' . $data->thumbnail_portofolio) }}" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label" style="color: black">Title Portofolio</label>
                                                                <input name="title_portofolio" class="form-control" type="text"
                                                                    value="{{ $data->title_portofolio }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label" style="color: black">Description Portofolio</label>
                                                                <input name="description" class="form-control" type="text"
                                                                    value="{{ $data->description }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label" style="color: black">Link Atau URL Portofolio</label>
                                                                <input name="link_portofolio" class="form-control" type="text"
                                                                    value="{{ $data->link_portofolio }}">
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
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });

</script>
@endsection