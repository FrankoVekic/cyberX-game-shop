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
   <table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-table-striped">
    <thead>
      <tr>
        <th class="dcf-txt-center"></th>
        <th class="dcf-txt-center">Game</th>
        <th class="dcf-txt-center">Price</th>
        <th class="dcf-txt-center">Console</th>
        <th class="dcf-txt-center">Quantity</th>
        <th class="dcf-txt-center">Total</th>
        <th class="dcf-txt-center">Action</th>
      </tr>
    </thead>
      <?php 
        if(!empty($_SESSION['shopping_cart'])){
            $total=0;
          foreach($_SESSION['shopping_cart'] as $games => $value)
          {?>
        <tr>
            <td class="dcf-txt-center"><?php echo '<img class="cartimg" src="' .$BUY_PATH .''.$value['game_image']. '"'; ?></td>
            <td class="dcf-txt-center"><?php echo $value['game_name'] ?></td>
            <td class="dcf-txt-center">$<?php echo $value['game_price'] ?></td>
            <td class="dcf-txt-center"><?php echo $value['game_console']?></td>
            <form method="POST" action="../pages/cart.php?action=update&id=<?php echo $value['game_id'];?>">
            <td class="dcf-txt-center"><input type="number" name="newQuan" value="<?php echo $value['game_quantity'] ?>"></td>
            <td class="dcf-txt-center">$<?php echo number_format($value['game_quantity'] * $value['game_price'],2)?></td>
            <td class="dcf-txt-center"><button type="submit" name="update" class="button">Set</button><br><br><a href="cart.php?action=delete&id=<?php echo $value['game_id'];?>"><span>Remove</span></a></td>
            </form>
          </tr>
        <?php
        $total = $total + ($value['game_quantity'] * $value['game_price']);
          }
          ?>
          
          <td colspan="5" class="text-left"><a href="../pages/cart.php?action=clear&id=<?php echo $value['game_id'];?>"><span>Clear</span></a></td>
          <td class="dcf-txt-center">$<?php echo number_format($total,2); ?></td>
          <td class="dcf-txt-center"><a href="cart.php?action=checkout"><span>Checkout</span></a></td>
          <?php
        }
      ?>
    </thead>
</table>
        <?php require_once '../includes/branched/footer.php';
              require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>