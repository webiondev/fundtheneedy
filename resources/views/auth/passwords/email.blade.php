<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundtheneedy | Email</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">FN</h1>

            </div>
            <h3>{{__('global.welcome_to')}}</h3>
            <p>{{__('welcome.a_place_where_charity_flourishes')}}
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>{{__('global.send_reset')}}</p>
           <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                             <div class="form-group">
                    <input type="email" id="email" name ="email" class="form-control" placeholder="{{__('global.email')}}"  value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                </div>

                        </div>
      <button type="submit" class="btn btn-primary block full-width m-b">{{__('global.send_reset')}}</button>
                    </form>

        </div>
        <a href="{{url('/')}}"> {{__('global.main')}} </a>
        <p class="m-t"> <small>{{__('welcome.copyright')}} &copy; {{__('welcome.fundtheneedy_2018')}}</small></p>
               <small> {{__('welcome.rahman')}}</small>
    </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
