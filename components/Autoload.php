<?php

/**
 * Функция __autoload для автоматического подключения классов
 */
spl_autoload_register(function ($class_name) {
    $array_paths = array(
        '/models/',
        '/components/',
        '/controller/',
    );

    foreach ($array_paths as $path){
        $path = ROOT. $path . $class_name . '.php';
        if(is_file($path)){
            include_once $path;
        }
    }
});
//spl_autoload_register('__autoload');


