<?php 

function siteProtection ($appLink)
{
    if(!isset($_SESSION['authorisation'])){
        header('location:' . $appLink . 'pages/index.php');
        exit();
    }
}