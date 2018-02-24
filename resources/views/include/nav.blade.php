<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 

                            @if (\Request::route()->getName()=='editthis')
                            <img alt="image" class="img-circle" src="../img/{{auth()->user()->file}}" />
                             </span>
                            @elseif(\Request::route()->getName()=='reply')  
                            <img alt="image" class="img-circle" src="../../../img/{{auth()->user()->file}}" />
                             </span>
                             @else    
                            <span>
                            <img alt="image" class="img-circle" src="img/{{auth()->user()->file}}" />
                             </span>

                            @endif 
                            
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> {{Auth::user()->name}}</strong>

                             </span> <span class="text-muted text-xs block">{{Auth::user()->type}}</b></span> </span> </a>
                               
                            
                        </div>

                    </li>

                 

                    <li class="active">
                        <a href="#"><i class="fa fa-address-book-o"></i> <span class="nav-label">Profile</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                                <li><a href="{{Route('profile_me')}}">Profile</a></li>
                                <li><a href="{{Route('fav')}}">Favourites</a></li>
                               <li>
                                <a href="#"> <span class="nav-label">Messages</span> <sup  style="color:red">{{Session::get('count')}} </sup></a>
                                 <ul class="nav nav-third-level">
                                    <li ><a href="{{Route('mymessage')}}">Inbox<sup  style="color:red"></sup></a></li>
                                     <li ><a href="{{Route('mysent')}}">Sent<sup  style="color:red"></sup></a></li>
                                </ul>
                                <li class="divider"></li>
                                <li>
                                  <li><a href="{{Route('logout')}}">Logout</a></li>
                           
                            
                        </ul>
                    </li>       
                    <li class="active">
                        <a href="index.html"><i class="fa fa-money"></i> <span class="nav-label">Funding</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            @if(auth()->user()->type=='giver')
                        	<li><a href="{{route('seeker')}}">Seekers</a></li>
                            <li><a href="{{Route('donation')}}">Donations</a></li>
                            @endif
                            @if (auth()->user()->type=='seeker')
                            <li><a href="{{route('seekfund')}}">Seek Fund</a></li>
                            <li><a href="{{route('listplea')}}">My Plea</a></li>
                            @endif
                            
                            <!-- <li><a href="{{Route('profile_me')}}">Corroborate</a></li> -->
                            
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistics</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('showstat')}}">Need Stats</a></li>
                           
                        </ul>
                    </li>
                    
                    
 
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">

                </div>

            </form>

        </div>

            <ul class="nav navbar-top-links navbar-right">
                
                  <li ><a href=""> About Us </a></li>
                  <li ><a href=""> Our Vision </a></li> 
                  <li ><a href=""> Contact </a></li>
                  <li ><a href=""> Terms of Service </a></li>
                  



                <li>
                    <a href="{{route('logout')}}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                  
                </li>

            </ul>

          
            
   
        </nav>


