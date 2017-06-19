<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Entrega del proyecto</title>
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
                <h1>{{ trans('languaje.ent_titulo') }}</h1>
            </div>
            @include ('includes.acciones')
        </div>
        <div class="row">
            <div class ="col-xs-12 col-sm-8 col-md-8">
                <!-- FORMULARIO -->
                <form class="form-horizontal" method="post" action="/subir-proyecto" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="titulo" class="col-sm-4 control-label">{{ trans('languaje.titulo_proyecto') }}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="{{ trans('languaje.titulo_form') }}">
                        </div>
                        <input type="hidden" name="id_user" value="{{ Auth::user()->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="Subircartel" class="col-sm-4 control-label">{{ trans('languaje.ent_cartel') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="disenyo" id="disenyo">
                        </div> 
                    </div>
                    <div>
                        <label for="descripcion" class="col-sm-4 control-label">{{ trans('languaje.ent_descripcion') }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="descripcion" id="descripcion" placeholder="{{ trans('languaje.ent_desc_proyecto') }}"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <button type="submit" class="btn btn-primary" name="Entrar" value="{{ trans('languaje.ent_submit') }}">{{ trans('languaje.ent_submit') }}</button> 
                        </div>
                    </div>
                </form> 
            </div>

        </div> <!-- ROW -->
    </div> <!-- CONTAINER -->
    @include ('includes.footer')
    
</body>
</html>