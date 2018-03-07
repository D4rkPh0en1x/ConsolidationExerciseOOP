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

class user{
    public function firstname(){
        return 'firstname';
    }
    
    public function nickname(){
        return 'nickname';
    }
}

$object = new user();

$meta = new Metadata(['firstname'=>'Frank', 'nickname'=>'D4rkPh0en1x']);

$norm = new Normalizer();

$ser = new Serializer();
$serJSON = $ser->serialize($norm->normalizer($object, $meta), 'json');
var_dump($serJSON);
echo "\n";
$serPHP = $ser->serialize($norm->normalizer($object, $meta), 'phpnative');
var_dump($serPHP);

