<!DOCTYPE html>
<html lang="en">

  <head>
<meta name="verifyownership" 
 content="61595b65c75b09a950383c94111c52fb"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116074766-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-116074766-1');
    </script>
    <title>Fundtheneedy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>
 
  <body id="page-top">
 @if(session()->has('message'))
    <div class="alert alert-success">
       <script> alert("Message Sent")
        </script>
    </div>
  @endif
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Fundtheneedy</a>

        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#vision">Vision</a>
            </li>

            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#contact">Contact</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#term">Terms of Service</a>
            </li>
            @if( !(\Auth::check()))
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#register">Register</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#login">Login</a>
            
            </li>
           
            
             @endif 
        @if((\Auth::check()) and \Auth::user()->type== "seeker")
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="{{url('home')}}">Home</a>
            
            </li>
            @endif
            @if( (\Auth::check()) and \Auth::user()->type=="giver")
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="{{url('home')}}">Home</a>
            
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/fn.png" alt="">
        <h1 class="text-uppercase mb-0">Fundtheneedy</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">A Place Where Charity clourishes</h2>
      </div>
    </header>

  

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p >Fundtheneedy is a crowdsourcing (a new form of crowdfunding) platform built in Laravel technology.It has two types of users: giver and seeker. Giver is the one who funds people where as seeker is the one acquiring the fund. This app has a mechanism of trust building called corroboration where givers can certify seekers as well as seekers can certify their claims through proofs. The final mode of crowdfunding takes place through exchange of transactional information where givers can transfer funds to bank account or goods to designated address.

</p>
          </div>
          <div class="col-lg-4 mr-auto">
           
              <ul>No payment from seekers and givers</ul>
              <ul> However givers can be asked for voluntary donation</ul>
