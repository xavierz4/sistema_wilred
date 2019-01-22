<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Fundación Wilred">
    <meta name="description" content = "Fundación Social para el Desarrollo Integral Wilred">
    <meta name="keyboard" content="wilred, fundacion, social, niños, jovenes, vulnerables, riohacha, la guajira, colombia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,900">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed|Ubuntu:300,400" rel="stylesheet">
    
    <title>Fundación Wilred</title>

    <?php

        $servidor = Ruta::ctrRutaServidor(); 
        $icono = ControladorPlantilla::ctrEstilosPlantilla();

       echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">'; 

    // URL AMIGABLES: respuesta

       $url = Ruta::ctrRuta();          
    // END-URL AMIGABLES 

    ?>


    <!-- PLUGINS CSS -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    
    

    <!-- HOJAS DE ESTILO PARA MODULOS -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/template.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/header.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">    
    <!-- END-HOJAS DE ESTILO PARA MODULOS -->


    <!-- PLUGINS JAVASCRIPT -->

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
    <!--END- PLUGINS -->


</head>

<body>

    <?php

    ///// HEADER//////

            include "modulos/header.php";
            
           
            //// CONTENIDO DINAMICO///////
           
            $rutas = array();
            $ruta = null;
            
            if(isset($_GET["ruta"])){
            
                $rutas = explode("/", $_GET["ruta"]);
            
                $item = "ruta";
                $valor =  $rutas[0];
            
                /*=============================================
                URL'S AMIGABLES DE CATEGORÍAS
                =============================================*/
            
                $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
            
                if($rutas[0] == $rutaCategorias["ruta"]){
            
                    $ruta = $rutas[0];
            
                }
            
                /*=============================================
                URL'S AMIGABLES DE SUBCATEGORÍAS
                =============================================*/
            
                $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
            
                foreach ($rutaSubCategorias as $key => $value) {
                    
                    if($rutas[0] == $value["ruta"]){
            
                        $ruta = $rutas[0];
            
                    }
            
                }

                /*=============================================
                LISTA BLANCA DE URL'S AMIGABLES
                =============================================*/
            
                if($ruta != null){
            
                    include "modulos/productos.php";
            
                }else{
            
                    include "modulos/error404.php";
            
                }

                }else{

                    include "modulos/slide.php";
                    include "modulos/destacados.php";
            
            }
          
    ?>

    <!-- JAVASCRIPT MODULOS -->

    <script src="<?php echo $url; ?>vistas/js/header.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
    <script src="<?php echo $url; ?>vistas/js/slide.js"></script>
     <!--END- JAVASCRIPT MODULOS -->
    
    
</html>
