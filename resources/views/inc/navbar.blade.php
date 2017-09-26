
{{--navbar-fixed-top--}}
        <div class="navbar navbar-default navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <a href="../" class="navbar-brand" style="font-size: 2em; font-family: 'Abel', sans-serif;; color: #ede3e3"><i class="fa fa-briefcase" aria-hidden="true"></i> easybook.com</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav" style="margin-left: 20%">
                        <li>
                            <a href="../">Home</a>
                        </li>

                        <li>
                            <a href="/findjob">Find Job</a>
                        </li>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Training <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="download">
                                <li><a href="#">Training Resources</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Human Resource</a></li>
                                <li class="divider"></li>
                                <li><a href="#">How to Find jobs</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock" aria-hidden="true"></i> Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>

                        @elseif(Auth::guard('admin')->check())
                            <li><a href="{{ route('admin.postjob') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Post a Job</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="../home"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('home.jobform') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> job</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="../home"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>



                </div>
            </div>
        </div>