<ul>Not only givers are able to donate money but also goods. So for example a poor farmer needs a machine and someone out of charity from China can ship him the machine.</ul>
<ul>Seekers have to prove their claims. A giver has full flexibility to ask the seeker as to the merits and validity of the need.</ul>
<ul>It is global and not based on country only so that people from one country can connect to people from another country. However if a person wishes he can filter seekers by country.</ul>
<ul>Mechanism so that only giver can start message initiation. This can help filter out those whose needs are not genuine.</ul>
          </div>
        </div>
         @if( !(\Auth::check()))
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#register">
            <i class=" mr-2"></i>
            Register
          </a>
        </div>
        @endif
          <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#how">
            <i class=" mr-2"></i>
            How to Use?
          </a>
        </div>
      </div>
    </section>
    <!-- Our Vision -->
      <section class="bg-primary text-white mb-0" id="vision">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Our Vision</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p >Fundtheneedy will help people around the world gather in one place to voluntarily and out of love give and gratefully take charity. This is a time when our government is failing us and the economic system is creating the gap between rich and poor in a tremendous amount of pace (Forbes.com, 2018); (Oecd.org, 2018). My intention is to bride this gap between rich and poor through bringing them together in one place so they know each other and help the needy/poor ones. Can this app make a difference? I pray and greatly hope that it does. </p>
          </div>
          <div class="col-lg-4 mr-auto">
            
          <p>Promote class interaction in society</p>
          <p>Promote social welfare through crowdfunding</p>
          </div>
        </div>
         @if( !(\Auth::check()))
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#register">
            <i class=" mr-2"></i>
            Register
          </a>
        </div>
      @endif
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#how">
            <i class=" mr-2"></i>
            How to Use?
          </a>
        </div>
      </div>
    </section>
     <section id="contact">
      <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-0">Contact Us</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
             <form class="m-t" id="fn-form" method="POST" action="{{route('sendexreport')}}" enctype="multipart/form-data">
                     {{ csrf_field() }}
                <div class="control-group">
               <!--  <div class="form-group floating-label-form-group controls mb-0 pb-2">      -->
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

                        <div class="form-group{{ $errors->has('email1') ? ' has-error' : '' }}">
                           
                        <input type="email" name ="email1" class="form-control" placeholder="Email" value="{{ old('email') }}" required="">
                         @if ($errors->has('email1'))
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
                     
                    
                     <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
                    

                 
                    </form>

          </div>
        </div>
      </div>
    </section>
    <!-- How to use? -->
    <section id="how">
      <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-0">How to Use?</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <div class="m-t">
                      


                      <!-- Upload image of user -->

                      <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>User Registration Seeker</h5>
                        <h6>Fill in Info</h6>
                        <img src="img/reg1.jpg" class="form-control" alt="form" width="200px" height="500px"/>
                       

                         </div>  

                           <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>User Registration Giver</h5>
                        <h6>Fill in Info</h6>
                        <img src="img/reg2.jpg" class="form-control" alt="form" width="200px" height="500px"/>
                       

                         </div> 


                           <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>User Registration Notification</h5>
                        <h6>Check Email</h6>
                        <img src="img/success1.jpg" class="form-control" alt="form" width="200px" height="100px"/>
                       

                         </div> 

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>Seeker Add Plea</h5>
                        <h6>Once seeker logs in seeker can add the plea</h6>
                        <img src="img/seeker1.jpg" class="form-control" alt="form" width="200px" height="500px"/>
                       

                         </div> 

                           <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>Giver See Seekers List</h5>
                        <h6>Once giver logs in can initiate donation</h6>
                        <img src="img/giver1.jpg" class="form-control" alt="form" width="200px" height="500px"/>
                        <h6>Various communications options</h6>
                        <img src="img/giver2.png" class="form-control" alt="form" width="200px" height="500px"/>
                         <h6>Seeker details</h6>
                        <img src="img/giver3.jpg" class="form-control" alt="form" width="200px" height="500px"/>
                      
                         </div>  


                        

   

          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Register section -->
     @if( !(\Auth::check()))
 <section id="register">
      <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-0">Register</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <form class="m-t" id="fn-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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

                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           
                        <input type="password" name ="password" class="form-control" placeholder="Password" required="">
                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                           <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                         </div>

                          <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                           
                        <input type="city" name ="city" class="form-control" placeholder="City" required="">
                         @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                          <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                           
                     <select class="form-control" class="select-picker" name="country">
                            <option selected disabled>Select Country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                          </select>
                        
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            
                            <select id="type"  name="type" class="form-control" required> 
                                <option selected disabled>Type</option>
                                <option value="seeker">Seeker (Seeking Fund)</option>
                                <option value="giver">Giver (Giving Fund/Corroborate Seeker)</option>
                            </select>
                            

                        
                        
                        </div>

                           <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                      <select class="form-control dropdown" id="occupation" name="occupation">
                    <option value="" selected="selected" disabled="disabled">select occupation</option>
                    <optgroup label="Healthcare Practitioners and Technical Occupations:">
                      <option value="Chiropractor">-  Chiropractor</option>
                      <option value="Dentist">-  Dentist</option>
                      <option value="Dietitian or Nutritionist">-  Dietitian or Nutritionist</option>
                      <option value="Optometrist">-  Optometrist</option>
                      <option value="Pharmacist">-  Pharmacist</option>
                      <option value=" Physician">-  Physician</option>
                      <option value=" Physician Assistant">-  Physician Assistant</option>
                      <option value="Podiatrist">-  Podiatrist</option>
                      <option value=" Registered Nurse">-  Registered Nurse</option>
                      <option value="Therapist">-  Therapist</option>
                      <option value="Veterinarian">-  Veterinarian</option>
                      <option value="Health Technologist or Technician">-  Health Technologist or Technician</option>
                      <option value="Other Healthcare Practitioners and Technical Occupation">-  Other Healthcare Practitioners and Technical Occupation</option>
                    </optgroup>
                    <optgroup label="Healthcare Support Occupations:">
                      <option value="Nursing, Psychiatric, or Home Health Aide">-  Nursing, Psychiatric, or Home Health Aide</option>
                      <option value="Occupational and Physical Therapist">-  Occupational and Physical Therapist Assistant or Aide</option>
                      <option value="Other Healthcare Support Occupation">-  Other Healthcare Support Occupation</option>
                    </optgroup>
                    <optgroup label="Business, Executive, Management, and Financial Occupations:">
                      <option value="Chief Executive">-  Chief Executive</option>
                      <option value="General and Operations Manager">-  General and Operations Manager</option>
                      <option value="Advertising, Marketing, Promotions">-  Advertising, Marketing, Promotions, Public Relations, and Sales Manager</option>
                      <option value="Operations Specialties Manager">-  Operations Specialties Manager (e.g., IT or HR Manager)</option>
                      <option value="Construction Manager">-  Construction Manager</option>
                      <option value="Engineering Manager">-  Engineering Manager</option>
                      <option value="Accountant, Auditor">-  Accountant, Auditor</option>
                      <option value="Business Operations or Financial Specialist">-  Business Operations or Financial Specialist</option>
                      <option value="Business Owner">-  Business Owner</option>
                      <option value="Other Business, Executive, Management, Financial Occupation">-  Other Business, Executive, Management, Financial Occupation</option>
                    </optgroup>
                    <optgroup label="Architecture and Engineering Occupations:">
                      <option value="Architect, Surveyor, or Cartographer">-  Architect, Surveyor, or Cartographer</option>
                      <option value="Engineer">-  Engineer</option>
                      <option value="Other Architecture and Engineering Occupation">-  Other Architecture and Engineering Occupation</option>
                    </optgroup>
                    <optgroup label="Education, Training, and Library Occupations:">
                      <option value="Postsecondary Teacher">-  Postsecondary Teacher (e.g., College Professor)</option>
                      <option value="Primary, Secondary, or Special Education School Teacher">-  Primary, Secondary, or Special Education School Teacher</option>
                      <option value="Other Teacher or Instructor">-  Other Teacher or Instructor</option>
                      <option value="Other Education, Training, and Library Occupation">-  Other Education, Training, and Library Occupation</option>
                    </optgroup>
                    <optgroup label="Other Professional Occupations:">
                      <option value="Arts, Design, Entertainment, Sports, and Media Occupations">-  Arts, Design, Entertainment, Sports, and Media Occupations</option>
                      <option value="Computer Specialist, Mathematical Science">-  Computer Specialist, Mathematical Science</option>
                      <option value="Community and Social Service Specialist">-  Counselor, Social Worker, or Other Community and Social Service Specialist</option>
                      <option value="Lawyer, Judge">-  Lawyer, Judge</option>
                      <option value="Life Scientist">-  Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)</option>
                      <option value="Physical Scientist">-  Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)</option>
                      <option value="Religious Worker">-  Religious Worker (e.g., Clergy, Director of Religious Activities or Education)</option>
                      <option value="Social Scientist and Related Worker">-  Social Scientist and Related Worker</option>
                      <option value="Other Professional Occupation">-  Other Professional Occupation</option>
                    </optgroup>
                    <optgroup label="Office and Administrative Support Occupations:">
                      <option value="Supervisor of Administrative Support Workers">-  Supervisor of Administrative Support Workers</option>
                      <option value="Financial Clerk">-  Financial Clerk</option>
                      <option value="Secretary or Administrative Assistant">-  Secretary or Administrative Assistant</option>
                      <option value=" Material Recording, Scheduling, and Dispatching Worker">-  Material Recording, Scheduling, and Dispatching Worker</option>
                      <option value=" Other Office and Administrative Support Occupation">-  Other Office and Administrative Support Occupation</option>
                    </optgroup>
                    <optgroup label="Services Occupations:">
                      <option value="Protective Service">-  Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)</option>
                      <option value="Chef or Head Cook">-  Chef or Head Cook</option>
                      <option value="Cook or Food Preparation Worker">-  Cook or Food Preparation Worker</option>
                      <option value="Food and Beverage Serving Worker">-  Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)</option>
                      <option value="Building and Grounds Cleaning">-  Building and Grounds Cleaning and Maintenance</option>
                      <option value="Personal Care and Service">-  Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)</option>
                      <option value="Sales Supervisor">-  Sales Supervisor, Retail Sales</option>
                      <option value=" Retail Sales Worker">-  Retail Sales Worker</option>
                      <option value="Insurance Sales Agent">-  Insurance Sales Agent</option>
                      <option value="Sales Representative">-  Sales Representative</option>
                      <option value="Real Estate Sales Agent">-  Real Estate Sales Agent</option>
                      <option value="Other Services Occupation">-  Other Services Occupation</option>
                    </optgroup>
                    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                      <option value="Construction and Extraction">-  Construction and Extraction (e.g., Construction Laborer, Electrician)</option>
                      <option value="Farming, Fishing, and Forestry">-  Farming, Fishing, and Forestry</option>
                      <option value="Installation, Maintenance, and Repair">-  Installation, Maintenance, and Repair</option>
                      <option value="Production Occupations">-  Production Occupations</option>
                      <option value=" Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation">-  Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation</option>
                    </optgroup>
                    <optgroup label="Transportation Occupations:">
                      <option value=" Aircraft Pilot or Flight Engineer">-  Aircraft Pilot or Flight Engineer</option>
                      <option value="Motor Vehicle Operator">-  Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)</option>
                      <option value="Other Transportation Occupation">-  Other Transportation Occupation</option>
                    </optgroup>
                    <optgroup label="Other Occupations:">
                      <option value="Military">-  Military</option>
                      <option value="Homemaker">-  Homemaker</option>
                      <option value="Other Occupation">-  Other Occupation</option>
                      <option value="Don't Know">-  Don't Know</option>
                      <option value="Not Applicable">-  Not Applicable</option>
                    </optgroup>
                  </select>
              </div>

                       <!--  <div id="add_verify"  class="form-group{{ $errors->has('verify') ? ' has-error' : '' }}">
                          
   
                        </div> -->

                      <!-- Upload image of user -->
                      <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <input type="file" id="file" name ="file" class="form-control"  required>
                         @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('file')}}</strong>
                                    </span>
                                @endif

                         </div>  
                           <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Register</button></div>

                 
                    </form>

          </div>
        </div>
      </div>
    </section>
    @endif
    <!-- login section -->

   <!-- Login -->
    @if( !(\Auth::check()))
  <section id="login">
      <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-0">Login</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
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
                 <div><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Login</button></div>

 <a href="{{route('password.request')}}"><small>Forgot password?</small></a>
              
                
            </form>
           

          </div>
        </div>
      </div>
    </section>
