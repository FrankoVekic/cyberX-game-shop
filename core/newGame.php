<?php 
require_once 'Config.php';


$conn = Config::connect();

if(isset($_POST['upload'])){

    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $quantity = $_POST['quantity'];
    $memory = $_POST['memory_required'];
    $console = $_POST['console'];
    $desc = $_POST['description'];
    $image = $_FILES['image'];
    
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location, $PATH . $image_name);

 if(newGame($conn,$name,$price,$desc,$quantity,$memory,$console,$image_name)){
    header("location:" . $appLink . "pages/adminTable.php?upload=success");
    exit();
   }
}

function newGame($conn,$name,$price,$desc,$quantity,$memory,$console,$image_name){
    $query = $conn->prepare("
    INSERT INTO game (name,price,description,quantity,memory_required,console,image)
    VALUES('$name',$price,'$desc',$quantity,$memory,'$console','$image_name');");

   return $query->execute();
}