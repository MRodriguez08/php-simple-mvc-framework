<?php ?>


<html>
    <head>
        <title>Inmobiliaria</title>
        <script src="public/javascript/libs/jquery1.11.0.min.js"></script>
        <script src="public/javascript/libs/bootstrap3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="public/stylesheets/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="public/stylesheets/simplephpmvcframework.css" media="screen" />
    </head>
    <body>
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
                    <a class="navbar-brand" href="/plataforma-inmobiliaria/index.php?rt=admin/index">Inmobiliaria</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuracion<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/plataforma-inmobiliaria/index.php?rt=parametro/index">P&aacute;rametros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Usuarios</a></li>
                        <li><a href="#">Clientes</a></li>
                        <li><a href="#">Inmuebles</a></li>
                        <li><a href="#">Calendario</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">moco<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">mi perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="#">salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <?php include_once $partialView; ?>
    </body>
</html>


