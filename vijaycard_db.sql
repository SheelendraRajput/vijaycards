-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 05:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vijaycard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bridal_relative`
--

CREATE TABLE `bridal_relative` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bride_id` int(11) NOT NULL,
  `relative` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bridal_relative`
--

INSERT INTO `bridal_relative` (`id`, `user_id`, `bride_id`, `relative`, `status`, `created`, `updated`) VALUES
(1, 0, 0, 'tarun', 0, '2022-09-30 15:59:35', '2022-09-30 17:15:04'),
(2, 0, 0, 'ramesh2', 1, '2022-09-30 17:12:29', '2022-09-30 17:15:17'),
(3, 0, 0, 'ramesh', 1, '2022-09-30 17:13:40', '2022-09-30 17:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `bride`
--

CREATE TABLE `bride` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `br_name` varchar(255) NOT NULL,
  `br_image` text NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `g_f_name` varchar(255) NOT NULL,
  `g_m_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `age` date NOT NULL,
  `education` varchar(255) NOT NULL,
  `social_link` text NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bride`
--

INSERT INTO `bride` (`id`, `user_id`, `br_name`, `br_image`, `nickname`, `father_name`, `mother_name`, `g_f_name`, `g_m_name`, `content`, `age`, `education`, `social_link`, `address`, `status`, `created`, `updated`) VALUES
(1, 0, 'Somya', '47a0e11c48a92e851ebdf17adeb82972.jpg', 'Pandey', 'Mr. Krishna Pal', 'Smt. Ganga Devi', 'Mr. Gyan Pal', 'Smt. Shikha Devi', 'this\r\n', '2002-07-09', 'MS', 'somya_pandey', 'Agra\r\n', 1, '2022-09-28 14:28:41', '2022-09-28 15:35:07'),
(2, 0, 'Somya', '63bc0ed94c82bb319a0eaa877c8e3599.jpg', 'Pandey', 'Mr. Krishna Pal', 'Smt. Ganga Devi', 'Mr. Gyan Pal', 'Smt. Shikha Devi', 'this', '2002-07-09', 'MS', 'somya_pandey', 'Delhi', 1, '2022-09-28 14:31:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_name` varchar(255) NOT NULL,
  `gallery_thumnail` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `gallery_name`, `gallery_thumnail`, `status`, `created`, `updated`) VALUES
