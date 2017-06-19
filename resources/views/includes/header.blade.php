<header>
    <div class="topfix">   
        <nav class="navbar navbar-inverse" role="navigation">    
            <div class="container"> 
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->nombre }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="menu-item"><a href="{{ url('/') }}">{{ trans('languaje.inicio') }}</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-->
        </div>
    </nav><!--/.navbar-->  
</div>
</header>