<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/landingPage.css') }}" rel="stylesheet">
    

</head>

<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand titleNav" href="#">ONLINE BOOK STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/dashboard') }}" class="navItem">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="navItem">Log in</a>
                    </li>

                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="navItem">Register</a>
                        @endif
                    </li>

                    @endauth
                    @endif

                </ul>
            </div>
        </div>
    </nav>
        <div class="container">
            <br><br><br><br><br>
            <div class="row">
                <div class="col-sm">
                    <h1 class="text-center">Welcome to online book shoop</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm mx-auto">
                    <img src="{{ asset('images/landingPage.png') }}" class="img-fluid rounded mx-auto d-block" alt="...">
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>