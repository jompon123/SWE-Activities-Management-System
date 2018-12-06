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
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher` text COLLATE utf8_unicode_ci NOT NULL,
  `day_start` date NOT NULL,
  `day_end` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `term_year` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `student` text COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `activity` (`id`, `activity_name`, `description`, `teacher`, `day_start`, `day_end`, `time_start`, `time_end`, `term_year`, `sector`, `location`, `image`, `student`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1,	'swe222',	'',	'',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	0,	0,	'',	'',	'',	'2018-12-05 09:54:09',	'',	'2018-12-05 09:54:09',	''),
(2,	'ติวน้อง',	'นะๆ',	'2558',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	2,	2561,	'355',	NULL,	NULL,	'2018-12-05 10:07:34',	'',	'2018-12-05 10:07:34',	''),
(3,	'swe',	'ค่ายศึกษางาน',	'3',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	2,	2561,	'ตึกนวัตกรรม',	NULL,	NULL,	'2018-12-05 10:15:06',	'',	'2018-12-05 10:15:06',	''),
(4,	'swe',	'ค่ายศึกษางาน',	'3',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	2,	2561,	'ตึกนวัตกรรม',	NULL,	NULL,	'2018-12-05 10:17:05',	'',	'2018-12-05 10:17:05',	''),
(5,	'22',	'2',	'5',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	2,	2561,	'ตึก',	NULL,	'1',	'2018-12-05 10:36:08',	'',	'2018-12-05 10:36:08',	''),
(6,	'1',	'11',	'[\"1\",\"3\"]',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	1,	1,	'1',	NULL,	'[\"1\",\"3\"]',	'2018-12-05 10:46:42',	'',	'2018-12-05 10:46:42',	''),
(13,	'VV',	'V',	'[\"1\"]',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	1,	0,	'C',	NULL,	'[\"1\"]',	'2018-12-05 18:13:24',	'',	'2018-12-05 18:13:24',	''),
(14,	'C',	'C',	'[\"1\"]',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	1,	0,	'C',	NULL,	'[\"1\"]',	'2018-12-05 18:15:19',	'',	'2018-12-05 18:15:19',	''),
(15,	'X',	'',	'[\"2\"]',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	2,	0,	'X',	NULL,	'[\"2\",\"4\"]',	'2018-12-05 18:16:06',	'',	'2018-12-05 18:16:06',	''),
(16,	'd',	'd',	'[\"2\",\"4\"]',	'0000-00-00',	'0000-00-00',	'00:00:00',	'00:00:00',	2,	0,	'd',	NULL,	'[\"1\"]',	'2018-12-05 18:17:32',	'',	'2018-12-05 18:17:32',	''),
(17,	'swe programing',	' ค่ายเขียนโปรแกรม',	'[\"3\",\"5\"]',	'0000-00-00',	'0000-00-00',	'08:22:00',	'12:32:00',	1,	2561,	'ตึกนวัตกรรม',	NULL,	'[\"1\",\"2\",\"3\",\"4\"]',	'2018-12-05 19:25:01',	'',	'2018-12-05 19:25:01',	'');

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

-- 2018-12-06 08:57:25
