<?php

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className); 
    $directories = [
        '../Controller/',
        '../DAO/',
        '../Service/',
        '../Model/',
        '../Template/',
        '../Generic/'
    ];

    foreach ($directories as $directory) {
        $file = $directory . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }

    throw new Exception("Classe {$className} não encontrada.");
});
