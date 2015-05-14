<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edita un producto</title>

    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
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
    <script src="../js/angular_functions.js"></script>
    <script src="../js/main_functions.js"></script>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <link rel="stylesheet" href="css/tables.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->

</head><!--/head-->

<body class="homepage" ng-app="serviciosAmApp">

    <?php 
        include('classes/Product.php');
        include('classes/Category.php');
    ?>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="collapse navbar-collapse navbar-right">
                    <ul id="mainAccessMenu" class="nav navbar-nav">
                    <li class="dropdown">
                        <li><a href="/maintenance">Creación de productos</a></li>
                        <li><a href="edit.php">Edición de productos</a></li>
                    </li>
                </ul>
            </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <section id="contact-page">
        <div class="container" ng-controller="EditController">
            <div class="center">        
                <h2>Edita un producto</h2>
                <p class="lead">Selecciona el producto a editar</p>
            </div> 
            <div class="row contact-wrap"> 
                Búsqueda: <input type="text" ng-model="search"/><br />
                <?php 
                    $oProduct = new Product();
                    $products = $oProduct->getProducts();
                ?>
                <table class="table">
                    <thead>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="p in products | filter:search">
                            <input type="hidden" value="{{p.idproduct}}" />
                            <td>
                                {{p.name}}
                            </td>
                            <td>
                                {{p.description}}
                            </td>
                            <td>
                                {{p.quantity}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
</section><!--/#contact-page-->



<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2014 GeneticSoft! All Rights Reserved.
            </div>
        </div>
    </div>
</footer><!--/#footer-->


<!-- The template to display files available for download -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
</body>
</html>