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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="sidebar" id="sidebar">
            <nav class="sidebar-nav nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vin Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Internal Service Queue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">External Service Queue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Internal Parts Order Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Replacement Part Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Current TSBs & Recalls</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Build TSB/Recall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log Off</a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="main">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

</body>