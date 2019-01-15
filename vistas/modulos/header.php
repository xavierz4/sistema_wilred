<!-- TOP-->

<div class="container-fluid barraSuperior" id="top">
    
        <div class="row">

            <!--ICONOS SOCIALES-->

            <div class="col-lg-5 col-md-6 col-sm-4 col-xs-12 social">
                <ul>

                    <?php
                        $social = ControladorPlantilla::ctrEstilosPlantilla();
                        $jsonRedesSociales = json_decode($social["redesSociales"],true);

                        foreach ($jsonRedesSociales as $key => $value) {
                            
                            echo    '<li>
                                        <a href="'.$value["url"].'" target="_black">
                                            <i class="fa '.$value["red"].' redSocial '.$value["estilo"].'"></i>
                                        </a>
                                    </li>';
                        }
                    ?>

                    
         
            </div>
            <!--END-ICONOS SOCIALES-->

             
            <!-- REGISTRO -->
              
            <div class="col-lg-5 col-md-3 col-sm-4 col-xs-12 registro">

                <ul>
					
					<li><a href="#modalIngreso" data-toggle="modal">Iniciar Sesion</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear Cuenta</a></li>

                </ul>
                
             </div><!--END-REGISTRO -->
                
             <!--SELECTOR IDIOMA -->
             <div class="idioma">

                <div class="form-group col-lg-1 col-md-2 col-sm-2 col-xs-12 pull-left">
                    <select class="form-control" id="sel1">
                        <option value="español">Español</option>
                        <option value="ingles">English</option>
                    </select>
                    
                </div>
            </div>
             <!--END-SELECTOR IDIOMA -->

              <!--PERFIL -->
             <div class="perfil col-lg-1 col-md-1 col-sm-2 col-xs-12">
                <a href="">
                    <i class="fa fa-circle"></i>
                </a>
                
            </div>
             <!--END-PERFIL -->

        </div>
       
  
</div>

<!-- HEADER -->

<div class="container-fluid">

        <div class="row">

            <!-- LOGOTIPO -->

            <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12" id="logotipo">

                <a href="#">
                    <img src="http://localhost/wilredbk/<?php echo $social["logo"] ?>" class="img-responsive" alt="Logotipo Wilred">
                </a>

            </div><!-- END-LOGOTIPO -->
                
        </div>

</div><!--END-HEADER -->

         
<!-- HEADER-CATEGORIA -->

<header class="container-fluid" >

        <div class="row" id="header">

            <!-- CATEGORIAS Y BUSCADOR -->

            <div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 categoria-hidden">
            
                <!-- BOTON CATEGORIAS -->
                
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
                    
                    <p>CATEGORÍAS
                    
                        <span class="pull-right">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                    
                    </p>

                </div> <!-- END-CATEGORIAS BOTON ---------------------->
                
                
                <!-- BUSCADOR ------------------------>

                <div class="input-group col-lg-6 col-md-8 col-sm-8 col-xs-12" id="buscador">
                        
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

                    <span class="input-group-btn">
                        
                        <a href="#">

                            <button class="btn btn-default backColor" type="submit">
                                
                                <i class="fa fa-search"></i>

                            </button>

                        </a>

                    </span>

                </div> <!-- END-BUSCADOR ---------------------->

            </div> <!-- END CATEGORIAS Y BUSCADOR -->

             <!-- CAJA DE PAGO -->
             <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 pull-right" id="carrito" >
				
				<a href="#">

					<button class="btn btn-default pull-left backColor"> 
						
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					
					</button>
				
				</a>	

				<p>Caja <span class="cantidadCesta">3</span> <br><span class="sumaCesta">USD $</span> 20 </p>	

            </div><!--END-CAJA DE PAGO -->

             <!-- CATEGORIAS -->

             <div class="col-xs-12 backColor" id="categorias">

                <?php
                    
                    $categorias = ControladorProductos::ctrMostrarCategorias();
                    
                    foreach ($categorias as $key => $value) {

                        echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                        <h4>
                            <a href="'.$value["ruta"].'" class="categorias"> '.$value["categoria"].'</a>
                            
                        </h4>

                        <hr>

                        <ul>';

                        $subcategorias = ControladorProductos::ctrMostrarSubCategorias($value["id"]);

                        foreach ($subcategorias as $key => $value) {
                            echo '<li><a href=""><span class="subcategorias">'.$value["subcategoria"].'</span></a></li>';  

                        }
                        echo '</ul>
        
                        </div>';
                       
                    }

                   
                    
                ?>

             

             </div>

        </div>
    
    

</header>