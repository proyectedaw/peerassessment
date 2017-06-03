<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

      

    <title>{{ trans('languaje.principal0') }}</title>

    <!-- Bootstrap Core CSS -->
    <!--./assets/less/bootstrap/bootstrap.min.css-->
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/half-slider.css')}}" rel="stylesheet">

    <link rel="icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>
      <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap2-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.min.js"></script>


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
h1, h2, h3{
  color: yellow;
  font-weight: bold;
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
	                <div class="fill img-responsive" style="background-image:url('{{ URL::asset('img/cabecera/slide1.png')}}');">
	                </div>
	            </div>
               <div class="item">
                  <!-- Set the third background image using inline CSS below. -->
                  <div class="fill img-responsive" style="background-image:url('{{ URL::asset('img/cabecera/slide4.png')}}');">
                  </div>
              </div>
	            <div class="item">
	                <!-- Set the second background image using inline CSS below. -->
	                <div class="fill img-responsive" style="background-image:url('{{ URL::asset('img/cabecera/slide2.png')}}');">
	                </div>
	            </div>
	            <div class="item">
	                <!-- Set the third background image using inline CSS below. -->
	                <div class="fill img-responsive" style="background-image:url('{{ URL::asset('img/cabecera/slide3.png')}}');">
	                </div>
	            </div>
              <div class="item">
                  <!-- Set the third background image using inline CSS below. -->
                  <div class="fill img-responsive" style="background-image:url('{{ URL::asset('img/cabecera/slide5.png')}}');">
                  </div>
              </div>     
	        </div>
		       <div class="main-text"> <!--hidden-xs-->
            <div class="container">
              <div class="col-md-12">
                  <h1>{{ trans('languaje.principal4') }}</h1>
                  <h2>{{ trans('languaje.principal5') }}</h2>
                  <h3 class="hidden-xs">Peer Assessment</h3>
              </div>
            </div> 
          </div>
        <!-- Controls -->
        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>-->
    </header>
     <!-- Navigation -->


      <nav class="navbar navbar-inverse" role="navigation" style="background-color: navy">
    	<div class="container-fluid">
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
    				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('languaje.principal1') }}</a></li>
    				<li role="presentation"><a role="tab" data-toggle="tab" href="#disenos">{{ trans('languaje.principal2') }}</a></li>
    			</ul>
                <!--class="btn btn-primary button" -->
    			<ul class="nav navbar-nav navbar-form navbar-right">
            <li><button class="btn btn-primary form-control" data-toggle="modal" data-target="#login">Login</button></li>
            <li><button class="btn btn-info form-control" data-toggle="modal" data-target="#registro">{{ trans('languaje.principal3') }}</button></li>
            <li>
              <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Idioma
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li role="presentation"><a href="{{ url('lang', ['es']) }}">ES</a></li>
                <li role="presentation"><a href="{{ url('lang', ['ca']) }}">CAT</a></li>
              </ul>
            </li>
           <!-- <li>
              <select class="chosen-select" tabindex="2">
                <option value="/lang/es">ES</option>
                <option value="/lang/ca">CAT</option>
            </select>
            </li>-->
          </ul>        
    		</div>          
    		<!-- /.navbar-collapse -->
    	</div>
    	<!-- /.container -->
    </nav>

<div class="container">
    <div class="tab-content">
       <div role="tabpanel" class="tab-pane fade in active" id="home">
          <div class="container">
          <!-- Example row of columns -->
            <div class="row">
              <div class="col-xs-6">
                <h1>{{ trans('languaje.principal6') }}</h1>
                  <p>{{ trans('languaje.principal7') }}</p>
                  <p>{{ trans('languaje.principal8') }}</p>
              </div>
              <div class="col-xs-6">
                <img class="img-responsive" src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
              </div>
            </div>
            <hr>
          </div> 
      </div> 
       <div role="tabpanel" class="tab-pane fade" id="disenos">
          <div class="container-row col-sm-12">
              <div class="col-xs-4">
                <img class="img-responsive" src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
                <p>descripcion</p>
              </div>
              <div class="col-xs-4">
                <img class="img-responsive" src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
                <p>descripcion</p>
              </div>
              <div class="col-xs-4">
                <img class="img-responsive" src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
                <p>descripcion</p>
              </div>
               <div class="col-xs-4">
                <img class="img-responsive" src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
                <p>descripcion</p>
              </div>
              <div class="col-xs-4">
                <img class="img-responsive" src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
                <p>descripcion</p>
              </div>
              <div class="col-xs-4">
                <img class="img-responsive" src="{{ URL::asset('img/cartel-la-merce-barcelona.png')}}">
                <p>descripcion</p>
              </div>
          </div>
      </div>
    </div>
</div>
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
                             <input type="text" class="form-control" name="email" id="email" placeholder="{{ trans('languaje.login1') }}">
                         </div>
                    </div>
                    <div class="form-group">
                        <!-- <span class="input-group-addon" id="basic-addon1">Pass</span>-->
                        <label for="pass" class="col-sm-4 control-label">Password:</label>
                         <div class="col-sm-6">
                             <input type="password" class="form-control" name="pass" id="pass" placeholder="{{ trans('languaje.login2') }}">
                         </div>   
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <button type="submit" class="btn btn-primary form-control" name="login" value="Login">Login</button>  
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
                             <input type="text" class="form-control" name="nif" id="nif" placeholder="{{ trans('languaje.registro1') }}">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">{{ trans('languaje.registro7') }}:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="nombre" id="nombre" placeholder="{{ trans('languaje.registro2') }}">
                         </div> 
                    </div>
                   <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">{{ trans('languaje.registro8') }}:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="{{ trans('languaje.registro3') }}">
                         </div> 
                    </div>
                   <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">{{ trans('languaje.registro9') }}:</label>
                         <div class="col-sm-6">
                             <input type="date" class="form-control" name="fnac" id="fnac">
                         </div> 
                    </div>
                    <div class="form-group">
                         <label for="mail" class="col-sm-4 control-label">E-mail:</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="email" id="email" placeholder="{{ trans('languaje.registro4') }}">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-4 control-label">{{ trans('languaje.registro10') }}:</label>
                         <div class="col-sm-6">
                             <input type="password" class="form-control" name="pass" id="pass" placeholder="{{ trans('languaje.registro5') }}">
                         </div>  
                    </div>
                     <div class="form-group">
                        <label for="conpass" class="col-sm-4 control-label">{{ trans('languaje.registro11') }}</label>
                         <div class="col-sm-6">
                             <input type="password" class="form-control" name="conpass" id="conpass" placeholder="{{ trans('languaje.registro6') }}">
                         </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <button type="submit" class="btn btn-info form-control" name="registro" value="registro">{{ trans('languaje.registro12') }}</button> 
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
        interval: 3500 //changes the speed
    })
    </script>
    <footer style="text-align: center; font-weight: bold;">
			@include('includes.footer')
	 </footer>
</body>

</html>