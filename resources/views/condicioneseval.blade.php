<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>{{ trans('languaje.condieval1') }}</title>
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
                <h1>{{ trans('languaje.condieval1') }}</h1>
                <h3>{{ trans('languaje.condieval2') }}</h3>
                <ul>
                    <li>{{ trans('languaje.condieval3') }}</li>
                    <li>{{ trans('languaje.condieval4') }}</li>
                    <li>{{ trans('languaje.condieval5') }}</li>
                    <li>{{ trans('languaje.condieval6') }}</li>
                    <li>{{ trans('languaje.condieval7') }}</li>
                    <li>{{ trans('languaje.condieval8') }}</li>
                </ul>
                <div class="alert alert-info" role="alert">
                    <span class="fa fa-info-circle"><strong>{{ trans('languaje.condieval9') }}:</strong>
                    <ol>
                        <li>{{ trans('languaje.condieval10') }}</li>
                        <li>{{ trans('languaje.condieval11') }}</li>
                        <li>{{ trans('languaje.condieval12') }}</li>
                        <li>{{ trans('languaje.condieval13') }}</li>
                        <li>{{ trans('languaje.condieval14') }}</li>
                        <li>{{ trans('languaje.condieval15') }}</li>
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