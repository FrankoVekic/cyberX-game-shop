<?php 
    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['shopping_cart'])){
          $game_array_id = array_column($_SESSION['shopping_cart'],'game_id');
          if(!in_array($_GET['id'],$game_array_id)){
            $get = count($_SESSION['shopping_cart']);
            $game_array = array(
            'game_id' => $_GET['id'],
            'game_name' => $_POST['hidden_name'],
            'game_price' => $_POST['hidden_price'],
            'game_quantity' => $_POST['quantity'],
            'game_image' => $_POST['hidden_image'],
            'game_console' => $_POST['hidden_console']
            );
            $_SESSION["shopping_cart"][$get] = $game_array;
          }
        }
        else {
          $game_array = array(
            'game_id' => $_GET['id'],
            'game_name' => $_POST['hidden_name'],
            'game_price' => $_POST['hidden_price'],
            'game_quantity' => $_POST['quantity'],
            'game_image' => $_POST['hidden_image'],
            'game_console' => $_POST['hidden_console']
          );
          $_SESSION['shopping_cart'][0] = $game_array;
        }
    }

    if(isset($_GET["action"])){
      if($_GET["action"]== "delete"){
          foreach($_SESSION['shopping_cart'] as $games => $value){
            if($value['game_id'] == $_GET['id']){
                unset($_SESSION['shopping_cart'][$games]);
            }
         }
     }
}

?>