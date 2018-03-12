<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="d7Hh7y0wbW7rQc6A9OHdL4IDETu_sgAraBefkx3ovjk" />
    <meta name="description" content="Fundtheneedy is a crowdsourcing platform"/>

    @if(\Request::is('/'))
    <title>Fundtheneedy | Dashboard</title>
    @elseif(\Request::is('profile_me'))
    <title>Fundtheneedy | Your Profile</title>
    @elseif(\Request::is('listfav'))
    <title>Fundtheneedy | Your Favorite Seekers</title>
     @elseif(\Request::is('mymessage'))
    <title>Fundtheneedy | Your Inbox</title>
    @elseif(\Request::is('mysent'))
    <title>Fundtheneedy | Your Sent</title>
    @elseif(\Request::is('seeker'))
    <title>Fundtheneedy | Seekers</title>
    @elseif(\Request::is('mydonations'))
    <title>Fundtheneedy | Your Donations</title>
     @elseif(\Request::is('profile_this'))
    <title>Fundtheneedy | Seeker Info</title>
     @elseif(\Request::is('seekfund'))
    <title>Fundtheneedy | Seek Fund</title>
   
    @endif
 
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    
   
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <style type="text/css">
        .bs-calltoaction{
    position: relative;
    width:auto;
    padding: 15px 25px;
    border: 1px solid black;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

    .bs-calltoaction > .row{
        display:table;
        width: calc(100% + 30px);
    }
     
        .bs-calltoaction > .row > [class^="col-"],
        .bs-calltoaction > .row > [class*=" col-"]{
            float:none;
            display:table-cell;
            vertical-align:middle;
        }

            .cta-contents{
                padding-top: 10px;
                padding-bottom: 10px;
            }

                .cta-title{
                    margin: 0 auto 15px;
                    padding: 0;
                }

                .cta-desc{
                    padding: 0;
                }

                .cta-desc p:last-child{
                    margin-bottom: 0;
                }

            .cta-button{
                padding-top: 10px;
                padding-bottom: 10px;
            }

@media (max-width: 991px){
    .bs-calltoaction > .row{
        display:block;
        width: auto;
    }

        .bs-calltoaction > .row > [class^="col-"],
        .bs-calltoaction > .row > [class*=" col-"]{
            float:none;
            display:block;
            vertical-align:middle;
            position: relative;
        }

        .cta-contents{
            text-align: center;
        }
}



.bs-calltoaction.bs-calltoaction-default{
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}

.bs-calltoaction.bs-calltoaction-primary{
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.bs-calltoaction.bs-calltoaction-info{
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}

.bs-calltoaction.bs-calltoaction-success{
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}

.bs-calltoaction.bs-calltoaction-warning{
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}

.bs-calltoaction.bs-calltoaction-danger{
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}

.bs-calltoaction.bs-calltoaction-primary .cta-button .btn,
.bs-calltoaction.bs-calltoaction-info .cta-button .btn,
.bs-calltoaction.bs-calltoaction-success .cta-button .btn,
.bs-calltoaction.bs-calltoaction-warning .cta-button .btn,
.bs-calltoaction.bs-calltoaction-danger .cta-button .btn{
    border-color:#fff;
}
    </style>
  
</head>

