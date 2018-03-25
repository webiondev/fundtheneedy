
<?php

$data=$data[0];

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Statistics</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
         <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
                
                  <li ><a href="{{Route('about')}}"> About Us </a></li>
                  <li ><a href="{{Route('vision')}}"> Our Vision </a></li> 
                  <li ><a href="{{Route('contact')}}"> Contact </a></li>
                  <li ><a href="{{Route('term')}}"> Terms of Service </a></li>
                    <li ><a href="{{Route('profile_me')}}"> Back to Dashboard </a></li>
                  


                
                <li>
                      
                   
                    <a class="forget" onclick="forget(this)" href="{{route('log_out')}}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a> 
               

                </li>
               

                <li>
                  
                </li>

            </ul>
        
        </div>
      </div>
    </nav>
  </div>
    
    <div>
       graph
    </div>
   

</body>

</html>


  