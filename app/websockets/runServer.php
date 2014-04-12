<?php

    require '/opt/lampp/htdocs/simple-php-mvc-framework/vendor/autoload.php';
    use Ratchet\Server\IoServer;
    
    require '/opt/lampp/htdocs/simple-php-mvc-framework/app/websockets/WebSocketServer.php';
    use app\websockets\WebSocketServer;

    $server = IoServer::factory( 
        new WebSocketServer() , //Instancia de la clase que implementa el servidor de web sockets
        8080                    //Puerto en el que queremos que escuche el servidor
    );

    $server->run();