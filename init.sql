 CREATE DATABASE sweproj;
  use sweproj;
  CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(50) NOT NULL,
  age INT(3),
  location VARCHAR(50),
  date TIMESTAMP
  );