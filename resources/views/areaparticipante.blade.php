<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Área del participante</title>
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
            <div class ="col-xs-8">
                <h1>INFO Campaña</h1>
                <p>col-md-offset-1 The much-travelled craftsman prefers to reside wherever the song takes him, from writing room to rehearsal space, recording studio to concert hall. He is, as tirelessly and inquisitively as ever, on the trail of some musical truth, just as he has been since the 45s of Ricky Nelson and Lonnie Donegan, or the playing of Hank Marvin and Duane Eddy, sent him down a path that led to 125 million record sales.</p>
                <p>That approach to his life’s work is how the title of his new, eighth solo album (not counting a myriad of collaborations, productions and film soundtracks) came into being. It’s the other half, if you like, of his typically acclaimed double set Privateering, which graced top tens throughout Europe and beyond in 2012.</p>
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
       <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <footer style="text-align: center; font-weight: bold;">
            @include('includes.footer')
     </footer>
</body>
</html>