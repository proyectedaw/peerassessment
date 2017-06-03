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
        position:absolute;
        left:25%;
    }
    </style>
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <h2>Entrega tu proyecto: </h2>
                {!! Form::open(array('url' => 'add', 'files'=>true, 'class' => 'form-horizontal')) !!}
                    <!--<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ action('ImageController@savePicture') }}">-->
                    <div class="form-group">
                        <label for="titol" class="col-sm-4 control-label">Titulo</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="titol" id="titol" placeholder="Introduce tu titulo">
                        </div>
                         
                    </div>
                    <div class="form-group">
                        <label for="cartel" class="col-sm-4 control-label">Sube tu cartel</label>
                        <div class="col-md-6">
                            <input type="file" name="cartel" id="cartel">
                        </div> 
                    </div>
                    <div class="alert alert-info" role="alert">
                        <strong>Atención</strong> Solo imagenes .jpg o .png con un máximo de 1MB
                    </div>
                    <div>
                        <label for="coments" class="col-sm-4 control-label">Descripción</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="coments" id="coments" placeholder="Amplia descripcion del cartel"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                             {!! Form::submit('Entregar') !!}
                        </div>
                    </div>
            </div>
            <div class="col-xs-4">
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
    
    
   <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>