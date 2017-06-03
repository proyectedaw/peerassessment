<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Principal</title>

    <!-- Bootstrap Core CSS -->
    <!--./assets/less/bootstrap/bootstrap.min.css-->
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/half-slider.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .main-text
{
    position: absolute;
    top: 50px;
    width: 96.66666666666666%;
    color: #FFF;
}
.btn-min-block
{
    min-width: 170px;
    line-height: 26px;
}
.btn-clear
{
    color: #FFF;
    background-color: transparent;
    border-color: #FFF;
    margin-right: 15px;
}
.btn-clear:hover
{
    color: #000;
    background-color: #FFF;
}
.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto; 
}
#guitarspecs{
    padding-right: 15%;
}
area{
    cursor: pointer;
}
.menuizquierda{
    list-style: none;
    position:absolute;
    left:80%;
}
.buttton{
    border: 0px;
}
  
 </style>
</head>

<body>

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>-->
        <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('{{ URL::asset('img/slide3.png')}}');">
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('{{ URL::asset('img/slide1.png')}}');">
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the third background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('{{ URL::asset('img/slide2.png')}}');">
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the third background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('{{ URL::asset('img/slide4.png')}}');">
                        </div>
                    </div>
                </div>
               <div class="main-text hidden-xs">
                    <div class="col-md-12">
                          <h1>TITOL??</h1>
                        <h3>subtitol</h3>
                    </div>
                </div>
        <!-- Controls -->
        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>-->
        </a>
    </header>
     <!-- Navigation -->
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
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Inicio</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#audio">Ver diseños</a></li>
                </ul>
                <!--class="btn btn-primary button" -->
                <ul class="nav navbar-nav menuizquierda"><!-- Hacia la derecha -->
                    <li><button class="btn btn-primary" data-toggle="modal" data-target="#login">Login</button></li>
                    <li><button class="btn btn-info" data-toggle="modal" data-target="#registro">Registrate</button></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Presentacion campaña</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
            </div>

            <div class="col-md-6">
                <img src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
            </div>
        </div> <!-- class row -->   
    </div> <!-- class container-->

    <footer>
        <div id="peu">
            <p>&copy; 2017 - CVPuppies | <a href="#">Pol&iacute;tica de Privacidad</a> | Pilar Bielsa Martínez</p>
        </div>
    </footer>

    <div class="modal fade" id="login">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h2 class="modal-title">Login: </h2>
              </div>
              <div class="modal-body">  
                <form class="form-horizontal">
                    <div class="form-group">
                         <label for="mail" class="col-sm-4 control-label">E-mail:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="email" id="email" placeholder="Introduce el e-mail">
                         </div>
                    </div>
                    <div class="form-group">
                        <!-- <span class="input-group-addon" id="basic-addon1">Pass</span>-->
                        <label for="pass" class="col-sm-4 control-label">Password:</label>
                         <div class="col-sm-6">
                             <input type="password" class="form-control" name="pass" id="pass" placeholder="Introduce el password">
                         </div>   
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <button type="submit" class="btn btn-primary btn-lg" name="login" value="Login">Login</button>  
                        </div>
                    </div>
                          
                </form>
              </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
      <div class="modal fade" id="registro">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h2 class="modal-title">¡Registrate! </h2>
              </div>
              <div class="modal-body">  
                <form class="form-horizontal">
                    <div class="form-group">
                         <label for="mail" class="col-sm-4 control-label">DNI/NIE:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="nif" id="nif" placeholder="Introduce tu dni">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">Nombre:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce tu nombre">
                         </div> 
                    </div>
                   <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">Apellidos:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Introduce tus apellidos">
                         </div> 
                    </div>
                   <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">Fecha de nacimiento:</label>
                         <div class="col-sm-6">
                             <input type="date" class="form-control" name="fnac" id="fnac" placeholder="Introduce la fecha de nacimiento">
                         </div> 
                    </div>
                    <div class="form-group">
                         <label for="mail" class="col-sm-4 control-label">E-mail:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="email" id="email" placeholder="Introduce el e-mail">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">Password:</label>
                         <div class="col-sm-6">
                             <input type="password" class="form-control" name="pass" id="pass" placeholder="Introduce el password">
                         </div>  
                    </div>
                     <div class="form-group">
                        <label for="conpass" class="col-sm-4 control-label">Confirmar</label>
                         <div class="col-sm-6">
                             <input type="password" class="form-control" name="conpass" id="conpass" placeholder="Confirmacion de password">
                         </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <button type="submit" class="btn btn-primary btn-lg" name="registro" value="registro">Registrarse</button> 
                        </div>
                    </div>
                           
                </form>
              </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    

    <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
    <footer style="text-align: center; font-weight: bold;">
            <p>Copyright &copy; Isaac Garcia productions 2017</p>
    </footer>
</body>

</html>