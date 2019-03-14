<?php

function autoload($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.class.php';

    $classfile = dirname(__FILE__).DIRECTORY_SEPARATOR."class".DIRECTORY_SEPARATOR.$file;
    $objetfile = dirname(__FILE__).DIRECTORY_SEPARATOR."objets".DIRECTORY_SEPARATOR.$file;

    if (file_exists($classfile)) {
        require dirname(__FILE__).DIRECTORY_SEPARATOR."class".DIRECTORY_SEPARATOR.$file;
        return true;
    }else if (file_exists($objetfile)){
        require dirname(__FILE__).DIRECTORY_SEPARATOR."objets".DIRECTORY_SEPARATOR.$file;
        return true;
    }
    return false;
}

spl_autoload_register("autoload");