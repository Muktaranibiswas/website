-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 06:15 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE IF NOT EXISTS `facebook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `date` date NOT NULL,
  `gender` char(7) NOT NULL,
  `hobby` text NOT NULL,
  `favFood` text NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `firstName`, `lastName`, `email`, `password`, `date`, `gender`, `hobby`, `favFood`, `comment`, `created`, `modified`, `pic1`, `pic2`) VALUES
(25, 'sdf', 'sad', 'm.a.kowsar@gmail.com', 'admin', '2000-01-01', 'Female', 'Hacking', 'Array', 'km&quot;', '2014-12-29 10:54:54', '2015-01-17 20:41:12', '', ''),
(26, 'abu', 'kowsar', 'm.a.kowsar@gmail.com', 'admin', '2001-03-01', 'Male', 'Coding', 'Array', 'asd', '2015-01-17 20:40:21', '0000-00-00 00:00:00', '', ''),
(28, 'abu', 'asdf', 'm.a.kowsar@gmail.com', 'admin', '2000-01-01', 'Male', 'Playing,Coding', 'Cheese,Olives', '333rr&quot;33', '2015-01-17 21:09:52', '2015-01-17 21:46:48', '', ''),
(30, 'asdf', 'asdfs', 'm.a.kowsar@gmail.com', 'admin', '2000-01-01', 'Female', 'Sleeping', 'Cheese', 'd', '2015-01-17 22:09:10', '0000-00-00 00:00:00', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
