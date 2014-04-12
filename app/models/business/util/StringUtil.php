<?php

    namespace app\models\business\util;
    
    class StringUtil {
        
        static function startsWith($haystack, $needle)
        {
             $length = strlen($needle);
             return (substr($haystack, 0, $length) === $needle);
        }

        static function endsWith($haystack, $needle)
        {
            $length = strlen($needle);
            if ($length == 0) {
                return true;
            }

            return (substr($haystack, -$length) === $needle);
        }
        
    }