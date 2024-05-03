@extends('Dashboard.layouts.templates')
@section('content')
<style>
    .card.shadow.rounded:hover {
    transform: scale(1.05); /* Mengubah ukuran kartu saat dihover */
    transition: transform 0.3s ease; /* Menambahkan animasi transisi */
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
}

</style>
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand" href="/cms"> Dashboard </a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <form class="form-search">
                                    <label for="search">
                                        <input required="" autocomplete="off" placeholder="search your content" id="search" type="text">
                                        <div class="icon">
                                            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-on">
                                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round" stroke-linecap="round"></path>
                                            </svg>
                                            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-off">
                                                <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <button type="reset" class="close-btn">
                                            <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </label>
                                </form>
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
                        <div class="col-md-3 mb-4">
                            <div class="card shadow rounded" style="background-color: #FFF78A">
                                <div class="card-body">
                                    <div class="">
                                        <h4 class="card-title">Total Project</h4>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="text" style="padding-top: 23px"><b>{{ $card['total_project'] }}</b></h2>
                                            <a href="cms/contact" style="margin-top: 37px; color: black">
                                                <i class="fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card shadow rounded" style="background-color: #EBD9B4">
                                <div class="card-body">
                                    <div class="">
                                        <h4 class="card-title">Total Services</h4>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="text" style="padding-top: 23px"><b>{{ $card['total_services'] }}</b></h2>
                                            <a href="cms/services" style="margin-top: 37px; color: black">
                                                <i class="fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card shadow rounded" style="background-color: #40A2E3">
                                <div class="card-body">
                                    <div class="">
                                        <h4 class="card-title">Total Portofolio</h4>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="text" style="padding-top: 23px"><b>{{ $card['total_portofolio'] }}</b></h2>
                                            <a href="cms/portofolio" style="margin-top: 37px; color: black">
                                                <i class="fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card shadow rounded" style="background-color: #9BCF53">
                                <div class="card-body">
                                    <div class="">
                                        <h4 class="card-title">Total Platform</h4>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="text" style="padding-top: 23px"><b>{{ $card['total_platform'] }}</b></h2>
                                            <a href="cms/platform" style="margin-top: 37px; color: black">
                                                <i class="fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
@endsection
