<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Condiciones Evaluación</title>
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
    	@include('includes.header')
    </header>
   
    <div class="container">
        <div class="row">
            <div class ="col-md-8 col-xs-12">
                <h1>Condiciones de Evaluación</h1>
                <h3>Puntos a tener en cuenta para llevar a cabo una correcta evaluación</h3>
                <ul>
                    <li>Fijarse bien en los detalles del cartel</li>
                    <li>Comprobar si el cartel se rige por las normas de la campanya. Estipuladas abajo.</li>
                    <li>Hacer una valoración subjetiva</li>
                    <li>Se tendrán en cuenta los comentarios facilitados en la evaluación. Estos serán importantes para considerar una evaluación como justificada.</li>
                    <li>No valorar en base a un nombre o a una descripción.</li>
                </ul>
                <div class="alert alert-info" role="alert">
                    <span class="fa fa-info-circle"><strong>Normas para el cartel: </strong>
                    <ol>
                        <li>Debe respetar el tema principal de la fiesta.</li>
                        <li>Con una idea original.</li>
                        <li>Debe representar la multiculturalidad de la ciudad.</li>
                        <li>De colores llamativos pero no estridentes.</li>
                        <li>De medidas proporcionadas.</li>
                        <li>Enmarcado con los logos pertinentes de el Ajuntamiento de Barcelona. Preferiblemente al pie del cartel.</li>
                    </ol>
                    </span>
               </div>       
            </div>
            <div class="col-xs-4">
                <div class="row">
                    <div class="col-xs-12 classWithPad hidden-xs">
                        @include ('includes.acciones')
                    </div>
                </div> 
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