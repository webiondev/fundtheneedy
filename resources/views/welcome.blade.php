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
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-size: 21px">{{__('welcome.fundtheneedy')}}<sup><a href="{{url('language', 'en')}}">en</a></sup><sup><a href="{{url('language', 'ar')}}">عربى</a></sup></a>


        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" style="font-size: 16px">
            <li class="nav-item mx-0 mx-lg-1" >
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#about">{{__('welcome.about')}}</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#vision">{{__('welcome.vision')}}</a>
            </li>

            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#contact">{{__('welcome.contact')}}</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#term">{{__('welcome.term')}}</a>
            </li>
            @if( !(\Auth::check()))
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#register">{{__('welcome.register')}}</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#login">{{__('welcome.login')}}</a>

            </li>



             @endif
        @if((\Auth::check()) and \Auth::user()->type== "seeker")
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="{{url('home')}}">{{__('welcome.home')}}</a>

            </li>
            @endif
            @if( (\Auth::check()) and \Auth::user()->type=="giver")
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="{{url('home')}}">{{__('welcome.home')}}</a>

            </li>
            @endif
        <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded " href="#faq">{{__('welcome.faq')}}</a>

            </li>

          </ul>

        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/fn.png" alt="">
        <h1 class="text-uppercase mb-0" >{{__('welcome.fundtheneedy')}}</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">{{__('welcome.a_place_where_charity_flourishes')}}</h2>
        <h7><i>{!! trans('welcome.hadith') !!}</i></h7>
      </div>
    </header>



    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">{{__('welcome.about')}}</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p > {{__('welcome.crowdsourcing')}} </p>

</p>
          </div>
          <div class="col-lg-4 mr-auto">

              <ul>{{__('welcome.no_payment')}}</ul>
              <ul> {{__('welcome.however')}}</ul>
<ul>{{__('welcome.not_only')}}</ul>
<ul>{{__('welcome.proof_claim')}}</ul>
<ul>{{__('welcome.filter')}}</ul>
<ul>{{__('welcome.initiate')}}</ul>
          </div>
        </div>
         @if( !(\Auth::check()))
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#register">
            <i class=" mr-2"></i>
            {{__('welcome.register')}}
          </a>
        </div>
        @endif
          <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#how">
            <i class=" mr-2"></i>
            {{__('welcome.how_to')}}
          </a>
        </div>
      </div>
    </section>
    <!-- Our Vision -->
      <section class="bg-primary text-white mb-0" id="vision">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">{{__('welcome.our_vision')}}</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p >{{__('welcome.people_around')}} </p>
          </div>
          <div class="col-lg-4 mr-auto">

          <p>{{__('welcome.promote_class')}}</p>
          <p>{{__('welcome.promote_social')}}</p>
          </div>
        </div>
         @if( !(\Auth::check()))
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#register">
            <i class=" mr-2"></i>
          {{__('welcome.register')}}
          </a>
        </div>
      @endif
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#how">
            <i class=" mr-2"></i>
            {{__('welcome.how_to')}}
          </a>
        </div>
      </div>
    </section>
     <section id="contact">
      <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-0">{{__('welcome.contact_us')}}</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
             <form class="m-t" id="fn-form" method="POST" action="{{route('sendexreport')}}" enctype="multipart/form-data" autocomplete="off">
                     {{ csrf_field() }}
                <div class="control-group">
               <!--  <div class="form-group floating-label-form-group controls mb-0 pb-2">      -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="form-group">
                    <input type="text" name ="name" class="form-control" placeholder="{{__('global.name')}}" required="">
                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('email1') ? ' has-error' : '' }}">

                        <input type="email" name ="email1" class="form-control" placeholder="{{__('global.email')}}" value="{{ old('email') }}" required="">
                         @if ($errors->has('email1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                       <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">

                        <input type="subject" name ="subject" class="form-control" placeholder="{{__('global.subject')}}" value="{{ old('subject') }}" required="">
                         @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif

                        </div>

                         <div class="form-group{{ $errors->has('complaint') ? ' has-error' : '' }}">
                            <div class="form-group">
                        <textarea class="form-control" rows="5" id="complaint" name="complaint" placeholder="{{__('global.explain')}}" required=""></textarea>
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
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">{{__('welcome.send')}}</button>
              </div>



                    </form>

          </div>
        </div>
      </div>
    </section>
    <!-- How to use? -->
    <section id="how">
      <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-0">{{__('welcome.how_to')}}</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <div class="m-t">



                      <!-- Upload image of user -->

                      <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>{{__('welcome.how_to_1')}}</h5>
                        <h6>{{__('welcome.how_to_2')}}</h6>
                        <!-- <img src="img/reg1.jpg" class="form-control" alt="form" width="200px" height="500px"/> -->


                         </div>

                           <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>{{__('welcome.how_to_3')}}</h5>
                        <h6>{{__('welcome.how_to_4')}}</h6>
                       <!--  <img src="img/reg2.jpg" class="form-control" alt="form" width="200px" height="500px"/> -->


                         </div>


                           <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>{{__('welcome.how_to_5')}}</h5>
                        <h6>{{__('welcome.how_to_6')}}</h6>
                        <!-- <img src="img/success1.jpg" class="form-control" alt="form" width="200px" height="100px"/> -->


                         </div>

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>{{__('welcome.how_to_7')}}</h5>
                        <h6>{{__('welcome.how_to_8')}}</h6>
                        <!-- <img src="img/Seeker1.jpg" class="form-control" alt="form" width="200px" height="500px"/> -->


                         </div>

                           <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <h5>{{__('welcome.how_to_9')}} </h5>
                        <h6>{{__('welcome.how_to_10')}}</h6>
                       <!--  <img src="img/giver1.jpg" class="form-control" alt="form" width="200px" height="500px"/> -->
                        <h6>{{__('welcome.how_to_11')}}</h6>
                       <!--  <img src="img/giver2.jpg" class="form-control" alt="form" width="200px" height="500px"/> -->
                         <h6>{{__('welcome.how_to_12')}}</h6>
                       <!--  <img src="img/giver3.jpg" class="form-control" alt="form" width="200px" height="500px"/> -->

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
        <h4 class="text-center text-uppercase text-secondary mb-0">{{__('welcome.register')}}</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <form class="m-t" id="fn-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="form-group">
                    <input type="text" name ="name" class="form-control" placeholder="{{__('global.name')}}" required="">
                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input type="email" name ="email" class="form-control" placeholder="{{__('global.email')}}" value="{{ old('email') }}" required="">
                         @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input type="password" name ="password" class="form-control" placeholder="{{__('global.password')}}" required="">
                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                           <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{__('global.confirm_password')}}" required>
                         </div>

                          <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">

                        <input type="city" name ="city" class="form-control" placeholder="{{__('global.city')}}" required="">
                         @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif

                        </div>

                          <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">

                     <select class="form-control" class="select-picker" name="country">
                            <option selected disabled>{{__('welcome.select_country')}}</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antartica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo">Congo, the Democratic Republic of the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia (Hrvatska)</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="France Metropolitan">France, Metropolitan</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                            <option value="Holy See">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran (Islamic Republic of)</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>

                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon" >Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia, Federated States of</option>
                            <option value="Moldova">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                              <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint LUCIA">Saint LUCIA</option>
                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                            <option value="Span">Spain</option>
                            <option value="SriLanka">Sri Lanka</option>
                            <option value="St. Helena">St. Helena</option>
                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Viet Nam</option>
                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Yugoslavia">Yugoslavia</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>

                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">

                            <select id="type"  name="type" class="form-control" required>
                                <option selected disabled>{{__('welcome.type')}}</option>
                                <option value="Seeker">{{__('welcome.seeking')}}</option>
                                <option value="giver">{{__('welcome.giving')}}</option>
                            </select>




                        </div>

                           <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                      <select class="form-control dropdown" id="occupation" name="occupation">
                    <option value="" selected="selected" disabled="disabled">{{__('welcome.select_occuption')}}</option>
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

              @if ($errors->has('occupation'))
                         <span class="help-block">
                             <strong>{{$errors->first('occupation')}}</strong>
                         </span>
                     @endif

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
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">{{__('welcome.register')}}</button></div>


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
        <h4 class="text-center text-uppercase text-secondary mb-0">{{__('welcome.login')}}</h4>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
              <form class="m-t" role="form" action="{{route('login')}}" method="post" autocomplete="off" >
                {{ csrf_field() }}
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}
                    </div>
                @endif
                <div class="form-group">
                    <input type="email" name ="username" class="form-control" placeholder="{{__('global.username')}}" required="">


                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="{{__('global.password')}}" required="">


                </div>
                 <div><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">{{__('welcome.login')}}</button></div>

 <a href="{{route('password.request')}}"><small>{{__('welcome.forgot_password')}}</small></a>


            </form>


          </div>
        </div>
      </div>
    </section>
