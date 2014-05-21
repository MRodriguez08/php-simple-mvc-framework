<?php

    namespace app\models\business;
    
    use app\models\business\NegocioUsuarioImpl;
    use app\models\business\NegocioParametroImpl;
    use app\models\business\BienBusiness;

    class BusinessFactory {
        
        public static function getUsuarioBusiness($reg){
            return new NegocioUsuarioImpl($reg);
        }
        
        public static function getParametroBusiness($reg){
            return new NegocioParametroImpl($reg);
        }
        
        public static function getBienBusiness($reg){
            return new BienBusiness($reg);
        }
        
    }