<?php

namespace Core\Database\DBConnection;
use PDO;
class DBConnection
{
    private static null $dbConnectionInstance = null;

    private function __construct()
    {

    }
    public static function getDBConnectionInstance()
    {
        if (self::getDBConnectionInstance() == null) {
            $DBConnectionInstance = new DBConnection();
            self::$dbConnectionInstance = $DBConnectionInstance->dbConnection();
        }
            return self::$dbConnectionInstance;
    }

    public function dbConnection()
    {
        $servername = DBHOST;
        $username = DBUSERNAME;
        $dbname = DBNAME;
        $password = DBPASSWORD;
        try {
            $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connected';
            return $connect;
        }catch (\PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}