(1, 0, 'tera', '32d5f2cd8c9a9462c3754a582082035d.jpg', 1, '2028-09-22 09:38:47', '2028-09-22 09:38:47'),
(2, 0, 'groom', '3246878f4320924bc0c6b2bd3a050c1d.jpg', 0, '2028-09-22 09:39:30', '2028-09-22 09:39:30'),
(3, 0, 'groom', '40e0ee9dc0c355fe085abe6395f9e04f.jpg', 0, '2022-09-30 20:51:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `images` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groom`
--

CREATE TABLE `groom` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gr_name` varchar(255) NOT NULL,
  `gr_image` text NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `g_f_name` varchar(255) DEFAULT NULL,
  `g_m_name` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `age` date NOT NULL,
  `education` varchar(255) NOT NULL,
  `social_link` text NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groom`
--

INSERT INTO `groom` (`id`, `user_id`, `gr_name`, `gr_image`, `nickname`, `father_name`, `mother_name`, `g_f_name`, `g_m_name`, `content`, `age`, `education`, `social_link`, `address`, `status`, `created`, `updated`) VALUES
(1, 0, 'Ashish', '81888186f3c931adcaf7d446319ac984.jpg', 'Ashu', 'Mr. ramesh', 'Smt. snju devi', 'sdfasrh', 'styhesdh', '', '2028-09-22', 'MBA', 'Ashish_rajput', '', 0, '2028-09-22 09:27:40', '2028-09-22 10:10:57'),
(2, 0, 'Ashish', '9585d51c8347b429ad3f563f9b62942b.jpg', 'Ashu', 'Mr. ramesh', 'Smt. snju devi', 'sdfasrh', 'styhesdh', 'there are many type prodect.', '0000-00-00', 'MBA', 'Ashish_rajput', 'agra', 1, '2028-09-22 09:03:30', '2028-09-22 09:03:30'),
(3, 0, 'Ashishetyw', 'd8308832fca812f36aa2321ae0ee2b4a.jpg', 'Ashu457', 'Mr. ramesh', 'Smt. snju devi', 'sdfasrh', 'styhesdh', '', '2008-06-13', 'M.Tech', 'Ashish_rajput', '', 0, '2022-09-28 14:10:16', '2022-09-28 14:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `groom_relative`
--

CREATE TABLE `groom_relative` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `groom_id` int(11) NOT NULL,
  `relative` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groom_relative`
--

INSERT INTO `groom_relative` (`id`, `user_id`, `groom_id`, `relative`, `status`, `created`, `updated`) VALUES
(3, 0, 0, 'tarun', 0, '2022-09-30 17:06:46', '0000-00-00 00:00:00'),
(4, 0, 0, 'tarun', 0, '2022-09-30 19:56:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `txn_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `transaction_typoe` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `main_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `user_id`, `program`, `image`, `main_date`, `status`, `created`, `updated`) VALUES
(1, 0, 'Birthday1', 'd909e85b869d9bd591b47bda3af80d04.jpg', '2022-09-02', 0, '2022-09-28 16:55:34', '2022-09-28 17:15:46'),
(2, 0, 'Birthday', '3cd7d5c5a7e950fac7ec48f4ee224d1c.jpg', '2022-09-29', 1, '2022-09-28 16:56:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `user_id`, `image`, `title1`, `title2`, `date`, `status`, `created`, `updated`) VALUES
(11, 0, '4efe204e2941472d29c4e93178e88f49.jpg', 'sheelendraa', 'kumar', '2023-06-15', 1, '2028-09-22 07:13:16', '2022-09-28 14:07:20'),
(13, 0, 'f50e68e59e7ecbcf538346fdffa8d43e.jpg', 'rajat', 'ram', '2022-09-23', 1, '2028-09-22 07:13:27', '2022-09-28 10:25:43'),
(14, 0, '135c9e507821614a3b978ca16ed9b52b.jpg', 'rishabh', 'kkhjfg', '2026-06-11', 1, '2028-09-22 07:13:21', '2022-09-28 10:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `spacial_moments`
--

CREATE TABLE `spacial_moments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `moment` varchar(255) NOT NULL,
  `moment_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `id_verified` varchar(255) NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `theme_selection` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `site_link` text NOT NULL,
  `venue_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `first_name`, `last_name`, `email`, `phone`, `status`, `id_verified`, `otp`, `theme_selection`, `created`, `updated`, `slug`, `site_link`, `venue_location`) VALUES
(1, 'hema66e', 'Hemasrt', 'Arora', 'hema@gmail.com', '+91 9536003532', 0, 'hema@gmail.com', NULL, '', '2022-09-26 13:41:12', '2022-09-30 20:57:22', 'dgshj', 'adfhgdsh', 'fdydhgvbz'),
(2, 'rishu', 'Rishi', 'KUMAR', 'sheelendrakumar1282001@gmail.com', '+918859012325', 1, 'sheelendrakumar1282001@gmail.com', NULL, '38c2b7a31e0a9c98a89ae2f57cd0c36f.jpg', '2022-09-26 14:01:03', '2022-09-26 14:01:03', 'Friend', 'adfh', 'agra'),
(3, 'chirag04', 'chirag', 'dev', 'chirag@gmail.com', '+918859012325', 1, 'chirag@gmail.com', NULL, '', '2022-09-30 20:25:11', '0000-00-00 00:00:00', 'dgfjsrdsj', 'adfh', 'agra'),
(4, 'chirag04', 'chirag', 'dev', 'chirag@gmail.com', '+918859012325', 1, 'chirag@gmail.com', NULL, 'be239178816d2828e457571aa21b6692.jpg', '2022-09-30 20:28:00', '0000-00-00 00:00:00', 'dgfjsrdsj', 'adfh', 'agra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bridal_relative`
--
ALTER TABLE `bridal_relative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bride`
--
ALTER TABLE `bride`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groom`
--
ALTER TABLE `groom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groom_relative`
--
ALTER TABLE `groom_relative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spacial_moments`
--
ALTER TABLE `spacial_moments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bridal_relative`
--
ALTER TABLE `bridal_relative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bride`
--
ALTER TABLE `bride`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groom`
--
ALTER TABLE `groom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groom_relative`
--
ALTER TABLE `groom_relative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `spacial_moments`
--
ALTER TABLE `spacial_moments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
