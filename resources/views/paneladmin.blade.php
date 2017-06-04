<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Administración</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>

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
    	@include('includes.headeradmin')
    </header>
   
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <h2>{{ trans('languaje.adminarea1') }}</h2>
                <form class = "form-horizontal">
                    <div class="form-group">
                        <label for="aspecto" class="col-sm-4 control-label">{{ trans('languaje.adminarea2') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="aspecto" name="aspecto" placeholder="{{ trans('languaje.adminarea3') }}">
                        </div>                      
                    </div>
                    <div class="form-group">
                        <label for="titol" class="col-sm-4 control-label">{{ trans('languaje.adminarea4') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="porcentaje" id="porcentaje" placeholder="{{ trans('languaje.adminarea5') }}">
                        </div>                 
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <input type="submit" class="btn btn-danger form-control" value="{{ trans('languaje.adminarea9') }}" id="entregar" name="entregar">
                             <!--{!! Form::submit('Entregar') !!}-->
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-4 hidden-xs">
                <h2>{{ trans('languaje.adminarea6') }}</h2>
                <h3>{{ trans('languaje.adminarea7') }}:</h3>
                <ol style=" list-style-type: none;">
                    <li>
                     @foreach ($campanyas as $campanya)
                    <p>{{ $campanya->nombre }}</p>
                        <ul>
                        @if ($campanya->activa == 1)
                            <?php $activa = '<span style= "color: green;">activa</span>' ?>
                        @elseif ($campanya->activa == 0)
                            <?php $activa = '<span style= "color: red;">inactiva</span>' ?>
                        @endif
                            <li>{{ trans('languaje.adminarea8') }}: <?php echo $activa; ?></li>
                        </ul>
                @endforeach
                    </li>
                </ol>
            </div> 
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-4">
                <h3>{{ trans('languaje.adminarea10') }}</h3>
                <button type="submit" class="btn btn-danger" value="asignar">{{ trans('languaje.adminarea11') }}</button>
                <hr class="visible-xs">
            </div>
            <div class="col-xs-8 hidden-xs">
                <h3>{{ trans('languaje.adminarea12') }}</h3>
                <table class="table table-hover">
                    <tr class="danger"><th>{{ trans('languaje.adminarea13') }}</th><th>Email</th><th>Dni</th><!--<th>Acción</th>--></tr>
                @foreach($participantes as $participante)
                <tr>
                    <td>{{ $participante->nom }}</td>
                    <td>{{ $participante->email }}</td>
                    <td>{{ $participante->dni }}</td>
                    <!--<td><button type="submit" value="eliminar" class="btn btn-danger">Eliminar</button></td>-->
                </tr>
                @endforeach
                </table>
            </div>
        </div>
        <div class="row">
              <div class="col-xs-12 visible-xs">
                <h2>{{ trans('languaje.adminarea6') }}</h2>
                <h3>{{ trans('languaje.adminarea7') }}:</h3>
                <ol style=" list-style-type: none;">
                    <li>
                     @foreach ($campanyas as $campanya)
                    <p>{{ $campanya->nombre }}</p>
                        <ul>
                        @if ($campanya->activa == 1)
                            <?php $activa = '<span style= "color: green;">activa</span>' ?>
                        @elseif ($campanya->activa == 0)
                            <?php $activa = '<span style= "color: red;">inactiva</span>' ?>
                        @endif
                            <li>{{ trans('languaje.adminarea8') }}: <?php echo $activa; ?></li>
                        </ul>
                @endforeach
                    </li>
                </ol>
            </div> 
        </div>
        <div class="row">
            <div class=" col-xs-12 visible-xs">
                <h3>{{ trans('languaje.adminarea12') }}</h3>
                <table class="table table-hover">
                    <tr class="danger"><th>{{ trans('languaje.adminarea13') }}</th><th>Email</th><th>Dni</th><!--<th>Acción</th>--></tr>
                @foreach($participantes as $participante)
                <tr>
                    <td>{{ $participante->nom }}</td>
                    <td>{{ $participante->email }}</td>
                    <td>{{ $participante->dni }}</td>
                    <!--<td><button type="submit" value="eliminar" class="btn btn-danger">Eliminar</button></td>-->
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div> 
       <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <footer style="text-align: center; font-weight: bold;">
            @include('includes.footer')
     </footer>
</body>
</html>