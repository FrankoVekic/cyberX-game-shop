<?php 

    require_once 'config.php';

    $account = false;

    foreach($users as $email=>$password){
        if($email ===$_POST['email'] && $password ===$_POST['password']){
            $account = true;
            break;
        }
    }

    if($account){
        $_SESSION['authorisation'] = $_POST['email'];

        header('location:' . $appLink . 'pages/privateHome.php');
        exit();
    }
    else {
        header('location' . $appLink . 'pages/index.php');
    }