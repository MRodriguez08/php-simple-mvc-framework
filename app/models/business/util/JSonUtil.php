<?php

namespace app\models\business\util;

use JMS\Serializer\SerializerBuilder;

class JSonUtil {

    public static function arrayToJSon($arr) {
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($arr, 'json');
        return $jsonContent;
    }

    public static function mongoCursorToJson($cursor) {
        $return = array();
        $i = 0;
        while ($cursor->hasNext()) {

            $return[$i] = $cursor->getNext();
            // key() function returns the records '_id'
            $return[$i++]['_id'] = $cursor->key();
        }
        return json_encode($return);
    }

}
