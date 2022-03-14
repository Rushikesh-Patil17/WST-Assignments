-- source /var/www/html/assignment3/script.sql;
DROP DATABASE IF EXISTS users;
CREATE DATABASE users;
USE users;
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users(
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    username VARCHAR(255) PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    state VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL
);
INSERT INTO users VALUES('Rushikesh', 'Patil', 'rushikesh_patil', 'rnpatil2001aug@gmail.com', 'Maharashtra', 'India');
INSERT INTO users VALUES('Tushar', 'Pathade', 'tushar_pathade', 'tusharpathade@gmail.com', 'Maharashtra', 'India');
