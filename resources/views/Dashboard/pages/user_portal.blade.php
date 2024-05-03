@extends('Dashboard.layouts.templates')
@section('content')
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand"> User Portal </a>
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
                        <li class=" dropdown nav-item">
                            <a class="nav-link">
                                <form method="GET" action="{{ url('/cms/userportal') }}" class="form-search">
                                    <label for="search">
                                        <input required="" name="keyword" autocomplete="off" placeholder="search your content"
                                            id="search" value="{{ $data['keyword'] }}" type="text">
                                        <div class="icon">
                                            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="swap-on">
                                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                                    stroke-linejoin="round" stroke-linecap="round"></path>
                                            </svg>
                                            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="swap-off">
                                                <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round"
                                                    stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <button type="submit" class="close-btn">
                                            <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    fill-rule="evenodd"></path>
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
        @php
        $nomor=1;
        @endphp
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <main class="d-flex flex-column gap-3 grow">
                        <section class="d-flex gap-2 items-center justify-content-between">
                            <div class="d-flex align-items-center ml-auto">
                                <a href="{{ url('/cms/adduser_portal')}}" type="button"
                                    class="btn btn-primary rounded-lg">
                                    <div class="fa fa-fw fa-plus mr-2"></div> Add Data
                                </a>
                            </div>
                        </section>                        
                        <section class="d-flex dlex-column gap-2 mt-4">
                            <div class="card mb-4" style="width: 100%">
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0 table-hover">
                                            <thead class="bg-grey1">
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Membership</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Provinsi</th>
                                                    <th class="text-center">Kota</th>
                                                    <th class="text-center">Kecamatan</th>
                                                    <th class="text-center">Kelurahan</th>
                                                    <th class="text-center">Role</th>
                                                    <th class="text-center">Password</th>
                                                    <th>Actions</th>
                                                </tr>
                                            <tbody>
                                                @foreach ($data['get_data'] as $user_portal)
                                                <tr>
                                                    <td class="text-center">{{ $nomor++ }}</td>
                                                    <td class="text-center">{{ $user_portal->membership }}</td>
                                                    <td class="text-center">{{ $user_portal->name }}</td>
                                                    <td class="text-center">{{ $user_portal->email }}</td>
                                                    <td class="text-center">{{ $user_portal->provinces->name }}</td>
                                                    <td class="text-center">{{ $user_portal->regencies->name }}</td>
                                                    <td class="text-center">{{ $user_portal->districts->name }}</td>
                                                    <td class="text-center">{{ $user_portal->villages->name }}</td>
                                                    <td class="text-center">{{ $user_portal->role->name }}</td>
                                                    <td class="text-center">{{ strlen($user_portal->password) > 15 ? substr($user_portal->password, 0, 15) . '...' : $user_portal->password }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="/cms/{{ $user_portal->id }}/edituser_portal"
                                                                class="btn btn-primary btn-sm bg-primary me-1 text-white">Edit</a>
                                                                <form action="/cms/userportal/{{ $user_portal->id }}" method="POST"
                                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input type="submit" name="submit" value="delete"
                                                                        class="btn btn-sm btn-danger bg-danger me-1 text-white">
                                                                </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="px-4 mt-4">
                                        {{ $data['get_data']->links() }}
                                    </div>
                                </div>
                            </div>
            
                        </section>
                    </main>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });

</script>
<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>

{{-- <script type="text/javascript">
    // Function to display Sweet Alert when delete button is clicked
    function confirmDelete() {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus data ini?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengkonfirmasi penghapusan, submit form delete
                document.getElementById('delete-form').submit();
            }
        });
    }
</script> --}}
<script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
        demo.showNotification();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-N9OvEfZYh3o/bo2KR1eCKLp2tsuPYL2hPfkHblfNkIiRn/c/R+J5YlCtB+3FR0Gz" crossorigin="anonymous"></script>




@endsection
