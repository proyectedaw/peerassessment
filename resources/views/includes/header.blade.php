 <nav class="navbar navbar-inverse" role="navigation" style="background-color: navy">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Icono menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="menu-item"><a href="/">{{ trans('languaje.principal1') }}</a></li>
                    <p class="navbar-text"> 
                        @foreach ($campanyas as $campanya)
                            @if ($campanya->activa)
                                {{ trans('languaje.header1') }} {{ $campanya->nombre }}
                            @endif
                        @endforeach
                    </p>           
                </ul>
                <ul class="nav navbar-nav visible-xs">
                    <li class="menu-item"><a href="formentregaproyecto">{{ trans('languaje.menuaccions2') }}</a></li>
                    <li class="menu-item"><a href="#">{{ trans('languaje.menuaccions3') }}</a></li>
                    <li class="menu-item"><a href="#">{{ trans('languaje.menuaccions4') }}</a></li>
                </ul>
                 <ul class="nav navbar-nav navbar-form navbar-right">
                    <li class="btn-group usu-new">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">Nombre participante</button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".desconectar">LOGOUT</button>
                    </li>
                    <li>
                      <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Idioma
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li role="presentation"><a href="{{ url('lang', ['es']) }}">ES</a></li>
                        <li role="presentation"><a href="{{ url('lang', ['ca']) }}">CAT</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>