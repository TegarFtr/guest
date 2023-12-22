<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuestEvent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #758467;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: white;
            text-decoration: underline;
        }
        .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
            color: #ccc;
        }
        .navbar-brand {
            margin-left: -50px;
        }
        .logo {
            align-items: center;
            margin-top: 0px;
            margin-left: 5px;
            margin-right: 5px;
            padding-top: 0pt;
            border-top: 0px;
            left: 0px;
            width: 90px;
            height: auto;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        a {
            font-family: 'Century Gothic', 'Century', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-expand-md justify-content-center">
        <div class="container">
            <a class="navbar-brand disabled" aria-disabled="true" style="color: white";>
                <img src="{{ asset('images/logoo.gif') }}" alt="Logo GuE" class="logo">
                GuestEvent
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('home')}}" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('events')}}" style="color: white;">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('contactus')}}" style="color: white;">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('aboutus')}}" style="color: white;">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>