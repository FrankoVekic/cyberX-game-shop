<?php 
  require_once '../includes/branched/config.php'; 
  require_once '../includes/branched/protected.php';
  require_once '../core/Config.php';
  require_once '../core/newGame.php';
  require_once '../core/findGames.php';
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
   ?>
<div class="row justify-content-center">
<table class="responsive-card-table unstriped">
    <thead>
      <tr>
        <th>Image</th>
        <th>Game</th>
        <th>Price</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Memory required</th>
        <th>Console</th>
        <th>Action</th>
      </tr>
      <?php foreach ($gamesnew as $value): ?>
        <tr>
            <td><img class="adminimg" src="<?=$BUY_PATH.$value['image']?>" ></td>
            <td class="text-center"><?php echo $value['name'] ?></td>
            <td class="text-center">$<?php echo number_format($value['price'],2) ?></td>
            <td class="text-center"><?php echo $value['description']?></td>
            <td class="text-center"><?php echo $value['quantity'] ?></td>
            <td class="text-center"><?php echo $value['memory_required']?>GB</td>
            <td class="text-center"><?php echo $value['console']?></td>
            <td class="text-center"><button type="submit" name="change" class="button">Change</button></td>
            </form>
          </tr>
          <?php endforeach; ?>
    </thead>
</table>
</div>
  <div class="updateForm">
   <div class="grid-container">
   <div class="grid-x grid-padding-x align-center">
    <form action="../core/newGame.php" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" placeholder="Enter game name">
    <label>Price:</label>
    <input type="text" name="price" placeholder="Enter price">
    <label>Quantity:</label>
    <input type="number" name="quantity" placeholder="Enter quanity">
    <label>Memory required:</label>
    <input type="number" name="memory_required" placeholder="Enter memory required">
    <label>Console:</label>
    <input type="text" name="console" placeholder="Enter console">
    <label>Description:</label>
    <input type="text" name="description" placeholder="Enter description">
    <input type="file" name="image" placeholder="Upload game image">
    <button type="submit" name="upload" class="button">Upload</button>
</form>
   </div>
</div>
</div>
<?php require_once '../includes/branched/footer.php';
      require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>