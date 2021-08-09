<?php 
  require_once '../includes/branched/config.php'; 
  include_once '../includes/branched/protected.php';
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

<div class="callout large">
      <div class="text-center">
        <p class="ertext">ER Diagram for <?php echo $appName;?></p>
      </div>
    </div>

    <article class="grid-container">
      <div class="grid-x align-center">
        <div class="cell medium-8">
          <div class="blog-post">
            <h3><a href="https://github.com/FrankoVekic/cyberX-game-shop/blob/master/db.sql" target="blank">ER diagram</a></h3>
            <img class="thumbnail" src="../diagram.jpg">
            <code><br>drop database if exists game_shop;<br>
                  create database game_shop;<br>
                  use game_shop;<br>
                  
                  <hr>

                  create table game(<br>
                  id int not null primary key auto_increment,<br>
                  name varchar(300),<br>
                  price decimal(18,2),<br>
                  description varchar(300),<br>
                  quantity int(11) NOT NULL,<br>
                  memory_required int not null,<br>
                  max_players int,<br>
                  console varchar(50),<br>
                  game_image varchar(100) not null<br>
                  );<br>
                 
                  <hr>

                  create table users (<br>
                  id int not null primary key auto_increment,<br>
                  firstname varchar(30) not null,<br>
                  lastname varchar(30) not null,<br>
                  username varchar(40) not null,<br>
                  email varchar(50) not null,<br>
                  password varchar(100) not null<br>
                  );
                  <hr>
                  <br>
                  create table orders (<br>
                  id int not null primary key auto_increment,<br>
                  buyer int,<br>
                  order_date datetime,<br>
                  order_state varchar(100)<br>
                  );
                  <br>
                  <hr>
                  create table game_order (<br>
                  id int not null primary key auto_increment,<br>
                  orders int not null,<br>
                  game int not null,<br>
                  quanitity int<br>
                  );
                  <hr>
                  <br>
                  alter table game_order add foreign key (game) references game(id);<br>
                  alter table game_order add foreign key (orders) references orders(id);<br>
                  alter table orders add foreign key (buyer) references users(id);<br>
                  </code>
                  <br>
            <div class="callout">
              <ul class="menu simple">
                <li><a href="#">Author: Franko Vekic</a></li>
              </ul>
            </div>
          </div>
        </div>
      </article>
        <?php require_once '../includes/branched/footer.php';
              require_once '../includes/branched/javascript.php'; ?>
  </body>
</html>