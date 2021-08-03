<?php 
 require_once 'config.php';

function siteProtected($appLink){

if(!isset($_SESSION['username'])){
    header("location: ../index.php");
    exit();
    }
}