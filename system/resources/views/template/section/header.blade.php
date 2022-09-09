<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('template') }}" class="nav-link">Beranda</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                @if (Auth::check())
                    {{ request()->user()->nama }}
                @else
                    Silahkan Masuk
                @endif
                <img src="{{ url('public') }}/dist/img/user1-128x128.jpg" alt="User Avatar" style="height: 100%;"
                    class="img-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fa fa-user"></i>profile
                </a>
                <a href="{{ url('setting') }}" class="dropdown-item">
                    <i class="fa fa-cog"></i>Setting
                </a>
                <!-- Message End -->
                </a>
                <a href="{{ url('home') }}" class="dropdown-item">
                    <i class="fas fa-sign-out"></i>Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
