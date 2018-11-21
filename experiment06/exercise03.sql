CREATE DATABASE `mydatabase03` /*!40100 COLLATE 'utf8mb4_general_ci' */;

USE `mydatabase03`;

CREATE TABLE `mytable03` (
    `user_id` INT UNSIGNED AUTO_INCREMENT,
    `name` VARCHAR(256) NOT NULL, -- 真实姓名 name
    `gender` VARCHAR(10) NOT NULL, -- 性别 gender
    `hobby` VARCHAR(256) NOT NULL, -- 兴趣爱好 hobby
    `address` VARCHAR(256) NOT NULL, -- 家庭住址 address
    `mark` VARCHAR(256) NOT NULL, -- 备注 mark 
    PRIMARY KEY (`user_id`)
);