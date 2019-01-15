<?php


class ControladorPlantilla{

    //INCLUIR TEMPLATE  

    public function plantilla(){

        include "vistas/template.php";
        
    }

    // TRAER ESTILOS DINAMICOS A LA PLANTILLA
        
    public function ctrEstilosPlantilla(){

        $tabla = "plantilla";

        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

        return $respuesta;
    }

}







    
