<?php

    namespace app\models\business;
    
    use app\models\business\NegocioUsuarioImpl as NegocioUsuarioImpl;
    use app\models\business\NegocioParametroImpl as NegocioParametroImpl;
    use app\models\business\NegocioEmpresaImpl as NegocioEmpresaImpl;
    use app\models\business\NegocioOrganizacionImpl as GestionOrganizacionImpl;
    use app\models\business\NegocioCertificadoImpl as NegocioCertificadoImpl;

    class BusinessFactory {
        
        public static function getNegocioUsuario($reg){
            return new NegocioUsuarioImpl($reg);
        }
        
        public static function getNegocioParametro($reg){
            return new NegocioParametroImpl($reg);
        }
        
        public static function getNegocioEmpresa($reg){
            return new NegocioEmpresaImpl($reg);
        }
        
        public static function  getGestionOrganizacion($req){
            return new GestionOrganizacionImpl($req);
        }
        
        public static function  getNegocioCertificado($req){
            return new NegocioCertificadoImpl($req);
        }
        
    }