@endif
 

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Support</h4>
           
        <address>
          <strong><a href="mailto:support@fundtheneedy.com">support@fundtheneedy.com</a></strong><br>
           Uttara<br>
          Dhaka<br>
          Bangladesh<br>
            <a href="https://twitter.com/fundtheneedy" title="twitter" class="btn btn-social-icon btn-lg btn-twitter">
      <span class="fa fa-twitter"></span>
      </a>
        <a href="https://www.facebook.com/fundtheneedyCharity/" title="facebook" class="btn btn-social-icon btn-lg btn-facebook">
      <span class="fa fa-facebook"></span>
      </a>
          
        </address>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
           <!--  <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul> -->
          </div>
          <div class="col-md-4" id="term">
            <h4 class="text-center text-uppercase text-white">Terms of Service</h4>
            <p>Fundtheneedy must not be misused or abused in any way. You cannot fraud anyone. You must maintain honesty, integrity and sincerity in seeking aid or giving aid.</p>

          <p>Seekers must be careful in giving their personal information to recieve aid. This world goes a lot further with trust also. Seekers must maintain a proffesional relationship with the givers.</p>

          <p>Givers must only give aid and must not ask anything in exchange. Givers must maintain a proffesional relationship with the seekers.</p>
              
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Fundtheneedy 2018</small><br>
         <small> A Mohammad Rahman Production</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
   <!--  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Portfolio Modal 2 -->
   <!--  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Portfolio Modal 3 -->
   <!--  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Portfolio Modal 4 -->
   <!--  <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Portfolio Modal 5 -->
  <!--   <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Portfolio Modal 6 -->
   <!--  <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
