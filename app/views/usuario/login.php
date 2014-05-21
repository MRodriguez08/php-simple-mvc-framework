<?php ?>
<html>
    <head>
        <title>Inmobiliaria</title>

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <script src="public/javascript/libs/jquery1.11.0.min.js"></script>
        <script src="public/javascript/libs/bootstrap3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="public/stylesheets/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="public/stylesheets/bootstrap-inmobiliaria.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="public/stylesheets/simplephpmvcframework.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="public/stylesheets/loginStyle.css" media="screen" />
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Inmobiliaria</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row-fluid">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">              
            </div>
            <div class="col-lg-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <form method="post" role="form" action="index.php?rt=usuario/login">
                            <h2>Ingresar</h2>
                            <div class="form-group">
                                <label for="inputUsuario">usuario</label>
                                <input name="usuario" type="text" class="form-control" id="inputUsuario" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputContrasenia">contrase&ntilde;a</label>
                                <input name="contrasenia" type="password" class="form-control" id="inputContrasenia" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-default">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>


