<!DOCTYPE html>
<html> 
    <head>
	<?php
    	ini_set('display_errors',0);
        session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
    
    </head>
    <body>
        
		<div class="banner">
            <div class="container" align="center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content">                            
                            <img src="<?php echo RUTA_URL?>/public/img/logo.png" width="400px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="site-main" id="sTop">
            <div class="site-header">
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <nav class="navbar navbar-inverse" role="navigation">
                                    <div class="navbar-header">                                       
                                        <a href="#top" class="navbar-brand">SupleStrong.com</a>
                                        <div id="main-nav" class="collapse navbar-collapse">
                                            <ul class="menu-first nav navbar-nav" style="margin-right: 20px;">
												<li><a href="<?php echo RUTA_URL;?>/auths/logout">Cerrar Sesion</a></li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                </nav>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($_SESSION['usuario'])){?>
            <div class="container" style="padding: 25px 150px 100px 150px;">
                <h2>Inventario</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <td colspan="4"></td>
                            <td>
                                <a href="<?php echo RUTA_URL;?>/productos/agregar" target="_blank" class="btn btn-info btn-sm" title="Agregar" id="pdf"><i class="fas fa-plus"></i></a>
                            <a href="<?php echo RUTA_URL;?>/productos/toPdfInventario" target="_blank" class="btn btn-info btn-sm" title="Exportar a PDF" id="pdf"><i class="fas fa-file-pdf"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>Nombre Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Instrucciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos['producto'] as $productos):?>
                        
                        <tr>
                            <td><?php echo $productos['Nombre']; ?></td>
                            <td><?php echo $productos['Cantidad']; ?></td>
                            <td><?php echo $productos['Precio']?></td>
                            <td><?php echo $productos['Instrucciones']?></td>
                            <td><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL; ?>/productos/editar/<?php echo $productos['IdProducto']; ?>"><i class="fa fa-edit"></i></a>
                            &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL; ?>/productos/borrar/<?php echo $productos['IdProducto']; ?>"><i class="fa fa-times"></i></a></td>
                            
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>

<?php } else{ echo 'No iniciste session';?>
<?php }?>
        <footer>
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
        
<?php include RUTA_APP.'/views/inc/footer.inc.php'?>
    </body>
</html>