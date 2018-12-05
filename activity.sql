-- Adminer 4.6.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `activity`;
CREATE DATABASE `activity` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `activity`;

DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripton` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher` text COLLATE utf8_unicode_ci NOT NULL,
  `day_start` datetime NOT NULL,
  `day_end` datetime NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `term_year` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `student` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1,	'58145236',	'58145236',	'2018-11-21 21:14:09',	'sudarat',	'2018-11-21 21:14:09',	'sudarat'),
(4,	'setset',	'set',	'2018-11-21 15:37:42',	'',	'2018-11-21 15:37:42',	NULL);

-- 2018-12-05 09:00:46
