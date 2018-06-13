<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<title></title>


</head>
<body>
<div class="container">
            <div class="col-sm-12">

                <div class="bs-calltoaction bs-calltoaction-default">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">{{$title}}</h1>
                            <div class="cta-desc">
                                
                                <p>{{content}}
                                    <a href="{{url('/verifyemail/'.$email_token)}}"></a></p>
                                
                                
                            </div>
                        </div>
                       <!--  <div class="col-md-3 cta-button">
                            <a href="https://www.fundtheneedy.com" class="btn btn-lg btn-block btn-default">Go To FN</a>
                        </div> -->
                     </div>
                </div>

                



            </div>
        </div>
</body>
</html>



