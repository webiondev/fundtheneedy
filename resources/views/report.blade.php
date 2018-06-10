<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Complaint</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">
  
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
                
                  <li ><a href="{{Route('about')}}"> About Us </a></li>
                  <li ><a href="{{Route('vision')}}"> Our Vision </a></li> 
                  <li ><a href="{{Route('contact')}}"> Contact </a></li>
                   <li ><a href="{{Route('report')}}"> Complaints </a></li>
                  <li ><a href="{{Route('term')}}"> Terms of Service </a></li>
                   <li ><a href="{{url('profile_me')}}"> Back to Dashboard </a></li>
                <li>
                      
                   
                    <a class="forget" onclick="forget(this)" href="{{route('log_out')}}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a> 
               

                </li>

            </ul>
        
        </div>
      </div>
    </nav>
  </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        
    </div>
  @endif
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">FN</h1>

            </div>
            <h3>Welcome to Fundtheneedy</h3>
            <p>A place where charity flourishes
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Complaint</p>
          <form class="m-t" id="fn-form" method="POST" action="{{route('sendreport')}}" enctype="multipart/form-data" autocomplete="off">
                     {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="form-group">
                    <input type="text" name ="name" class="form-control" placeholder="Name" required="">
                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           
                        <input type="email" name ="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required="">
                         @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                       <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                           
                        <input type="subject" name ="subject" class="form-control" placeholder="subject" value="{{ old('subject') }}" required="">
                         @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                         <div class="form-group{{ $errors->has('complaint') ? ' has-error' : '' }}">
                            <div class="form-group">
                        <textarea class="form-control" rows="5" id="complaint" name="complaint" placeholder="Explain as clearly as possible" required=""></textarea>
                         @if ($errors->has('complaint'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('complaint') }}</strong>
                                    </span>
                                @endif
                        
                        </div>
                      </div>

                       <!--  <div id="add_verify"  class="form-group{{ $errors->has('verify') ? ' has-error' : '' }}">
                          
   
                        </div> -->

                      <!-- Upload image of user -->
                    
                        </div>

                        <button type="submit" class="btn btn-primary block full-width m-b">Send</button>
                    

                 
                    </form>
                             <a href="{{url('/')}}"> Back to Main </a>

            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
             
        </div>
         
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

   <!--  <script type="text/javascript">


       
         $('#type').change(function(){
             if( $(this).val() == 'seeker'){
                
           $('#add_verify').append('<div id="new-field"><select id="verify" name="verify" class="form-control" required><option selected disabled>Verify</option><option value="I can verify my claim">I can verify my claim</option><option value="I cannot verify my claim">I cannot verify my claim</option></select></div>');
       }

       else if( $(this).val() == 'giver'){

             $('#new-field').remove();

       }
         });
       

    </script> -->

</body>

</html>

 