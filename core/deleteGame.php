<?php 
require_once 'Config.php';
require_once '../includes/branched/config.php';

$conn = Config::connect();

if(isset($_GET['action'])){
    if($_GET["action"] == "delete"){
        $id = $_GET['id'];
        $query = $conn->prepare("DELETE FROM game WHERE id =".$id.";");
        $query->execute();
        $_SESSION['msg']="Game successfully deleted from database!";
        $_SESSION['type']="alert";
        header('location:' . $appLink . 'pages/adminTable.php');
    }    
}