<?php 

require_once 'Config.php';
require_once '../includes/branched/config.php';
require_once '../core/findGames.php';

$conn = Config::connect();
$id=0;

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $memory = $_POST['memory_required'];
    $console = strtoupper($_POST['console']);
    $desc = $_POST['description'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location, $PATH . $image_name);

if(empty($name) || empty($price) || empty($quantity) || empty($memory) || empty($console) || empty($desc) || empty($image)){
   $_SESSION['msg']="All fields must be filled!";
   $_SESSION['type']="alert";
   header("location:" . $appLink . "pages/adminTable.php?upload=error");
    exit();
}


 if(newGame($conn,$name,$price,$desc,$quantity,$memory,$console,$image_name)){
    $_SESSION['msg']="Game successfully added to database!";
    $_SESSION['type']="success";
    header("location:" . $appLink . "pages/adminTable.php?upload=success");
    exit();
 }
}
if(isset($_POST['cancel'])){
   header("location:" . $appLink . "pages/adminTable.php");
    exit();
}

if(isset($_POST['save'])){
   $id = $_POST['id'];
   $ename = $_POST['name'];
   $eprice = $_POST['price'];
   $equantity = $_POST['quantity'];
   $ememory = $_POST['memory_required'];
   $econsole = $_POST['console'];
   $edesc = $_POST['description'];
   $eimage = $_FILES['image'];
   $eimage_location = $_FILES['image']['tmp_name'];
   $eimage_name = $_FILES['image']['name'];
   move_uploaded_file($image_location, $PATH . $image_name);
   if(empty($eimage_name)){
      $eimage_name = $_POST['oldimage'];
   }
   if(updateGame($conn,$ename,$eprice,$edesc,$equantity,$ememory,$econsole,$eimage_name,$id)){
      header("location:" . $appLink . "pages/adminTable.php?change=success");
      move_uploaded_file($image_location, $PATH . $eimage_name);
      $_SESSION['msg']="Game successfully changed!";
      $_SESSION['type']="primary";
       exit();
   }
}

function newGame($conn,$name,$price,$desc,$quantity,$memory,$console,$image_name){
   $query = $conn->prepare("
   INSERT INTO game (name,price,description,quantity,memory_required,console,image)
   VALUES('$name',$price,'$desc',$quantity,$memory,'$console','$image_name');");

  return $query->execute();
}

function updateGame($conn,$name,$price,$desc,$quantity,$memory,$console,$eimage_name,$id){
  $query = $conn->prepare(" UPDATE game SET name = '$name', price=$price,description='$desc',
  quantity=$quantity,memory_required=$memory,console='$console',image='$eimage_name' WHERE id=$id;
  ");
  return $query->execute();
}