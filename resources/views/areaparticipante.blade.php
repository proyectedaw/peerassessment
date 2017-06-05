<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Área del participante</title>
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
            <div class ="col-xs-8 hidden-xs">
                <h1>{{ trans('languaje.areaparti1') }}</h1>
                <h3>{{ trans('languaje.areaparti2') }}</h3>
                <form class = "form-horizontal">
                    <div class="form-group">
                        <label for="aspecto" class="col-sm-4 control-label">{{ trans('languaje.areaparti3') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="{{ trans('languaje.areaparti4') }}">
                        </div>                      
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <input type="submit" class="btn btn-primary form-control" value="{{ trans('languaje.areaparti5') }}" id="addpseudo" name="addpseudo">
                             <!--{!! Form::submit('Entregar') !!}-->
                        </div>
                    </div>
                </form>
            </div>
            <div class ="col-xs-12 visible-xs">
                <h1>{{ trans('languaje.areaparti1') }}</h1>
                <h3>{{ trans('languaje.areaparti2') }}</h3>
                <form class = "form-horizontal">
                    <div class="form-group">
                        <label for="aspecto" class="col-sm-4 control-label">{{ trans('languaje.areaparti3') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="{{ trans('languaje.areaparti4') }}">
                        </div>                      
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <input type="submit" class="btn btn-primary form-control" value="{{ trans('languaje.areaparti5') }}" id="addpseudo" name="addpseudo">
                             <!--{!! Form::submit('Entregar') !!}-->
                        </div>
                    </div>
                </form>
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