<?php 

include_once '../includes/branched/config.php';
include_once 'Config.php';
include_once '../includes/branched/functions.php';


if(isset($_POST['login']))
{
    $conn = Config::connect();
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    if(emptyInputlogin($username,$password) !==false){
        header("location:" . $appLink . "pages/login.php?error=emptyInput");
        exit();
    }
    else {
         if(userLogin($conn,$username,$password)!==false){
            header("location: ../pages/login.php?error=loginError");
            exit();
    }
    else {
        $_SESSION['username'] = $username;
        header("location: ../pages/privateHome.php");
        exit();
        }
    }
}

function userLogin($conn,$username,$password){

    $query = $conn->prepare("SELECT * FROM users WHERE username=:username");
    $query->bindParam(":username",$username);
    $query->execute();
    $user = $query->fetch();

    if($query->rowCount() == 1 && password_verify($password,$user['password'])){
        return false;
    }
    else {
        return true;
    }
}

