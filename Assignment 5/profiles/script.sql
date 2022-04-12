CREATE DATABASE IF NOT EXISTS login;

USE login;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_pic VARCHAR(256),
    about VARCHAR(100),
    address VARCHAR(100),
    education VARCHAR(50),
    skills VARCHAR(100),
    interests VARCHAR(100),
    upvotes INT DEFAULT 0
);