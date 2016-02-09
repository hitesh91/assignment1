<?php
include "../config/AppConfig.php";
class ConnectionUtils
{
    private static $dbConn;

    public static function getDbConnection()
    {
        AppConfig::initConfig();

        return self::$dbConn = mysqli_connect(AppConfig::$connection["mysql"]["host"], AppConfig::$connection["mysql"]["user"], AppConfig::$connection["mysql"]["password"], AppConfig::$connection["mysql"]["dbname"]);
    }

}