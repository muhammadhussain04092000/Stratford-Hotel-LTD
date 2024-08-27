CREATE DATABASE `SHLTD`;
USE `SHLTD`;

CREATE TABLE `Contact_Form_Responses` (
	`timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    name VARCHAR(100),
    email VARCHAR(100),
    message VARCHAR (16000)
);

CREATE TABLE `Employees` (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100),
    email VARCHAR(100),
    phone_no VARCHAR(100)
);

CREATE TABLE `Employee_Credentials`(
	username VARCHAR(50),
    password VARCHAR(50)
);

CREATE TABLE `Manager_Credentials`(
	name VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(50)
);