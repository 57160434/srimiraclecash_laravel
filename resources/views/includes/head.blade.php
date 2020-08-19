<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{asset('img/icon/srimiracle_fav.png')}}" />

<title> @yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keyword')">

<!-- <title>Cash Services | MiracleCash</title> -->
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('link')
<!-- Fonts -->

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">