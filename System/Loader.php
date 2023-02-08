<?php

class System_Loader {
    
    protected static $indexPath;

    public static function setIndexPath($indexPath) {
        self::$indexPath = $indexPath;
    }

    public static function getIndexPath() {
        return self::$indexPath;
    }
}