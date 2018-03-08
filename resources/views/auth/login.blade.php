<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
           <div>

                <h1 class="logo-name">FN</h1>

            </div>
            <h3>Welcome to Fundtheneedy</h3>
            <p>A place where charity flourishes
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="{{route('login')}}" method="post">
                {{ csrf_field() }}
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}
                    </div>
                @endif
                <div class="form-group">
                    <input type="email" name ="username" class="form-control" placeholder="Username" required="">

                   
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                      
                     
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="{{route('password.request')}}"><small>Forgot password?</small></a>
                
            </form>
        </div>
         <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

 