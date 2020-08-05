<!doctype html>
<html>

<head>
    @include('includes.head')

</head>

<body>
    @include('includes.header')
    <!-- <div class="container-fluid"> -->
    @yield('content')
    <!-- </div> -->
    
    

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>