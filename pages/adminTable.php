<?php 
  require_once '../includes/branched/config.php'; 
  require_once '../includes/branched/protected.php';
  require_once '../core/Config.php';
  require_once '../core/newGame.php';
  require_once '../core/findGames.php';
  require_once '../core/changeGame.php';
  require_once '../core/deleteGame.php';
  siteProtected($appLink);
  adminProtection($appLink);
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
    <br>
    <div class="text-center"><h2>Order new games!</h2></div>
    <br>
<div class="row justify-content-center">
<table class="dcf-table dcf-table-responsive dcf-table-bordered">
	<thead>
		<tr>
			<th class="dcf-txt-center" scope="col">Image</th>
			<th class="dcf-txt-center" scope="col">Game</th>
			<th class="dcf-txt-center" scope="col">Price</th>
			<th class="dcf-txt-center" scope="col">Description</th>
			<th class="dcf-txt-center" scope="col">Quantity</th>
			<th class="dcf-txt-center" scope="col">Memory required</th>
			<th class="dcf-txt-center" scope="col">Console</th>
			<th class="dcf-txt-center" scope="col">Action</th>
		</tr>
	</thead>
      <?php foreach ($gamesnew as $value): ?>
        <tbody>
		<tr>
			<th class="dcf-txt-center" scope="row"><span><img class="adminimg" src="<?=$BUY_PATH.$value['image']?>" alt=":-)"></span></th>
			<td class="dcf-txt-center" data-label="Game"><span><?php echo $value['name'] ?></span></td>
			<td class="dcf-txt-center" data-label="Price"><span>$<?php echo number_format($value['price'],2) ?></span></td>
			<td class="dcf-txt-center" data-label="Description"><span><?php echo $value['description']?></span></td>
			<td class="dcf-txt-center" data-label="Quantity"><span><?php echo $value['quantity'] ?></span></td>
			<td class="dcf-txt-center" data-label="Memory required"><span><?php echo $value['memory_required']?>GB</span></td>
			<td class="dcf-txt-center" data-label="Console"><span><?php echo $value['console']?></span></td>
			<td class="dcf-txt-center" data-label="Action"><span><a href="../pages/adminTable.php?action=change&amp;id=<?=$value['id']?>" class="button" style="margin: 7px;">Change</a><hr>
            <a href="../core/deleteGame.php?action=delete&amp;id=<?=$value['id']?>" class="alert button">Delete</a>
          </span></td>
		</tr>
          <?php endforeach; ?>
          </tbody>
</table>
</div>
  <div class="updateForm">
   <div class="grid-container">
   <div class="grid-x grid-padding-x align-center">
    <form action="../core/newGame.php?action=upload" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $game_name;?>" placeholder="Enter game name">
    <label>Price:</label>
    <input type="text" name="price" value="<?php echo $game_price;?>" placeholder="Enter price">
    <label>Quantity:</label>
    <input type="number" name="quantity" value="<?php echo $game_quantity;?>" placeholder="Enter quanity">
    <label>Memory required:</label>
    <input type="number" name="memory_required" value="<?php echo $game_memory;?>" placeholder="Enter memory required">
    <label>Console:</label>
    <input type="text" name="console" value="<?php echo $game_console;?>" placeholder="Enter console">
    <label>Description:</label>
    <input type="text" name="description" value="<?php echo $game_desc;?>" placeholder="Enter description">
    <input type="hidden" name="oldimage" value="<?php echo $game_image?>">
    <input type="file" name="image" placeholder="Choose an image">
    <?php 
      if($change == true):
    ?>
    <button type="submit" name="save" class="success button">Save</button>
    <button type="submit" name="cancel" class="alert button">Cancel</button>
    <?php else: ?>
      <button type="submit" name="upload" class="button">Upload</button>
      <?php endif; ?>
</form>
   </div>
</div>
</div>
<?php require_once '../includes/branched/footer.php';
      require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>