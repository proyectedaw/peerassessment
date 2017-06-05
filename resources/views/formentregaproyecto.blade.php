<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Entrega del proyecto</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/half-slider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">


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
    <div class="container row">
       <!-- <div class="row">-->
            <div class="col-md-8 col-xs-12">
                <h2>{{ trans('languaje.formentrega1') }} </h2>
                {!! Form::open(array('url' => 'add', 'files'=>true, 'class' => 'form-horizontal')) !!}
                    <!--<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ action('ImageController@savePicture') }}">-->
                    <div class="form-group">
                        <label for="titol" class="col-sm-4 control-label">{{ trans('languaje.formentrega2') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="titol" id="titol" placeholder="{{ trans('languaje.formentrega3') }}">
                        </div>
                         
                    </div>
                    <div class="form-group">
                        <label for="cartel" class="col-sm-4 control-label">{{ trans('languaje.formentrega4') }}</label>
                        <div class="col-md-6">
                            <input type="file" class="filestyle" data-buttonText="{{ trans('languaje.formentrega9') }}" name="cartel" id="cartel">
                        </div> 
                    </div>
                    <div class="alert alert-info" role="alert">
                        <span class="fa fa-info-circle"><strong>{{ trans('languaje.formentrega5') }}</strong> {{ trans('languaje.formentrega6') }}</span>

                    </div>
                    <div class="form-group">
                        <label for="coments" class="col-sm-4 control-label">{{ trans('languaje.formentrega7') }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="coments" id="coments" placeholder="{{ trans('languaje.formentrega8') }}"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <input type="submit" class="btn btn-primary form-control" value="Entregar" id="entregar" name="entregar">
                             <!--{!! Form::submit('Entregar') !!}-->
                        </div>
                    </div>
            </div>
            <div class="col-xs-4">
                <div class="row">
                    <div class="col-xs-12 classWithPad hidden-xs">
                        @include ('includes.acciones')
                    </div>
                </div> 
            </div>
        <!--</div>-->
    </div>
    <footer style="text-align: center; font-weight: bold;">
            @include('includes.footer')
     </footer>
    
    
   <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

      <script type="text/javascript" src="{{ URL::asset('filestyle/src/bootstrap-filestyle.js')}}"> </script>
    <script type="text/javascript" src="{{ URL::asset('filestyle/src/bootstrap-filestyle.min.js')}}"> </script>
</body>
</html>