<!--<li class="active">-->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){//Se carga la funcion
        var loc = window.location.pathname.substring(1); //variable para obtener el nombre de la url. .substring(1) para quitar el "/"
        $('.nav').find('.menu-item').each(function() { //busca los elementos del nav. Se especifica el nombre del elemento <ul>, dentro de este elemento, jquery busca los elementos que contengan la clase menu-item
            var href = $(this).find('a').attr('href'); //varible que contendrá el enlace que se coloca al elemento <a>
            if (href == loc) {
                $(this).addClass('active');
                }
        });
    });
</script>
<div class="topfix">      
    <div class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle btn-desc" data-toggle="modal" data-target=".desconectar">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-power-off"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="modal" data-target=".dash">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-th fa-lg"></i>
            </button>
            <a class="navbar-brand" href="dashboard"><img src="img/logo_nav_new_<?php echo $_SESSION['lan']; ?>.png"></a>
        </div>
        
        <ul class="nav navbar-nav navbar-right usu-cliente hidden-xs">                           
            <li class="btn-group usu-new">
              <?php if (  $_SESSION['GrupoEmpresas'] != "NO" ) { ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" href="#multiusuario"><i class="fa fa-chevron-down"></i></button>
              <?php } ?>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target=".desconectar"><?php echo $_SESSION['CardName']; ?></button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".desconectar"><i class="fa fa-power-off"></i></button>
            </li>
            <li>
                <select name="idioma" onChange="javascript:swith_idioma(this.value)" class="form-control">
                    <option value="es" <?php if ( $_SESSION['lan'] == 'es' ) echo 'selected'; ?>>ES</option>
                    <option value="pt" <?php if ( $_SESSION['lan'] == 'pt' ) echo 'selected'; ?>>PT</option>
                    <option value="cat" <?php if ( $_SESSION['lan'] == 'cat' ) echo 'selected'; ?>>CAT</option>
                </select>
            </li>
        </ul>
        
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="visible-xs">
                    <select name="idioma" onChange="javascript:swith_idioma(this.value)" class="form-control">
                        <option value="es" <?php if ( $_SESSION['lan'] == 'es' ) echo 'selected'; ?>>ES</option>
                        <option value="pt" <?php if ( $_SESSION['lan'] == 'pt' ) echo 'selected'; ?>>PT</option>
                        <option value="cat" <?php if ( $_SESSION['lan'] == 'cat' ) echo 'selected'; ?>>CAT</option>
                    </select>
                </li>
                <li class="visible-xs btn-primary"><a href="#"><?php echo $_SESSION['CardName']; ?></a></li>
                
                <li class="menu-item"><a href="dashboard"><i class="fa fa-home"></i> <?php echo MENU_INICIO; ?></a></li>
                <li class="menu-item menu-caso"><a href="casos"><i class="fa fa-briefcase visible-xs"></i> <?php echo MENU_CASOS; ?></a></li>
                <?php if ( $_SESSION['mercado'] == 'es' ) { ?>                        
                	<li class="menu-item menu-informe"><a href="informes"><i class="fa fa-file-text-o visible-xs"></i> <?php echo MENU_INFORMES; ?></a></li>
                <?php } ?>
                <li class="menu-item"><a href="contratos"><i class="fa fa-pencil-square-o visible-xs"></i> <?php echo MENU_CONTRATOS; ?></a></li>
                <li class="menu-item"><a href="descargas"><i class="fa fa-download visible-xs"></i> <?php echo MENU_DESCARGAS; ?></a></li>
                <li class="menu-item"><a href="contacto"><i class="fa fa-envelope-o visible-xs"></i> <?php echo MENU_CONTACTO; ?></a></li>
                <li class="menu-item"><a href="buscador"><i class="fa fa-search"></i></a></li>
            </ul>

        </div><!--/.nav-collapse -->
      </div><!--/.container-->
    </div><!--/.navbar-->         
</div>