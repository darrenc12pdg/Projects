-- phpMyAdmin SQL Dump
-- version 4.0.10.16
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2019 at 01:17 AM
-- Server version: 5.1.73
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dcampbell42`
--

-- --------------------------------------------------------

--
-- Table structure for table `locusofcontrol`
--

CREATE TABLE IF NOT EXISTS `locusofcontrol` (
  `locusscore` int(11) NOT NULL,
  `locusscoreID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`locusscoreID`),
  UNIQUE KEY `UserID` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `locusofcontrol`
--

INSERT INTO `locusofcontrol` (`locusscore`, `locusscoreID`, `UserID`) VALUES
(16, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `num_comments` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `num_comments`, `date`, `UserID`) VALUES
(7, 'Day Two', 'Went to the Beach\r\nWent to Town\r\nHelped an old lady', 0, 1550456088, NULL),
(8, 'Day three', 'Celtic', 0, 1550544091, NULL),
(9, 'Day Four', 'Password', 0, 1550544827, NULL),
(10, 'Driving', 'celtic', 0, 1550545262, NULL),
(11, 'Day one', 'Went to the beach', 0, 1550721405, NULL),
(12, 'Day one', 'Went to the beach', 0, 1550721470, NULL),
(13, 'Day one', 'Went to the Park', 0, 1550721658, NULL),
(14, 'Day One', 'Went to the park', 0, 1550772727, 25),
(17, 'Day Five', 'Went to the park', 0, 1550773263, NULL),
(18, 'Day Two', 'Went to the Park\r\nWent to the beach \r\nHelped an old lady', 0, 1550983836, 25),
(19, 'Day one', 'Finished My dissertation \r\nWent to Manchester', 0, 1550802720, 28),
(20, 'Day Three', 'Went to Manchester', 0, 1551639887, 25);

-- --------------------------------------------------------

--
-- Table structure for table `Scores`
--

CREATE TABLE IF NOT EXISTS `Scores` (
  `Email` varchar(10) NOT NULL DEFAULT 'Anonymous',
  `locscore` int(5) unsigned NOT NULL DEFAULT '0',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL DEFAULT '0',
  `selfscore` int(10) NOT NULL,
  `socanxscore` int(10) NOT NULL,
  `thrivescore` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selfesteemscore`
--

CREATE TABLE IF NOT EXISTS `selfesteemscore` (
  `selestscore` int(11) NOT NULL,
  `selfestscoreID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`selfestscoreID`),
  UNIQUE KEY `UserID` (`UserID`),
  KEY `UserID_2` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `selfesteemscore`
--

INSERT INTO `selfesteemscore` (`selestscore`, `selfestscoreID`, `UserID`) VALUES
(12, 9, 25),
(19, 12, 28);

-- --------------------------------------------------------

--
-- Table structure for table `socanxscore`
--

