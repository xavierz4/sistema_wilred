<?php

require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";

class ajaxPlantilla{

    public function ajaxEstiloPlantilla(){

        $respuesta = ControladorPlantilla::ctrEstilosPlantilla();

        echo json_encode($respuesta);

    }
}

$objeto = new ajaxPlantilla();
$objeto -> ajaxEstiloPlantilla();