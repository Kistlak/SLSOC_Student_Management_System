
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2016 at 04:07 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a3075631_slsoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pw` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `activated` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` VALUES(1, 'Head Of SLSOC', 'head_slsoc_1', '123456', '1');
INSERT INTO `academic` VALUES(2, 'director', 'director_slsoc_2', '123456mail', '1');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `adone` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `adtwo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `city` text COLLATE latin1_general_ci NOT NULL,
  `country` text COLLATE latin1_general_ci NOT NULL,
  `num` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `year` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `month` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` VALUES(8, 'Kisalka', 'Rajapaksha', '23/8 , Kurunduwaththa Rd ,', '23/8 , Kurunduwaththa Rd ,', 'Hikkaduwa', 'Sri Lanka', '0788510434', 'kistlakr@gmail.com', 'male', '2000', 'May', '06');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `num` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `msg` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` VALUES(2, 'Kisalka Rajapaksha', 'kistsinga@gmail.com', '0788510434', 'Test 1');

-- --------------------------------------------------------

--
-- Table structure for table `stureg`
--

CREATE TABLE `stureg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nic` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `slsocid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `adone` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `adtwo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `city` text COLLATE latin1_general_ci NOT NULL,
  `country` text COLLATE latin1_general_ci NOT NULL,
  `num` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pw` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `year` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `month` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `activated` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stureg`
--

INSERT INTO `stureg` VALUES(1, 'Kisalka', 'Rajapaksha', '960863801V', '0', '23/8 , Kurunduwaththa Rd ,', 'Walauwaththa', 'Hikkaduwa', 'Sri Lanka', '0788510434', 'kistlakall@gmail.com', '960863801V', '123456mail', 'male', '1996', 'March', '26', '1');
