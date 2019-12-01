<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/admin')}}"> ဖိုးလမင္း ( အိမ္ျခံေျမ )</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>&nbsp
                        {{$auser->name}}&nbsp
                        <i class="fa fa-caret-down"></i>
                        
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i>&nbsp Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>&nbsp Blogs <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/blogs')}}">Posts</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/blogs/create')}}">New Posts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><span class="glyphicon glyphicon-send"></span> &nbsp Property<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/post/all')}}">All Property</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/post/create')}}">ADD Property</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><span class="glyphicon glyphicon-briefcase"></span>&nbsp Company <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/admin/company')}}">Company List</a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/company/addnew')}}">ADD Company</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp ADS <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/admin/ads/property')}}">Property AD</a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/ads/company')}}">Company AD</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        

                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>&nbsp Member <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/users')}}">Users</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/admins')}}">Admin</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{url('admin/seo')}}"><span class="glyphicon glyphicon-search"></span>&nbsp SEO</a>
                        </li>

                        <li>
                            <a href="{{url('admin/setting')}}"><span class="glyphicon glyphicon-cog"></span>&nbsp Settings</a>
                        </li>

                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>