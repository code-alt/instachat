CREATE DATABASE insta;

USE insta;

CREATE TABLE `posts` (
  `id` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `posted` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
