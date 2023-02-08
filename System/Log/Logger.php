<?php

class System_Log_Logger
{
    protected static $dateFormat = 'd-m-Y'; 

    // Simplelelog
    public static function simplelog($type = 'DEBUG', $msg = '', $path = '/log/simplelog/', $ip = false) {
        System_Log_Log::getInstance('Logfile')
                ->prepare(
                    date('H:i:s') . "\t" . "[" . $type . "]" . "\t" . ($ip==true ? $_SERVER["REMOTE_ADDR"]:'') . "\t" . "\t" . json_encode($msg) . "\t" .
                        'URL: ' . $_SERVER['REQUEST_URI'] . "\t" . PHP_EOL, realpath(System_Loader::getIndexPath() . self::checkDIR($path)), date(self::$dateFormat) . '.txt'
                )
                ->save();
    }
    
    //  Test and create folder/s
    protected static function checkDIR($folder) {
        $dir = realpath(System_Loader::getIndexPath()) . $folder;
        if (!file_exists($dir)) {
           mkdir($dir, 0755, true);
        }
        return $folder;
    }
}
