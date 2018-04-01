
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
         <ul  class="nav navbar-nav navbar-right  "  >
                
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
            <h3>About us</h3>
          
            
     			<p>Fundtheneedy is a crowdsourcing (a new form of crowdfunding) platform built in Laravel technology. </p>
							<p>It has two types of users: giver and seeker. Giver is the one who funds people where as seeker is the one acquiring the fund. This app has a mechanism of trust building called corroboration where givers can certify seekers as well as seekers can certify their claims through proofs. The final mode of crowdfunding takes place through exchange of transactional information where givers can transfer funds to bank account or goods to designated address.</p>

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
         <a href="{{url('/')}}"> Back to Main </a>
            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>

        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
