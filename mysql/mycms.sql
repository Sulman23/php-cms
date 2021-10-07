-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2015 at 08:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`u_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', 'admin'),
(2, 'ali', 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'News'),
(2, 'Sports'),
(3, 'Entertainment'),
(4, 'World'),
(5, 'Asia');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `comment_name` varchar(50) NOT NULL,
  `comment_email` varchar(50) NOT NULL,
  `comment_text` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`) VALUES
(1, 6, 'king', 'king@king.com', 'This is just test comment...', 'uprove'),
(2, 6, 'sulman', 'email@email.com', 'test comment second.', 'uprove'),
(3, 6, 'sulman', 'email@email.com', 'test comment second.', 'unuprove'),
(4, 9, 'sulman', 'email@email.com', 'Another test comment....', 'uprove'),
(5, 9, 'sulman', 'email@email.com', 'Another test comment....', 'unuprove'),
(6, 12, 'sulman', 'king@king.com', 'google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. google test comment. v', 'uprove');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `m_id` int(10) NOT NULL AUTO_INCREMENT,
  `m_title` varchar(50) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`m_id`, `m_title`) VALUES
(1, 'Bloging'),
(5, 'Services'),
(6, 'About us'),
(8, 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(100) NOT NULL,
  `p_desc` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`p_id`, `p_title`, `p_desc`) VALUES
(3, 'Bloging', 'hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.hello this is just fake data.'),
(6, 'Services', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(7, 'About us', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '),
(9, 'sports', 'content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_keywords` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`) VALUES
(8, 1, 'Fifth post', '12-07-15', ' Smith', 'sports, entertainment', 'npfav_400x400.png', '<p>This is fifth post......</p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, \r\n                    necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id \r\n                    animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, \r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, \r\n                    necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id \r\n                    animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, \r\n'),
(9, 3, 'New post edit ', '12-10-15', ' paul', 'sports, entertainment', 'PHP_Logo.png', '<p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum&nbsp;</p>'),
(12, 4, 'Google post', '12-10-15', ' paul', 'world, love, peace', 'images.jpg', '<p>content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here. content for google post goes here.&nbsp;</p>'),
(13, 5, 'Facebook post', '12-10-15', ' jack', 'news, asia, world', 'images (1).jpg', '<p>test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here. test content goes here.&nbsp;</p>'),
(14, 3, 'Twitter test post', '12-10-15', '  paul doe', 'news, asia, world', 'images (2).jpg', '<p>content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here. content goes here.&nbsp;</p>'),
(16, 5, 'New post ', '12-10-15', ' jhon', 'sports, entertainment', '654-5UC_P.jpg', '<p>content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content&nbsp;</p>'),
(17, 2, 'Larvel test post', '12-10-15', ' jhon', 'sports, entertainment', 'download.png', '<p>content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content content&nbsp;</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
