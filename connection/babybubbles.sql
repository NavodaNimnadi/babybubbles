create table users(userid INT primary key auto_increment,fname varchar(255),lname varchar(255),mail varchar(255),pswd varchar(255));
INSERT INTO users (`fname`, `lname`, `mail`, `pswd`) 
VALUES ('Navoda', 'Nimnadi', 'nimnadi@gmail.com', '123navoda');

create table items(itemid INT primary key auto_increment,itemname varchar(255),itemcategory varchar(255),itemprice double(9,2),itemimage varchar(255));

INSERT INTO items (itemname, itemcategory, itemprice, itemimage) 
VALUES 
    ('baby_carrier', 'babycarrier', 2500, 'Babytrage.webp'),
    ('Blanket', 'babyblanket', 2000, 'blanket.avif'),
    ('organic_baby_onesis', 'organicbabyonesis', 500, 'shirts.webp'),
    ('Blanket', 'babyblanket', 1000, 'blanket1.jpg'),
    ('Blanket', 'babyblanket', 1200, 'blanket2.jpg'),
    ('baby_carrier', 'babycarrier', 3200, 'carrier1.jpg'),
    ('baby_carrier', 'babycarrier', 4500, 'carrier2.webp'),
    ('baby_carrier', 'babycarrier', 4100, 'carrier.webp'),
    ('organic_baby_onesis', 'organicbabyonesis', 800, 'organic1.jpg'),
    ('organic_baby_onesis', 'organicbabyonesis', 1000, 'organic2.webp');
