drop database if exists game_shop;
create database game_shop;
use game_shop;

create table game(
id int not null primary key auto_increment,
name varchar(300) not null,
price decimal(18,4) not null,
description varchar(300),
memory_required int not null,
max_players int,
console varchar(50) not null,
game_image varchar(100) not null
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

insert into game (name,price,memory_required,console,game_image) values 
('Apex Legends',29.99,22,'PC&PS4','/includes/images/buy/apex.jpg'),
('AC Valhalla',59.99,50,'PC','/includes/images/buy/acval.jpg'),
('Biomutant',49.99,25,'PC','/includes/images/buy/biomutant.jpg'),
('Cyber Punk',59.99,70,'PC','/includes/images/buy/cyberpunk.jpg'),
('Hitman 3',49.99,40,'PC','/includes/images/buy/hitman3.jpg'),
('AC Odyssey',59.99,55,'PC&PS4','/includes/images/buy/acody.png'),
('Days Gone',59.99,65,'PC&PS4','/includes/images/buy/daysgone.jpg'),
('Froza',59.99,30,'PC','/includes/images/buy/forza.jpg'),
('Halo Infinite',49.99,50,'PC','/includes/images/buy/haloinfinite.jpg'),
('Inertial Drift',39.99,30,'PC&PS4','/includes/images/buy/inertial.jpg'),
('New World',35.99,45,'PC','/includes/images/buy/newworld.jpg'),
('Ashen',29.99,35,'PC','/includes/images/buy/ashen.jpg'),
('Minecraft',10.99,20,'PC','/includes/images/buy/minecraft.jpg'),
('Overwatch',59.99,60,'PC','/includes/images/buy/overwatch.jpg'),
('RDR II',49.99,70,'PC','/includes/images/buy/reddead.jpg'),
('Resident Evil III',39.99,50,'PC&PS4','/includes/images/buy/revil.jpg'),
('Mass Effect',64.99,65,'PC','/includes/images/buy/mef.jpg'),
('Fallout 76',43.99,45,'PC','/includes/images/buy/fallout.png'),
('Dying Light 2',49.99,50,'PC&PS4','/includes/images/buy/dyinglight.jpg'),
('Far Cry 6',69.99,70,'PC','/includes/images/buy/fc6.png'),
('Age of Empires',39.99,40,'PC','/includes/images/buy/ageofem.jpg'),
('The Medium',49.99,35,'PC&PS4','/includes/images/buy/medium.jpg'),
('Little Nightmares',20.99,25,'PC&PS4','/includes/images/buy/littlenightmares.png'),
('Vampyr',28.30,35,'PC','/includes/images/buy/vampyr.jpg'),
('Evil Genius 2',42.99,25,'PC','/includes/images/buy/evilgen.jpg'),
('Outriders',35.99,50,'PC','/includes/images/buy/outsiders.jpg'),
('It Takes Two',49.99,45,'PC','/includes/images/buy/ittakestwo.png'),
('Valheim',39.99,40,'PC&PS4','/includes/images/buy/Valheim.jpg'),
('Scorn',42.99,60,'PC','/includes/images/buy/Scorn.jpg'),
('Battlefield V',59.99,80,'PC&PS4','/includes/images/buy/bf5.jpg'),
('Doom',49.99,50,'PC','/includes/images/toprated/doom.jpg'),
('Fifa 20',59.99,50,'PC&PS4','/includes/images/toprated/fifa20.png'),
('Fallout 4',49.99,60,'PC','/includes/images/toprated/fallout.jpg'),
('Crysis 3',39.99,60,'PC','/includes/images/toprated/crysis3.jpg'),
('Ark II',79.99,70,'PC','../includes/images/upcoming/ark2.jpg'),
('Gotham Knights',89.99,75,'PC','../includes/images/upcoming/batman.jpg'),
('Callisto Protocol',100,80,'PC','../includes/images/upcoming/callisto.jpg'),
('Gran Turismo 7',89.99,65,'PC','../includes/images/upcoming/gt7.jpg'),
('Splatoon 3',49.99,40,'PC&PS4','../includes/images/upcoming/splatoon.jpg'),
('Forspoken',79.99,60,'PC','../includes/images/upcoming/forespoken.jpg');