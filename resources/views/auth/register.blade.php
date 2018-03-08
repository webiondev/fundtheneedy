<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">FN</h1>

            </div>
            <h3>Welcome to Fundtheneedy</h3>
            <p>A place where charity flourishes
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Register</p>
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
                            <option value="IL">Israel</option>
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
                        </div>

                        <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                    

                 
                    </form>
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

 