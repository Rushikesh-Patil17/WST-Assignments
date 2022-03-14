-- source /var/www/html/assignment3/script.sql;

CREATE DATABASE IF NOT EXISTS users;
USE users;
CREATE TABLE IF NOT EXISTS users(
    firstname varchar(255) not null,
    lastname varchar(255) not null,
    username varchar(255) primary key,
    email varchar(255) not null,
    state varchar(255) not null,
    country varchar(255) not null
);
INSERT INTO users VALUES('Rushikesh', 'Patil', 'rushikesh_patil', 'rnpatil2001aug@gmail.com', 'Maharashtra', 'India');
INSERT INTO users VALUES('Tushar', 'Pathade', 'tushar_pathade', 'tusharpathade@gmail.com', 'Maharashtra', 'India');
