<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Asia Cashs
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{'/' == request()->path() ? 'active' :'' }}">
                    <a class="nav-link" href="{{ url('/') }}">หน้าแรก
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{'customer' == request()->path() ? 'active' :'' }}">
                    <a class="nav-link" href="{{ url('/customer') }}">กลุ่มลูกค้าของเรา</a>
                </li>
                <li class="nav-item {{'service' == request()->path() ? 'active' :'' }}">
                    <a class="nav-link" href="{{ url('/service') }}">บริการ</a>
                </li>
                <li class="nav-item {{'knowledge' == request()->path() ? 'active' :'' }}">
                    <a class="nav-link" href="{{ url('/knowledge') }}">สาระการเงิน</a>
                </li>
                <li class="nav-item {{'document' == request()->path() ? 'active' :'' }}">
                    <a class="nav-link" href="{{ url('/document') }}">การเตรียมเอกสาร</a>
                </li>
                <li class="nav-item {{'contact' == request()->path() ? 'active' :'' }}">
                    <a class="nav-link" href="{{ url('/contact') }}">ติดต่อเรา</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

   