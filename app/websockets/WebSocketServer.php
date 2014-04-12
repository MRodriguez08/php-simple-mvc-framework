<?php

namespace app\websockets;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

/**
 * Clase correspondiente al servidor de WebSockets del sistema.
 * Utiliza la api "Sockets for PHP" de Ratchet (http://socketo.me).
 * Ver la documentacion para mas informacion.
 */
class WebSocketServer implements MessageComponentInterface {

    
    protected $clients;
    
    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }
    
    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
        echo "La conexion con id {$conn->resourceId} se ha desconectado\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "Ha ocurrido un error: {$e->getMessage()}\n";
        $conn->close();
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        echo "Nueva conexion establecida! ({$conn->resourceId})\n";
    }

}
    
    