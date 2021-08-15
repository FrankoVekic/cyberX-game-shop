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
<?php if(isset($_SESSION['msg'])): ?>
    <div class="callout <?=$_SESSION['type']?>">
    <?php echo $_SESSION['msg'];
          unset($_SESSION['msg']);
    ?>
    </div>
    <?php endif; ?>
<div class="large-3 large-centered columns">
  <div class="login-box">
  <div class="row">
  <div class="large-12 columns">
    <h2 style="font-size: 45px;">Login</h2>
    <form action="../core/login.php" method="POST">
       <div class="row">
         <div class="large-12 columns">
             <input type="text" name="username" placeholder="Username" />
         </div>
       </div>
      <div class="row">
         <div class="large-12 columns">
             <input type="password" name="password" placeholder="Password" />
         </div>
      </div>
      <div class="row">
        <div class="large-12 large-centered columns">
          <input type="submit" name="login" class="button expand" value="Log In"/>
          <p><a href="register.php">Don't have an account?</a></p>
        </div>
      <div class="adminRole">
        <div class="callout primary">
        <p>Login as administrator.</p>
          <p>Username: admin@edunova.hr</p>
          <p>Password: Admin123</p>
        </div>
      </div>
    </div>
      <?php 
        if(isset($_GET['error'])){
          if($_GET['error'] == 'loginError'){
            echo '<p class="errortext">Something went wrong. Please try again!</p>';
          }
          else if($_GET['error'] == 'emptyInput'){
            echo '<p class="errortext">All fields must be entered!</p>';
          }
        }
      ?>
    </form>
  </div>
</div>
</div>
</div>
<?php require_once '../includes/branched/footer.php';
      require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>