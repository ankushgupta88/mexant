-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 03:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mexant`
--

-- --------------------------------------------------------

--
-- Table structure for table `mexant_table`
--

CREATE TABLE `mexant_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'customer',
  `created_by` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `gender` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mexant_table`
--

INSERT INTO `mexant_table` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `user_type`, `created_by`, `updated_by`, `gender`, `image`) VALUES
(16, 'sunil', 'kumar', 'sunilkumar.caresortsolutions@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345678', 'admin', '2022-07-08 07:59:45.343230', '2022-07-08 07:59:45.343230', 'male', NULL),
(18, 'vipan', 'kumar', 'vipan@12345.com', '827ccb0eea8a706c4c34a16891f84e7b', '9805925723', 'customer', '2022-07-12 08:24:49.594049', '2022-07-12 08:24:49.594049', 'male', 'service-image-03.jpg'),
(21, 'test', 'testing', 'caresortsolutions247@gmail.com', '690218ae8f05ebab5d79af46b8b732f5', '5555555555', 'customer', '2022-07-15 08:03:02.606481', '2022-07-15 08:03:02.606481', 'male', NULL),
(23, 'vishal', 'kumar', 'kvishal801@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', 'customer', '2022-07-29 04:48:07.625951', '2022-07-29 04:48:07.625951', 'male', 'istockphoto-1301112929-170667a.jpg'),
(24, 'vishal', 'kumar', 'kvishal802@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '7832020465', 'customer', '2022-07-29 04:50:53.984967', '2022-07-29 04:50:53.984967', '', 'photo-1509390144018-eeaf65052242.jpg'),
(25, 'vishal', 'kumar', 'kvishal805@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '7832020465', 'customer', '2022-07-29 05:16:47.701375', '2022-07-29 05:16:47.701375', 'male', 'service-image-01.jpg'),
(26, 'vishal', 'kumar', 'kvishal8051@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '7832020465', 'customer', '2022-07-29 06:34:19.838388', '2022-07-29 06:34:19.838388', 'male', 'slide-02.jpg'),
(27, 'jai', 'suryan', 'jai801@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '7832020465', 'customer', '2022-07-29 06:50:55.379775', '2022-07-29 06:50:55.379775', 'male', 'service-image-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_desc` text DEFAULT NULL,
  `service_image` varchar(255) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `posted_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_desc`, `service_image`, `cat_id`, `created_at`, `posted_at`) VALUES
