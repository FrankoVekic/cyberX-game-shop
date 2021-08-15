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

insert into game (name,price,quantity,memory_required,console,image,description) values 
('Apex Legends',29.99,10,22,'PC&PS4','apex.jpg',null),
('AC Valhalla',59.99,10,50,'PC','acval.jpg',null),
('Biomutant',49.99,10,25,'PC','biomutant.jpg',null),
('Cyber Punk',59.99,10,70,'PC','cyberpunk.jpg',null),
('Hitman 3',49.99,10,40,'PC','hitman3.jpg',null),
('AC Odyssey',59.99,10,55,'PC&PS4','acody.png',null),
('Days Gone',59.99,10,65,'PC&PS4','daysgone.jpg',null),
('Froza',59.99,10,30,'PC','forza.jpg',null),
('Halo Infinite',49.99,10,50,'PC','haloinfinite.jpg',null),
('Inertial Drift',39.99,10,30,'PC&PS4','inertial.jpg',null),
('New World',35.99,10,45,'PC','newworld.jpg',null),
('Ashen',29.99,10,35,'PC','ashen.jpg',null),
('Minecraft',10.99,10,20,'PC','minecraft.jpg',null),
('Overwatch',59.99,10,60,'PC','overwatch.jpg',null),
('RDR II',49.99,10,70,'PC','reddead.jpg',null),
('Resident Evil III',39.99,10,50,'PC&PS4','revil.jpg',null),
('Mass Effect',64.99,10,65,'PC','mef.jpg',null),
('Fallout 76',43.99,10,45,'PC','fallout.png',null),
('Dying Light 2',49.99,10,50,'PC&PS4','dyinglight.jpg',null),
('Far Cry 6',69.99,10,70,'PC','fc6.png',null),
('Age of Empires',39.99,10,40,'PC','ageofem.jpg',null),
('The Medium',49.99,10,35,'PC&PS4','medium.jpg',null),
('Little Nightmares',20.99,10,25,'PC&PS4','littlenightmares.png',null),
('Vampyr',28.30,10,35,'PC','vampyr.jpg',null),
('Evil Genius 2',42.99,10,25,'PC','evilgen.jpg',null),
('Outriders',35.99,10,50,'PC','outsiders.jpg',null),
('It Takes Two',49.99,10,45,'PC','ittakestwo.png',null),
('Valheim',39.99,10,40,'PC&PS4','Valheim.jpg',null),
('Scorn',42.99,10,60,'PC','Scorn.jpg',null),
('Battlefield V',59.99,10,80,'PC&PS4','bf5.jpg',null),
('Doom',49.99,10,50,'PC','doom.jpg',null),
('Fifa 20',59.99,10,50,'PS4','fifa20.png',null),
('Fallout 4',49.99,10,60,'PC','fallout.jpg',null),
('Crysis 3',39.99,10,60,'PC','crysis3.jpg',null),
('Ark II',79.99,10,70,'PC','ark2.jpg',null),
('Gotham Knights',89.99,10,75,'PC','batman.jpg',null),
('Callisto Protocol',99.99,10,80,'PC','callisto.jpg',null),
('Gran Turismo 7',89.99,10,65,'PS4','gt7.jpg',null),
('Splatoon 3',49.99,15,40,'PC&PS4','splatoon.jpg',null),
('Forspoken',79.99,10,60,'PC','forespoken.jpg',null),
('Pokemon',39.99,10,40,'PC&PS4','pokemon.png','Gotta catch them all!'),
('Spider-man',59.99,10,65,'PC','spiderman.jpg','Save the city with your favorite superhero!');