<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Servicios AM | Inicio</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
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

<body class="homepage" ng-app="serviciosAmApp">

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
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Búsqueda">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>-->
                </div>
            </div>
        </div>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <logo></logo>
                <menu></menu>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg5.png)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">

                                 <div class="carousel-content" style="color:black;">
                                    <h1 class="animation animated-item-1">Proyectores</h1>
                                    <h2 class="animation animated-item-2">
                                    <strong>Especializados en la prestigiosa línea de Proyectores Multimedia EPSON. </strong>
                                    <br />
                                    <strong>Fabricante número uno de proyectores tecnología LCD a nivel mundial.</strong>
                                    </h2>
                                </div>
                            </div>

                            <div id="cycler">
								<img class="active img-responsive" src="images/slider/proj1.png" alt="My image" height="323" width="677"/>  
                                <img src="images/slider/proj2.png" alt="My image" class="img-responsive" height="323" width="677"/>    
								<img src="images/slider/proj3.png" alt="My image" class="img-responsive" height="323" width="677">    
								<img src="images/slider/proj4.png" alt="My image" class="img-responsive" height="323" width="677"/>    
								<img src="images/slider/proj5.png" alt="My image" class="img-responsive" height="323" width="677"/>    
                            </div>

                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(images/slider/repuestos_proyectores.png)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <!--<h1 class="animation animated-item-1">Reparaci&oacute;n de equipo</h1>
                                    <h2 class="animation animated-item-2">Técnicos capacitados y certificados por EPSON Centroamérica, 
                                        con su programa de certificación anual. Herramientas adecuadas a los requerimientos de EPSON. Exclusivo acceso a programas de ajuste, 
                                        cursos de capacitación presenciales o en línea, manuales técnicos y soporte por parte del fabricante.</h2>-->
                                    <h2 class="animation animated-item-1">Repuestos y consumibles</h2>
                                    <h2 class="animation animated-item-1">para proyectores multimedia EPSON</h2>
                                    <h3 class="animation animated-item-2" style="color:white">
                                        •   Controles remotos
                                        <br />
                                        •   Lámparas
                                        <br />
                                        •   Abanicos
                                        <br />
                                        •   Filtros de aire
                                        <br />
                                        •   Patillas
                                        <br />
                                        •   Cables de panel
                                        <br />
                                    </h3>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <!--<img src="images/slider/reparacion1.png" class="img-responsive">-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/repuestos.png)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-top:10px">
                                    <h1 class="animation animated-item-1">REPUESTOS PARA IMPRESORAS EPSON</h1>
                                    <h2 class="animation animated-item-2">
                                    Componentes electrónicos: Cabezales de impresión, Cables de cabeza y de panel, 
                                    motores, tarjetas electrónicas, paneles de control y sensores.
                                    <br />
                                    Componentes Mecánicos: Piñones y piñoneras, unidad de carro, ribbon mask, oil pad, tractores y bushings.
                                    </h2>
                                    
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/Cabezas_de_impresion.gif" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/camaleon.png)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">PAPELES Y SOPORTES DE IMPRESIÓN EPSON</h1>
                                    <h2 class="animation animated-item-2">
                                    <strong>Uso Cotidiano y Presentaciones</strong> Ideal para la impresión de circulares, informes y gráficos. 
                                    Impresiones del día a día que requieran una buena presentación.
                                    <br />
                                    <strong>Soportes artísticos y fotográficos</strong>
                                    La mejor selección de soportes profesionales para artistas. Imágenes perfectas
                                    <br />
                                    <strong>Uso Creativo</strong> Para aplicaciones personalizadas: adhesivos, papeles sintéticos y telas
                                    </h2>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img" style="margin-top: 281px">
                                    <img src="images/slider/Papeles.gif" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <!--<div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <!--<h2>Features</h2>-->
                <p class="lead">Centro de Servicio y Garantía Autorizado de EPSON.</p>
                <p class="lead">Cubrimos la garantía de productos EPSON adquiridos en el país, acorde a los parámetros establecidos por dicha empresa. 
                    Preferentemente presentar factura de compra del equipo.</p>
                <p class="lead">Servicio de mantenimiento preventivo y correctivo de toda la línea de productos EPSON.</p>
                <br />
                <img src="images/repair1.png" />
            </div>
