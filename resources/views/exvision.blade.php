
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Vision</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="description" content="Fundtheneedy is a crowdsourcing platform"/>

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
         <ul  class="nav navbar-nav navbar-right">
                
                  <li ><a href="{{Route('exabout')}}"> About Us </a></li>
                  <li ><a href="{{Route('exvision')}}"> Our Vision </a></li> 
                  <li ><a href="{{Route('excontact')}}"> Contact </a></li>
                   <li ><a href="{{Route('exreport')}}"> Complaints </a></li>
                  <li ><a href="{{Route('exterm')}}"> Terms of Service </a></li>
                   <li ><a href="{{Route('exhowto')}}"> How To Use </a></li>
                  <li ><a href="{{url('/')}}"> Back to Main </a></li>
          

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
            <p>A place where charity flourishes
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <h3>Our Vision</h3>
            
            
     			<p>Fundtheneedy will help people around the world gather in one place to voluntarily and out of love give and gratefully take charity. This is a time when our government is failing us and the economic system is creating the gap between rich and poor in a tremendous amount of pace (Forbes.com, 2018); (Oecd.org, 2018). My intention is to bridge this gap between rich and poor through bringing them together in one place so they know each other and help the needy/poor ones. </p>

          <h3>Our Aim</h3>
          <p>Promote class interaction in society</p>
          <p>Promote social welfare through crowdfunding
</p>

							

        </div>
        <hr>
        <br>
         <a href="{{url('/')}}"> Back to Main </a>
            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>

  <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
