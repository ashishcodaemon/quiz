-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 10:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `choises`
--

CREATE TABLE `choises` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choises`
--

INSERT INTO `choises` (`id`, `question_id`, `is_correct`, `options`) VALUES
(1, 1, 0, 'Hypertext multiprocessor'),
(2, 1, 1, 'Hypertext Preprocessor'),
(3, 1, 0, 'Hypertext markup Preprocessor'),
(4, 1, 0, 'Hypertune Preprocessor'),
(5, 2, 0, 'user-side scripting'),
(6, 2, 0, 'client-side scripting'),
(7, 2, 1, 'server-side scripting'),
(8, 2, 0, 'Both B and C'),
(9, 3, 0, 'Tim Berners-Lee'),
(10, 3, 0, 'Brendan Eich'),
(11, 3, 0, 'Guido van Rossum'),
(12, 3, 1, 'Rasmus Lerdorf'),
(13, 4, 0, '1993'),
(14, 4, 1, '1994'),
(15, 4, 0, '1995'),
(16, 4, 0, '1996'),
(17, 5, 0, 'XML'),
(18, 5, 0, 'HTML'),
(19, 5, 1, 'PHP'),
(20, 5, 0, 'PH'),
(21, 6, 0, 'CONST'),
(22, 6, 1, 'DEFINE'),
(23, 6, 0, 'VAR'),
(24, 6, 0, 'LET'),
(25, 7, 0, '1'),
(26, 7, 0, '2'),
(27, 7, 1, '0'),
(28, 7, 0, '-1'),
(29, 8, 0, 'this_array'),
(30, 8, 1, 'is_array'),
(31, 8, 0, 'Do_array'),
(32, 8, 0, 'Do_array'),
(33, 9, 1, '2'),
(34, 9, 0, '3'),
(35, 9, 0, '4'),
(36, 9, 0, '5'),
(37, 10, 0, '2'),
(38, 10, 0, '3'),
(39, 10, 1, '4'),
(40, 10, 0, '5');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`) VALUES
(1, 'The term PHP is an acronym for PHP:_______________.'),
(2, 'PHP is a ____________ language?'),
(3, 'Who among this is the founder of php language?'),
(4, 'In which year php was created?'),
(5, 'Extension of php is'),
(6, 'Which of the following is the correct way to declare constant in php'),
(7, 'PHP numerically indexed array begin with position_____'),
(8, 'Which function will return true if variable is an array or false if it is not'),
(9, 'Total ways in which user a print output in PHP is -'),
(10, 'total looping statement supported by php are');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `submitted_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `created_at`) VALUES
(1, 'rohitjadahv@gamil.com', '2022-05-26 11:46:11'),
(2, 'rohitjadahv@gamil.com', '2022-05-26 11:46:36'),
(3, 'lila@mailinator.com', '2022-05-26 11:47:23'),
(4, 'regehop@mailinator.com', '2022-05-26 11:47:43'),
(5, 'dyderagesy@mailinator.com', '2022-05-26 11:49:00'),
(6, 'mevyloga@mailinator.com', '2022-05-26 11:49:25'),
(7, 'xokugyjot@mailinator.com', '2022-05-26 11:49:54'),
(8, 'rohitjadahv@gamil.com', '2022-05-26 11:50:14'),
(9, 'rohitjadahv@gamil.com', '2022-05-26 12:00:13'),
(10, 'dalo@mailinator.com', '2022-05-26 12:00:59'),
(11, 'kidem@mailinator.com', '2022-05-26 12:01:27'),
(12, 'rohitjadahv@gamil.com', '2022-05-26 12:02:48'),
(13, 'gedytun@mailinator.com', '2022-05-26 12:04:01'),
(14, 'suluji@mailinator.com', '2022-05-26 12:09:06'),
(15, 'xohory@mailinator.com', '2022-05-26 12:09:48'),
(16, 'rohitjadahv@gamil.com', '2022-05-26 12:12:54'),
(17, 'hysawado@mailinator.com', '2022-05-26 12:13:34'),
(18, 'rohitjadahv@gamil.com', '2022-05-26 12:15:01'),
(19, 'rohitjadahv@gamil.com', '2022-05-26 12:19:33'),
(20, 'rohitjadahv@gamil.com', '2022-05-26 12:19:58'),
(21, 'rohitjadahv@gamil.com', '2022-05-26 12:20:08'),
(22, 'rohitjadahv@gamil.com', '2022-05-26 12:21:58'),
(23, 'rohitjadahv@gamil.com', '2022-05-26 12:22:54'),
(24, 'rohitjadahv@gamil.com', '2022-05-26 12:23:50'),
(25, 'rohitjadahv@gamil.com', '2022-05-26 12:24:19'),
(26, 'rohitjadahv@gamil.com', '2022-05-26 12:25:52'),
(27, 'mocibad@mailinator.com', '2022-05-26 12:41:06'),
(28, 'rohitjadahv@gamil.com', '2022-05-26 12:41:37'),
(29, 'hoxewawu@mailinator.com', '2022-05-26 12:42:01'),
(30, 'rohitjadahv@gamil.com', '2022-05-26 12:42:46'),
(31, 'rohitjadahv@gamil.com', '2022-05-26 12:43:27'),
(32, 'tacujycur@mailinator.com', '2022-05-26 13:54:31'),
(33, 'rohitjadahv@gamil.com', '2022-05-26 13:57:44'),
(34, 'diqamysu@mailinator.com', '2022-05-26 13:57:54'),
(35, 'diqamysu@mailinator.com', '2022-05-26 13:58:20'),
(36, 'ryvetoqami@mailinator.com', '2022-05-26 13:58:47'),
(37, 'ryvetoqami@mailinator.com', '2022-05-26 13:59:33'),
(38, 'rohitjadahv@gamil.com', '2022-05-26 13:59:54'),
(39, 'rohitjadahv@gamil.com', '2022-05-26 14:03:35'),
(40, 'rohitjadahv@gamil.com', '2022-05-26 14:04:28'),
(41, 'rohitjadahv@gamil.com', '2022-05-26 14:04:51'),
(42, 'rohitjadahv@gamil.com', '2022-05-26 14:05:14'),
(43, 'rohitjadahv@gamil.com', '2022-05-26 14:08:39'),
(44, 'rohitjadahv@gamil.com', '2022-05-26 14:08:48'),
(45, 'rohitjadahv@gamil.com', '2022-05-26 14:08:55'),
(46, 'rohitjadahv@gamil.com', '2022-05-26 14:09:01'),
(47, 'rohitjadahv@gamil.com', '2022-05-26 14:09:35'),
(48, 'rohitjadahv@gamil.com', '2022-05-26 14:12:49'),
(49, 'rohitjadahv@gamil.com', '2022-05-26 14:12:56'),
(50, 'rohitjadahv@gamil.com', '2022-05-26 14:13:09'),
(51, 'rohitjadahv@gamil.com', '2022-05-26 14:13:15'),
(52, 'rohitjadahv@gamil.com', '2022-05-26 14:13:25'),
(53, 'rohitjadahv@gamil.com', '2022-05-26 14:13:52'),
(54, 'rohitjadahv@gamil.com', '2022-05-26 14:13:56'),
(55, 'rohitjadahv@gamil.com', '2022-05-26 14:14:04'),
(56, 'rohitjadahv@gamil.com', '2022-05-26 14:18:52'),
(57, 'rohitjadahv@gamil.com', '2022-05-26 14:19:19'),
(58, 'rohitjadahv@gamil.com', '2022-05-26 14:19:34'),
(59, 'rohitjadahv@gamil.com', '2022-05-26 14:20:04'),
(60, 'rohitjadahv@gamil.com', '2022-05-26 14:20:24'),
(61, 'rohitjadahv@gamil.com', '2022-05-26 14:23:26'),
(62, 'rohitjadahv@gamil.com', '2022-05-26 14:23:46'),
(63, 'rohitjadahv@gamil.com', '2022-05-26 14:23:53'),
(64, 'rohitjadahv@gamil.com', '2022-05-26 14:26:56'),
(65, 'rohitjadahv@gamil.com', '2022-05-26 14:30:03'),
(66, 'rohitjadahv@gamil.com', '2022-05-26 14:30:14'),
(67, 'rohitjadahv@gamil.com', '2022-05-26 14:30:21'),
(68, 'rohitjadahv@gamil.com', '2022-05-26 14:30:28'),
(69, 'rohitjadahv@gamil.com', '2022-05-26 14:33:35'),
(70, 'rohitjadahv@gamil.com', '2022-05-26 14:33:47'),
(71, 'rohitjadahv@gamil.com', '2022-05-26 14:35:33'),
(72, 'rohitjadahv@gamil.com', '2022-05-26 14:35:45'),
(73, 'rohitjadahv@gamil.com', '2022-05-26 14:36:18'),
(74, 'rohitjadahv@gamil.com', '2022-05-26 14:38:34'),
(75, 'rohitjadahv@gamil.com', '2022-05-26 14:39:07'),
(76, 'rohitjadahv@gamil.com', '2022-05-26 14:39:58'),
(77, 'rohitjadahv@gamil.com', '2022-05-26 14:40:14'),
(78, 'rohitjadahv@gamil.com', '2022-05-26 14:40:40'),
(79, 'rohitjadahv@gamil.com', '2022-05-26 14:42:15'),
(80, 'rohitjadahv@gamil.com', '2022-05-26 14:42:35'),
(81, 'rohitjadahv@gamil.com', '2022-05-26 14:48:55'),
(82, 'rohitjadahv@gamil.com', '2022-05-26 14:49:17'),
(83, 'rohitjadahv@gamil.com', '2022-05-26 14:49:54'),
(84, 'rohitjadahv@gamil.com', '2022-05-26 14:50:02'),
(85, 'rohitjadahv@gamil.com', '2022-05-26 14:51:23'),
(86, 'rohitjadahv@gamil.com', '2022-05-26 14:52:32'),
(87, 'rohitjadahv@gamil.com', '2022-05-26 14:56:07'),
(88, 'rohitjadahv@gamil.com', '2022-05-26 14:59:24'),
(89, 'rohitjadahv@gamil.com', '2022-05-26 15:01:43'),
(90, 'rohitjadahv@gamil.com', '2022-05-26 15:04:52'),
(91, 'rohitjadahv@gamil.com', '2022-05-26 15:08:46'),
(92, 'rohitjadahv@gamil.com', '2022-05-26 15:10:00'),
(93, 'rohitjadahv@gamil.com', '2022-05-26 15:10:31'),
(94, 'rohitjadahv@gamil.com', '2022-05-26 15:12:18'),
(95, 'rohitjadahv@gamil.com', '2022-05-27 08:01:49'),
(96, 'rohitjadahv@gamil.com', '2022-05-27 08:03:04'),
(97, 'rohitjadahv@gamil.com', '2022-05-27 08:07:45'),
(98, 'rohitjadahv@gamil.com', '2022-05-27 08:17:48'),
(99, 'rohitjadahv@gamil.com', '2022-05-27 08:20:38'),
(100, 'rohitjadahv@gamil.com', '2022-05-27 08:35:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choises`
--
ALTER TABLE `choises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choises`
--
ALTER TABLE `choises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
