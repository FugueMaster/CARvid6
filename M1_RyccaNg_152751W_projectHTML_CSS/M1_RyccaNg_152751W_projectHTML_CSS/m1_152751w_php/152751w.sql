-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2016 at 05:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `152751w`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `images` varchar(255) DEFAULT NULL,
  `genre` varchar(20) NOT NULL COMMENT 'Primary Key'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`images`, `genre`) VALUES
('justin-bieber-purpose-cover-2015(180x180).jpg', 'Pop Music'),
('Dale Oliver-Diversity.jpg', 'Rock Music'),
('free your mind-DanijelZambo.jpg', 'Jazz/Contemporary'),
('open_heaven_large.jpg', 'Praise & Worship'),
('Hamza-Respect.jpg', 'Country/Folk'),
('SymphonyOfMeaning-NayJ.jpg', 'Classical');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `Username` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductID` varchar(12) NOT NULL,
  `Quantity` int(4) NOT NULL,
  `Price` varchar(8) DEFAULT NULL,
  `DeliveryType` varchar(25) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  PRIMARY KEY (`ProductID`),
  KEY `OrderID` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`Username`, `ProductName`, `ProductID`, `Quantity`, `Price`, `DeliveryType`, `Image`) VALUES
('', '', '', 0, 'UnitPric', '', ''),
('', 'Justin Bieber-Purpose', '#E01', 0, 'S$16.98', '', ''),
('', 'Fifth Harmony-7/27', '#E03', 0, 'S$13.98', '', ''),
('', 'Ride (Twenty One Pilots song)', '#R01', 0, 'S$14.80', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(14) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `UserID` int(10) NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` varchar(10) NOT NULL,
  `ProductName` varchar(80) NOT NULL,
  `Description` text NOT NULL,
  `Price` varchar(8) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ProductAlbumName` varchar(40) NOT NULL,
  `genre` varchar(20) NOT NULL COMMENT 'Primary Key',
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Description`, `Price`, `Image`, `ProductAlbumName`, `genre`) VALUES
('#E01', 'Justin Bieber-Purpose', 'Purpose is the fourth studio album by Canadian singer and songwriter Justin Bieber. It was released on November 13, 2015, by Def Jam Recordings and School Boy Records. It serves as the follow-up to Bieber''s third studio album Believe (2012), and it was developed after the release of his collection Journals (2013).', 'S$16.98', 'justinbieber.jpg', 'Justin Bieber-Purpose', 'Pop Music'),
('#E02', 'Justin Timberlake- Can’t Stop the Feeling', '"Can''t Stop the Feeling!" is a song recorded by American singer-songwriter Justin Timberlake for the soundtrack to the upcoming film Trolls, for which he serves as the executive music producer. It was written and produced by Timberlake, Max Martin and Shellback. ', '$S12.00', 'justintimberlake.jpg', 'Justin Timberlake-Can''t Stop the Feeling', 'Pop Music'),
('#E03', 'Fifth Harmony-7/27', '7/27 is the second studio album by American girl group Fifth Harmony and was released on May 27, 2016, by Syco Music and Epic Records. The album is the follow-up to their 2015 debut studio album Reflection and features guest vocals from Ty Dolla Sign, Fetty Wap, and Missy Elliott.', 'S$13.98', 'Fifthharmony.jpg', 'Fifth Harmony-7/27 Album', 'Pop Music'),
('#E04', 'Ariana Grande-Dangerous Woman', 'Dangerous Woman is the third studio album by American singer Ariana Grande and was released on May 20, 2016, by Republic Records. The album is the follow-up to her second studio album My Everything (2014), and features guest appearances from Nicki Minaj, Lil Wayne, Macy Gray and Future. ', '$12.99', 'Arianagrande.jpg', 'Dangerous Woman (album)', 'Pop Music'),
('#E05', 'Jessica Jung-With Love, J', 'With Love, J is the debut extended play by South Korea-based American singer Jessica. The Korean-language edition consisting of six songs was released worldwide by Coridel Entertainment on May 17, 2016, while an English-language version featuring five songs (with the exclusion of "Dear Diary") was released on May 27, 2016.', 'S$14.80', 'withlove.jpg', 'With Love, J', 'Pop Music'),
('#E06', 'Selena Gomez-Kill Em With Kindness', '"Kill Em with Kindness" is a song recorded by American singer Selena Gomez for her second studio album Revival (2015). The track was co-written by Gomez with Antonina Armato, Tim James, Benjamin Levin and Dave Audé.', 'S$2.39', 'selenagomez.jpg', 'Revival', 'Pop Music'),
('#J01', 'She Loves Me-Andy Snitzer ', 'She Loves Me is a musical with a book by Joe Masteroff, lyrics by Sheldon Harnick, and music by Jerry Bock.The musical is the third adaptation of the play Parfumerie by Hungarian playwright Miklós László.', 'S$13.98', 'SheLovesMe.jpg', 'He Loves Me', 'Jazz/Contemporary'),
('#J02', 'You''re Mine-Julian Vaughn', 'Since 2011 Trippin ‘N’ Rhythm recording artist Julian Vaughn has quietly been building his credentials as the natural successor to the late Wayman Tisdale. After bursting onto the scene with his appropriately titled ‘Breakthrough’ he followed that up with ‘Limitless’.', 'S$15.80', 'You''reMine.jpg', 'Limitless', 'Jazz/Contemporary'),
('#J03', 'In Deep-Urgent', 'In Deep, released in 1973, is the 4th studio album by Argent; originally released by Epic Records, KE 32195. It features the original full length recording of "God Gave Rock and Roll to You".', 'S$16.98', 'Argentindeep.jpg', 'In Deep (Argent album)', 'Jazz/Contemporary'),
('#R01', 'Ride (Twenty One Pilots song)', '"Ride" is a single written and recorded by American alternative hip hop band Twenty One Pilots from their fourth studio album, Blurryface. "Ride" was released on YouTube worldwide on May 11, 2015,[2] and released as a single on the Google Play Store on May 12, 2015.', 'S$14.80', '21pilots.jpg', 'Blurryface ', 'Rock Music'),
('#R02', 'Unsteady (X Ambassadors song)', 'X Ambassadors (also stylised XA) is an American alternative rock band from Ithaca, New York. Their most notable songs include "Unconsolable", "Jungle" and "Renegades". ', '$12.99', 'XAmUnsteady.jpg', 'VHS', 'Rock Music'),
('#R03', 'A Head Full of Dreams-Coldplay', '"Hymn for the Weekend" is a song by British rock band Coldplay featuring American singer Beyoncé.[1] It was released on 25 January 2016 as the second single from their seventh studio album, A Head Full of Dreams (2015).', 'S$15.80', 'Coldplay.png', 'A Head Full of Dreams', 'Rock Music');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PostalCode` varchar(10) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Address`, `Email`, `PostalCode`, `pass`) VALUES
('qa', 'swswq', 'sqw', 'kkk@kkk.com', '231', 'aaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
