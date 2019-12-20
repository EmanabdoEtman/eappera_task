-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 09:13 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eappera_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `user_id`, `created_at`) VALUES
(1, '10 Ways to Promote Your Website', 'How do you get more exposure for your website and make it bear fruit for your business? Let’s take a look at 10 steps you can take to help increase traffic and engagement.', 1, '2019-12-20 19:46:27'),
(2, 'How To Create A Fashion Blog Online', 'After enjoying much success online, Style.com ventured into print media in 2012. Like many magazines in the print publishing world, however, the endeavor was difficult to sustain.', 1, '2019-12-20 19:48:56'),
(3, 'Battle of Website Builders: Wix vs. SiteBuilder', 'Launching a new website is now easier than ever thanks to do-it-yourself website builders', 1, '2019-12-20 19:49:39'),
(4, 'Battle of Website Builders: Wix vs. SiteBuilder', 'Launching a new website is now easier than ever thanks to do-it-yourself website builders', 1, '2019-12-20 19:49:39'),
(5, 'How To Create A Fashion Blog Online', 'After enjoying much success online, Style.com ventured into print media in 2012. Like many magazines in the print publishing world, however, the endeavor was difficult to sustain.', 1, '2019-12-20 19:48:56'),
(6, '10 Ways to Promote Your Website', 'How do you get more exposure for your website and make it bear fruit for your business? Let’s take a look at 10 steps you can take to help increase traffic and engagement.', 1, '2019-12-20 19:46:27'),
(7, 'Battle of Website Builders: Wix vs. SiteBuilder', 'Launching a new website is now easier than ever thanks to do-it-yourself website builders', 1, '2019-12-20 19:49:39'),
(8, 'How To Create A Fashion Blog Online', 'After enjoying much success online, Style.com ventured into print media in 2012. Like many magazines in the print publishing world, however, the endeavor was difficult to sustain.', 1, '2019-12-20 19:48:56'),
(9, '10 Ways to Promote Your Website', 'How do you get more exposure for your website and make it bear fruit for your business? Let’s take a look at 10 steps you can take to help increase traffic and engagement.', 1, '2019-12-20 19:46:27'),
(10, 'Battle of Website Builders: Wix vs. SiteBuilder', 'Launching a new website is now easier than ever thanks to do-it-yourself website builders', 1, '2019-12-20 19:49:39'),
(11, 'How To Create A Fashion Blog Online', 'After enjoying much success online, Style.com ventured into print media in 2012. Like many magazines in the print publishing world, however, the endeavor was difficult to sustain.', 1, '2019-12-20 19:48:56'),
(12, '10 Ways to Promote Your Website', 'How do you get more exposure for your website and make it bear fruit for your business? Let’s take a look at 10 steps you can take to help increase traffic and engagement.', 1, '2019-12-20 19:46:27'),
(13, 'Battle of Website Builders: Wix vs. SiteBuilder', 'Launching a new website is now easier than ever thanks to do-it-yourself website builders', 1, '2019-12-20 19:49:39'),
(14, 'How To Create A Fashion Blog Online', 'After enjoying much success online, Style.com ventured into print media in 2012. Like many magazines in the print publishing world, however, the endeavor was difficult to sustain.', 1, '2019-12-20 19:48:56'),
(15, '10 Ways to Promote Your Website', 'How do you get more exposure for your website and make it bear fruit for your business? Let’s take a look at 10 steps you can take to help increase traffic and engagement.', 1, '2019-12-20 19:46:27'),
(16, 'Battle of Website Builders: Wix vs. SiteBuilder', 'Launching a new website is now easier than ever thanks to do-it-yourself website builders', 1, '2019-12-20 19:49:39'),
(17, 'How To Create A Fashion Blog Online', 'After enjoying much success online, Style.com ventured into print media in 2012. Like many magazines in the print publishing world, however, the endeavor was difficult to sustain.', 1, '2019-12-20 19:48:56'),
(18, '10 Ways to Promote Your Website', 'How do you get more exposure for your website and make it bear fruit for your business? Let’s take a look at 10 steps you can take to help increase traffic and engagement.', 1, '2019-12-20 19:46:27'),
(19, 'Battle of Website Builders: Wix vs. SiteBuilder', 'Launching a new website is now easier than ever thanks to do-it-yourself website builders', 1, '2019-12-20 19:49:39'),
(20, 'How To Create A Fashion Blog Online', 'After enjoying much success online, Style.com ventured into print media in 2012. Like many magazines in the print publishing world, however, the endeavor was difficult to sustain.', 1, '2019-12-20 19:48:56'),
(21, '10 Ways to Promote Your Website', 'How do you get more exposure for your website and make it bear fruit for your business? Let’s take a look at 10 steps you can take to help increase traffic and engagement.', 1, '2019-12-20 19:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `phone`, `email`, `password`, `created_at`) VALUES
(1, 'Eman', 'Etman', '01007132399', 'eman@gmail.com', '$2y$10$W2aSxGHdO4oKYSTnmDSFPenfKk8mZdPWkCiz2ArwQL349kN1Xd0dS', '2019-12-20 19:13:15'),
(2, 'noha', 'Etman', '01007132399', 'noha@gmail.com', '$2y$10$1YoaDftIzTlk3T54i8qIqe1PPXSlCjyRhI3ubRLlfYu2JUHwC99Ue', '2019-12-20 19:48:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
