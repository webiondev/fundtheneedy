
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | About</title>

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
         <div class="collapse navbar-collapse" id="navbar-collapse-1">
         <ul  class="nav navbar-nav navbar-right  "  >
                
                  <li ><a href="{{Route('about')}}"> About Us </a></li>
                  <li ><a href="{{Route('vision')}}"> Our Vision </a></li> 
                  <li ><a href="{{Route('contact')}}"> Contact </a></li>
                  <li ><a href="{{Route('term')}}"> Terms of Service </a></li>
                    <li ><a href="{{url('profile_me')}}"> Back to Dashboard </a></li>
                  


                
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
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">FN</h1>

            </div>
            <p>A place where charity flourishes
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <h3>About us</h3>
          
            
     			<p>Fundtheneedy is a crowdsourcing (a new form of crowdfunding) platform built in Laravel technology. </p>
							<p>We are just starting and we need all the support from you seekers and givers. Support us by joining and spreading the word of Fundtheneedy. You can make a change even in one person's life.</p>

							<h3>Features of Fundtheneedy</h3>
							<ul class="list-group">
  <li class="list-group-item">No payment from seekers and givers. However givers can be asked for voluntary donation</li>
  <li class="list-group-item">Not only givers are able to donate money but also goods. So for example a poor farmer needs a machine and someone out of charity from China can ship him the machine.</li>
  <li class="list-group-item">Seekers have to prove their claims. A giver has full flexibility to ask the seeker as to the merits and validity of the need.</li>
  <li class="list-group-item">It is global and not based on country only so that people from one country can connect to people from another country. However if a person wishes he can filter seekers by country. </li>
  <li class="list-group-item">Mechanism so that only giver can start message initiation. This can help filter out those whose needs are not genuine. </li>
</ul>

        </div>
        <hr>
        <br>
          <a href="{{Route('profile_me')}}"> Back to Dashboard </a>
            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>

   <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
