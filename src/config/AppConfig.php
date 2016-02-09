<?php
class AppConfig
{
    public static $connection;



    public static function initConfig()
    {
        if (null == self::$connection) {

            self::$connection = parse_ini_file(__DIR__ . "/config.ini", 1);
        }
    }

    function __construct()
    {
        self::initConfig();
    }

}