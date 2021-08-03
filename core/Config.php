<?php 
$appName = 'CyberX Games';
$appLink = 'http://mojaaplikacija.xyz/';

class Config {
    
    public static function connect ()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbName = "game_shop";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbName",$username,$password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

        }catch(PDOException $e)
        {
            echo "Connection failed" . $e->getMessage();
        }
        return $conn;
    }
}