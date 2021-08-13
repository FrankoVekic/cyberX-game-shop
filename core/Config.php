<?php 

$appName = 'CyberX Games';
$appLink = 'http://mojaaplikacija.xyz/';
$PATH = "D:/pp23/mojaaplikacija.xyz/includes/images/buy/";
$BUY_PATH = "../includes/images/buy/";
$TOP_RATED = "/includes/images/toprated/";
$UPCOMING = "/includes/images/upcoming/";

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