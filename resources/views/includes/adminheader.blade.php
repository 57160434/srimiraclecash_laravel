<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="navbar-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <button class="btn btn-light d-inline-block d-lg-none ml-auto" type="button" data-toggle="dropdown"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i>admin</i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link text-black d-none d-md-block" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" href="#">admin</a>
                    <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Change password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('admin/logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>