-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2022 at 10:51 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_project`
--
CREATE DATABASE IF NOT EXISTS `car_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `car_project`;

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

DROP TABLE IF EXISTS `car_details`;
CREATE TABLE IF NOT EXISTS `car_details` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `user_ID` int NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_description` varchar(500) NOT NULL,
  `car_category` varchar(50) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `video_url` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image_url` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_ID` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`ID`, `user_ID`, `car_name`, `car_description`, `car_category`, `keywords`, `video_url`, `image_url`, `start_date`, `end_date`) VALUES
(78, 23, 'Mercedes', 'Mercedes-Benz A-Class 2022', 'Class A', 'Mercedes', 'https://www.youtube.com/watch?v=DJR15jhrGRI', 'https://i.ytimg.com/vi/zqvdUXOK0xg/maxresdefault.jpg', '2022-01-20', '2022-01-28'),
(89, 22, 'Kia', 'The Carens has sleek LED DRLs, 16-inch alloy wheels, and connected LED tail lamps.\r\n\r\n', 'Carens', 'kia', 'https://www.youtube.com/watch?v=WztY0p63z3U', 'https://stat.overdrive.in/wp-content/uploads/2021/12/2022-kia-carens-interior-788x506.jpg', '2022-01-03', '2022-01-20'),
(90, 25, 'volkswagen', 'Aurora Red Metallic 2020 PASSAT R-Line', 'Passat', 'volkswagen', 'https://www.youtube.com/watch?v=ni8CYkswjV4', 'https://i.ytimg.com/vi/ni8CYkswjV4/maxresdefault.jpg', '2022-01-12', '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `user_ID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `adress1` varchar(50) NOT NULL,
  `adress2` varchar(50) NOT NULL,
  `adress3` varchar(50) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `profile_url` varchar(100) NOT NULL,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_ID`, `username`, `PASSWORD`, `title`, `first_name`, `last_name`, `gender`, `adress1`, `adress2`, `adress3`, `postcode`, `description`, `email`, `telephone`, `profile_url`) VALUES
(21, 'chaimaa1', 'chaimaa1pa', 'mss', 'Chaimaa', 'Bouhdid', 'Female', 'qsdbj', '', '', '', '		 ', 'chaimaabouhdid@gmail.com', '', ''),
(22, 'moha', 'mohapass', '', '', '', '', '', '', '', '', '		 ', 'mohapass@gmail.com', '', ''),
(23, 'fati', 'fatipass', '', '', '', '', '', '', '', '', '		 ', '', '', ''),
(25, 'chaimaa', 'chaimaapas', 'Mss', 'Chaimaa', 'Ch', 'Female', '', '', '', '', '		 ', 'chaimaach@gmail.com', '+212326547891', 'https://th.bing.com/th/id/R.57494e6bfd1d080da4d9dbd91d265e37?rik=QhwW6KpZLNgwfA&pid=ImgRaw&r=0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_details`
--
ALTER TABLE `car_details`
  ADD CONSTRAINT `car_details_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user_details` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
