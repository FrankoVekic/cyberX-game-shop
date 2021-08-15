<?php 
 require_once 'config.php';

function siteProtected($appLink){

if(!isset($_SESSION['username']) && !isset($_SESSION['admin'])){
    header("location:" . $appLink ."index.php");
    exit();
    }
}

function adminProtection($appLink){
    if(!isset($_SESSION['admin'])){
        header("location:" . $appLink ."pages/privateHome.php");
        exit();
        }
    }
