<!DOCTYPE html>
<html lang="ES">
@extends("layouts.app")
<!--
*una capçalera on figuri el nom del programador i el nom de l'aplicació: "Links app".
* un peu on figuri la data d'entrega de l'aplicació
Totes les pàgines han de tenir la mateixa capçalera i peu (extending the layout).
-->
    <head>
        <title>Links</title>
        <meta charset="UTF-8">
    </head>
    <body>
        @section('cabezera')
        <header>
        <div class="topfix">      
            <div class="navbar" role="navigation" style="background-color: navy">
              <div class="container"> 
                <ul class="nav navbar-nav navbar-right">                           
                    <li class="btn-group usu-new">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">Nombre participante</button>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">LOGOUT</button>

                      <!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".desconectar"><i class="fa fa-power-off"></i></button>-->
                    </li>
                </ul>
                
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="menu-item"><a href="#">INICIO</a></li>
                        <li class="menu-item"> 
                        @foreach ($campanyas as $campanya)
                        @if ($campanya->activa)
                        <a href="#">Campaña activa: {{ $campanya->nombre }}</a>
                        @endif
                        @endforeach
                        </li>
                        
                    </ul>

                </div><!--/.nav-collapse -->
              </div><!--/.container-->
            </div><!--/.navbar-->         
        </div>
    </header>
        @show
        <div class="container">
            @yield('content')
        </div>
        @section('piepagina')
        <footer>
            <p>Data de lliurament: 03-04-2017</p>
        </footer>
        @show
    </body>
</html>
