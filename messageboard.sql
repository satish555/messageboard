-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2016 at 12:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `messageboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_comments` varchar(1000) DEFAULT NULL,
  `c_pid` int(11) DEFAULT NULL,
  `c_date` date NOT NULL,
  `c_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(1000) DEFAULT NULL,
  `p_description` varchar(1000) DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `p_postedby` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_title`, `p_description`, `p_date`, `p_postedby`) VALUES
(1, 'This is Frist Post', 'This is the description of the first post. ', '2016-03-30', 'sathish'),
(2, 'This is Second Post', 'This is the description of second post', '2016-03-31', 'bharath'),
(3, 'This is the Third Post (3)', 'Third post description', '2016-03-31', 'bharath');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) DEFAULT NULL,
  `u_password` varchar(100) DEFAULT NULL,
  `u_firstname` varchar(100) DEFAULT NULL,
  `u_lastname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_password`, `u_firstname`, `u_lastname`) VALUES
(1, 'sathish', 'sathishbabu', 'sathish', 'babu'),
(2, 'bharath', 'bharathhere', 'bharath', 'reddy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
