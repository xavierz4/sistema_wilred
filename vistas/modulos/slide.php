<!-- SLIDE -->

<div class="container-fluid" id="slide">

    <div class="row">

    <ul>

     <?php

        $slide = ControladorSlide::ctrMostrarSlide();
        var_dump($slide);
     ?>
    
    
      <li>
            <img src="http://localhost/wilredbk/vistas/img/slide/default/back_default.jpg" alt="">
            
            <div class="slideOpciones slideOpcion1">

                <img src="http://localhost/wilredbk/vistas/img/slide/slide1/zapatos.png" alt="" class="imgProducto" style="top:25%; right:5%; width:40%">

                <div class="textoSlide" style="top:20%; left:10%; width:40%">
                    <h1 style="color:#eee">Titulo Slide</h1>
                    <h2 style="color:#ccc">Mensaje Ancla</h2>
                    <h3 style="color:#aaa">Lorem</h3>

                    <a href="#">
                        <button class="btn btn-default backColor">

                            Ver Producto <span class="fa fa-chevron-right"></span>

                        
                        </button>
                    </a>
                </div>
            </div>
           
        </li>

        <!-- OPCION 2 -->
        
        <li>
            <img src="http://localhost/wilredbk/vistas/img/slide/default/back_default.jpg" alt="">
            
            <div class="slideOpciones slideOpcion2">

                <img src="http://localhost/wilredbk/vistas/img/slide/slide2/zapatos2.png" alt="" class="imgProducto" style="top:10%; left:5%; width:35%">

                <div class="textoSlide" style="top:20%; right:5%; width:40%">
                    <h1 style="color:#eee">Titulo2 Slide</h1>
                    <h2 style="color:#ccc">Mensaje Ancla</h2>
                    <h3 style="color:#aaa">Lorem</h3>
                    <a href="#">
                        <button class="btn btn-default backColor">

                            Ver Producto <span class="fa fa-chevron-right"></span>

                        
                        </button>
                    </a>
                </div>
            </div>
           
        </li> 

        <!-- OPCION3 -->

        <li>
            <img src="http://localhost/wilredbk/vistas/img/slide/slide3/fondo.jpg" alt="">
            
            <div class="slideOpciones slideOpcion1">

                <img src="" alt="" class="imgProducto">

                <div class="textoSlide"style="top:20%; left:10%; width:40%">
                    <h1 style="color:#eee">Titulo2 Slide</h1>
                    <h2 style="color:#ccc">Mensaje Ancla</h2>
                    <h3 style="color:#aaa">Lorem</h3>
                    <a href="#">
                        <button class="btn btn-default backColor">

                            Ver Producto <span class="fa fa-chevron-right"></span>

                        
                        </button>
                    </a>
                </div>
            </div>
           
        </li> 

          <!-- OPCION4 -->

          <li>
            <img src="http://localhost/wilredbk/vistas/img/slide/slide4/kids-wayuu-00004.jpg" alt="">
            
            <div class="slideOpciones slideOpcion1">

                <img src="" alt="" class="imgProducto">

                <div class="textoSlide"style="top:20%; left:10%; width:40%">
                    <h1 style="color:#eee">Titulo2 Slide</h1>
                    <h2 style="color:#ccc">Mensaje Ancla</h2>
                    <h3 style="color:#aaa">Lorem</h3>
                    <a href="#">
                        <button class="btn btn-default backColor">

                            Ver Producto <span class="fa fa-chevron-right"></span>

                        
                        </button>
                    </a>
                </div>
            </div>
           
        </li> 

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
