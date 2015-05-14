<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Servicios AM | Nosotros</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>
    <script src="js/angular_functions.js"></script>
    <script src="js/main_functions.js"></script>

</head><!--/head-->

<body ng-app="serviciosAmApp">

    <header id="header">
        <div class="top-bar" ng-controller="HeaderContactInfo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>{{headerContact}}</p></div>
                    </div>
                    <!--<div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>-->
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <logo></logo>
                <menu></menu>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Nosotros</h2>
				<p class="lead">Conocé nuestro equipo de trabajo, estamos para servirte.</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/our_team.jpg" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/moises_slider2.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <!--<div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div>-->
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill -->
			<div class="skill-wrap clearfix">

				<div class="center wow fadeInDown">
					<h2>Nuestra Historia</h2>
					<p class="lead">Fuimos designados por Epson Costa Rica desde enero de 1998 , para atender las garantías de sus
                    excelentes productos para el área corporativa y para los usuarios finales.</p>

                    <img src="images/repair2.png" class="img-responsive" />

                    <p class="lead">Servicios AM de Centroamérica y del Caribe S.A es una empresa
					costarricense dedicada al servicio de mantenimiento y reparación de 
					equipo Epson, como centro de servicio autorizado por Epson Costa Rica 
					validamos las garantías de venta de los equipos vendidos en nuestro país, 
					tanto para el área corporativa como para los usuarios finales.</p>
				</div>

				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->  
			
				<div class="center wow fadeInDown">
					<h2>Nuestras habilidades</h2>
					<p class="lead">Nos enfocamos tanto en venta como reparación de equipos Epson en varios tipos como se muestra a continuación:</p>
				</div>
				
				<div class="row">
		
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">                                   
								<!--<p><em>80%</em></p>-->
								<p>Proyectores</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">                                  
								<!--<p><em>85%</em></p>-->
								<p>Scanners</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                    
								<!--<p><em>80%</em></p>-->
								<p>Máquinas de punto</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<!--<p><em>90%</em></p>-->
								<p>Inyección</p>                                     
							</div>
						</div>
					</div>
				</div>
	
            </div><!--/.our-skill-->
			

			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Conoce nuestro equipo</h2>
					<p class="lead">Conoce a detalle nuestro personal autorizado.</p>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/about_profiles/ceo.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Mario Arguedas</h4>
									<h5>Fundador /  CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Reparación</a></li>
										<li class="btn"><a href="#">Consultor</a></li>
										<li class="btn"><a href="#">Técnico</a></li>
									</ul>
									
									<!--<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>-->
								</div>
							</div><!--/.media -->
							<p class="profileMail">marguedas@serviciosam.com</p>
							<p>Somos el mejor lugar de accesorios y venta de equipo de alta calidad, autorizado por Epson.
								<br /> "No dejes apagar el entusiasmo, virtud tan valiosa como necesaria; trabaja, aspira, tiende siempre hacia la altura" </p>
						</div>
					</div><!--/.col-lg-4 -->
					
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/about_profiles/adrian.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Adrián Ramos</h4>
									<h5>Especialista</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Proyección y scanners</a></li>
										<li class="btn"><a href="#">Inyección</a></li>
										<li class="btn"><a href="#">Matrices</a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p class="profileMail">aramos@serviciosam.com</p>
					        <p>Tu repación es garantizada, si no tenemos un repuesto te lo conseguimos pero siempre habrá una solución para vos.
								<br />"No rechaces tus sueños. ¿Sin la ilusión el mundo qué sería?"</p>
						</div>
					</div><!--/.col-lg-4 -->					
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       
				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/about_profiles/moises.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Moisés Lopez</h4>
									<h5>Especialista en inyección</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Servicio al cliente</a></li>
										<li class="btn"><a href="#">Soporte</a></li>
										<li class="btn"><a href="#">Inyección</a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p class="profileMail">mlopez@serviciosam.com</p>
							<p>Es un placer atender tus dudas, tu equipo esta en buenas manos. Peganos una llamada, sos importante para nosotros.
								<br />"El modo de dar una vez en el clavo es dar cien veces en la herradura"</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/about_profiles/edgar.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Edgar Matarrita</h4>
									<h5>Especialista</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Mensajeria</a></li>
										<li class="btn"><a href="#">Revisión</a></li>
										<li class="btn"><a href="#">Soporte</a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p class="profileMail">ematarrita@serviciosam.com</p>
							<p>Nuestro propósito es la satisfacción del cliente, brindar un servicio de calidad y tenerlos en nuestra familia.
								<br />"Despacito y buena letra, que el hacer las cosas bien, importa más que el hacerlas"</p>
						</div>
					</div>
				</div>	<!--/.row-->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border--> 
				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/about_profiles/johanna.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Johanna Mena</h4>
									<h5>Administrativo</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Servicio al cliente</a></li>
										<li class="btn"><a href="#">Despacho</a></li>
										<li class="btn"><a href="#">Administración</a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p class="profileMail">jmena@serviciosam.com</p>
							<p>Nuestra convicción como empresa nos lleva a sopresar lo normal, te garantizamos un trabajo genial y de calidad.
								<br /> "La inspiración existe, pero tiene que encontrarte trabajando". </p>
						</div>
					</div><!--/.col-lg-4 -->
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/about_profiles/paul.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Paul Quirós</h4>
									<h5>Especialista</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Proyección</a></li>
										<li class="btn"><a href="#">Consulta externa</a></li>
										<li class="btn"><a href="#">Soporte</a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p class="profileMail">pquiros@serviciosam.com</p>
					        <p>Tendrás la mejor atención, no dudés en llamarnos e iremos a revisar tu equipo a domicilio.
								<br />"Para el logro del triunfo siempre ha sido indispensable pasar por la senda de los sacrificios"</p>
						</div>
					</div><!--/.col-lg-4 -->					
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->   
				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/about_profiles/mauricio.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Mauricio Brenes</h4>
									<h5>Especialista</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Scanners</a></li>
										<li class="btn"><a href="#">Admistración</a></li>
										<li class="btn"><a href="#">Soporte</a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p class="profileMail">mbrenes@serviciosam.com</p>
							<p>Dale un vistazo a nuestros productos, la solución esta al alcance de tus manos, somos los mejores.
								<br />"La excelencia no es un acto, pero si un hábito."</p>
						</div>
					</div>
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	
    
    <!--<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footerinfo></footerinfo>

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>