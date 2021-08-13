<?php 
  require_once '../includes/branched/config.php'; 
  include_once '../includes/branched/protected.php';
  require_once '../core/Config.php';
  siteProtected($appLink);
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
  require_once '../core/cart-inc.php';
   ?>
   
<table class="responsive-card-table unstriped">
    <thead>
      <tr>
        <th></th>
        <th>Game</th>
        <th>Price</th>
        <th>Console</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
      <?php 
        if(!empty($_SESSION['shopping_cart'])){
            $total=0;
          foreach($_SESSION['shopping_cart'] as $games => $value)
          {?>
        <tr>
            <td><?php echo '<img class="cartimg" src="' .$BUY_PATH .''.$value['game_image']. '"'; ?></td>
            <td class="text-center"><?php echo $value['game_name'] ?></td>
            <td class="text-center">$<?php echo $value['game_price'] ?></td>
            <td class="text-center"><?php echo $value['game_console']?></td>
            <form method="POST" action="../core/update.php">
            <td class="text-center"> <?php echo $value['game_quantity'] ?></td>
            <td class="text-center">$<?php echo number_format($value['game_quantity'] * $value['game_price'],2)?></td>
            <td class="text-center"><button type="submit" name="update" class="button">Update</button><br><br><a href="cart.php?action=delete&id=<?php echo $value['game_id'];?>"><span>Remove</span></a></td>
            </form>
          </tr>
        <?php
        $total = $total + ($value['game_quantity'] * $value['game_price']);
          }
          ?>
          
          <td colspan="5" class="text-left"><a href="cart.php?action=clear"><span>Clear</span></a></td>
          <td class="text-center">$<?php echo number_format($total,2); ?></td>
          <td class="text-center"><a href="cart.php?action=checkout"><span>Checkout</span></a></td>
          <?php
        }
      ?>
    </thead>
</table>
        <?php require_once '../includes/branched/footer.php';
              require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>