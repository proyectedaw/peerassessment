<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Login</title>
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
    </style>
</head>
<body>
    <h2>Login: </h2>
    <form class="form-inline">
        <div class="form-group">
            <label>E-mail:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Introduce el e-mail">
        </div>
        <div class="form-group">
             <label>Password:</label>
             <input type="password" class="form-control" name="pass" id="pass" placeholder="Introduce el password">
        </div>
        <button type="submit" class="btn btn-primary" name="login" value="Login">Login</button>        
    </form>
    
       <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->

    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>