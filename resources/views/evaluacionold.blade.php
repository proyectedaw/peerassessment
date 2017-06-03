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

.btn-medio:hover, .btn-medio:focus, .btn-medio:, .btn-medio., .open > .dropdown-toggle.btn-medio {
    background: Yellow;
}
    .classWithPad { 
        /*margin:10px; padding:10px; left: 160px */
        position:absolute;
        left:25%;
    }
     .fatal {
    	background-color: #BF0000;
    }

.btn-fatal:hover, .btn-fatal:focus, .btn-fatal:, .btn-fatal., .open > .dropdown-toggle.btn-fatal {
    background: #8B0000;
}
 
    </style>
</head>
<body>
    <header>
        <div class="topfix">      
    <div class="navbar" role="navigation" style="background-color: navy">
      <div class="container"> 
        <ul class="nav navbar-nav navbar-right">                           
            <li class="btn-group usu-new">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">Nombre participante</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">LOGOUT</button>

              <!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".desconectar"><i class="fa fa-power-off"></i></button>-->
            </li>
        </ul>
        
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="menu-item"><a href="#">INICIO</a></li>
                <li class="menu-item"> 
                @foreach ($campanyas as $campanya)
                @if ($campanya->activa)
                <a href="#">Campaña activa: {{ $campanya->nombre }}</a>
                @endif
                @endforeach
                </li>
                
            </ul>

        </div><!--/.nav-collapse -->
      </div><!--/.container-->
    </div><!--/.navbar-->         
    </div>
    </header>
	<h1>Formulario de evaluacion</h1>
	<div class="container container-table">
	<div class="row">
		<div class="col-md-8">
				<form>
		
				<div class="row">
					<div class="col-xs-2">
						0
					</div>
					<div class="col-xs-2">
						1
					</div>
					<div class="col-xs-2">
						2
					</div>
					<div class="col-xs-2">
						3
					</div>
					<div class="col-xs-2">
						4
					</div>
					<div class="col-xs-2">
						5
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="row">
							<div class="btn-group" data-toggle="buttons">
								<div class="col-xs-2">
									<label class="btn btn-fatal fatal">
						    		<input type="radio" name="eval1-option0" id="eval1-option0" value="0" autocomplete="off">
						  		</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-danger">
					    				<input type="radio" name="option1" id="option1" value="1" autocomplete="off">
					  				</label> 
								</div>
								<div class="col-xs-2">
									<label class="btn btn-warning">
						    			<input type="radio" name="option2" id="option2" value="1" autocomplete="off">
					  				</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-medio medio">
						    			<input type="radio" name="option3" id="option3" value="1" autocomplete="off">
						  			</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-primary">
						    			<input type="radio" name="option4" id="option4" value="1" autocomplete="off">
						  			</label>
								</div>
								<div class="col-xs-2">
									<label class="btn btn-success">
						    			<input type="radio" name="option5" id="option5" value="1" autocomplete="off">
						  			</label>
								</div>
							</div>
						</div>
				       <div class="btn-group" data-toggle="buttons">
				         <label for="eval1" class="col-sm-4 control-label">eval1</label>
				         	<label class="btn btn-danger ">
					    		<input type="radio" name="option1" id="option1" value="1" autocomplete="off">
					  		</label> 
					  		<label class="btn btn-warning">
						    	<input type="radio" name="option2" id="option2" value="1" autocomplete="off">
						  	</label>
						  	<label class="btn btn-medio medio">
						    	<input type="radio" name="option3" id="option3" value="1" autocomplete="off">
						  	</label>
						   	<label class="btn btn-primary">
						    	<input type="radio" name="option4" id="option4" value="1" autocomplete="off">
						  	</label>
						   	<label class="btn btn-success">
						    	<input type="radio" name="option5" id="option5" value="1" autocomplete="off">
						  	</label>
				        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="btn-group" data-toggle="buttons">
				         <label for="eval1" class="col-sm-4 control-label">eval2</label>
				         	<label class="btn btn-danger ">
					    		<input type="radio" name="options" id="option1" autocomplete="off">
					  		</label> 
					  		<label class="btn btn-warning">
						    	<input type="radio" name="options" id="option2" autocomplete="off">
						  	</label>
						  	<label class="btn btn-medio medio">
						    	<input type="radio" name="options" id="option3" autocomplete="off">
						  	</label>
						   	<label class="btn btn-primary">
						    	<input type="radio" name="options" id="option4" autocomplete="off">
						  	</label>
						   	<label class="btn btn-success">
						    	<input type="radio" name="options" id="option5" autocomplete="off">
						  	</label>
				        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
				        <div class="btn-group" data-toggle="buttons">
				         <label for="eval1" class="col-sm-4 control-label">eval3</label>
				         	<label class="btn btn-danger ">
					    		<input type="radio" name="options" id="option1" autocomplete="off">
					  		</label> 
					  		<label class="btn btn-warning">
						    	<input type="radio" name="options" id="option2" autocomplete="off">
						  	</label>
						  	<label class="btn btn-medio medio">
						    	<input type="radio" name="options" id="option3" autocomplete="off">
						  	</label>
						   	<label class="btn btn-primary">
						    	<input type="radio" name="options" id="option4" autocomplete="off">
						  	</label>
						   	<label class="btn btn-success">
						    	<input type="radio" name="options" id="option5" autocomplete="off">
						  	</label>
				        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
				       <div class="btn-group" data-toggle="buttons">
				         <label for="eval1" class="col-sm-4 control-label">eval4</label>
				         	<label class="btn btn-danger ">
					    		<input type="radio" name="options" id="option1" autocomplete="off">
					  		</label> 
					  		<label class="btn btn-warning">
						    	<input type="radio" name="options" id="option2" autocomplete="off">
						  	</label>
						  	<label class="btn btn-medio medio">
						    	<input type="radio" name="options" id="option3" autocomplete="off">
						  	</label>
						   	<label class="btn btn-primary">
						    	<input type="radio" name="options" id="option4" autocomplete="off">
						  	</label>
						   	<label class="btn btn-success">
						    	<input type="radio" name="options" id="option5" autocomplete="off">
						  	</label>
		        		</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
				        <div class="btn-group" data-toggle="buttons">
				         <label for="eval1" class="col-sm-4 control-label">eval5</label>
				         	<label class="btn btn-danger ">
					    		<input type="radio" name="options" id="option1" autocomplete="off">
					  		</label> 
					  		<label class="btn btn-warning">
						    	<input type="radio" name="options" id="option2" autocomplete="off">
						  	</label>
						  	<label class="btn btn-medio medio">
						    	<input type="radio" name="options" id="option3" autocomplete="off">
						  	</label>
						   	<label class="btn btn-primary">
						    	<input type="radio" name="options" id="option4" autocomplete="off">
						  	</label>
						   	<label class="btn btn-success">
						    	<input type="radio" name="options" id="option5" autocomplete="off">
						  	</label>
				        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label for="Comentarios" class="col-sm-4 control-label">Comentarios: </label>
						<textarea placeholder="añade un comentario sobre la evaluación"></textarea>
					</div>
				</div>
			</form>
		</div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 classWithPad">
                    <h3>Acciones</h3>
                    <a href="#">Subir/evaluar</a><br/>
                    <a href="#">Definir pseudonimo</a><br/>
                    <a href="#">Condiciones de Evaluación</a>
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