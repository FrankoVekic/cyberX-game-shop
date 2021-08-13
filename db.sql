drop database if exists game_shop;
create database game_shop;
use game_shop;

create table game(
id int not null primary key auto_increment,
name varchar(300) not null,
price decimal(18,2) not null,
description varchar(300),
quantity int not null,
memory_required int not null,
console varchar(50) not null,
image varchar(100) not null
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

insert into game (name,price,quantity,memory_required,console,image) values 
('Apex Legends',29.99,10,22,'PC&PS4','apex.jpg'),
('AC Valhalla',59.99,10,50,'PC','acval.jpg'),
('Biomutant',49.99,10,25,'PC','biomutant.jpg'),
('Cyber Punk',59.99,10,70,'PC','cyberpunk.jpg'),
('Hitman 3',49.99,10,40,'PC','hitman3.jpg'),
('AC Odyssey',59.99,10,55,'PC&PS4','acody.png'),
('Days Gone',59.99,10,65,'PC&PS4','daysgone.jpg'),
('Froza',59.99,10,30,'PC','forza.jpg'),
('Halo Infinite',49.99,10,50,'PC','haloinfinite.jpg'),
('Inertial Drift',39.99,10,30,'PC&PS4','inertial.jpg'),
('New World',35.99,10,45,'PC','newworld.jpg'),
('Ashen',29.99,10,35,'PC','ashen.jpg'),
('Minecraft',10.99,10,20,'PC','minecraft.jpg'),
('Overwatch',59.99,10,60,'PC','overwatch.jpg'),
('RDR II',49.99,10,70,'PC','reddead.jpg'),
('Resident Evil III',39.99,10,50,'PC&PS4','revil.jpg'),
('Mass Effect',64.99,10,65,'PC','mef.jpg'),
('Fallout 76',43.99,10,45,'PC','fallout.png'),
('Dying Light 2',49.99,10,50,'PC&PS4','dyinglight.jpg'),
('Far Cry 6',69.99,10,70,'PC','fc6.png'),
('Age of Empires',39.99,10,40,'PC','ageofem.jpg'),
('The Medium',49.99,10,35,'PC&PS4','medium.jpg'),
('Little Nightmares',20.99,10,25,'PC&PS4','littlenightmares.png'),
('Vampyr',28.30,10,35,'PC','vampyr.jpg'),
('Evil Genius 2',42.99,10,25,'PC','evilgen.jpg'),
('Outriders',35.99,10,50,'PC','outsiders.jpg'),
('It Takes Two',49.99,10,45,'PC','ittakestwo.png'),
('Valheim',39.99,10,40,'PC&PS4','Valheim.jpg'),
('Scorn',42.99,10,60,'PC','Scorn.jpg'),
('Battlefield V',59.99,10,80,'PC&PS4','bf5.jpg'),
('Doom',49.99,10,50,'PC','doom.jpg'),
('Fifa 20',59.99,10,50,'PS4','fifa20.png'),
('Fallout 4',49.99,10,60,'PC','fallout.jpg'),
('Crysis 3',39.99,10,60,'PC','crysis3.jpg'),
('Ark II',79.99,10,70,'PC','ark2.jpg'),
('Gotham Knights',89.99,10,75,'PC','batman.jpg'),
('Callisto Protocol',99.99,10,80,'PC','callisto.jpg'),
('Gran Turismo 7',89.99,10,65,'PS4','gt7.jpg'),
('Splatoon 3',49.99,15,40,'PC&PS4','splatoon.jpg'),
('Forspoken',79.99,10,60,'PC','forespoken.jpg');