CREATE TABLE IF NOT EXISTS `socanxscore` (
  `socialanxietyscore` int(10) NOT NULL,
  `socanxscoreID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`socanxscoreID`),
  UNIQUE KEY `UserID` (`UserID`),
  KEY `UserID_2` (`UserID`),
  KEY `UserID_3` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `socanxscore`
--

INSERT INTO `socanxscore` (`socialanxietyscore`, `socanxscoreID`, `UserID`) VALUES
(13, 12, 25),
(17, 14, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tblUserAccount`
--

CREATE TABLE IF NOT EXISTS `tblUserAccount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `AccountType` int(11) NOT NULL,
  `Add1` varchar(100) NOT NULL,
  `Add2` varchar(100) DEFAULT NULL,
  `City` varchar(25) NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `TelNo` varchar(25) NOT NULL,
  `profilePicture` varchar(100) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `postID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Post_ID` (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tblUserAccount`
--

INSERT INTO `tblUserAccount` (`id`, `Email`, `Password`, `Firstname`, `Surname`, `AccountType`, `Add1`, `Add2`, `City`, `Postcode`, `Country`, `TelNo`, `profilePicture`, `banned`, `postID`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', '', 9933, '', '', '', '', '', '', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(3, 'rob@owner.com', 'test', 'Rob', 'Doe', 2, '12 a road', NULL, 'Belfast', 'BT1 1LQ', 'GB', '02810293929', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(4, 'ben@ben.com', 'test', 'John', 'Celtic', 1, '1 Main Street', '', 'Belfast', 'BT1 1BT', 'GB', '123456789', 'images/profilePics/4.png', 1, NULL),
(5, 'qub@qub.ac.uk', 'queens', 'Queens', 'University', 2, '1 Main Street', '', '', 'BT1 1AA', 'GB', '02810123445', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(6, 'test2@test.com', 'test', 'Test2', 'Test', 1, '12 main Street', '', 'Belfast', 'BT1 1PP', 'GB', '021234567', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(9, 'e@e.com', 'test', 'Emmanuel', 'watson', 1, '1 queens park', '232r', 'belfast', 'bt15', 'GB', '12', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(10, 't@t.com', 'test', 'test1', 't', 1, 'w', 's', 's', 's', 'GB', '1221', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(12, 'E@e.com', 'test', 'Emmanuel', 'Watson', 1, '1', 'M', 'Belfast', 'Bt1165', 'GB', '16161', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(13, 'e@e.com', 'test', 'E', 'W', 1, 'Hdhdh', 'Jdhdhd', 'Jdhdhd', 'Bt11', 'GB', '899383', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(14, 'user@user.com', 'spurs', 'user', 'work', 1, '1 main', '1 ', 'belfast ', 'bt', 'GB', '075927', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(15, 'darren@campbell.com', 'test', 'Darren', 'Campbell', 1, '1 b lane', '', 'carryduff', 'BT12 1QW', 'GB', '02123456775', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(17, 'j.a.busch@qub.ac.uk', 'john123', 'John123', 'Busch', 2, '1 qub ave', '', 'Belfast', 'Bt7 1QW', 'GB', '123456789', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(19, 'r@gman.com', 'test', 'russell', 'kane', 1, '1 park', '', 'belfast', 'bt12 5rt', 'GB', '12345', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(22, 'CB@hot.com', 'qwerty', 'Conor', 'Burns', 1, '398 OPR', '', 'Belfast', 'BT14 ', 'GB', '123456789', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(23, 'jon@jon.com', 'jon123', 'jon', 'jon', 0, '', '', '', '', '', '', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(25, 'darrenc12pdg@gmail.com', 'password123', 'Darren', 'Campbell', 1, 'Celtic', 'Park', 'Belfast', 'BT170RN', 'GB', '02890431332', 'img/default.jpg', 0, NULL),
(27, 'test@test123.com', 'password123', 'john', 'John', 1, 'celtic', '', 'Belfast', 'BT180rn', 'GB', '02890431332', 'images/profilePics/defaultProfilePic.jpg', 0, NULL),
(28, 'John@john1.com', 'john', 'John', 'Bean', 1, '23 John Avenue', '', 'Johnsville', 'BT170RN', 'GB', '02890431332', 'images/profilePics/defaultProfilePic.jpg', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thrivescore`
--

CREATE TABLE IF NOT EXISTS `thrivescore` (
  `thrivescoreID` int(11) NOT NULL,
  `thrivescore` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`thrivescoreID`),
  UNIQUE KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locusofcontrol`
--
ALTER TABLE `locusofcontrol`
  ADD CONSTRAINT `locusofcontrol_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `tblUserAccount` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `tblUserAccount` (`id`);

--
-- Constraints for table `Scores`
--
ALTER TABLE `Scores`
  ADD CONSTRAINT `Scores_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tblUserAccount` (`id`);

--
-- Constraints for table `selfesteemscore`
--
ALTER TABLE `selfesteemscore`
  ADD CONSTRAINT `selfesteemscore_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `tblUserAccount` (`id`);

--
-- Constraints for table `tblUserAccount`
--
ALTER TABLE `tblUserAccount`
  ADD CONSTRAINT `tblUserAccount_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `posts` (`id`);

--
-- Constraints for table `thrivescore`
--
ALTER TABLE `thrivescore`
  ADD CONSTRAINT `thrivescore_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `tblUserAccount` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
