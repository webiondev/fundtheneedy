


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Statistics</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/fusioncharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts.charts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts.theme.fint.js') }}"></script>
    <link type="text/css" href="{{ asset('css/style.css') }}"  rel="stylesheet">
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
          <ul class="nav navbar-nav navbar-right">

                  <li ><a href="{{Route('about')}}"> About Us </a></li>
                  <li ><a href="{{Route('vision')}}"> Our Vision </a></li>
                  <li ><a href="{{Route('contact')}}"> Contact </a></li>
                  <li ><a href="{{Route('term')}}"> Terms of Service </a></li>

                    <li ><a href="{{Route('profile_me')}}"> Back to Dashboard </a></li>




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
            <h3>Global Statistics</h3>
            <?php
        $barChart = new FusionCharts("bar2d", "myFirstChart" , 600, 400, "chart-1", "json",
            ' {
                "chart": {
                    "caption": "What kind of apps are you building?",
                    "numberSuffix": "%",
                    "paletteColors": "#876EA1",
                    "useplotgradientcolor": "0",
                    "plotBorderAlpha": "0",
                    "bgColor": "#FFFFFFF",
                    "canvasBgColor": "#FFFFFF",
                    "showValues":"1",
                    "showCanvasBorder": "0",
                    "showBorder": "0",
                    "divLineColor": "#DCDCDC",
                    "alternateHGridColor": "#DCDCDC",
                    "labelDisplay": "auto",
                    "baseFont": "Assistant",
                    "baseFontColor": "#153957",
                    "outCnvBaseFont": "Assistant",
                    "outCnvBaseFontColor": "#8A8A8A",
                    "baseFontSize": "13",
                    "outCnvBaseFontSize": "13",
                    "yAxisMinValue":"40",
                    "labelFontColor": "#8A8A8A",
                    " captionFontColor": "#153957",
                    "captionFontBold": "1",
                    "captionFontSize": "20",
                    "subCaptionFontColor": "#153957",
                    "subCaptionfontSize": "17",
                    "subCaptionFontBold": "0",
                    "captionPadding": "20",
                    "valueFontBold": "0",
                    "showAxisLines": "1",
                    "yAxisLineColor": "#DCDCDC",
                    "xAxisLineColor": "#DCDCDC",
                    "xAxisLineAlpha": "15",
                    "yAxisLineAlpha": "15",
                    "toolTipPadding": "7",
                    "toolTipBorderColor": "#DCDCDC",
                    "toolTipBorderThickness": "0",
                    "toolTipBorderRadius": "2",
                    "showShadow": "0",
                    "toolTipBgColor": "#153957",
                    "theme": "fint"
                  },

                "data": [{
                    "label": "Consumer general",
                    "value": "60.7"
                  }, {
                    "label": "Enterprise internal app",
                    "value": "41.7"
                  }, {
                    "label": "Progressive Web Apps",
                    "value": "25.1"
                  }, {
                    "label": "Consumer social network",
                    "value": "24"
                  }, {
                    "label": "Desktop web apps",
                    "value": "18.5"
                  }, {
                    "label": "Desktop apps (electron, etc)",
                    "value": "12.3"
                  }, {
                    "label": "Consumer chat",
                    "value": "12.2"
                  }, {
                    "label": "Other",
                    "value": "4.5"
                }]
            }');
        $barChart->render('chart-1');
    ?>

          <!-- <p>Coming Soon </p>
              <p> Here you can see what kinds of needs affect people. A statsitical distrbution for all countries which has fundtheneedy membership</p> -->
              <!-- <div class="row">
    <div class="col-md-2 col-md-offset-5" id="chart-1"></div>
</div> -->

        </div>
        <hr>
        <br>
          <a href="{{Route('profile_me')}}"> Back to Dashboard </a>
            <p class="m-t"> <small>Fundtheneedy &copy; 2018</small></p>
               <small> A Mohammad Rahman Production</small>
    </div>
</body>

</html>
