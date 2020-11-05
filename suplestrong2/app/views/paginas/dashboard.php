<!DOCTYPE html>
<html> 
    <head>
<?php


include RUTA_APP . '/views/inc/cabeza.inc.php';?>
    </head>
    <body>
		<div class="site-main" id="sTop">
            <div class="site-header">
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <nav class="navbar navbar-inverse" role="navigation">
                                    <div class="navbar-header">                                       
                                        <a href="#top" class="navbar-brand">SupleStrong.com</a>
                                        <div id="main-nav" class="collapse navbar-collapse navbar-brand">
                                            <ul class="menu-first nav navbar-nav navbar-left" style="margin-right: 20px;">
                                                <li class="active"><a href="#">Inicio</a></li>
                                                <li><a href="#about">Acerca de</a></li>
                                                <li><a href="#portfolio">Productos</a></li>                                   
                                                <li><a href="#contact-us">Contacto</a></li>
                                                
                                            </ul>
                                            <ul class=" nav navbar-right ">
												<li ><a href="<?php ECHO RUTA_URL?>/Auths" class="text-dark"> <b>Login</b></a></li>
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


        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content">                            
                            <img src="<?php echo RUTA_URL;?>/public/img/logo.png" width="800px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="about" class="page-section">
            <div class="container-fluid">
				 <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
							<h4>&iquest; Qu&eacute; hacemos?</h4>
                            <p>Somos una empresa dedicada a la venta de suplementos alimenticios de manera local, prote&iacute;nas y dem&aacute;s para las personas que dan todo por su f&iacute;sico.<br>
							Contamos con una gran variedad de productos, ya que son varios nuestros proveedores.</p>    
		                    <img src="<?php echo RUTA_URL;?>/public/img/supplements.png" alt="Supplements">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h3 style="color: #fff;">Nuestros Productos</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="owl-portfolio" class="owl-carousel owl-theme imageGallery1">
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="<?php echo RUTA_URL;?>/public/img/img_port_1.jpg" title=""><img src="<?php echo RUTA_URL;?>/public/img/img_port_1.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="<?php echo RUTA_URL;?>/public/img/img_port_2.jpg" title=""><img src="<?php echo RUTA_URL;?>/public/img/img_port_2.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="<?php echo RUTA_URL;?>/public/img/img_port_3.jpg" title=""><img src="<?php echo RUTA_URL;?>/public/img/img_port_3.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="<?php echo RUTA_URL;?>/public/img/img_port_4.jpg" title=""><img src="<?php echo RUTA_URL;?>/public/img/img_port_4.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="<?php echo RUTA_URL;?>/public/img/img_port_5.jpg" data-lightbox="image-1"><img src="<?php echo RUTA_URL;?>/public/img/img_port_5.jpg"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="<?php echo RUTA_URL;?>/public/img/img_port_6.jpg" title=""><img src="<?php echo RUTA_URL;?>/public/img/img_port_6.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="<?php echo RUTA_URL;?>/public/img_port_7.jpg" title=""><img src="<?php echo RUTA_URL;?>/public/img/img_port_7.jpg" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

		<section>
			<div class="second-tabs-content what-we-do">
            <div class="container">                
                <div class="row">
                    <div class="wrapper">
						<center>
                        <div class="col-md-12">
                            <div class="row">
                                <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                                    <li class="col-md-15 col-sm-12 col-xs-12">
                                        <a href="#unique" class="active">
                                            <div class="list-item">
                                                <div class="icon">
                                                    <img src="<?php echo RUTA_URL;?>/public/img/first-list-icon.png" alt="">
                                                </div>
                                                <h4>Idea Principal</h4>
                                            </div>
                                        </a>
                                    </li>                                                                        
                                    <li class="col-md-15 col-sm-12 col-xs-12">
                                        <a href="#event">
                                            <div class="list-item">
                                                <div class="icon">
                                                    <img src="<?php echo RUTA_URL;?>/public/img/fourth-list-icon.png" alt="">
                                                </div>
                                                <h4>Eventos</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
						</center>
                        <div class="col-md-12">
                            <section id="second-tab-group" class="tabgroup">
                                <div id="unique">
                                    <div class="row">
                                        <div class="tab-content-services">
                                            <div class="col-md-6">
                                                <div class="left-text">
                                                    <h4>Unique Ideas</h4>
                                                    <p>Ideas que brotan en los gimnasios, apoyo a la cultura deportiva, mejor nutrici&oacute;n, necesidad de ejercicio, son algunas de las muchas ideas que presentamos para crear este proyecto, &uacute;nico y exclusivamente para ti.</p>                                                
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="<?php echo RUTA_URL;?>/public/img/ideas.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="event">
                                    <div class="row">
                                        <div class="tab-content-services">
                                            <div class="col-md-6">
                                                <div class="left-text">
                                                    <h4>Eventos</h4>
                                                    <p>Son varios eventos en los que participamos, y estos son exclusivos de las marcar que vendemos. Inscr&iacute;bete en los que quieras, son gratuitos.</p> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="<?php echo RUTA_URL;?>/public/img/eventos.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</section>      

        <section id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Contactanos</h4>
                            <p>Se testigo de nuestros productos, y pru&eacute;balos por ti mismo, si&eacute;ntete libre de opinar y darnos nuevas ideas para mejorar.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form id="contact" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Nombre" required>
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Correo" required>
                                  </fieldset>
                                </div>
                                 <div class="col-md-6">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto" required>
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="phone" type="phone" class="form-control" id="phone" placeholder="Telefono" required>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Escribenos lo que piensas" required></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Enviar</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
        <script type="text/javascript">
        $(document).ready(function() {
            
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        
        </script>
        
    </body>
</html>