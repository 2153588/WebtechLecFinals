-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 01:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topic`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspnet`
--

CREATE TABLE `aspnet` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `question_answer` text NOT NULL,
  `chapter_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jsp`
--

CREATE TABLE `jsp` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `question_answer` text NOT NULL,
  `chapter_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nodejs`
--

CREATE TABLE `nodejs` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `question_answer` text NOT NULL,
  `chapter_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `question_answer` text NOT NULL,
  `chapter_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`chapter_id`, `chapter_name`, `question_id`, `question_number`, `question_desc`, `question_answer`, `chapter_description`) VALUES
(0, 'php', 0, 0, '', '', ''),
(0, 'asd', 0, 0, '', '', ''),
(0, 'asdd', 0, 0, '', '', 'asdd'),
(0, 'aaaa', 0, 0, '', '', 'aaaaa'),
(0, '', 1, 1, 'aaaa', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `rubyonrails`
--

CREATE TABLE `rubyonrails` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `question_answe` text NOT NULL,
  `chapter_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webappsecurity`
--

CREATE TABLE `webappsecurity` (
  `chapter_id` int(11) NOT NULL,
  `chapter_name` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `question_answer` text NOT NULL,
  `chapter_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
