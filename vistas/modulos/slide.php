<!-- SLIDE -->

<?php
        $servidor = Ruta::ctrRutaServidor(); 
 ?>   

<div class="container-fluid" id="slide">

    <div class="row">

    <ul>

        <?php

            $slide = ControladorSlide::ctrMostrarSlide();

            foreach ($slide as $key => $value) {
                
                $estiloImgProducto = json_decode($value["estiloImgProducto"], true);
                $estiloTextoSlide = json_decode($value["estiloTextoSlide"], true);
                $titulo1 = json_decode($value["titulo1"], true);
                $titulo2 = json_decode($value["titulo2"], true);
                $titulo3 = json_decode($value["titulo3"], true);
                
                echo ' <li>
                                <img src="'.$servidor.$value["imgFondo"].'" alt="">
                                
                                <div class="slideOpciones '.$value["tipoSlide"].'">

                                    <img src="'.$servidor.$value["imgProducto"].'" alt="" class="imgProducto" style="top:'.$estiloImgProducto["top"].'; left:'.$estiloImgProducto["left"].'; width:'.$estiloImgProducto["width"].'; right:'.$estiloImgProducto["right"].'">

                                    <div class="textoSlide" style="top:'.$estiloTextoSlide["top"].'; left:'.$estiloTextoSlide["left"].'; width:'.$estiloTextoSlide["width"].'; right:'.$estiloTextoSlide["right"].'">
                                       
                                        <h1 style="color:'.$titulo1["color"].'">'.$titulo1["texto"].'</h1>
                                        
                                        <h2 style="color:'.$titulo2["color"].'">'.$titulo2["texto"].'</h2>
                                        
                                        <h3 style="color:'.$titulo3["color"].'">'.$titulo3["texto"].'</h3>

                                        <a href="'.$value["url"].'">
                                          
                                                                                              
                                                '.$value["verProducto"].'
                                       
                                        <a/>    
                                       
                                    </div>
                                </div>
                            
                            </li>';

                }

        ?>
    
    

    </ul>
    
    <!-- PAGINACION -->


    <ol id="paginacion">

        <li item="1"><span class="fa fa-circle"></span></li>
        <li item="2"><span class="fa fa-circle"></span></li>
        <li item="3"><span class="fa fa-circle"></span></li>
        <li item="4"><span class="fa fa-circle"></span></li>

    </ol>	

     <!-- FLECHAS  -->
    
    <div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>
    <div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>

    </div>

</div>

<div class="btnOcultarSlide">

    <button id="btnSlide" class="backColor">

        <i class="fa fa-angle-up"></i>

    </button>

</div>
