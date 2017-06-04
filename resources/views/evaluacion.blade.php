<?php 

$width='width="190px"';
$height='height="220px"';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Evaluacion</title>
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
    .medio {
    	background-color: #FFFF5C;
    }

.btn-medio:hover, .btn-medio:focus, .btn-medio, .btn-medio., .open > .dropdown-toggle.btn-medio {
    background: black;
}
    .fatal {
    	background-color: #BF0000; /*#BF0000*/
    }

.btn-fatal:hover, .btn-fatal:focus, .btn-fatal, .btn-fatal., .open > .dropdown-toggle.btn-fatal {
    background: yellow; /*#8B0000*/
}
    .classWithPad { 
        /*margin:10px; padding:10px; left: 160px */
        position:absolute;
        left:25%;
    }
.border{
	border: 2px solid black;
}
 
    </style>
</head>
<body>
     <header>
    	@include('includes.header')
    </header>
	<h1>{{ trans('languaje.evaluacion1') }}</h1>
	<div class="container container-table">
		<div class="row">
			<div class="col-xs-3 hidden-xs">
			  @foreach($proyectos as $key => $proyecto)
			 <!-- <?php $idproyecto = $proyecto->id; ?>
				<?php //echo $idproyecto; ?>-->
			  	@if ($proyecto->id == 13) 
			  	<!--controlar el id del proyecto a evaluar para mostrar la imagen en cuestion, así como el titulo y la descripcion-->
	               <img <?php echo $height." ".$width; ?> src="cartel/{{ $proyecto->id }}"alt="Proyecto1">
	               <!--<?php
	               //$datosproyecto='';
	               //$datosproyecto=($_GET['datosproyecto']);
	               //echo $datosproyecto;
	                ?>-->
	               <div class="row">
					<div class="col-xs-12">
						<h3>{{ $proyecto->titol }}</h3>
					</div>
					</div>
					<div class="row">
					<div class="col-xs-12">
						<h3>{{ $proyecto->descripcion }}</h3>
					</div>
					</div>
	            @endif
	           @endforeach
			</div>
			<div class="col-xs-12 visible-xs">
			  @foreach($proyectos as $key => $proyecto)
			 <!-- <?php $idproyecto = $proyecto->id; ?>
				<?php //echo $idproyecto; ?>-->
			  	@if ($proyecto->id == 13) 
			  	<!--controlar el id del proyecto a evaluar para mostrar la imagen en cuestion, así como el titulo y la descripcion-->
	               <img <?php echo $height." ".$width; ?> src="cartel/{{ $proyecto->id }}"alt="Proyecto1">
	               <!--<?php
	               //$datosproyecto='';
	               //$datosproyecto=($_GET['datosproyecto']);
	               //echo $datosproyecto;
	                ?>-->
	               <div class="row">
					<div class="col-xs-12">
						<h3>{{ $proyecto->titol }}</h3>
					</div>
					</div>
					<div class="row">
					<div class="col-xs-12">
						<h3>{{ $proyecto->descripcion }}</h3>
					</div>
					</div>
	            @endif
	           @endforeach
			</div>

			<!-- Oculto al hacerse pequeño-->
			<div class="col-xs-6 hidden-xs">
				<form class = "form-horizontal">
					<table class="table table-striped">
						<tr class="info">
							<th>Concepto</th>
							<th>0</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
						</tr>
				@foreach($aspectos as $aspecto)
					<tr>
						<td>
							{{ $aspecto->descripcion }}
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option0" value="0" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option1" value="1" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option2" value="2" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option3" value="3" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option4" value="4" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option5" value="5" autocomplete="off">
						</td>
					</tr>
				@endforeach
				</table>
					<div class="row">
						<div class="col-xs-6">
							<div class="row">
								<label for="comentarios" class="col-xs-12">{{ trans('languaje.evaluacion3') }}</label>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-12">
									<textarea placeholder="{{ trans('languaje.evaluacion4') }}" id="comentarios" name="comentarios"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button class="btn btn-primary form-control" value="evaluar">{{ trans('languaje.evaluacion5') }}</button>
						</div>
					</div>
				</form>
			</div>		
			<div class="col-xs-3">
				<div class="row">
	                <div class="col-xs-12 classWithPad hidden-xs">
	                    @include ('includes.acciones')
	                </div>
	            </div> 
			</div>
		</div>
		<!--Se hace visible al hacerlo pequeño-->
		<div class="row visible-xs">
			<div class="col-xs-12">
				<form class = "form-horizontal">
					<table class="table table-striped">
						<tr class="info">
							<th>Concepto</th>
							<th>0</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
						</tr>
				@foreach($aspectos as $aspecto)
					<tr>
						<td>
							{{ $aspecto->descripcion }}
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option0" value="0" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option1" value="1" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option2" value="2" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option3" value="3" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option4" value="4" autocomplete="off">
						</td>
						<td>
							<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option5" value="5" autocomplete="off">
						</td>
					</tr>
				@endforeach
				</table>
					<div class="row">
						<div class="col-xs-6">
							<div class="row">
								<label for="comentarios" class="col-xs-12">{{ trans('languaje.evaluacion3') }}</label>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-12">
									<textarea placeholder="{{ trans('languaje.evaluacion4') }}" id="comentarios" name="comentarios"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button class="btn btn-primary form-control" value="evaluar">{{ trans('languaje.evaluacion5') }}</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer style="text-align: center; font-weight: bold;">
			@include('includes.footer')
	 </footer>
	  <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>