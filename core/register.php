<?php 

include_once '../includes/branched/config.php';
include_once 'Config.php';


if(isset($_POST['register']))
{
    $conn = Config::connect();
    $firstname = strtolower(trim($_POST['firstname']));
    $lastname = strtolower(trim($_POST['lastname']));
    $username = strtolower(trim($_POST['username']));
    $email = strtolower(trim($_POST['email']));
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwdrepeat'];
 
    if(emptyInput($firstname,$lastname,$username,$email,$password,$passwordRepeat)){
        header("location:" . $appLink . "pages/register.php?error=emptyInput");
        exit();
    }
    else if(correctInput ($username)!==false){
        header("location:" . $appLink . "pages/register.php?error=incorrectInput");
        exit();
    }
    else if(samePwd ($password,$passwordRepeat)!==false){
        header("location:" . $appLink . "pages/register.php?error=passwords_not_matching");
        exit();
    }
    else if(pwdStrength ($password)!==false){
        header("location:" . $appLink . "pages/register.php?error=weak_password");
        exit();
    }
    else if(chekcUsername($conn,$username,$email)!==false){
        header("location:" . $appLink . "pages/register.php?error=userExists");
        exit();
    }
    else if(chekcEmail($conn,$email)!==false){
        header("location:" . $appLink . "pages/register.php?error=emailExists");
        exit();
    }
    else {
    if (registerUser($conn,$firstname,$lastname,$username,$email,$password));
    {   
        $_SESSION['msg'] = "You successfully registered.";
        $_SESSION['type'] = "success";
        header("location:" . $appLink . "pages/login.php?register=success");
        exit();
        }
    }
}
function hashPw($password){
    $hashedPw = password_hash($password,PASSWORD_DEFAULT);
    return $hashedPw;
}

function chekcUsername($conn,$username){
    $query = $conn->prepare("SELECT * FROM users WHERE username=:username");
    $query->bindParam(":username",$username);
    $query->execute();
    if($query->rowCount()>0){
        return true;
    }
    else {
        return false;
    }
}

function chekcEmail($conn,$email){
    $query = $conn->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam(":email",$email);
    $query->execute();
    if($query->rowCount()>0){
        return true;
    }
    else {
        return false;
    }
}

function registerUser($conn,$firstname,$lastname,$username,$email,$password)
{
 $query = $conn->prepare("
    INSERT INTO users (firstname,lastname,username,email,password)
    VALUES(:firstname,:lastname,:username,:email,:password)
 ");

 $query->bindParam(":firstname",$firstname);
 $query->bindParam(":lastname", $lastname);
 $query->bindParam(":username",$username);
 $query->bindParam(":email",$email);
 $query->bindParam(":password",hashPw($password));

 return $query->execute();
}