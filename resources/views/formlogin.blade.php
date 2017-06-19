<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ URL::asset('js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/half-slider.css')}}" rel="stylesheet">
    
</head>
<body>    
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

    
</body>
</html>