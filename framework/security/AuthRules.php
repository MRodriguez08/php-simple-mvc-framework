<?php

namespace framework\security;

use framework\AppConfig;
use framework\http\HttpUtils;
use framework\Session;

class AuthRules {
    
    const ALLOW_ALL = 'allow_all';
    const DENY_ALL = 'deny_all';
    
    public function checkAuthorizationRules($controller , $action){
        
        $prop = AppConfig::getAppConfigProperty(AppConfig::CONF_AUTH_RULES_FILE);
        if (isset($prop) == false)
        {
            die ('ERROR05 > Authentication rules file not defined in configuration file. [see auth.rules_file configuration parameter]');
        }
        $authRulesFile = join(DIRECTORY_SEPARATOR , array (__BASE_PATH, 'conf', AppConfig::getAppConfigProperty(AppConfig::CONF_AUTH_RULES_FILE)));
        if (file_exists($authRulesFile) == false)
        {
            die("ERROR06 > Configuraction file $authRulesFile not found.");
        }
        else
        {
            include_once $authRulesFile;
        }
        
        $httpUtils = new HttpUtils();
        $checkData = array();
        switch ($httpUtils->getHttpContextMethod()){
            case HttpUtils::METHOD_GET:
                $checkData = $getMethods;
                break;
            case HttpUtils::METHOD_POST:
                $checkData = $postMethods;
                break;
            case HttpUtils::METHOD_PUT:
                $checkData = $putMethods;
                break;
            case HttpUtils::METHOD_PUT:
                $checkData = $deleteMethods;
                break;
        }
        
        if (isset($checkData[$controller]) == false)
        {
            die("ERROR03 > Undefined authorization rules for controller $controller");
        }
        
        if (isset($checkData[$controller][$action]) == false)
        {
            die("ERROR02 > Undefined authorization rules for action $controller::$action");
        }
        $actionAllowedOnes = $checkData[$controller][$action];
        if (in_array(AuthRules::ALLOW_ALL, $actionAllowedOnes)) 
        {
            return;
        }
        else if (in_array(AuthRules::DENY_ALL, $actionAllowedOnes))
        {
            die ("ERROR07 > Action $controller::$action denied to all");
        }
        else 
        {
            $userInfo = Session::get(Session::USER_INFO);
            if (isset($userInfo) == false)
            {
                die ('ERROR04 > User information not found in current session');
            }
            foreach ($actionAllowedOnes as $rol){
                if (in_array($rol, $userInfo->getUserRoles()))
                {
                    return;
                }
            }
            die ('ERROR01 > Operation not allowed. Insuficient privileges');
        }
        
    }
    
}
    


