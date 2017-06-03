<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Entrega del proyecto</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/half-slider.css')}}" rel="stylesheet">

    <style type="text/css">
    table, tr, td{
        border: 0px black solid;
        border-collapse: collapse;
    }
     .classWithPad { 
        /*margin:10px; padding:10px; left: 160px */
        position:absolute;
        left:25%;
    }
    </style>
</head>
<body>
   <header>
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
                                {{ trans('languaje.header1') }}                             
                    </p>           
                </ul>
                <ul class="nav navbar-nav visible-xs">
                    <li class="menu-item"><a href="formentregaproyecto">{{ trans('languaje.menuaccions1') }}</a></li>
                    <li class="menu-item"><a href="#">{{ trans('languaje.menuaccions2') }}</a></li>
                    <li class="menu-item"><a href="#">{{ trans('languaje.menuaccions3') }}</a></li>
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
    </header>
    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-8">
                 <div class="alert alert-success" role="alert">
                    <span class="fa fa-info-circle">Entrega satisfactoria!</span>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <div class="col-xs-12 classWithPad hidden-xs">
                        @include ('includes.acciones')
                    </div>
                </div> 
            </div>
        </div>
    </div>

   

    
   <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>