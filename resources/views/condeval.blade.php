<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>{{ trans('languaje.condicions0') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>

    <link href="{{ URL::asset('css/styles.css')}}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png')}}" type="image/x-icon"/>
</head>
<body>
    @include('includes.header')
    <div class="container">
        <div class="row">
            <div class ="col-xs-12 col-sm-8 col-md-8">
                <h1>{{ trans('languaje.c_titulo') }}</h1>
                <h5>{{ trans('languaje.c_intro') }}</h5>
                <ul>
                    <li>{{ trans('languaje.c_1') }}</li>
                    <li>{{ trans('languaje.c_2') }}</li>
                    <li>{{ trans('languaje.c_3') }}</li>
                    <li>{{ trans('languaje.c_4') }}</li>
                    <li>{{ trans('languaje.c_5') }}</li>
                    <li>{{ trans('languaje.c_6') }}</li>
                </ul>
                <div class="alert alert-info" role="alert">
                    <span class="fa fa-info-circle"><strong>{{ trans('languaje.c_nota_titulo') }}:</strong>
                        <ol>
                            <li>{{ trans('languaje.c_nota_1') }}</li>
                            <li>{{ trans('languaje.c_nota_2') }}</li>
                            <li>{{ trans('languaje.c_nota_3') }}</li>
                            <li>{{ trans('languaje.c_nota_4') }}</li>
                            <li>{{ trans('languaje.c_nota_5') }}</li>
                            <li>{{ trans('languaje.c_nota_6') }}</li>
                        </ol>
                    </span>
                </div>       
            </div>
            @include ('includes.acciones')
        </div>
    </div> 
    @include('includes.footer')
</body>
</html>