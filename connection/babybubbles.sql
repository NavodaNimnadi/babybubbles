create database babybubbles;
use babybubbles;
create table users(id INT primary key auto_increment,fullname VARCHAR(255),mail VARCHAR(255) UNIQUE,pwsd VARCHAR(255));
insert into users values(1,"Navoda Nimnadi","nimnadi@gmail.com","a123");