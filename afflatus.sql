-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 04:45 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afflatus`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `ano` int(11) NOT NULL AUTO_INCREMENT,
  `rno` int(11) NOT NULL,
  `aimage` longblob NOT NULL,
  `aheading` varchar(100) NOT NULL,
  `acontent` longtext NOT NULL,
  `on_date` date NOT NULL,
  PRIMARY KEY (`ano`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ano`, `rno`, `aimage`, `aheading`, `acontent`, `on_date`) VALUES
(7, 15, 0x626f6f7473747261702d736f6369616c2e706e67, 'Bootstrap 4', 'Bootstrap 4 is the newest version of Bootstrap, which is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.\r\n\r\nBootstrap 4 is completely free to download and use!', '2018-02-14'),
(10, 15, 0x646f776e6c6f61642e706e67, 'React', 'React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes. Declarative views make your code more predictable and easier to debug.', '2018-02-15'),
(11, 16, 0x315f694f6d77756531757857324f367362445545497450772e6a706567, 'Angular', 'AngularJS is what HTML would have been, had it been designed for building web-apps. Declarative templates with data-binding, MVW, MVVM, MVC, dependency injection and great testability story all implemented with pure client-side JavaScript!', '2018-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `reg_date` datetime NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'student',
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `gender`, `email`, `phone`, `reg_date`, `user_type`, `location`) VALUES
(11, 'abcd', '111', 'male', 'abcd@gmail.com', '1234445', '2018-01-27 06:15:29', 'student', ''),
(13, 'xyz', '111', 'male', 'xyz@gmail.com', '1234445', '2018-01-27 06:18:37', 'student', ''),
(15, 'abhi', '123', 'male', 'abhi@gmail.com', '7248964114', '2018-01-27 06:29:08', 'researcher', 'pune'),
(16, 'dr. ram', '111', 'male', 'imresearcher@gmail.com', '1234567890', '2018-02-07 06:17:52', 'researcher', 'pune'),
(17, 'Gajanan Taur', '318078145972763', 'male', 'gajanan.taur96@gmail.com', '7276376236', '2018-02-08 08:29:24', 'student', 'Pune');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
