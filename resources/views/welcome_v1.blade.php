
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fundtheneedy is a crowdsourcing platform"/>
    <title>Fundtheneedy | Welcome
       
    </title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    



</head>

<body class="gray-bg">
@if(session()->has('message'))
    <div class="alert alert-info">
        {{ session()->get('message') }}

    </div>
@endif
   <div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default">
      <div >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
         <ul  class="nav navbar-nav navbar-right  "  >
                
                  <li ><a href="{{Route('exabout')}}"> About Us </a></li>
                  <li ><a href="{{Route('exvision')}}"> Our Vision </a></li> 
                  <li ><a href="{{Route('excontact')}}"> Contact </a></li>
                   <li ><a href="{{Route('exreport')}}"> Complaints </a></li>
                  <li ><a href="{{Route('exterm')}}"> Terms of Service </a></li>
                   <li ><a href="{{Route('exhowto')}}"> How To Use </a></li>


            </ul>
        
        </div>
      </div>
    </nav>
  </div>

        
          
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">FN</h1>

            </div>
            <h3>Welcome to Fundtheneedy</h3>
            
            <p>A place where charity flourishes
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            
     			 <a class="btn btn-primary block full-width m-b" href="{{route('login')}}">Login</a>
     			 <p class="text-muted text-center"><small>Do not have an account?</small></p>
     			  <a class="btn btn-primary block full-width m-b" href="{{route('register')}}">Register</a>

        </div>
        <hr>
        <br>
        <i>They ask thee what they should spend (In charity). Say: Whatever ye spend that is good, is for parents and kindred and orphans and those in want and for wayfarers. And whatever ye do that is good, -God knoweth it well. (Quran 2:215) </i>
            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
   <!--  <script type="text/javascript">
  
     swal({
  title: "Welcome!",
  text: "Fundtheneedy is still under testing but you can join and be one of our founding members!",
  icon: "info",
  button: "Aww yiss!",
});
    </script> -->
</body>

</html>

 
