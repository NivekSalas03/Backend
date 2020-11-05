
    <head>
<?php

include RUTA_APP . '/views/inc/cabeza.inc.php';?>
    </head>
    <body>
		<div class="banner">
            <div class="container" align="center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content">                            
                            <img src="<?php echo RUTA_URL;?>/public/img/logo.png" width="400px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8">
           
        
            <div class="card " style="background-color:#a2ded0; border:solid #000;">
                <div class="card-header"> A&Ntilde;ADIR PRODUCTO NUEVO <i class="fa fa-user-plus text-warning float:right"></i>
                </div>
                <div class="card-body">
                    <h3><?php echo $datos['Mensaje']?></h3>
                    <a href="<?php echo RUTA_URL;?>/productos" class="btn btn-info btn-sm float:right mt-3 mb-6"><i class="fa fa fa-backward""></i></a>
                    <form action="<?php echo RUTA_URL;?>/productos/agregar" method="post" enctype="multipart/form-data">
                    <div class="row">                        
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="NombreProducto">Nombre de Producto</label>
                                <input type="text" class="form-control" id="NombreProducto" name="NombreProducto" aria-describedby="nombre_prodAyuda" value="<?php echo $datos['Nombre'];?>"required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input type="texto" class="form-control" id="cantidad" name="cantidad" aria-describedby="cantidadAyuda" value="<?php echo $datos['Cantidad']?>"required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="texto" class="form-control" id="precio" name="Precio" value="<?php echo $datos['Precio']?>" aria-describedby="precioAyuda" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Info">Instrucciones de uso</label>
                                <input type="texto" class="form-control" id="Info" name="Info" value="<?php echo $datos['Info']?>" aria-describedby="precioAyuda" required>
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-success btn-block"> Guardar <i class="fa fa-save"></i> </button>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    
                    </form>
                </div>
            </div>
        <div class="col-sm-2"></div>
        </div>
       </div>
</div>

        <footer>
            <br><br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                            <p>Copyright &copy; 2020 Supplement Strong</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <ul class="social-icons">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-md-offset-2 col-sm-12">
                        <div class="back-to-top">
                            <a href="#top">
                                <i class="fa fa-angle-up"></i>
                                Arriba
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
    </body>
</html>