<?php

    namespace app\models\business;  
    
    interface NegocioUsuario {
        
        function obtenerTodosRoles();
        
        function obtenerTodosUsuarios();

    }