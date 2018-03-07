<?php

spl_autoload_register(
    function($namespace){
        //$filename = sprintf('%s\%s.php', __DIR__, str_replace('\\', DIRECTORY_SEPARATOR, $namespace));
        //var_dump ($filename);
        $filename = $namespace . '.php';
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $filename);
        $filename = __DIR__ . DIRECTORY_SEPARATOR . $filename;
        
        if (is_file($filename)) {
            require_once $filename;
        }
        
    }
    );

use lib\Normalizer;
use lib\Serializer;
use lib\Metadata;

