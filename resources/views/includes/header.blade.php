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
                    <li class="menu-item"><a href="/">INICIO</a></li>
                    <li class="menu-item"> 
                        @foreach ($campanyas as $campanya)
                            @if ($campanya->activa)
                                <a href="#">Campaña activa: {{ $campanya->nombre }}</a>
                            @endif
                        @endforeach
                    </li>           
                </ul>
                <ul class="nav navbar-nav visible-xs">
                    <li class="menu-item"><a href="formentregaproyecto">Subir/evaluar</a></li>
                    <li class="menu-item"><a href="#">Definir pseudonimo</a></li>
                    <li class="menu-item"><a href="#">Condiciones de Evaluación</a></li>
                </ul>
                 <ul class="nav navbar-nav navbar-form navbar-right">
                    <li class="btn-group usu-new">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">Nombre participante</button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".desconectar">LOGOUT</button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>