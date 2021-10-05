<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/css/app.css') }}" rel="stylesheet" type="text/css"/> --}}
    <link href="{{ asset('/css/app2.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div id="app" class="row d-md-flex justify-content-md-between">
        <div class="sidebar col-md-2" id="sidebar">
            <a href="#" class="sidebar-brand">
            <img src="{{url('/img/Voyager_Logo.png') }}" alt="Warranty & Service Portal" width="200" height="74">
            </a>
            <nav class="sidebar-nav nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIN SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">INTERNAL SERVICE QUEUE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EXTERNAL SERVICE QUEUE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">INTERNAL PARTS ORDER DASH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REPLACEMENT PARTS ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NOTIFICATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CURRENT TSB & RECALLS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BUILD TSB OR RECALL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ADMIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MY ACCOUNT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">USERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOG OFF</a>
                    </li>
                </ul>
            </nav>
        </div> <!-- sidebar end -->
        <main class="main col-md-10">
            @yield('content')
        </main>
    </div> 
</body> 