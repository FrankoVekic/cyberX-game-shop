<?php 
require_once 'Config.php';
require_once '../includes/branched/config.php';

$conn = Config::connect();  

    $game_name = '';
    $game_price = '';
    $game_desc = '';
    $game_quantity = '';
    $game_memory = '';
    $game_console = '';
    $game_image = '';
    $change = false;
    $id=0;

if(isset($_GET['action'])){
    if($_GET['action'] == "change"){
        $change = true;
        $id=$_GET['id'];
        $query = $conn->prepare("SELECT * FROM game WHERE id = $id;");
        $query->execute();
        $games = $query->fetch();

        if(!$games){
            header('location:' . $appLink . 'pages/adminTable.php?action=error');
            exit();
        }
        else {
            $game_name = $games['name'];
            $game_price = round($games['price']);
            $game_desc = $games['description'];
            $game_quantity = round($games['quantity']);
            $game_memory = $games['memory_required'];
            $game_console = $games['console'];
            $game_image = $games['image'];
        }
    }
}