@endif

   <section class="bg-primary text-white mb-0" id="faq">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">{{__('welcome.faq')}}</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">


              <td><p><i>{{__('welcome.how_does')}}</i></p></td><br>
              <td>{{__('welcome.two_kinds')}}</td><br><br>

              <td><p><i>{{__('welcome.how_acquire')}}</i></p></td><br>
              <td>{{__('welcome.depending_on')}}<a href="https://www.paypal.com/fm/smarthelp/article/how-do-i-send-money-faq1684" style="color:black">{{__('welcome.paypal')}}</a></td><br><br>

                <td><p><i>{{__('welcome.charge')}}</i></p></td><br>
              <td>{{__('welcome.no_charge')}}</td><br><br>


          </div>
          <div class="col-lg-4 mr-auto">

               <td><p><i>{{__('welcome.do_you_store')}}</i></p></td><br>
              <td>{{__('welcome.storage_rule')}}</td><br><br>

               <td><p><i>{{__('welcome.fraud_account')}}</i></p></td><br>
              <td>{{__('welcome.intermediate')}} </td><br><br>

               <td><p><i>{{__('welcome.trust_building')}}</i></p></td><br>
              <td>{{__('welcome.trust_building_2')}}</td><br><br>
          </div>
        </div>
         @if( !(\Auth::check()))
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#register">
            <i class=" mr-2"></i>
            {{__('welcome.register')}}
          </a>
        </div>
        @endif
          <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#how">
            <i class=" mr-2"></i>
            {{__('welcome.how_to')}}
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">{{__('welcome.support')}}</h4>

        <address>
          <strong><a href="mailto:support@fundtheneedy.com">support@fundtheneedy.com</a></strong><br>

          {{__('welcome.dhaka')}}<br>
          {{__('welcome.bangladesh')}}<br>
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
            <h4 class="text-center text-uppercase text-white">{{__('welcome.term')}}</h4>
            <p>{{__('welcome.terms_1')}}</p>

          <p>{{__('welcome.terms_2')}}</p>

          <p>{{__('welcome.terms_3')}}</p>

          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>{{__('welcome.copyright')}} &copy; {{__('welcome.fundtheneedy_2018')}}</small><br>
         <small> {{__('welcome.rahman')}}</small>
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
