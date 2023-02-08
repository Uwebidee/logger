<?php

class System_Log_Logfile implements System_Log_LogInterface 
{

    public function prepare($args) {

        $vars['content'] =  $args[0];
        $vars['path'] = isset($args[1]) ? $args[1] : realpath(System_Loader::getIndexPath() . '/log/');
        $vars['filename'] = isset($args[2]) ? 'log_' . $args[2] : 'log_' . date('Y-m-d') . '.txt';
        return $vars;
    }
    public function save($vars) {
        $path = $vars['path'];
        $filename = $vars['filename'];
        $content = $vars['content'];
        $realPath = realpath($path) . DIRECTORY_SEPARATOR . $filename;
        $file = fopen($realPath, 'a+');
        fwrite($file, $content);
        fclose($file);

        return true;
    }

}
