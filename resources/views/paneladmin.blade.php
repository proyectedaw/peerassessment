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
                <h2>Añadir Aspectos</h2>
                <form>
                    <div class="form-group">
                        <label for="aspecto" class="col-sm-4 control-label">Aspecto</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="aspecto" name="aspecto" placeholder="Introduce un aspecto">
                        </div>                      
                    </div>
                    <div class="form-group">
                        <label for="titol" class="col-sm-4 control-label">Porcentaje</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="porcentaje" id="porcentaje" placeholder="Introduce un porcentaje">
                        </div>
                         
                    </div>
                </form>
            </div>
            <div class="col-xs-4">
                <h2>Gestión de Campañas</h2>
                <h3> Campañas disponibles: </h3>
                @foreach ($campanyas as $campanya)
                  <p>{{ $campanya->nombre }}</p>
                    @if ($campanya->activa == 1)
                        <?php $activa = '<span style= "color: green;">activa</span>' ?>
                    @elseif ($campanya->activa == 0)
                        <?php $activa = '<span style= "color: red;">inactiva</span>' ?>
                    @endif
                    <p>Estado: <?php echo $activa; ?></p>
                @endforeach           
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