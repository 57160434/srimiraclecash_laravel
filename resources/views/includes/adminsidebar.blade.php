<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Srimiraclecash</h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{url('admin/home')}}">Dashboard</a>
        </li>
        <li>
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customers</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="#">Customer create</a>
            </li>
            <li>
                <a href="#">Customer listing</a>
            </li>
        </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Knowledge</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Knowledge create</a>
                </li>
                <li>
                    <a href="#">Knowledge listing</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">SEO</a>
        </li>
    </ul>
</nav>