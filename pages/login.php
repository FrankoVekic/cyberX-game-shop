<?php 
  require_once '../includes/branched/config.php'; 
?>
<html class="no-js" lang="en">
  <head>
   <?php
  require_once '../includes/branched/head.php';
    ?>
  </head>
  <body>
   <?php 
  require_once '../includes/branched/header.php';
   ?>


<div class="large-3 large-centered columns">
  <div class="login-box">
  <div class="row">
  <div class="large-12 columns">
    <form action="../includes/branched/authorisation.php" method="POST">
       <div class="row">
         <div class="large-12 columns">
             <input type="text" name="email" placeholder="Email" />
         </div>
       </div>
      <div class="row">
         <div class="large-12 columns">
             <input type="password" name="password" placeholder="Password" />
         </div>
      </div>
      <div class="row">
        <div class="large-12 large-centered columns">
          <input type="submit" class="button expand" value="Log In"/>
          <p><a href="register.php">Don't have an account?</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>


<?php require_once '../includes/branched/footer.php';
              require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>