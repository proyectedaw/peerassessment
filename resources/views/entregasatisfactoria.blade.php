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
                    <li class="menu-item"><a href="/">INICIO</a></li>
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
    </header>
   
    <div>
        <h2>Entrega satisfactoria!</h2>
    </div>
    
   <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>