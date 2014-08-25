<?php
/*
 * @viewType=View
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SPMF - Greyscale</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo __BASE_URL; ?>/assets/themes/grayscale/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo __BASE_URL; ?>/assets/themes/grayscale/css/grayscale.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo __BASE_URL; ?>/assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        SPMF - Grayscale
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#download">Download</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#startbootstrap">Start Bootstrap</a>
                        </li>
                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Other themes
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo LK::createUrl('grayscale/index') ?>">Grayscale Theme</a>
                            </li>
                            <li><a href="<?php echo LK::createUrl('sbadmin2/index') ?>">SB Admin v2 Theme</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>



        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h4 class="brand-heading">Simple PHP MVC Framework</h4>
                            <p class="intro-text">A very simple php mvc framework with some StartBootstrap Themes</p>
                            <a href="#about" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>About simple-php-mvc-framework</h2>
                    <p>
                        Simple PHP MVC Framework is a very lightweight MVC framework implemented using pure php functions.                        
                    </p>
                    <p>
                        Some of the supported features are the posibility of creating simple php pages or php pages with masterpage, implementation of <br/>
                        rest webservices as special controllers, url formating, and many others.
                    </p>
                </div>
            </div>
        </section>

        <!-- Download Section -->
        <section id="download" class="content-section text-center">
            <div class="download-section">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Download simple-php-mvc-framework</h2>
                        <p>You can visit SPMF page on github </p>
                        <a href="https://github.com/MRodriguez08/simple-php-mvc-framework" class="btn btn-default btn-lg">Visit Download Page</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="startbootstrap" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Start Bootstrap</h2>
                    <p>
                        As we said, SPMF is just a very lightweight framework. The amazing views shown on SPMF examples are <br/>
                        Start Bootstrap artwork! Down here you have some links to many other examples of comertial and administration <br/>
                        templates.
                    </p>
                    </p>
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <div id="map"></div>

        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <p>Mauricio Rodriguez | MRodriguez08</p>
            </div>
        </footer>

    </body>
    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo __BASE_URL; ?>/assets/themes/grayscale/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo __BASE_URL; ?>/assets/themes/grayscale/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo __BASE_URL; ?>/assets/themes/grayscale/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo __BASE_URL; ?>/assets/themes/grayscale/js/grayscale.js"></script>
</html>
