Note:This file is for creation of mysql database
step 1 : open xaamp control panel and start apache and mysql server
step 2 : open browser localhost/phpmyadmin
step 3 : paste the followed code in sql panel
step 4 : copy other codes to Localdisc:c/xaamp/htdocs with same name as it was

Database creation code

CREATE DATABASE ecommerce_db;
USE ecommerce_db;

-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Products Table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL
);
