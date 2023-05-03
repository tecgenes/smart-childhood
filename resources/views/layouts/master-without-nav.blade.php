<!doctype html>
<head>
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico')}}">
    <title> @yield('title')</title>
    @include('layouts.head-css')
</head>

    <body>
    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
