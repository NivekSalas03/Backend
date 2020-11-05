<?php
ini_set('display_errors',0);
session_start(); ?>
<!DOCTYPE html>
<html> 
<head><?php
header('Content-Type: text/html; charset=UTF-8');
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
                                            
                                            <ul class="menu-first nav navbar-right " style="margin-right: 20px;">
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
    <section>
        <div class="container" style="padding: 25px 150px 100px 150px;">
                <h2>Plan de nutrición </h2>
                <table class="table">
                    <thead>
                        <tr>
                            <td colspan="4"></td>
                            <td>
                            <a href="<?php echo RUTA_URL;?>/productos/toPdfPlanNutri" target="_blank" class="btn btn-info btn-sm" title="Exportar a PDF" id="pdf"><i class="fas fa-file-pdf"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>Comida del dia</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sabado</th>
                            <th>Domingo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos['Plan'] as $productos):?>
                        
                        <tr>
                            <td><?php echo utf8_decode($productos['ComidadDia']); ?></td>
                            <td><?php echo utf8_decode($productos['Lunes']); ?></td>
                            <td><?php echo utf8_decode($productos['Martes']); ?></td>
                            <td><?php echo utf8_decode($productos['Miercoles']); ?></td>
                            <td><?php echo utf8_decode($productos['Jueves']); ?></td>
                            <td><?php echo utf8_decode($productos['Viernes']); ?></td>
                            <td><?php echo utf8_decode($productos['Sabado']); ?></td>
                            <td><?php echo utf8_decode($productos['Domingo']); ?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
    </section>
<section>
        <div class="container" style="padding: 25px 150px 100px 150px;">
                <h2>Ejercicios</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre del Ejercicio</th>
                            <th>Detalles</th>
                            <th>Duracion del ejercicio</th>
                            <th>Musculos que se ejercitan</th>
                            <th>Correo del entrenador</th>
                            <th>Producto</th>
                            <th>Uso del producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos['Ejercicio'] as $productos):?>
                        
                        <tr>
                            <td><?php echo $productos['NombreEjercicio']; ?></td>
                            <td><?php echo $productos['Detalles']; ?></td>
                            <td><?php echo $productos['TiempoRealizado']?></td>
                            <td><?php echo $productos['PartesCuerpo']?></td>
                            <td><?php echo $productos['CorreoEncargado']?></td>
                            <td><?php echo $productos['Nombre']?></td>
                            <td><?php echo $productos['Instrucciones']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
</section>

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
        <script src="<?php echo RUTA_URL;?>/public/js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || doc¿ument.write('<script src="<?php echo RUTA_URL;?>/public/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="<?php echo RUTA_URL;?>/public/js/bootstrap.js"></script>
        <script src="<?php echo RUTA_URL;?>/public/js/plugins.js"></script>
        <script src="<?php echo RUTA_URL;?>/public/js/main.js"></script>
</body>
</html>
