create database babybubbles;
use babybubbles;
create table users(id INT primary key auto_increment,fullname VARCHAR(255),mail VARCHAR(255) UNIQUE,pwsd VARCHAR(255));
