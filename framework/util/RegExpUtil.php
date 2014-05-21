<?php

namespace framework\util;

class RegExpUtil {
    
    public static function getTextBetweenTags($text , $tag){
        $pattern = "/<{$tag}>(.*?)<\/{$tag}>/";
        preg_match($pattern, $text, $matches);
        return (count($matches) > 0 ? $matches[1] : null);
    }
    
}
