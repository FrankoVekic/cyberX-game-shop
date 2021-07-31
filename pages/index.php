<?php 
  require_once '../includes/branched/config.php'; 
  if(isset($_SESSION['authorisation'])){
      header('location:' . $appLink . 'pages/privateHome.php');
      exit();
  }
?>
<html class="no-js" lang="en">
  <head>
   <?php
  require_once '../includes/branched/head.php';
    ?>
  </head>
  <body>
  <div class="content">
   <?php 
  require_once '../includes/branched/header.php';
   ?>
   <div class="content1">
        <h1><?=$appName;?></h1>
        <h2>where the magic happens.</h2>
        <a href="register.php" class="button">Register</a>
    </div>
  </div>
  <?php 
    require_once '../includes/branched/footer.php';
    require_once '../includes/branched/javascript.php'; 
  ?>
  </body>
</html>