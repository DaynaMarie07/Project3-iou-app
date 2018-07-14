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
    <title>IOU</title> 
    
    <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    
                  <div class="bg-dark p-4 ">
                    <h4 class="text-white">Collapsed content</h4>
                    <span class="text-muted">Welcome to the best IOU app out there.</span>
                       <ul>
                           <li>About</li>
                           <li>Login</li>
                           <li>Profile</li>
                       </ul>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <img src="../images/iou1" alt="" style="width:120px;height:60px;" >
                </nav>
              </div>
</head>
<body>
    <header>
        @yield('header')
    </header>   
    <main class = "container">
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>