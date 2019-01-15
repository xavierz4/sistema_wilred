<!-- PRODUCTOS -->

<?php

class ControladorProductos{

    // SOLICITA CATEGORIAS
    
    public function ctrMostrarCategorias(){

        $tabla = "categorias";

        $respuesta = ModeloProductos::mdlMostrarCategorias($tabla);
        return $respuesta;
    }

    // SOLICITA SUBCATEGORIAS

    static public function ctrMostrarSubCategorias($id){

        $tabla = "subcategorias";

        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $id);
        return $respuesta;
    }

}