-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 08:04 AM
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
CREATE SCHEMA IF NOT EXISTS `fullbright_aps` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `fullbright_aps` ;
-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL,
  `account_username` varchar(25) DEFAULT NULL,
  `account_password` varchar(25) DEFAULT NULL,
  `account_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_name`, `gallery_description`, `gallery_picture`) VALUES
(21, 'School''s Cafeteria', 'This is where the children are having their lunch, eat their "baon". Some of the faculty are watching over the kinder, preparatory and toddlers here during breaktime. \r\nIt''s located on the 3rd floor of the school.', 'images/gallery_images/21.jpg'),
(22, 'School''s Main Gate', 'This is the school''s main gate, This is where your child can stay whenever they are released early to wait for their guardian or parent. They are accompanied by the teachers, and the school staff near the gate. So the school would still maintain a healthy environment and atmosphere.', 'images/gallery_images/22.jpg'),
(23, 'Student Classrooms', 'This is where we value education, our passionate teachers help each other to provide quality education to the students, incoming freshmen, transferees. All of them, we value them so they would become agents of transformation. ', 'images/gallery_images/23.jpg'),
(24, 'School''s Lobby', 'Welcome to the school''s lobby, this where students are waiting for their guardians', 'images/gallery_images/24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(11) NOT NULL,
  `grade_remarks` varchar(45) DEFAULT NULL,
  `grade_date_submitted` timestamp NULL DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `id` int(11) NOT NULL,
  `parent_fname` varchar(30) DEFAULT NULL,
  `parent_midname` varchar(30) DEFAULT NULL,
  `parent_lname` varchar(30) DEFAULT NULL,
  `parent_address` varchar(70) DEFAULT NULL,
  `parent_age` int(3) DEFAULT NULL,
  `parent_gender` varchar(6) DEFAULT NULL,
  `parent_occupation` varchar(45) DEFAULT NULL,
  `parent_contact` varchar(45) DEFAULT NULL,
  `parent_email` varchar(45) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE IF NOT EXISTS `registrar` (
  `id` int(11) NOT NULL,
  `registrar_fname` varchar(45) DEFAULT NULL,
  `registrar_midname` varchar(45) DEFAULT NULL,
  `registrar_lname` varchar(45) DEFAULT NULL,
  `registrar_address` varchar(70) DEFAULT NULL,
  `registrar_age` int(3) DEFAULT NULL,
  `registrar_gender` varchar(6) DEFAULT NULL,
  `registrar_contact` varchar(45) DEFAULT NULL,
  `registrar_birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE IF NOT EXISTS `school_year` (
  `id` int(11) NOT NULL,
  `school_year_name` varchar(45) DEFAULT NULL,
  `school_year_description` varchar(45) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(45) DEFAULT NULL,
  `section_description` varchar(45) DEFAULT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `student_fname` varchar(30) DEFAULT NULL,
  `student_midname` varchar(30) DEFAULT NULL,
  `student_lname` varchar(30) DEFAULT NULL,
  `student_address` varchar(45) DEFAULT NULL,
  `student_age` int(3) DEFAULT NULL,
  `student_gender` varchar(6) DEFAULT NULL,
  `student_birthdate` date DEFAULT NULL,
  `account_id` int(11) NOT NULL,
  `year_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(20) DEFAULT NULL,
  `subect_description` varchar(45) DEFAULT NULL,
  `grade_id` int(11) NOT NULL,
  `registrar_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL,
  `teacher_fname` varchar(30) DEFAULT NULL,
  `teacher_midname` varchar(30) DEFAULT NULL,
  `teacher_lname` varchar(30) DEFAULT NULL,
  `teacher_address` varchar(70) DEFAULT NULL,
  `teacher_age` int(3) DEFAULT NULL,
  `teacher_gender` varchar(6) DEFAULT NULL,
  `teacher_contact` varchar(45) DEFAULT NULL,
  `teacher_birthdate` date DEFAULT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'normal', 'WrPt9WhR-wDq3XPEFh_ZgmUSrATWgnEI', '$2y$13$WT29IpOhNPRiW7SLvKGHieleaiOrg5ZLiKjBW1rWNo4QjPfHXKvty', NULL, 'normal@email.com', 10, 1428087901, 1428087901),
(4, 'martinayson', 'gyk1zu7TgUSedWXfcVEvwFIXsaOjg1Lq', '$2y$13$WaFvhMb3sZ9BXR5yZQEXAeaKsGpVavYzeT1wavfxKy0OMwGV4frzy', NULL, 'martinayson@gmail.com', 10, 1428458500, 1428458500),
(5, 'jhuntabudlong', 'BCJG7er8-nxEPR1iZLqlU6mhNZffP3JN', '$2y$13$DwP/PGye3iOV995p1.l25e3hM1LPsB2/EVs139YXVBU57AL4QH6uq', NULL, 'jhuntabudlong@gmail.com', 10, 1428685304, 1428685304);

-- --------------------------------------------------------

--
-- Table structure for table `year_level`
--

CREATE TABLE IF NOT EXISTS `year_level` (
  `id` int(11) NOT NULL,
  `year_level_name` varchar(45) DEFAULT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

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
 ADD PRIMARY KEY (`id`), ADD KEY `fk_grade_student_idx` (`student_id`), ADD KEY `fk_grade_teacher1_idx` (`teacher_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_parent_student1_idx` (`student_id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_school_year_student1_idx` (`student_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_section_teacher1_idx` (`teacher_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_student_account1_idx` (`account_id`), ADD KEY `fk_student_year_level1_idx` (`year_level_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_subject_grade1_idx` (`grade_id`), ADD KEY `fk_subject_registrar1_idx` (`registrar_id`), ADD KEY `fk_subject_student1_idx` (`student_id`), ADD KEY `fk_subject_teacher1_idx` (`teacher_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_teacher_account1_idx` (`account_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_level`
--
ALTER TABLE `year_level`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_year_level_section1_idx` (`section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
ADD CONSTRAINT `fk_grade_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_grade_teacher1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
ADD CONSTRAINT `fk_parent_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `school_year`
--
ALTER TABLE `school_year`
ADD CONSTRAINT `fk_school_year_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
ADD CONSTRAINT `fk_section_teacher1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `fk_student_account1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_student_year_level1` FOREIGN KEY (`year_level_id`) REFERENCES `year_level` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
ADD CONSTRAINT `fk_subject_grade1` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_subject_registrar1` FOREIGN KEY (`registrar_id`) REFERENCES `registrar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_subject_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_subject_teacher1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
ADD CONSTRAINT `fk_teacher_account1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `year_level`
--
ALTER TABLE `year_level`
ADD CONSTRAINT `fk_year_level_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
