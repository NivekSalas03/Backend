

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
                            <img src="<?php echo RUTA_URL?>/public/img/logo.png" width="300px" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
            <div class="container" style="padding: 25px 0 100px 350px;">                
                <div id="login-row" class="row justify-content-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form Action="<?php echo RUTA_URL?>/auths/registro" id="login-form" class="form" action="" method="post">
                        <a href="<?php echo RUTA_URL;?>/auths" class="btn btn-info btn-sm float:right mt-3 mb-6"><i class="fa fa fa-backward""></i></a>
                            <h3>Registro</h3>
                            <h3><?php echo $datos['mensaje']?></h3>
                            <div class="form-group">
                                <label for="username">Correo Electronico</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Correo" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre completo</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre completo " required>
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Contrase&ntilde;a" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="bt" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>


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
        
    </body>
