<!doctype html>
<html>

<head>
    @include('includes.adminhead')

</head>

<body>
@if(isset(Auth::user()->email))
    
   @else
    <script>window.location = "/admin";</script>
   @endif
    <div class="wrapper">
        @include('includes.adminsidebar')
        <div id="content">
            @include('includes.adminheader')
        @yield('content')
        </div>
    </div>
    <!-- <script src="{{asset('js/myjs.js')}}"></script>
    <a href="#" class="scrollToTop d-none d-sm-block" style="display: block;margin-bottom:30px">Scroll To Top</a> -->


    <footer>
        @include('includes.adminfooter')
    </footer>
</body>

</html>