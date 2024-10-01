-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for recipes
CREATE DATABASE IF NOT EXISTS `recipes` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `recipes`;

-- Dumping structure for table recipes.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table recipes.admin: ~0 rows (approximately)
REPLACE INTO `admin` (`admin_id`, `username`, `password`) VALUES
	(1, 'admin', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29');

-- Dumping structure for table recipes.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table recipes.categories: ~1 rows (approximately)
REPLACE INTO `categories` (`category_id`, `title`, `description`, `image`, `add_time`) VALUES
	(4, 'Nigerian', 'Nigerian Food', '1725711080_FERN-MEDIA-CArd-logo-white.png', '2024-09-07 12:11:20'),
	(5, 'Igbo', 'Igbo Food', '1725711095_FERN-MEDIA-CArd-logo-white.png', '2024-09-07 12:11:35');

-- Dumping structure for table recipes.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `recipe_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment_msg` text NOT NULL,
  `rating` varchar(255) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table recipes.comments: ~0 rows (approximately)

-- Dumping structure for table recipes.opinions
CREATE TABLE IF NOT EXISTS `opinions` (
  `opinion_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`opinion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table recipes.opinions: ~0 rows (approximately)
REPLACE INTO `opinions` (`opinion_id`, `name`, `email`, `phone`, `message`, `add_time`) VALUES
	(1, 'Ayelawww', '654ddd9@gmail.com', '09058946556', 'aaaaa', '2024-09-07 12:15:13');

-- Dumping structure for table recipes.recipes
CREATE TABLE IF NOT EXISTS `recipes` (
  `recipe_id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `small_desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `video_url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `comment_id` int DEFAULT NULL,
  `views` varchar(255) NOT NULL DEFAULT '0',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`recipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table recipes.recipes: ~1 rows (approximately)
REPLACE INTO `recipes` (`recipe_id`, `category_id`, `title`, `description`, `small_desc`, `img`, `video_url`, `comment_id`, `views`, `add_time`) VALUES
	(6, 4, 'Rice and Beans', '<p>Rice and Beans</p>', '<p>Rice and Beans</p>', '1725711181_FERN-MEDIA-CArd-logo-white.png', 'https://www.allrecipes.com/recipe/15559/black-beans-and-rice/', NULL, '1', '2024-09-07 12:13:36');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
