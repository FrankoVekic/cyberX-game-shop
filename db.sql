drop database if exists game_shop;
create database game_shop;
use game_shop;

create table game(
id int not null primary key auto_increment,
name varchar(300),
price decimal(18,4),
description varchar(300),
version varchar(200),
memory_required int,
max_players int,
console varchar(50)
);

create table users (
id int not null primary key auto_increment,
firstname varchar(30) not null,
lastname varchar(30) not null,
username varchar(40) not null,
email varchar(50) not null,
password varchar(100) not null
);

create table orders (
id int not null primary key auto_increment,
buyer int,
order_date datetime,
order_state varchar(100)
);

create table game_order (
id int not null primary key auto_increment,
orders int not null,
game int not null,
quanitity int
);

alter table game_order add foreign key (game) references game(id);
alter table game_order add foreign key (orders) references orders(id);
alter table orders add foreign key (buyer) references users(id);