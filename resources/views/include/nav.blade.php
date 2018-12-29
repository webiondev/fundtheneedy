<nav class="navbar-default navbar-static-side" role="navigation">

            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">

                             <span>
                            <img alt="image" class="img-circle"
                            src="{{asset('img/'.auth()->user()->file)}}" />
                             </span>

                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> {{Auth::user()->name}}</strong>

                             </span> <span class="text-muted text-xs block">{{Auth::user()->type}},{{Auth::user()->city}},{{Auth::user()->country}}</b></span> </span> </a>



                        </div>

                    </li>



                    <li class="active">
                      @if(auth()->user()->type=='admin' )
                      <a href="#"><i class="fa fa-address-book-o"></i> <span class="nav-label">{{__('global.admin')}}</span> <span class="fa arrow"></span></a>

                      <ul class="nav nav-second-level">

                        <li><a href="{{Route('allmessages')}}">{{__('global.all_messages')}}</a></li>

                          <li><a href="{{Route('allusers')}}">{{__('global.all_users')}}</a></li>





                             <li>


                              <li class="divider"></li>
                             <li>

                                   <a class="forget" onclick="forget(this)" href="{{route('log_out')}}">
                                         {{__('global.logout')}}
                                      </a>
                             </li>
                      </ul>
                  </li>
                  @endif
                      <!-- Non-Admin -->
                        @if(auth()->user()->type=='giver' || auth()->user()->type=='seeker')
                        <a href="#"><i class="fa fa-address-book-o"></i> <span class="nav-label">{{__('global.profile')}}</span> <span class="fa arrow"></span></a>

                        <ul class="nav nav-second-level">
                                <li><a href="{{Route('profile_me')}}">{{__('global.profile')}}</a></li>
                                @if(auth()->user()->type=='giver')
                                <li><a href="{{Route('listfav')}}">{{__('global.fav')}}</a></li>
                                 @endif
                               <li>

                                <a href="#" class="nav-label">{{__('global.messages')}} <sup  style="color:red">{{Session::get('count')}} </sup></a>
                                 <ul class="nav nav-third-level">
                                    <li ><a href="{{Route('mymessage')}}">{{__('global.inbox')}}<sup  style="color:red"></sup></a></li>
                                     <li ><a href="{{Route('mysent')}}">{{__('global.sent')}}<sup  style="color:red"></sup></a></li>
                                </ul>
                                <li class="divider"></li>
                               <li>

                                     <a class="forget" onclick="forget(this)" href="{{route('log_out')}}">
                                           {{__('global.logout')}}
                                        </a>
                               </li>
                        </ul>
                    </li>

                    @endif
                    <li class="active">
                        <a href="index.html"><i class="fa fa-money"></i> <span class="nav-label">{{__('global.funding')}}</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            @if(auth()->user()->type=='giver')
                        	<li><a href="{{route('seeker')}}">{{__('global.seekers')}}</a></li>
                            <li><a href="{{Route('giverdonation')}}">{{__('global.donations')}}</a></li>
                            @endif
                            @if (auth()->user()->type=='seeker')
                            <li><a href="{{route('seekfund')}}">{{__('global.seek_fund')}}</a></li>
                            <li><a href="{{route('listplea')}}">{{__('global.my_plea')}}</a></li>
                             <li><a href="{{route('donorall')}}">{{__('global.my_donors')}}</a></li>
                            @endif


                            @if(auth()->user()->type=='admin')
                        	<li><a href="{{route('seeker')}}">{{__('global.seekers')}}</a></li>
                            <li><a href="{{route('alldonations')}}">{{__('global.all_donations')}}</a></li>
                            @endif

                            <!-- <li><a href="{{Route('profile_me')}}">Corroborate</a></li> -->

                        </ul>
                    </li>
                      @if(auth()->user()->type!='admin')
                    <li>

                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">{{__('global.stats')}}</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('showstat')}}">{{__('global.stats')}}</a></li>

                        </ul>
                    </li>
                    @endif

                    @if(auth()->user()->type=='admin')
                  <li>

                      <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">{{__('global.messaging')}}</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">
                          <li><a href="{{route('admin_email_all')}}">{{__('global.send_message_all')}}</a></li>

                      </ul>
                  </li>
                  @endif





                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">

          <div class="row border-bottom">
           <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">


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
          <ul class="nav navbar-nav navbar-right">

                <!--  <li ><a href="{{Route('about')}}"> About Us </a></li>
                  <li ><a href="{{Route('vision')}}"> Our Vision </a></li>
                  <li ><a href="{{Route('contact')}}"> Contact </a></li> -->
                   <li ><a href="{{url('language', 'en')}}">en</a></li>
                    <li ><a href="{{url('language', 'ar')}}">عربى</a></li>
                   <li ><a href="{{Route('about')}}"> {{__('global.main')}} </a></li>
                 <!--  <li ><a href="{{Route('term')}}"> Main </a></li> -->





                <li>


                    <a class="forget" onclick="forget(this)" href="{{route('log_out')}}">
                        <i class="fa fa-sign-out"></i>  {{__('global.logout')}}
                    </a>


                </li>


                <li>

                </li>

            </ul>
        <!--  <div class="row border-bottom"> -->

          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>


            @if( auth()->user()->type=='giver' and (\Request::is('mymessage')) || (\Request::is('mysent')))
            <form role="search" method="GET" class="navbar-form-custom" action="{{Route('searchmessage')}}">
                <div class="form-group">
                    <input type="search" placeholder="{{__('global.search_messages')}}" class="form-control" name="top_search" id="top-search">

                </div>

            </form>
             @elseif( auth()->user()->type=='giver')
            <form role="search" method="GET" class="navbar-form-custom" action="{{Route('searchneed')}}">
                <div class="form-group">
                    <input type="search" placeholder="{{__('global.search_need')}}" class="form-control" name="top_search" id="top-search">

                </div>

            </form>
             @elseif(auth()->user()->type=='giver' || auth()->user()->type=='seeker' )

            <form role="search" method="GET" class="navbar-form-custom" action="{{Route('searchmessage')}}">
                <div class="form-group">
                    <input type="search" placeholder="{{__('global.search_messages')}}" class="form-control" name="top_search" id="top-search">

                </div>

            </form>
            @endif

        </div>
      <!-- </div> -->

        </div>

      </div>
    </nav>



  </div>
</div>








<script type="text/javascript">

    function forget(forget){

        Session::forget('count');
    }
</script>
