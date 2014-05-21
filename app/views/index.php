<?php

use framework\security\session\Session;

if (Session::getSession()->get(Session::AUTHENTICATED)) {
    
}
?>


<html>
    <head>
        <title>S-PHP-MVC-F</title>
        <script src="public/javascripts/libs/jquery.min.js"></script>
        <script src="public/javascripts/libs/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="public/stylesheets/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="public/stylesheets/simplephpmvcframework.css" media="screen" />
    </head>
    <body>
        <div class="row-fluid">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Simple PHP MVC Framework</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">MVC</a></li>                                
                                <li><a href="#">Persistence</a></li>                             
                                <li><a href="#">Authentication</a></li>
                                <li><a href="#">WebSockets</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div id="home" class="col-md-12 page-section">
                <h1>Home</h1>
            </div>
            <div id="mvc" class="col-md-12 page-section">
                <h1>Model-View-Controller</h1>
            </div>
            <div id="persistence" class="col-md-12 page-section">
                <h1>Persistence</h1>
            </div>
            <div id="authetication" class="col-md-12 page-section">
                <h1>Authentication</h1>
            </div>
            <div id="websockets" class="col-md-12 page-section">
                <h1>Web Sockets</h1>
            </div>
        </div>
    </body>
</html>

