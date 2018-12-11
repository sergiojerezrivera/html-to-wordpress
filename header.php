<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->


    <!-- muestra la ruta del sitio web con php bloginfo(); que servira para configurar rutas de imagenes y estilos del sitio -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>style.css">
    
    <style>
        .suscribir {
        /* background: url(images/bg.png); */
        /* background-color: rgb(100, 64, 197); */
        background-size: cover;
        background-position: center;
        height: 400px;
        background: #009FFF;
        background: #355C7D;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, rgb(108, 135, 192), rgb(91, 114, 123), rgb(53, 108, 125));
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, rgb(108, 135, 192), rgb(91, 114, 123), rgb(53, 108, 125));
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
    </style>

    <title>HTML to WORDPRESS</title>

</head>

<body>

    <!--MENU CABECERA-->
    <div class="container-fluid bg-dark fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <a class="navbar-brand" href="#">
                <img src="images/bootstrap-solid.svg" width="30" height="30" alt="">
                Bootstrap
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>

            

            <?php wp_nav_menu(array(
                'theme_location'=> 'superior',
                'container'=> 'div',
                'container_class'=> 'collapse navbar-collapse',
                'container_id'=> 'navbarSupportedContent',
                'items_wrap'=> '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
                'menu_class'=> 'nav-item'
            ) ); ?>





        </nav>
    </div>
    <!--FIN MENU CABECERA-->


    <!-------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------->


    <!--SUSCRIBIR-->


    <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="display-4">Lorem ipsum dolor sit.</h1>
        </div>

        <form action="" class=" form-inline flex-column flex-sm-row">
            <div class="form-group mr-sm-3">
                <input type="text" placeholder="Nombre" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>


    <!--FIN SUSCRIBIR-->



    <!-------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------->

