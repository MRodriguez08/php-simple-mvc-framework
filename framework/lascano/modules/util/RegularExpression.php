<?php

namespace framework\lascano\modules\util;

class RegularExpression {

    public static function getTextBetweenTags($text, $tag) {
        $pattern = "/<{$tag}>(.*?)<\/{$tag}>/";
        preg_match($pattern, $text, $matches);
        return (count($matches) > 0 ? $matches[1] : null);
    }

    public static function getAnnotatedProperty($text, $attr) {
        $pattern = "/@{$attr}=\w+\n/";
        preg_match($pattern, $text, $matches);
        return (count($matches) > 0 ? $matches : null);
    }
    
    public static function getAnnotatedProperties($text) {
        $pattern = "/@\w+=\w+\n/";
        preg_match_all($pattern, $text, $matches);
        return (count($matches) > 0 ? $matches : null);
    }

}
