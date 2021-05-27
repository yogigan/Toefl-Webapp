-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 02:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount_of_data`
--

CREATE TABLE `amount_of_data` (
  `id` varchar(20) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amount_of_data`
--

INSERT INTO `amount_of_data` (`id`, `count`) VALUES
('question', 0),
('user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `id` varchar(10) NOT NULL,
  `value` varchar(250) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `question` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` varchar(20) NOT NULL,
  `sent_date` datetime DEFAULT NULL,
  `is_used` tinyint(4) NOT NULL DEFAULT 0,
  `user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `sent_date`, `is_used`, `user`) VALUES
('TOEFL-it5cTJ7G68vCXq', NULL, 0, 'U771234761');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` varchar(20) NOT NULL,
  `score` float DEFAULT NULL,
  `is_passed` tinyint(4) NOT NULL,
  `schedule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `score`, `is_passed`, `schedule`) VALUES
('TOEFL-it5cTJ7G68vCXq', NULL, 0, 'S000000002');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `id` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `exam` varchar(20) NOT NULL,
  `question` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` varchar(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `duration` int(11) NOT NULL,
  `number_of_question` int(11) NOT NULL,
  `is_delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `duration`, `number_of_question`, `is_delete`) VALUES
('TOEFL', 'CBT TOEFL', 120, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` varchar(10) NOT NULL,
  `value` varchar(250) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `segment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` varchar(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `number_of_user` int(11) NOT NULL,
  `is_expired` tinyint(4) NOT NULL,
  `package` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `start_date`, `end_date`, `number_of_user`, `is_expired`, `package`) VALUES
('S000000001', 'CBT Toefl (Listening, Reading, Writing)', '2021-06-01 09:00:00', '2021-06-01 12:00:00', 0, 0, 'TOEFL'),
('S000000002', 'CBT Toefl (Listening, Reading, Writing)', '2021-06-08 09:00:00', '2021-06-08 12:00:00', 0, 0, 'TOEFL');

-- --------------------------------------------------------

--
-- Table structure for table `seqment`
--

CREATE TABLE `seqment` (
  `id` varchar(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `example` varchar(250) NOT NULL,
  `number_of_question` int(11) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `package` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`) VALUES
('U771234761', 'Yogi Pratama', 'bachtiarnuryogipratama@gmail.com', '085156986819');

-- --------------------------------------------------------

--
-- Table structure for table `user_choice`
--

CREATE TABLE `user_choice` (
  `id` int(11) NOT NULL,
  `exam_question` int(11) NOT NULL,
  `choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount_of_data`
--
ALTER TABLE `amount_of_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question` (`question`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule` (`schedule`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam` (`exam`),
  ADD KEY `question` (`question`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `segment` (`segment`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package` (`package`);

--
-- Indexes for table `seqment`
--
ALTER TABLE `seqment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package` (`package`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_choice`
--
ALTER TABLE `user_choice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `choice` (`choice`),
  ADD KEY `exam_question` (`exam_question`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_question`
--
ALTER TABLE `exam_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_choice`
--
ALTER TABLE `user_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choice`
--
ALTER TABLE `choice`
  ADD CONSTRAINT `choice_ibfk_1` FOREIGN KEY (`question`) REFERENCES `question` (`id`);

--
-- Constraints for table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `code_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`id`) REFERENCES `code` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`schedule`) REFERENCES `schedule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD CONSTRAINT `exam_question_ibfk_1` FOREIGN KEY (`exam`) REFERENCES `exam` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_question_ibfk_2` FOREIGN KEY (`question`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`segment`) REFERENCES `seqment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`package`) REFERENCES `package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seqment`
--
ALTER TABLE `seqment`
  ADD CONSTRAINT `seqment_ibfk_1` FOREIGN KEY (`package`) REFERENCES `package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_choice`
--
ALTER TABLE `user_choice`
  ADD CONSTRAINT `user_choice_ibfk_1` FOREIGN KEY (`choice`) REFERENCES `choice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_choice_ibfk_2` FOREIGN KEY (`exam_question`) REFERENCES `exam_question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
