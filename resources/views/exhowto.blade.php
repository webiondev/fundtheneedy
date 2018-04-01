
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
            
          
            <h3>How To Use</h3>
          
            <h4>Step 1: Registration  </h4>

            

            <h5>For Seekers:<h5>

           <h5>Fill in your info<h5>

           <div><img src="{{asset('img/reg1.jpg')}}" height='300' width='300' style="margin: auto;"></div>
          <h5>For givers:<h5>

          <h5>Fill in your info<h5>
             <div><img src="{{asset('img/reg2.jpg')}}" height='300' width='300' style="margin: auto;"></div>
          <h5>Once you register you will receive an email of confirmation</h5>
          
             <div><img src="{{asset('img/success1.jpg')}}"  width='300' style="margin: auto;"></div>

            <h4>Step 2:</h4> 

            <h5>Seekers</h5>

            <h5>You will arrive on this page where you can add your plea/crowdfunding appeal</h5>

             <div><img src="{{asset('img/seeker1.jpg')}}" height='300' width='300' style="margin: auto;"></div>

             <h4>Givers</h4>
             <h5>Givers can see all the plea on seekers page</h5>
               <div><img src="{{asset('img/giver1.jpg')}}" height='300' width='450' style="margin: auto;"></div>

              <h5>Givers can initiate interaction with seekers</h5>
              <h5>Givers can see all the plea on seekers page</h5>
               <div><img src="{{asset('img/giver2.jpg')}}" height='300' width='450' style="margin: auto;"></div>

               <h5>Once Giver has donated a fund or good he or she should confirm the donation so that seeker appeal is updated</h5>

<h5>Giver can know more about seeker on know more page as well as knowing how many givers have corroborated this claim.</h5>
 <div><img src="{{asset('img/giver3.jpg')}}" height='300' width='450' style="margin: auto;"></div>


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
