CREATE DATABASE sweproj;
USE sweproj;

CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3),
    location VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS messages (
    messageID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userID INT(11) UNSIGNED,
    headerMessage TEXT(65000),
    main1Message TEXT(65000),
    main2Message TEXT(65000),
    aside1Message TEXT(65000),
    aside2Message TEXT(65000)
);
