<div class="title-bar" data-responsive-toggle="mainNavigation" data-hide-for="large">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
        <div class="title-bar-title">Menu</div>
      </div>
        <div class="top-bar-right">
          <ul class="menu">
              <li><input type="search" placeholder="Search"></li>
              <li><button type="button" class="button">Search</li>
          </ul>
        </div>
      </div>
    <div class="top-bar" id="mainNavigation">
      <div class="top-bar-left hide-for-small-only">
        <ul class="menu vertical medium-horizontal hide-for-medium-only">
          <li class="menu-text show-for-large-up"><?php echo $appName?>
              <li><input type="search" placeholder="Search"></li>
              <li><button type="button" class="button">Search</li>
          </li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu vertical medium-horizontal">
          <li><a href="<?php echo $appLink; ?>pages/privateHome.php"><i class="fi-home"></i>Home</a></li>
          <li><a href="<?php echo $appLink; ?>pages/games.php"><i class="fi-puzzle"></i>Games</a></li>
          <?php if(isset($_SESSION['authorisation'])){
             echo '<li><a href="http://mojaaplikacija.xyz/pages/cart.php"><i class="fi-shopping-cart"></i>Cart</a></li>';
             echo '<li><a href="http://mojaaplikacija.xyz/pages/erdiagram.php"><i class="fi-graph-trend"></i>ER Diagram</a></li>';
             echo '<li><a href="http://mojaaplikacija.xyz/pages/aboutus.php"><i class="fi-torsos-all"></i>About Us</a></li>';
             echo '<li><a href="http://mojaaplikacija.xyz/pages/logout.php"><i class="fi-power"></i>Logout</a></li>';
            
          } 
          else {
            echo '<li><a href="http://mojaaplikacija.xyz/pages/aboutus.php"><i class="fi-torsos-all"></i>About Us</a></li>';
            echo '<li><a href="http://mojaaplikacija.xyz/pages/login.php"><i class="fi-pencil"></i>Login</a></li>';
          }  ?>
        </ul>
      </div>
    </div>