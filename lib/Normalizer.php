<?php

class Normalizer
{

    public function normalizer($object, $metadata)
    {
        $config = $metadata->getConfiguration();
        $intermediateObject = [];
        
        foreach ($config as $methodname->$outputname) {
            $value = $inputobject->$methodname();
            $intermediateObject[$outputname]->value;
            return $intermediateObject;
        }
    }
}