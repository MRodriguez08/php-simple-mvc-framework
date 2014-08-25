<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace framework\lascano\modules\util;

/**
 * Description of Property
 *
 * @author ubuntu
 */
class Property {
    
    const VIEW_PROPERTY_MASTER_PAGE = 'masterPage';
    const VIEW_PROPERTY_TYPE = 'viewType';
    
    public static function getViewProperty($strView,$prop){
        
        $props = RegularExpression::getAnnotatedProperty($strView, $prop);
        if ($props == null || count($prop) == 0)
            return null;
        $spl = explode('=', $props[0]);
        $v = trim($spl[1]);
        return $v;
    }
    
    public static function getViewProperties($strView){        
        $props = RegularExpression::getAnnotatedProperties($strView);
        $out = array();
        if ($props !== null){
            foreach ($props as $o){
                $spl = explode('=', $o[0]);
                $k = Property::formatPropKey(trim($spl[0]));
                $v = trim($spl[1]);
                $out[$k] = $v;
            }
        }
        
        return $out;
    }
    
    private static function formatPropKey($prop){
        return substr($prop, 1);
    }
    
}
