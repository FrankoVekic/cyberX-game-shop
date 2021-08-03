<?php 

function emptyInput($firstname,$lastname,$username,$email,$password,$passwordRepeat){

    if(empty($firstname) || empty($lastname) || empty($username) ||empty($email) ||empty($password) || empty($passwordRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function correctInput ($username)
{   
    if(!preg_match("/^[a-zA-Z0-9]*$/" , $username)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function samePwd ($password,$passwordRepeat)
{
    if($password != $passwordRepeat){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function pwdStrength ($password)
{
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if(!$uppercase || !$lowercase || !$number || strlen($password) < 6){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyInputlogin($username,$password)
{
    if(empty($username) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}