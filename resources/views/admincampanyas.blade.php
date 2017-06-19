<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>{{ trans('languaje.adm_titulo') }}</title>
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

</head>
<body>
    @include('includes.header')
    <div class="container">
        <div class="row">
            <div class ="col-xs-12 col-sm-8 col-md-8">    
                <table>
                    <thead>
                        <tr>
                            <th><h1>{{ trans('languaje.adm_titulo') }}</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($campanyas as $campanya)
                        <tr> 
                            <td>
                                {{ $campanya->nombre }} 
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include ('includes.administrar')
        </div>
    </div> <!-- CONTAINER -->
    @include ('includes.footer')  
</body>
</html>