create database latihan_crud;

use latihan_crud;

CREATE TABLE `users`(
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(100),
    `email` varchar(100),
    `mobile` varchar(15),
    PRIMARY KEY (`id`)
);