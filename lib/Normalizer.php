<?php

class Normalizer
{

    public function normalizer($object, $metadata)
    {
        $config = $metadata->getConfiguration();
        $intermediateObject = [];
        
        foreach ($config as $methodname => $outputname) {
            $value = $object->$methodname();
            $intermediateObject[$outputname] = $value;
        }
        return $intermediateObject;
    }
}