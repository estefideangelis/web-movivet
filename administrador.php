<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movivet</title>
    
    
<link rel="shortcut icon" href="http://www.movivet.tk/admin/img/favicon.png"> 
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style1.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    

    <!-- Theme CSS -->
    <link href="css/creative1.min.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

   
    <!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

</head>

<body id="page-top">


            
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    
<div id="encabezado" class="container-fluid collapse navbar-collapse">
    <?php @require 'content/encabezado.php'; ?>
    <?php @require 'content/encabezadolinks.php'; ?>
  
 <div><p><?php echo $encabezado_1 ?> </p></div>
   <ul class="nav navbar-nav navbar-right"><li><a class="page-scroll" href="<?php echo $encabezadolinks_4?>"><?php echo $encabezado_4 ?></a></li><li><a class="page-scroll" href="<?php echo $encabezadolinks_5?>"><?php echo $encabezado_5 ?></a></li><li><a class="page-scroll" href="#" >ES</a></li><li><a class="page-scroll" href="#" >EN</a></li></ul>

     </div>
     
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Movivet</span> Menu <i class="fa fa-bars"></i>
                 
                </button>
           
                       <div> <a href="index.html"  class="page-scroll img-responsive" ><img src="http://www.movivet.tk/admin/img/Movivet.png"  class="img-responsive navbar-brand page-scroll logo logo-1"/></a></div>
                
                
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            
                     
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
                <ul class="nav navbar-nav navbar-right menu-1">
                
                	<?php @require 'content/menu.php'; ?>
                    <?php @require 'content/menulinks.php'; ?>
                    
	                <li>
                        <a class="page-scroll" href="<?php echo $linkurl_1 ?>"><?php echo $link_1 ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $linkurl_2 ?>"><?php echo $link_2 ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $linkurl_3 ?>"><?php echo $link_3 ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $linkurl_4 ?>"><?php echo $link_4 ?></a>
                    </li>
                      <li>
                        <a class="page-scroll" href="<?php echo $linkurl_5 ?>"><?php echo $link_5 ?></a>
                    </li>
                      <li>
                        <a class="page-scroll" href="<?php echo $linkurl_6 ?>"><?php echo $link_6 ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $linkurl_7 ?>"><?php echo $link_7 ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
      

      <header style="background-image:url(http://www.movivet.tk/admin/img/sesion.jpg);" id="header-2"> 
   <section id="home">
   
       
         
        
        <div class="col-md-4 animate-box" data-animate-effect="fadeInRight" id="home-sesion">
        
							<div class="form-wrap">
								<div class="tab">
									
                                    	<div class="tab-content" >
										<div class="tab-content-inner active" data-content="signup">
											<h3>Iniciar sesión:</h3>
											<form action="validar1.php" method="post">
												
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="nombreUsuario">Administrador</label>
														<input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" required>
													</div>
											
												</div>
                                               
                                                                                                             
                                                   
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" class="form-control" name="password" id="password"  required>
													</div>
												</div>
                                                
                                                                                                
                                                <div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Iniciar sesion">
													</div>
												</div>

											</form>	
										</div>
                                        				
									</div>
								</div>
							</div>
						</div>
                                        
                                    
					

    </header>
    
    </section>


    

   

                         
             


  <!-- Contact Section -->
    <section id="contacto"  class="bg-primary"> 
  
        <div class="container" class="container-contacto">
            <div class="row">
                <div class="col-lg-12 text-center" id="contactanos">
                
                 <?php @require 'content/contacto.php'; ?>
                 
                    <div><h2><?php echo $contacto_1?> <h2> </div>
                    <div class="section-subheading text-muted"><p><?php echo $contacto_2?> </p> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" action="enviar.php" method="POST" title="Nombre">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group formu">
                                    <input type="text" class="form-control" placeholder="<?php echo $contacto_5?>" id="name" name="name"required data-validation-required-message="Please enter your name." >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group formu">
                                    <input type="email" class="form-control" placeholder="<?php echo $contacto_6?>" id="email" name="email" required data-validation-required-message="Please enter your email address." >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group formu">
                                    <input type="tel" class="form-control" placeholder="<?php echo $contacto_7?>" id="phone" name="phone" required data-validation-required-message="Please enter your phone number." >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group formu">
                                    <input class="form-control" placeholder="<?php echo $contacto_8?>" id="message" name="message" required data-validation-required-message="Please enter a message." ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl boton-enviar"><?php echo $contacto_3?> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center col-md-12 footer-1" > 
        
         <?php @require 'content/footer.php'; ?>
         <?php @require 'content/footerlinks.php'; ?>

            <div class="row">
                <div class="col-md-4 section-heading">
                  <ul class="list-inline quicklinks">
               <h3><?php echo $footer_8?> </h3>
                 <p><a href="http://www.estefideangelis.tk/">Estefanía De Angelis</a></p>
                  <p><span class="copyright"><?php echo $footer_1?> </span></p> 
                     <li> <p><a href="<?php echo $footerlinks_2?>"><?php echo $footer_2?> </a></p></li>
                         <li> <p><a href="<?php echo $footerlinks_3?>"><?php echo $footer_3?> </a></p></li>
                         
                          </ul>
                </div>
             
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                     <h3><?php echo $footer_9?> </h3>
                          <li><p><?php echo $footer_4?>  </p></li>
                          <li><p><?php echo $footer_5?> </p></li>
                         
                        <p><a href="<?php echo $footerlinks_10?>"><?php echo $footer_10?> </a></p>
                        <p><a href="#"><?php echo $footer_11?> </a><br><a href="<?php echo $footerlinks_12?>"><?php echo $footer_12?> </a> </p>                     
                      
                    </ul>
                </div>
                
                   <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                     <h3><?php echo $footer_13?> </h3>
                          <p><?php echo $footer_6?>  <a href="<?php echo $footerlinks_7?>"><?php echo $footer_7?> </a></p>
                          <h3><?php echo $footer_14?> </h3>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="<?php echo $footerlinks_14?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>





    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
    
    <script src="js/main.js"></script>
    

</body>

</html>
