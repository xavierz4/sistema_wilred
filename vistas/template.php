<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Fundación Wilred">
    <meta name="description" content = "Fundación Social para el Desarrollo Integral Wilred">
    <meta name="keyboard" content="wilred, fundacion, social, niños, jovenes, vulnerables, riohacha, la guajira, colombia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,900" >
    
    <title>Fundación Wilred</title>

    <?php

        $icono = ControladorPlantilla::ctrEstilosPlantilla();

       echo '<link rel="icon" href="http://localhost/wilredbk/'.$icono["icono"].'">'; 

    ?>

    <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/css/template.css">
    <link rel="stylesheet" href="vistas/css/header.css">
    <link rel="stylesheet" href="vistas/css/plugins/font-awesome.min.css">
    
    <script src="vistas/js/plugins/jquery.min.js"></script>
    
    <script src="vistas/js/plugins/bootstrap.min.js"></script>

</head>
<body>

    <?php

    //    HEADER

            include "modulos/header.php";
            
      

    ?>
    
    <script src="vistas/js/header.js"></script>
    <script src="vistas/js/plantilla.js"></script>
    
</body>
</html>