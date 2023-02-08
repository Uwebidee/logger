<?php
$indexPath = str_replace('\\', '/',realpath(__DIR__) . DIRECTORY_SEPARATOR);
// Load the autoloader
require_once $indexPath . 'autoloader.php';
// Create Indexpath
System_Loader::setIndexPath($indexPath);


$array = array(
    'zjdjdtjdztjzdtjd5tjdtzjdjzdtjjf' => 'zjfjtfzjfjtjtfjtzjtzj',
    'zjdjdtjdztj1zdtjdfgbfxbtjdtzjdjzdtjjf' => 'zjfjtfzjfjtjtfjtzjtzj', 
    'zjdjdtjd2ztjzdtjdtbfgbgfjdtzjdjzdtjjf' => 'zjfjtfzjfjtjtfjtzjtzj',
    'zjdjdtjdz3tjzdtjdtjdbfgxbtzjdjzdtjjf' => 'zjfjtfzjfjtjtfjtzjtzj',
    'zjdjdtjdztj4zdtjdtjdtzbgfbgfbgfbgfjdjzdtjjf' => 'zjfjtfzjfjtjtfjtzjtzj'
);


//  Simple Logger set only MSG (DEFALULT is DEBUG)
System_Log_Logger::simplelog(msg: 'This is a Test for the Simple Logger!');

// You can change the Logger Type to everything you want, in this example it is an array
System_Log_Logger::simplelog(type: 'ARRAY', msg: $array);

// You can change the path to the File. DEFAULT ist /log/simplelog/
System_Log_Logger::simplelog(type: 'New Path', msg: 'Her ist the new Path tot the File', path: '/log/newPath/');

// To save the IP Address from the Users you can can activate this function
System_Log_Logger::simplelog(type: 'IP', ip: true);

