<?php
    
    namespace app\models\business\util;
    
    use JMS\Serializer\SerializerBuilder;

    class JSonUtil {
        
        public static function arrayToJSon($arr){
            $serializer = SerializerBuilder::create()->build();
            $jsonContent = $serializer->serialize($arr, 'json');
            return $jsonContent;
        }
    
    }