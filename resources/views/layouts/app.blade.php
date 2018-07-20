<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
    <!-- put template styles here or in css file -->
        <!-- Whole site styles -->
    <!-- --------------------------------------- -->

    <!-- page specific styles will be included here, by -->
    @yield('pagestyles')
</head>
<body>
    <header>
        <div id="template-header" class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4 ">
                    <h4 class="text-white">Collapsed content</h4>
                    <span class="text-muted">Welcome to the best IOU app out there.</span>
                    <ul>
                        @auth
                            <li><a href="{{ route('profile') }}">Profile</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1>@yield('pagetitle')</h1>
                @auth
                @else
                <img src="../img/iou1.jpg" alt="" style="width:120px;height:60px;" >
                @endauth
            </nav>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif
        </div> 
        @yield('header')
    </header>   
    <main class = "container">
        @yield('content')
    </main>
    <footer>
        <div id="template-footer">
        </div>
        @yield('footer')
    </footer>
</body>
</html>