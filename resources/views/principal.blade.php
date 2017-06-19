<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ trans('languaje.principal0') }}</title>

  <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>

  <link href="{{ URL::asset('css/styles.css')}}" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Half Page Image Background Carousel Header -->
  <header id="myCarousel" class="carousel slide">        
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
      <div class="item active">
        <!-- Set the first background image using inline CSS below. -->
        <div class="fill img-responsive" style="background-image:url('{{ URL::asset('images/carousel/slide1.png')}}');">
        </div>
      </div>
      <div class="item">
        <!-- Set the second background image using inline CSS below. -->
        <div class="fill img-responsive" style="background-image:url('{{ URL::asset('images/carousel/slide4.png')}}');">
        </div>
      </div>
      <div class="item">
        <!-- Set the third background image using inline CSS below. -->
        <div class="fill img-responsive" style="background-image:url('{{ URL::asset('images/carousel/slide2.png')}}');">
        </div>
      </div>
      <div class="item">
        <!-- Set the third background image using inline CSS below. -->
        <div class="fill img-responsive" style="background-image:url('{{ URL::asset('images/carousel/slide3.png')}}');">
        </div>
      </div>
    </div>
    <div class="main-text hidden-xs">
      <div class="col-md-12 col-lg-12">
        <h1>{{ trans('languaje.p_titulo') }}</h1>
        <h2>{{ trans('languaje.p_titulo2') }}</h2>
        <h3>Peer Assessment</h3>
      </div>
    </div>
    <!-- Controls -->       
  </a>
</header>
<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation">
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
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('languaje.inicio') }}</a></li>
        <li role="presentation"><a role="tab" data-toggle="tab" href="{{ url('/disenyos') }}">{{ trans('languaje.p_disenyos') }}</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('lang', ['es']) }}">ES</a></li>
        <li><a href="{{ url('lang', ['ca']) }}">CAT</a></li>
        @if (Route::has('login'))
        @if (Auth::check())
        @if (Auth::user()->admin)
        <li>
        <a href="{{ url('/administrar') }}"><b>Admin</b></a>
        </li>
        @else
        <li>
          <a href="{{ url('/area-usuario') }}"><b>Home</b></a>
        </li>
        @endif
        @else
        <li><p class="navbar-text">{{ trans('languaje.l_tienescuenta') }}</p></li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
              <div class="row">
                <div class="col-md-12">
                  Login       
                  <form class="form" role="form" method="POST" action="{{ route('login') }}" accept-charset="UTF-8" id="login-nav">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="sr-only" for="InputEmail">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="InputPassword">{{ trans('languaje.l_contrasenya') }}</label>
                      <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
                      <div class="help-block text-right"><a href="">{{ trans('languaje.l_olvidopass') }}</a></div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">{{ trans('languaje.l_logado') }}
                      </label>
                    </div>
                  </form>
                </div>
                <div class="bottom text-center">
                  {{ trans('languaje.r_nuevo') }}<a href="#" data-toggle="modal" data-target="#registro"><b>{{ trans('languaje.r_registrar') }}</b></a>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>
      @endif
      @endif
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>

<div class="modal fade" id="registro">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">{{ trans('languaje.r_registro') }} </h2>
      </div>
      <div class="modal-body">  
        <form class="form" role="form" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <input type="text" name="nombre" id="nombre" class="form-control input-sm floatlabel" placeholder="Nombre">
                @if ($errors->has('nombre'))
                <span class="help-block">
                  <strong>{{ $errors->first('nombre') }}</strong>
                </span>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group{{ $errors->has('apellido_1') ? ' has-error' : '' }}">
                <input type="text" name="apellido_1" id="apellido_1" class="form-control input-sm floatlabel" placeholder="Primer apellido">
                @if ($errors->has('apellido_1'))
                <span class="help-block">
                  <strong>{{ $errors->first('apellido_1') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group{{ $errors->has('apellido_2') ? ' has-error' : '' }}">
                <input type="text" name="apellido_2" id="apellido_2" class="form-control input-sm floatlabel" placeholder="Segundo apellido">
                @if ($errors->has('apellido_2'))
                <span class="help-block">
                  <strong>{{ $errors->first('apellido_2') }}</strong>
                </span>
                @endif
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                <input type="text" name="dni" id="dni" class="form-control input-sm" placeholder="DNI/NIE">
                @if ($errors->has('nif'))
                <span class="help-block">
                  <strong>{{ $errors->first('nif') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="pseudonimo" id="pseudonimo" class="form-control input-sm" placeholder="Pseudónimo">
              </div>
            </div>
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="text" name="email" id="email" class="form-control input-sm" placeholder="E-mail">
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group"> 
                <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-sm" placeholder="Confirmar contraseña">
              </div>
            </div>
          </div>
          <input type="hidden" name="admin" value=false>
          <input type="submit" value="Registrate" class="btn btn-info btn-block">                        
        </form>
      </div>
    </div>
  </div><!-- /.modal-content -->
</div> <!-- /.modal-dialog -->

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <h1>{{ trans('languaje.p_titulo2') }}</h1>
      <p>{{ trans('languaje.p_descripcion') }}</p>
      <p>{{ trans('languaje.p_descripcion2') }}</p>
      <p>{{ trans('languaje.p_descripcion3') }}</p>
    </div>
    
    <div class="col-xs-10 col-sm-6 col-md-6 col-lg-6">
      <!--images-->
    </div>
  </div> <!-- class row --> 
</div> <!-- class container-->      

@include('includes.footer')

</body>

</html>