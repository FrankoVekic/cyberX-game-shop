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
    <form action="../core/register.php" method="POST">
    <div class="row">
         <div class="large-12 columns">
             <input type="text" name="firstname" placeholder="Firstname" />
         </div>
       </div>
       <div class="row">
         <div class="large-12 columns">
             <input type="text" name="lastname" placeholder="Lastname" />
         </div>
       </div>
      <div class="row">
         <div class="large-12 columns">
             <input type="text" name="username" placeholder="Username" />
         </div>
       </div>
       <div class="row">
         <div class="large-12 columns">
             <input type="text" name="email" placeholder="Email" />
         </div>
       </div>
       <div class="row">
         <div class="large-12 columns">
             <input type="password" name="pwd" placeholder="Password" />
         </div>
       </div>
      <div class="row">
         <div class="large-12 columns">
             <input type="password" name="pwdrepeat" placeholder="Confirm Password" />
         </div>
      </div>
      <div class="row">
        <div class="large-12 large-centered columns">
          <input type="submit" name="register" class="button expand" value="Register"/>
          <p><a href="#">Already have an account?</a></p>
        </div>
      </div>
      <?php 
        if(isset($_GET['error'])){
          if($_GET['error'] == 'error=emptyInput'){
            echo '<p class="errortext">All fields must be entered!</p>';
          }
          else if($_GET['error'] == 'incorrectInput'){
            echo '<p class="errortext">Username is invalid.</p>';
          }
          else if($_GET['error'] == 'passwords_not_matching'){
            echo '<p class="errortext">Passwords do not match.</p>';
          }
          else if($_GET['error'] == 'weak_password'){
            echo '<p class="errortext">The password must contain at least 6 characters, one uppercase letter, one lowercase letter and one number.</p>';
          }
          else if($_GET['error'] == 'userExists'){
            echo '<p class="errortext">Username is already in use!</p>';
          }
          else if($_GET['error'] == 'emailExists'){
            echo '<p class="errortext">Email is already in use!</p>';
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