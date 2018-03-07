<?php
namespace lib\Serialize;

class Serializer {
    public function serialize($associativeArray, $format){
        if(strtolower($format)=="json"){
            return json_encode($associativeArray);
        }
        if(strtolower($format)=="phpnative"){
            return serialize($associativeArray);
        }
    }
}

