
<?php

define('key', 'iamtherealdude');
define('algorithm', 'HS256');
define('dbname', 'lottery');
// online Host******************************************************
// define('HOST', 'http://www.easyopen1573.com');

// offline Host******************************************************
define('HOST', 'http://192.168.199.120'); 




require __DIR__.'/../core/includes.php';
require __DIR__.'/../core/include.php';
// 

 Config::init();



 spl_autoload_register(function ($className) {
    $className = ltrim($className, '\\'); // Remove leading backslash
    $fileName = '';
    $namespace = '';

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $namespacePath = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        $fileName = $namespacePath;
    }

    // Define the base directories where classes are stored
    $classPaths = [
        realpath(__DIR__ . '/../core/') . DIRECTORY_SEPARATOR,
        realpath(__DIR__ . '/../app/model') . DIRECTORY_SEPARATOR,
        realpath(__DIR__ . '/../app/view') . DIRECTORY_SEPARATOR,
        realpath(__DIR__ . '/../app/controller') . DIRECTORY_SEPARATOR,
       
    ];

    // Loop through class paths and try to load the class
    foreach ($classPaths as $classPath) {
        $fullFilePath = $classPath . $className . '.php';
        if (file_exists($fullFilePath)) {
            require $fullFilePath;
            return;
        }
    }

   



    // ******************************************  Defining some constants ****************************************** //


    // Class file not found, trigger an error
    trigger_error("Class $className not found", E_USER_ERROR);



    // 
});

