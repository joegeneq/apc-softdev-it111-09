-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 11:50 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fullbright_aps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(45) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `auth_key` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `auth_key`, `password_reset_token`) VALUES
(1, 'admin', 'admin', 'Pq4SdgTw76RR0jBkxqSgjXZrKc6a3hF9', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `gallery_name` varchar(45) DEFAULT NULL,
  `gallery_description` text,
  `gallery_picture` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_name`, `gallery_description`, `gallery_picture`) VALUES
(2, 'Sample', 'Sample description', 'images/gallery_images/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
`id` int(11) NOT NULL,
  `grade_subject` enum('Computer','English','Filipino','MAPEH','Math','Science') NOT NULL,
  `grade_quarter_number` varchar(45) DEFAULT NULL,
  `grade_remarks` decimal(10,0) DEFAULT NULL,
  `grade_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `grade_subject`, `grade_quarter_number`, `grade_remarks`, `grade_date_created`, `user_id`) VALUES
(1, 'Computer', '1st Quarter', '90', '2015-04-20 14:17:40', 9),
(2, 'Filipino', '1st Quarter', '80', '2015-04-20 14:23:52', 10),
(3, 'English', '2nd Quarter', '65', '2015-04-20 16:15:59', 9),
(5, 'English', '1st Quarter', '97', '2015-04-20 16:36:19', 11),
(6, 'Computer', '2nd Quarter', '90', '2015-04-20 16:52:17', 9),
(7, 'Computer', '1st Quarter', '90', '2015-04-20 16:52:45', 10),
(8, 'English', '1st Quarter', '90', '2015-04-20 16:53:06', 10),
(9, 'Computer', '2nd Quarter', '90', '2015-04-20 16:53:21', 10),
(10, 'Filipino', '2nd Quarter', '90', '2015-04-20 16:55:22', 10),
(11, 'Filipino', '3rd Quarter', '69', '2015-04-20 16:56:01', 10),
(12, 'Filipino', '4th Quarter', '79', '2015-04-20 16:56:12', 10),
(13, 'Computer', '1st Quarter', '99', '2015-04-20 17:01:20', 12),
(14, 'Math', '3rd Quarter', '65', '2015-04-20 21:47:24', 11);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`id` int(11) NOT NULL,
  `level_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_name`) VALUES
(1, 'Grade 1'),
(2, 'Grade 2'),
(3, 'Grade 3'),
(4, 'Grade 4'),
(5, 'Grade 5'),
(6, 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
`id` int(11) NOT NULL,
  `section_name` varchar(45) NOT NULL,
  `level_id` int(11) NOT NULL,
  `level_desc` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_name`, `level_id`, `level_desc`) VALUES
(1, 'Einstein', 1, 'Grade 1'),
(2, 'Aristotle', 1, 'Grade 1'),
(3, 'Newton', 1, 'Grade 1'),
(4, 'Darwin', 2, 'Grade 2'),
(5, 'Galileo', 2, 'Grade 2'),
(6, 'Curie', 2, 'Grade 2'),
(7, 'Archimedes', 3, 'Grade 3'),
(8, 'Maxwell', 3, 'Grade 3'),
(9, 'Hawking', 3, 'Grade 3'),
(10, 'Tesla', 4, 'Grade 4'),
(11, 'Boyle', 4, 'Grade 4'),
(12, 'Pascal', 4, 'Grade 4'),
(13, 'Watson', 5, 'Grade 5'),
(14, 'Descartes', 5, 'Grade 5'),
(15, 'Dalton', 5, 'Grade 5'),
(16, 'Edison', 6, 'Grade 6'),
(17, 'Bell', 6, 'Grade 6'),
(18, 'Thompson', 6, 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Student','Teacher') COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `type`, `first_name`, `last_name`, `full_name`, `age`, `gender`, `birthdate`, `address`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `section_id`, `level_id`) VALUES
(9, 'bqcruz', 'Student', 'Brandon', 'Cruz', 'Brandon Cruz', 19, 'Male', '1995-11-18', 'Pasay City', 'dwUJtqEbW5_Q9e7FjdDu3dVe55gDZtUy', '$2y$13$xIadBa/J50mHAN5oesXAU.hEw9WbnlyLIP3ywBVCVJCujZQx6Nn36', NULL, 'bltzkrg18@gmail.com', 10, 1429535757, 1429535757, 18, 6),
(10, 'jhuntabudlong', 'Student', 'Jhun', 'Tabudlong', 'Jhun Tabudlong', 20, 'Male', '1993-09-07', '145 Tulips Makati City', '0EsLyqdca_2C8rFAl52muLJXNBT33Zos', '$2y$13$XeSSK0tLDqIfvfUFzuo8geew9IlMhnxBsaOJydsP34b7TvGIkqnlS', NULL, 'jhuntabudlong@gmail.com', 10, 1429539815, 1429539815, 8, 3),
(11, 'renond', 'Student', 'Renon', 'Dadulla', 'Renon Dadulla', 20, 'Male', '1994-09-15', '551 Maharlika Street Marikina City', 'P_hhWN4_xi4ajmUMQ_hiU7-nqgqPlCOM', '$2y$13$8Nw8shyCtmfiEaqC2e2AFe0AgWZVnoobR/HeZA1nvuLNx58b0STCe', NULL, 'renond@fulbright.student.com', 10, 1429547702, 1429547702, 4, 1),
(12, 'alihl', 'Student', 'Alih', 'Lino', 'Alih Lino', 22, 'Male', '1994-07-20', '155 Maharlika Street Quezon City', 'lVFblJy-6n8vgGGrb9Iv8aH8fe4zpgb5', '$2y$13$wZKKzBuvM5ueVxWW7GlVm.jRlAhC/cwKrbGgc4pDGOjwut5v4bUHy', NULL, 'alihl@fulbright.student.com', 10, 1429549254, 1429549254, 13, 6),
(13, 'ndgonzales', 'Teacher', 'Nickolo', 'Gonzales', 'Nickolo Gonzales', 19, 'Male', '2015-04-24', 'Merville', 'gXqETi17ngbgJqtbjo5XTZdgh-k81780', '$2y$13$rV6l6mY3k2q3rCOblac0jeJkET2cUVJ26QmZ4sut4l2BhN7kxAg.C', NULL, 'nickologonzales@gmail.com', 10, 1429565337, 1429565337, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_grade_user1_idx` (`user_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_section_level1_idx` (`level_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_user_section1_idx` (`section_id`), ADD KEY `fk_user_level1_idx` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
ADD CONSTRAINT `fk_grade_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
ADD CONSTRAINT `fk_section_level1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `fk_user_level1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_user_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
