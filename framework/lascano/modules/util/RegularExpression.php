<?php

namespace framework\lascano\modules\util;

class RegularExpression {
    
    public static function getTextBetweenTags($text , $tag){
        $pattern = "/<{$tag}>(.*?)<\/{$tag}>/";
        preg_match($pattern, $text, $matches);
        return (count($matches) > 0 ? $matches[1] : null);
    }
    
}
