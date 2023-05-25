<?php

class HTML{

    public $version = 5;
    public $doctype = "<!Doctype html>";

    public function openTag($tag, $attributes = []){
        $attrSt = [];
        foreach ($attributes as $fields => $value){
            $attrSt[] = $fields .  "='" . $value . "'";
        }
        $attrStr = implode(',',$attrSt);
        echo  "<$tag $attrStr>";
        var_dump($attrStr);
    }

    public function closeTag($tag){
        echo  "<$tag/>";
    }


}