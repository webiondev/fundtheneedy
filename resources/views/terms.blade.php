
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
            <h3>Terms of Service</h3>
          
            
     			<p>Fundtheneedy must not be misused or abused in any way. You cannot fraud anyone. You must maintain honesty, integrity and sincerity in seeking aid or giving aid.</p>

     			<p>Seekers must be careful in giving their personal information to recieve aid. This world goes a lot further with trust also. Seekers must maintain a proffesional relationship with the givers.</p>

     			<p>Givers must only give aid and must not ask anything in exchange. Givers must maintain a proffesional relationship with the seekers.</p>

        </div>
        <hr>
        <br>
            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>

   

</body>

</html>
