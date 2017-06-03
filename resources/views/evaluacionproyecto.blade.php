<?php 

$width='width="190px"';
$height='height="220px"';

?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Evaluación de proyectos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

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

    .buttonmodal {
    	padding: 0;
		border: none;
		background: none;
    }
    .color{
        background-color: navy;
    }
    </style>
</head>
<body>
     <header>
        @include('includes.header')
    </header>
   
    <div class="container">
        <div class="row">
            <div class ="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Proyectos a Evaluar</h1>
	                        <table class="table table-hover text-centered container-fluid" align="center">
	                        	<tr>
	                        		<th></th>
	                        		<th>Titulo</th>
	                        		<th>Cartel</th>
                                    <th>Descripción</th>
	                        		<th>Evaluar</th>

	                        	</tr>
                                 @foreach ($proyectos as $proyecto)
                                <tr>
                                    <td>Proyecto {{ $proyecto->id }}</td>
                                    <td>{{ $proyecto->titol }}</td>
                                    <td><button class="buttonmodal" type="button" data-toggle="modal" data-target="#{{ $proyecto->id }}"><img class="img-responsive" src="cartel/{{ $proyecto->id }}" alt="{{ $proyecto->titol}} " title="{{ $proyecto->titol }}"></button></td>
                                    <td>{{ $proyecto->descripcion }}</td>
                                    <td><button type="submit" value="evaluar" class="btn btn-primary" onclick="window.location.href='/evaluacion'">Evaluar</button></td>
                                </tr>
                                @endforeach
	                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row">
                    <div class="col-xs-12 classWithPad hidden-xs">
                        <h3>Acciones</h3>
                        <a href="formentregaproyecto">Subir/evaluar</a><br/>
                        <a href="#">Definir pseudonimo</a><br/>
                        <a href="#">Condiciones de Evaluación</a>
                    </div>
                </div>
                
            </div>
        </div> 
    </div>

    <!--<script src="js/jquery.js"></script>-->
    <script src="{{ URL::asset('js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <footer>
        <p>&copy; Copyright 2016 - All rights reserved - </p>
    </footer>
<!--Cambiar el src del modal para poder ver la imagen en grande-->
  @foreach($proyectos as $key => $proyecto)
    <div class="modal fade" id="{{ $proyecto->id }}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <img src="cartel/{{ $proyecto->id }}" alt="Proyecto1">
        </div>
      </div>
    </div>
    @endforeach
  
  <!-- <div class="modal fade" id="proyecto2" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	        <img src="img/cartell-2009_0.jpg" alt="Proyecto1">
	    </div>
	  </div>
	</div>
    <div class="modal fade" id="proyecto3" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	        <img src="img/cartell2013gran.jpg" alt="Proyecto1">
	    </div>
	  </div>
	</div>-->
</body>
</html>