<!--
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Fresh and Clean</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Retina ready</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Easy to customize</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Adipisicing elit</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Sed do eiusmod</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Labore et dolore</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>
                </div>
            </div>
        -->
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Técnicos capacitados y certificados por EPSON Centroamérica</h2>
                <p class="lead">Herramientas adecuadas a los requerimientos de EPSON.</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item13.png" alt="">
                        <div class="overlay" style="background-color:#ff00ff">
                            <div class="recent-work-inner">
                                <h3><a href="#">Mantenimiento preventivo</a> </h3>
                                <a class="preview" href="images/portfolio/full/item13.png" rel="prettyPhoto"><i class="fa fa-eye"></i>Ampliar</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item15.png" alt="">
                        <div class="overlay" style="background-color:#00ffff">
                            <div class="recent-work-inner">
                                <h3><a href="#" style="color:black">Mantenimiento correctivo</a></h3>
                                <a class="preview" href="images/portfolio/full/item15.png" rel="prettyPhoto" style="color:black"><i class="fa fa-eye"></i>Ampliar</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item14.png" alt="">
                        <div class="overlay" style="background-color:#ffff00;color:#000000">
                            <div class="recent-work-inner">
                                <h3><a href="#" style="color:black">Soporte</a> </h3>
                                <a class="preview" href="images/portfolio/full/item14.png" rel="prettyPhoto" style="color:black"><i class="fa fa-eye"></i>Ampliar</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item16.png" alt="">
                        <div class="overlay" style="background-color:#000000">
                            <div class="recent-work-inner">
                                <h3><a href="#">Servicio a domicilio</a> </h3>
                                <a class="preview" href="images/portfolio/full/item16.png" rel="prettyPhoto"><i class="fa fa-eye"></i>Ampliar</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <!--<div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Ventas</h2>
                <p class="lead">Venta de lámparas y filtros para la prestigiosa línea de Proyectores Multimedia EPSON, <br />
                    asimismo repuestos originales con garantía de fabricación. <br />
                    Venta de suministros y consumibles EPSON originales.</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/Equipo_Nuevo.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">EQUIPOS</h3>
                            <p>Venta de equipos EPSON, Impresoras de Inyección de Tinta, Matriciales. Punto de Venta y Multifuncionales.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/Suministros.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SUMINISTROS</h3>
                            <p>Venta de suministros, consumibles y accesorios de toda la línea de productos EPSON.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/Repuestos.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">REPUESTOS</h3>
                            <p>Venta de repuestos para toda la línea de productos EPSON, con garantía del fabricante.</p>
                            <br />
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/Servicio.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">TALLER DE SERVICIO</h3>
                            <p>Reparación,mantenimiento,<br />
                            lubricación,ajustes,<br />
                            calibraciones,reseteo según sea el caso. Cubrimos toda la línea de productos EPSON.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/Externo.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SERVICIO A DOMICILIO</h3>
                            <p>Servicio técnico a domicilio, instalaciones, configuraciones, mantenimientos preventivos o correctivos, entrega de producto.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left" style="margin-left: 40px">
                            <img class="img-responsive" src="images/Logo_Servicios_AM.png">
                        </div>
                        <!--<div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>-->
                    </div>
                </div>                                           
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <!--<section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Áreas técnicas que cubrimos</h2>
                        <p>Esta es una muestra de como cubrimos nuestras áreas de enfoque</p>

                        <div class="progress-wrap">
                            <h3>Venta de equipo</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="bar-width">100%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Reparación</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                               <span class="bar-width">100%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Repuestos</h3>
                            <div class="progress">
                              <div class="progress-bar color1" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                               <span class="bar-width">100%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Atención al Cliente</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                               <span class="bar-width">100%</span>
                              </div>
                            </div>
                        </div>
                        
                        <div class="progress-wrap">
                            <h3>CSS</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Wordpress</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                        
                    </div>

                </div>

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Por qu&eacute; la gente nos busca?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Conseguí el repuesto necesario para mi proyector</h4>
                                             <p>Gracias a ustedes pude encontrar soluci&oacute;n para mi proyector. Estoy muy agradecido.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>-->

    <!--<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab2.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                     </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> 
                            </div> 
                        </div>     
                    </div>             
                </div>

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
-->
    <style>
        #cycler{position:relative; margin-left: 566px}
        #cycler img{position:absolute;z-index:1;}
        #cycler img.active{
            z-index:3;
        }
    </style>

    <script>
        function cycleImages(){
          var $active = $('#cycler .active');
          var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first');
          $next.css('z-index',2);//move the next image up the pile
          $active.fadeOut(900,function(){//fade out the top image
                $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image

                $next.css('z-index',3).addClass('active');//make the next image the top one
          });
        }

        $(document).ready(function(){
        // run every 7s
        setInterval('cycleImages()', 3000);
        })
    </script>

    <section id="content">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Reconocimiento CSA</h2>
                <img src="images/csa.png" width="500" height="500"/>
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="wow fadeInDown" style="text-align:left">
                <h2>RESPONSABILIDAD ECOLÓGICA</h2>
                <p class="lead">COMPROMETIDOS CON EL AMBIENTE </p>
            </div>    

            <div class="partners">
                <ul>
                    <!--<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner6.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>-->
                    <!--<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner6.png"></a></li>-->
                    <!--<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>-->
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container" ng-controller="HeaderContactInfo">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Tiene alguna consulta?</h2>
                            <p>No dude en llamarnos y podremos contestar cualquier duda <br /> o alguna sugerencia que tenga a los teléfonos {{headerContact}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

    <!--
    <section id="bottom">
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
    </section>

    -->
    
    <footerinfo></footerinfo>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>