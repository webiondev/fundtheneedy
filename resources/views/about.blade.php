
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Welcome</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
@if(session()->has('message'))
    <div class="alert alert-info">
        {{ session()->get('message') }}

    </div>
@endif
<body class="gray-bg">
         <ul class="nav navbar-top-links navbar-right">
                  <li ><a href="{{Route('about')}}"> About Us </a></li>
                  <li ><a href="{{Route('vision')}}"> Our Vision </a></li> 
                  <li ><a href="{{Route('contact')}}"> Contact </a></li>
                  <li ><a href="{{Route('term')}}"> Terms of Service </a></li>
                    @if(auth()->user()->type=='giver')
                   <li ><a href="{{url('seeker')}}"> Back to Dashboard </a></li>

                   @else
                    <li ><a href="{{url('seekfund')}}"> Back to Dashboard </a></li>
                   @endif
          

          

            </ul>
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
            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>

   

</body>

</html>
