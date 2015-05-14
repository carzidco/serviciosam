<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mantenimiento preventivo | Mantenimiento</title>
    
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
    <br />
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <div class="get-started center wow fadeInDown">
                <h2>Mantenimientos preventivos a Proyectores Multimedia</h2>
                <div id="proy_mult_primera" class="img-responsive"></div>
                <p class="lead">Un proyector multimedia cuenta en su interior con diversos componentes ópticos, electrónicos y mecánicos.</p>
                <div id="proy_mult_reparar" class="img-responsive" style="margin-left: 260px"></div>
                <p class="lead">Los componentes ópticos como cualquier otro elemento hecho de vidrio puede llegar a desarrollar hongos si las condiciones de temperatura 
                    y humedad del lugar donde se usa o almacena el equipo así lo permiten.</p>
                <div style="float:left; width:600px; height: 200px;margin-left: 273px">
                    <div id="proy_mult_fungilens" style="float:left;" class="img-responsive"></div>
                    <div id="proy_mult_dustmirror" style="float:left;" class="img-responsive"></div>
                    <div id="proy_mult_lcdust" style="float:left;" class="img-responsive"></div>
                </div>
                <br />
                <div style="clear:both"></div>
                <p class="lead">Los componentes electrónicos pueden fallar por una instalación eléctrica inadecuada, 
                    exposición a elementos corrosivos u oxidantes como humedad, e inclusive presencia de insectos.</p>
                <br />
                <div style="float:left; width:600px; height: 200px;margin-left: 273px">
                    <div id="proy_mult_mainboardust" style="float:left;" class="img-responsive"></div>
                    <div id="proy_mult_bug" style="float:left;" class="img-responsive"></div>
                    <div id="proy_mult_lampant" style="float:left;" class="img-responsive"></div>
                </div>
                <div style="clear:both"></div>
                <br />
                <p class="lead">Los componentes mecánicos pueden fallar por falta de lubricación o por presencia de agentes contaminantes.</p>
                <br />
                <div style="float:left; width:600px; height: 200px;margin-left: 273px">
                    <div id="proy_mult_intekedust" style="float:left;" class="img-responsive"></div>
                    <div id="proy_mult_aidust" style="float:left;" class="img-responsive"></div>
                    <div id="proy_mult_lampfandust" style="float:left;" class="img-responsive"></div>
                </div>
                <div style="clear:both"></div>
                <p class="lead">
                Por lo anteriormente expuesto es más que evidente lo necesario que es brindar mantenimientos preventivos 
                regularmente a los Proyectores Multimedia, ya que optimizan
                 el rendimiento de la lámpara, mantienen la calidad de la imagen y alargan la vida útil del equipo.
                </p>
                <div id="proy_mult_portada" class="img-responsive"></div>
                <!--<div class="request">
                    <h4><a style="cursor: default">Empieza con tu proforma</a></h4>
                </div>-->
            </div><!--/.get-started-->

            </div> 
            
            <!--<div class="row contact-wrap wow fadeInDown"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="emailForm" class="contact-form" method="post" action="electronicquote.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre del producto o Código *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Tu email *</label>
                            <input type="text" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="phone" class="form-control">
                        </div>                     
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Tipo (Producto o repuesto) *</label>
                            <input type="text" name="type" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Descripción *</label>
                            <textarea name="description" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar</button>
                        </div>
                    </div>
                </form> 
            </div>-->
        </div>
    </section>

    <!--<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Cotiza</h2>
                <p class="lead">En esta sección podrás realizar una cotización para comprar un producto, tan pronto como completes y envies los datos,
                    estaremos poniéndonos en contacto contigo.</p>
            </div>

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


            <div class="get-started center wow fadeInDown">
                <h2>Ready to get started</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. <br>  Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                <div class="request">
                    <h4><a href="#">Request a free Quote</a></h4>
                </div>
            </div>

            <div class="clients-area center wow fadeInDown">
                <h2>What our client says</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/client1.png" class="img-circle" alt="">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/client2.png" class="img-circle" alt="">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/client3.png" class="img-circle" alt="">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                    </div>
                </div>
           </div>

        </div>
    </section>


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
    </section>-->

    <footerinfo></footerinfo>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>