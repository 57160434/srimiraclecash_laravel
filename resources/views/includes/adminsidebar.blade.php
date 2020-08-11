<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="{{url('/')}}"><h3>Srimiraclecash</h3></a>
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
                    <a href="{{url('admin/knowledge/create')}}">Knowledge create</a>
                </li>
                <li>
                    <a href="{{url('admin/knowledge/listing')}}">Knowledge listing</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{url('admin/seo')}}">SEO</a>
        </li>
    </ul>
</nav>