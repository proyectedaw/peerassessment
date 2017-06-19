<?php 

$width='width="110px"';
$height='height="140px"';

?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Evaluación de proyectos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <header>
        <div class="topfix">      
            <div class="navbar color" role="navigation">
              <div class="container"> 
                <ul class="nav navbar-nav navbar-right">                           
                    <li class="btn-group usu-new">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">Nombre participante</button>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar">LOGOUT</button>

                      <!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".desconectar"><i class="fa fa-power-off"></i></button>-->
                  </li>
              </ul>

              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                 <li class="menu-item"><a href="#">INICIO</a></li>
             </ul>

         </div><!--/.nav-collapse -->
     </div><!--/.container-->
 </div><!--/.navbar-->         
</div>
</header>

<div class="contanier">
    <div class="row">
        <div class ="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <h1>Proyectos a Evaluar</h1>
                    <table class="table table-hover text-centered" align="center">
                      <tr>
                       <th></th>
                       <th>Titulo</th>
                       <th>Psedonimo</th>
                       <th>Cartel</th>
                       <th>Evaluar</th>
                   </tr>
                   <tr>
                       <td>Proyecto 1</td>
                       <td>Titulo</td>
                       <td>Pseudonimo</td>
                       <td><button class="buttonmodal" type="button" data-toggle="modal" data-target="#proyecto1"><img <?php echo $width." ".$height ?> src="img/cartel-la-merce-barcelona.png"></button></td>
                       <td><button class="btn btn-primary">Evaluar</button></td>
                   </tr>
                   <tr>
                       <td>Proyecto 2</td>
                       <td>Titulo</td>
                       <td>Pseudonimo</td>
                       <td><button class="buttonmodal" type="button" data-toggle="modal" data-target="#proyecto2"><img <?php echo $width." ".$height ?> src="img/cartell-2009_0.jpg"></button></td>
                       <td><button class="btn btn-primary">Evaluar</button></td>
                   </tr>
                   <tr>
                       <td>Proyecto 3</td>
                       <td>Titulo</td>
                       <td>Pseudonimo</td>
                       <td><button class="buttonmodal" type="button" data-toggle="modal" data-target="#proyecto3"><img <?php echo $width." ".$height ?> src="img/cartell2013gran.jpg"></button></td>
                       <td><button class="btn btn-primary">Evaluar</button></td>
                   </tr>
               </table>
           </div>
       </div>
   </div>
   <div class="col-md-4">
    <div class="row">
        <div class="col-md-12 classWithPad">
            <h3>Acciones</h3>
            <a href="#">Subir/evaluar</a><br/>
            <a href="#">Definir pseudonimo</a><br/>
            <a href="#">Condiciones de Evaluación</a>
        </div>
    </div>

</div>
</div> 
</div>

<footer>
    <p>&copy; Copyright 2016 - All rights reserved - </p>
</footer>

<div class="modal fade" id="proyecto1" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
         <img src="img/cartel-la-merce-barcelona.png" alt="Proyecto1">
     </div>
 </div>
</div>
<div class="modal fade" id="proyecto2" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
         <img src="img/cartell-2009_0.jpg" alt="Proyecto1">
     </div>
 </div>
</div>
<div class="modal fade" id="proyecto3" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
         <img src="img/cartell2013gran.jpg" alt="Proyecto1">
     </div>
 </div>
</div>
</body>
</html>