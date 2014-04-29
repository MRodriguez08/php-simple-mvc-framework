<?php

namespace framework\util;

class RegExpUtil {
    
    public static function getTextBetweenTags($text , $tag){
        $pattern = "/<{$tag}>(.*?)<\/{$tag}>/";
        preg_match($pattern, $text, $matches);
        return $matches[1];
    }
    
}
