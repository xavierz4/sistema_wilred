<?php


class ControladorSlide{

    public function ctrMostarSlide(){

        $tabla = (slide);
        $respuesta = ModeloSlide::mdlMostrarSlide($tabla);
        return $respuesta;
    }

}