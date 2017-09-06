-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 08:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_09_06_084906_create_mugs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mugs`
--

CREATE TABLE `mugs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mainimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mugs`
--

INSERT INTO `mugs` (`id`, `created_at`, `updated_at`, `mainimage`, `title`, `description`, `price`) VALUES
(1, '2017-09-06 09:35:46', '2017-09-06 09:35:46', 'https://5.imimg.com/data5/WT/XV/MY-10699537/printed-mugs-250x250.jpg', 'Faces Mug', 'This mug has faces printed on it', 500.00),
(2, '2017-09-06 09:35:46', '2017-09-06 09:35:46', 'https://4.imimg.com/data4/HY/BH/MY-27716513/printed-mugs-250x250.png', 'In love Mug', 'This mug has phrase IN LOVE printed', 525.00),
(3, '2017-09-06 09:35:46', '2017-09-06 09:35:46', 'https://3.imimg.com/data3/KH/BA/MY-15462102/printed-mugs-250x250.jpg', 'Flowers Mug', 'This mug has flowers printed on it', 550.00),
(4, '2017-09-06 09:35:46', '2017-09-06 09:35:46', 'https://4.imimg.com/data4/UG/TD/MY-13616476/printed-mug-250x250.jpg', 'LOVE Mug', 'This mug has LOVE logo printed on it', 575.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mugs`
--
ALTER TABLE `mugs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mugs`
--
ALTER TABLE `mugs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
