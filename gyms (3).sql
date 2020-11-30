-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 أبريل 2019 الساعة 12:24
-- إصدار الخادم: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- بنية الجدول `gyms`
--

CREATE TABLE `gyms` (
  `gym name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id` int(2) NOT NULL,
  `pool` int(1) NOT NULL,
  `spa` int(1) NOT NULL,
  `salon` int(1) NOT NULL,
  `region` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cafe` int(1) NOT NULL,
  `foodmachine` int(1) NOT NULL,
  `games` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `gyms`
--

INSERT INTO `gyms` (`gym name`, `id`, `pool`, `spa`, `salon`, `region`, `gender`, `cafe`, `foodmachine`, `games`) VALUES
('Al-manahil', 1, 1, 1, 1, 'n', 'f', 0, 1, 1),
('Active Time fit', 2, 1, 1, 0, 'o', 'f', 1, 1, 0),
('Curves', 3, 1, 1, 1, 'e', 'f', 1, 1, 1),
('Fitness time ladies', 4, 1, 1, 0, 'n', 'f', 0, 0, 0),
('NuYu', 5, 1, 0, 0, 's', 'f', 1, 0, 1),
('Fitness Time', 6, 1, 1, 0, 'e', 'm', 1, 1, 1),
('Al-multaga', 7, 0, 1, 1, 'w', 'm', 1, 0, 0),
('Body Master', 8, 0, 1, 1, 'n', 'm', 1, 1, 1),
('Fat2Fit', 9, 1, 1, 0, 'n', 'f', 0, 1, 0),
('Xzenia', 10, 1, 0, 1, 'e', 'm', 1, 1, 1),
('Lava Fittness', 11, 1, 1, 1, 'e', 'f', 0, 1, 0),
('Fitness First', 12, 1, 1, 1, 'o', 'f', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