(38, 'CSS Templates', 'TemplateMo website is the best for you to explore and download free website templates.', 'photo-1509390144018-eeaf65052242.jpg', 1, '2022-07-26 13:22:57.150309', '2022-07-26 13:22:57.150309'),
(39, 'HTML5 Web Pages', 'Templates are based on Bootstrap 5 CSS framework. You can easily adapt or modify based on your needs.', 'photo-1509390144018-eeaf65052242.jpg', 1, '2022-07-26 13:23:19.799983', '2022-07-26 13:23:19.799983'),
(40, 'Responsive Designs', 'All of our CSS templates are 100% free to use for commercial or business websites.', 'istockphoto-1301112929-170667a.jpg', 1, '2022-07-26 13:24:26.712273', '2022-07-26 13:24:26.712273'),
(41, 'Mobile and Tablet ready!', 'Our HTML CSS templates are well-tested on mobile, tablet, and desktop compatibility.', 'photo-1509390144018-eeaf65052242.jpg', 1, '2022-07-26 13:24:47.385655', '2022-07-26 13:24:47.385655'),
(42, 'Fast Customer Support', 'Do not be hesitated to contact us if you have any question or concern about our templates.', 'photo-1509390144018-eeaf65052242.jpg', 1, '2022-07-26 13:25:06.142166', '2022-07-26 13:25:06.142166'),
(43, 'Fully Customizable', 'If you have any idea or suggestion about new templates, feel free to let us know.', 'photo-1509390144018-eeaf65052242.jpg', 1, '2022-07-26 13:25:23.427040', '2022-07-26 13:25:23.427040'),
(44, 'Digital Currencies', 'You will see a bunch of free CSS templates when you search on Google. TemplateMo is the best one because it is 100% free for anyone. We do not ask you anything in return. You are free to use our templates for any purpose.', 'service-image-01.jpg', 2, '2022-07-26 13:26:34.335582', '2022-07-26 13:26:34.335582'),
(45, 'Financial Solutions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et ex massa. In ac laoreet urna. Curabitur eu enim nibh. Phasellus sodales nisi vel leo aliquam, ut tempus augue hendrerit. Pellentesque eu risus tincidunt, condimentum eros in, auctor augue. Vivamus et urna blandit, varius sapien sed.', 'service-image-02.jpg', 2, '2022-07-26 13:26:56.939973', '2022-07-26 13:26:56.939973'),
(46, 'Cryptocurrency Exchanges', 'Mauris id efficitur ante, vitae ultrices metus. Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.', 'service-image-03.jpg', 2, '2022-07-26 13:27:16.763461', '2022-07-26 13:27:16.763461');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_desc` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_by` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`cat_id`, `cat_name`, `cat_desc`, `status`, `created_by`, `updated_by`) VALUES
(1, 'home', 'hello', '0', '2022-07-26 11:31:34.293804', '2022-07-26 11:31:34.293804'),
(2, 'service', 'bye', '0', '2022-07-26 11:32:11.767955', '2022-07-26 11:32:11.767955');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) DEFAULT NULL,
  `slider_desc` varchar(255) DEFAULT NULL,
  `slider_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_desc`, `slider_img`) VALUES
(3, 'Get <em>ready</em> for your business<br>&amp; upgrade <em>all aspects</em>', 'Mexant HTML5 Template is provided for free of charge. This layout is based on Boostrap 5 CSS framework. Anyone can download and edit for any professional website. Thank you for visiting TemplateMo website.', 'slide-01.jpg'),
(5, '<em>Digital</em>  Currency for<br> you & Best</br><em> Crypto  Tips</em>', 'You will see a bunch of free CSS templates when you search on Google. TemplateMo website is probably the best one because it is 100% free. It does not ask you anything in return. You have a total freedom to use any template for any purpose.', 'slide-02.jpg'),
(6, 'Best One in Town<br>&amp; Crypto <em>Services</em>', 'When you browse through different tags on TemplateMo website, you can see a variety of CSS templates which are responsive website designs for different individual needs. Please tell your friends about our website. Thank you.', 'slide-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `test_name` varchar(255) DEFAULT NULL,
  `test_position` varchar(255) DEFAULT NULL,
  `test_desc` text DEFAULT NULL,
  `test_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `test_name`, `test_position`, `test_desc`, `test_image`, `created_at`, `updated_at`) VALUES
(8, 'Mark ', 'Banker', 'Banker', 'image (6).png', '2022-07-12 05:17:18.756534', '2022-07-12 05:17:18.756534'),
(10, 'David Eigenberg', 'CEO of Mexant', 'Mukesh Dhirubhai Ambani is an Indian business magnate, chairman, managing director, and the largest shareholder of Reliance Industries', 'app-proven-img.png', '2022-07-12 05:51:51.947884', '2022-07-12 05:51:51.947884'),
(12, 'George Lopez', 'Banker', 'Mukesh Dhirubhai Ambani is an Indian business magnate, chairman, managing director, and the largest shareholder of Reliance Industries', 'foundary-proven-lg.png', '2022-07-12 05:52:59.482409', '2022-07-12 05:52:59.482409'),
(13, 'Peter', 'CEO of Mexant', 'adafa', 'logo-cbd.png', '2022-07-13 06:49:17.734134', '2022-07-13 06:49:17.734134');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mexant_table`
--
ALTER TABLE `mexant_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mexant_table`
--
ALTER TABLE `mexant_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
