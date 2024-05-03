<style>
.logout-item {
    display: none;
}

@media screen and (max-width: 768px) {
    .logout-item {
        display: block;
    }
}


    /* CSS untuk tampilan desktop */
    @media screen and (min-width: 769px) {
        #logout-sidebar {
            display: none;
        }
    }

</style>
<div class="sidebar" data-color="purple">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a class="simple-text">
                <img class="logo-sidebar" src="{{ URL::asset('/images/logoputihsm.png') }}">
            </a>
        </div>
        <ul class="nav">
            @if(Session::get('roles') == 'superadmin' || Session::get('roles') == 'developer' || Session::get('roles')
            == 'admin')
            <li @if(Request::is('cms')) class="active" style="border-left: 5px solid #000000;" @endif>
                <a class="nav-link" href="{{ url('/cms') }}">
                    <i class="fa-solid fa-house"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            @endif

            @if(Session::get('roles') == 'superadmin' || Session::get('roles') == 'developer')
            <li @if(Request::is('cms/services')) class="active" style="border-left: 5px solid #000000;" @endif>
                <a class="nav-link" href="{{ url('/cms/services') }}">
                    <i class="fa-solid fa-handshake"></i>
                    <p>Services</p>
                </a>
            </li>
            <li @if(Request::is('cms/portofolio')) class="active" style="border-left: 5px solid #000000;" @endif>
                <a class="nav-link" href="{{ url('/cms/portofolio') }}">
                    <i class="fa-solid fa-photo-film"></i>
                    <p>Portofolio</p>
                </a>
            </li>
            <li class="nav-item dropdownku">
                <a class="nav-link dropdown-toggle" href="#" id="DropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-people-group"></i>
                    <p>Our Team</p>
                </a>
                <ul class="dropdownmenuku" aria-labelledby="DropdownMenuLink">
                    @if(Session::get('roles') == 'superadmin' || Session::get('roles') == 'developer')
                    <li @if(Request::is('cms/ourteam')) class="active" style="border-left: 5px solid #000000;" @endif>
                        <a class="nav-link baru" href="{{ url('/cms/position') }}">
                            <i class="fa-solid fa-sitemap"></i>
                            <p>Position</p>
                        </a>
                    </li>
                    <li @if(Request::is('cms/ourteam')) class="active" style="border-left: 5px solid #000000;" @endif>
                        <a class="nav-link baru" href="{{ url('/cms/smgen_team') }}">
                            <i class="fa-solid fa-user-group"></i>
                            <p>SMGEN TEAM</p>
                        </a>
                    </li>
                    <li @if(Request::is('cms/ourteam')) class="active" style="border-left: 5px solid #000000;" @endif>
                        <a class="nav-link baru" href="{{ url('/cms/kantorwilayah') }}">
                            <i class="fa-solid fa-building"></i>
                            <p>Kantor Wilyah</p>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>

            <li @if(Request::is('cms/platform')) class="active" style="border-left: 5px solid #000000;" @endif>
                <a class="nav-link" href="{{ url('/cms/platform') }}">
                    <i class="fa-solid fa-globe"></i>
                    <p>Platform</p>
                </a>
            </li>
            @endif

            @if(Session::get('roles') == 'superadmin' || Session::get('roles') == 'developer' || Session::get('roles')
            == 'admin')
            <li @if(Request::is('cms/contact')) class="active" style="border-left: 5px solid #000000;" @endif>
                <a class="nav-link" href="{{ url('/cms/contact') }}">
                    <i class="fa-solid fa-address-book"></i>
                    <p>Contact Us</p>
                </a>
            </li>
            @endif

            @if(Session::get('roles') == 'superadmin' || Session::get('roles') == 'developer')
            <li class="nav-item dropdownku">
                <a class="nav-link dropdown-toggle" href="#" id="DropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-cogs"></i>
                    <p>Settings</p>
                </a>
                <ul class="dropdownmenuku" aria-labelledby="DropdownMenuLink">
                    @if(Session::get('roles') == 'superadmin' || Session::get('roles') == 'developer')
                    <li @if(Request::is('cms/setting')) class="active" style="border-left: 5px solid #000000;" @endif>
                        <a class="nav-link baru" href="{{ url('/cms/user') }}">
                            <i class="fa-solid fa-address-book"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li @if(Request::is('cms/setting')) class="active" style="border-left: 5px solid #000000;" @endif>
                        <a class="nav-link baru" href="{{ url('/cms/userportal') }}">
                            <i class="fa-solid fa-address-book"></i>
                            <p>Users Portal</p>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
            @endif
            <li class="nav-item logout-item">
                <form id="logout-form" action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-logout" style="color: white; border-color: white; margin-left:23px; border:none">
                        <i class="fa-solid fa-right-from-bracket"></i>&nbsp&nbspLogout
                    </button>
                </form>
            </li>


        </ul>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.querySelectorAll('.nav-item.dropdownku');

        dropdowns.forEach(function (dropdown) {
            var dropdownToggle = dropdown.querySelector('.dropdown-toggle');
            var dropdownMenu = dropdown.querySelector('.dropdownmenuku');

            dropdownMenu.style.display = "none";

            dropdownToggle.addEventListener('click', function (event) {
                event.preventDefault();
                dropdown.classList.toggle('active');

                if (dropdownMenu.style.display === "block") {
                    dropdownMenu.style.display = "none";
                } else {
                    dropdownMenu.style.display = "block";
                }
            });

            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.remove('active');
                    dropdownMenu.style.display = "none";
                }
            });
        });
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.querySelectorAll('.nav-item.dropdownku2');

        dropdowns.forEach(function (dropdown) {
            var dropdownToggle2 = dropdown.querySelector(
                '.dropdown-toggle2'); 
            var dropdownMenu2 = dropdown.querySelector('.dropdownmenuku2');

            dropdownMenu2.style.display = "none";

            dropdownToggle2.addEventListener('click', function (event) {
                event.preventDefault();
                dropdown.classList.toggle('active');

                if (dropdownMenu2.style.display === "block") {
                    dropdownMenu2.style.display = "none";
                } else {
                    dropdownMenu2.style.display = "block";
                }
            });

            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.remove('active');
                    dropdownMenu2.style.display = "none";
                }
            });
        });
    });

</script>
