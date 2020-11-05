

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
                            <img src="<?php echo RUTA_URL?>/public/img/logo.png" width="400px" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
            <div class="container" style="padding: 25px 0 100px 350px;">                
                <div id="login-row" class="row justify-content-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        
                        <h3><?php echo $datos['mensaje']?></h3>
                        <form Action="<?php echo RUTA_URL?>/auths/login" id="login-form" class="form" action="" method="post">
                        <h3>Login</h3>
                            <div class="form-group">
                                <label for="username">Correo</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Nombre de usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Contrase&ntilde;a" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info btn-sm">Iniciar sesion</button>
                            </div>
                        </form>
                        <a href="<?php echo RUTA_URL;?>/auths/registro" class="btn btn-info btn-sm mt-3 mb-6">Resgistro</a>
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
