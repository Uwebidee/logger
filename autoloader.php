<?php
/*
* Loads all classes simple
* Set the class names how it is the folder path (System_Logger <- Class | /System/logger.php <- Path)
* You can call now the classes without namespaces
*
* $test = new System_Logger();
* $test->test();
* Or static
* System_Logger::test();
*/
spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', __DIR__) . '/' . str_replace('_', '/', $class)  . '.php'; 
});