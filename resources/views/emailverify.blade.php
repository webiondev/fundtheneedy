<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/freelancer.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">


    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">


    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


    <style>
    a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
    </style>

</head>
<body>
    <table class="mui-body" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td  style="padding:50px;" class="mui-panel">
          <center>

            <!--[if mso]><table><tr><td class="mui-container-fixed"><![endif]-->
            <div style="text-align:center;" class="mui-container">
              <!--

              email goes here

              -->
<div class="mui-divider-bottom">

<h3 style="margin-top: -5px!important; margin-bottom: 16px!important; color: grey!important;">Fundtheneedy</h3>
<div class="mui-divider-bottom"></div>

              <p style="padding:20px; text-align:center;;">

              {{__('global.please_verify')}}</p>
              <a href="{{url('/verifyemail/'.$email_token)}}" >https://www.fundtheneedy.com/verify</a>

              <!-- <a class="mui-btn mui-btn-primary mui-btn-lg" href="{{url('/verifyemail/'.$email_token)}}">Verify</a> -->
              <br><br>
              </div>

            </div>
            <!--[if mso]></td></tr></table><![endif]-->
          </center>
        </td>
      </tr>
    </table>
    Regards<br>
    Fundtheneedy
  </body>
</html>
