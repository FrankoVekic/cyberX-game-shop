<?php 
  require_once '../includes/branched/config.php'; 
  require_once '../core/Config.php';
  require_once '../core/findGames.php';
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
      <hr>
    <article class="grid-container">
    <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-6">
    <?php foreach ($games as $product): ?>
        <div class="cell">
            <img class="thumbnail" src="<?=$product['game_image']?>" alt="<?=$product['name']?>">
            <h5><?=$product['name']?></h5>
            <p>$<?=$product['price']?></p>
            <?php 
            if(!isset($_SESSION['username'])){ 
              echo '';
            }
            else { ?>
            <form action="cart.php?action=game&id=<?=$product['id']?>" method="POST">
              <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
              <input type="hidden" name="hidden_name" value="<?=$product['name']?>">
              <input type="hidden" name="hidden_price" value="<?=$product['price']?>">
              <input type="hidden" name="hidden_console" value="<?=$product['console']?>">
              <input type="hidden" name="hidden_image" value="<?=$product['game_image']?>">
              <button type="submit" name="add_to_cart" class="button expanded"><i class="fi-shopping-cart"></i>Add to Cart</button>
            </form>
        <?php }
            ?>
            </div>
        <?php endforeach; ?>
      <hr>
      <div class="grid-x grid-margin-x">
          <div class="medium-6 cell">
            <h3>Don't see the game you are looking for?</h3>
            <p>You can very easily order the game if we do not have it in the store. Write us the name of the game and for which console you want it. We will do our best to get it as soon as possible. The approximate feedback time is one week. Leave us your contact details.</p>
          </div>
          <div class="medium-6 cell">
            <label>Name
              <input type="text" placeholder="Name">
            </label>
            <label>Email
              <input type="text" placeholder="Email">
            </label>
            <label>
              Message
              <textarea placeholder="Message"></textarea>
            </label>
            <input type="submit" class="button expanded" value="Submit">
          </div>
        </div>
      </article>
    </div>
          <?php 
          require_once '../includes/branched/footer.php';
          require_once '../includes/branched/javascript.php'; 
          ?>
      </body>
</html>