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
	<h1>Formulario de evaluacion</h1>
	<div class="container container-table">
		<div class="row">
			<div class="col-xs-3">
			  @foreach($proyectos as $key => $proyecto)
			 <!-- <?php $idproyecto = $proyecto->id; ?>
				<?php //echo $idproyecto; ?>-->
			  	@if ($proyecto->id == 13) 
			  	<!--controlar el id del proyecto a evaluar para mostrar la imagen en cuestion, así como el titulo y la descripcion-->
	               <img <?php echo $height." ".$width; ?> src="cartel/{{ $proyecto->id }}"alt="Proyecto1">

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
			<div class="col-xs-6">
				<div class="row">
					<div class="col-xs-6">
						<div class="row">
							<label for="concepto" class="col-xs-12">Concepto</label>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="row">
							<label class="col-xs-2">0</label>
							<label class="col-xs-2">1</label>
							<label class="col-xs-2">2</label>
							<label class="col-xs-2">3</label>
							<label class="col-xs-2">4</label>
							<label class="col-xs-2">5</label>
						</div>
					</div>
				</div>
			@foreach($aspectos as $aspecto)
				<div class="row">
					<div class="col-xs-6">
						<div class="row">
							<div class="col-xs-6">{{ $aspecto->descripcion }}</div>
							<hr>
						</div>
					</div>
					<div class="col-xs-6">
						<form>
						<div class="row">
							<div class="btn-group" data-toggle="buttons">
								<div class="col-xs-2">
									<label class="btn btn-fatal fatal">
								    	<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option0" value="0" autocomplete="off">
								  	</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-danger">
							    		<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option1" value="1" autocomplete="off">
							  		</label> 
								</div>
								<div class="col-xs-2">
									<label class="btn btn-warning">
								    	<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option2" value="2" autocomplete="off">
								  	</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-medio medio">
								    	<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option3" value="3" autocomplete="off">
								  	</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-primary">
								    	<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option4" value="4" autocomplete="off">
								  	</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-success">
								    	<input type="radio" name="eval{{ $aspecto->id }}" id="eval{{ $aspecto->id }}-option5" value="5" autocomplete="off">
								  	</label>
								</div>
							</div>
							<hr>
						</div>
					</div>
				</div>
			@endforeach
				<div class="row">
					<div class="col-xs-6">
						<div class="row">
							<label for="comentarios" class="col-xs-12">Comentarios</label>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="row">
							<div class="col-xs-12">
								<textarea placeholder="añade un comentario sobre la evaluación" id="comentarios" name="comentarios"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button class="btn btn-primary form-control" value="evaluar">Enviar Evaluacion</button>
					</div>
				</div>
			</div>
			</form>
			<div class="col-xs-3">
				<div class="row">
	                <div class="col-xs-12 classWithPad hidden-xs">
	                    <h3>Acciones</h3>
	                    <a href="#">Subir/evaluar</a><br/>
	                    <a href="#">Definir pseudonimo</a><br/>
	                    <a href="#">Condiciones de Evaluación</a>
	                </div>
	            </div> 
			</div>
		</div>
		</div>

	</div><!--end-container-->
	  <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>