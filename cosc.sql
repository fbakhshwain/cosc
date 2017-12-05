-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 05:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosc`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `province_id`) VALUES
(1, 'Alberta ', 0),
(2, 'British Columbia ', 0),
(3, 'Manitoba', 0),
(4, 'New Brunswick', 0),
(5, 'Newfoundland and Labrador', 0),
(6, 'Northwest Territories *', 0),
(7, 'Nova Scotia', 0),
(8, 'Nunavut *', 0),
(9, 'Prince Edward Island', 0),
(10, 'Quebec', 0),
(11, 'Saskatchewan ', 0),
(12, 'Ontario', 0),
(13, 'Yukon *', 0),
(15, 'toronto', 12),
(16, 'Ottawa', 12),
(17, 'hamilton', 12),
(18, 'Gotham', 12),
(19, 'Sudbury', 12),
(20, 'Windsor', 12),
(21, 'Kingston', 12),
(22, 'Guelph', 12),
(23, 'Sault ste Marie', 12),
(24, 'Barrie', 12),
(25, 'Whitehorse', 13),
(26, 'Dawson City', 13),
(27, 'Watson Lake', 13),
(28, 'bex Valley', 13),
(29, 'Keno City', 13),
(30, 'Haines Junction', 13),
(31, 'Carmacks', 13),
(32, 'Faro', 13),
(33, 'Ross River', 13),
(34, 'Teslin', 13),
(35, 'Regina', 11),
(36, 'Saskatoon', 11),
(37, 'Moose Jaw', 11),
(38, 'Prince Albert', 11),
(39, 'Melfort', 11),
(40, 'Meadow lake', 11),
(41, 'North Battleford', 11),
(42, 'Humboldt', 11),
(43, 'Martensville', 11),
(44, 'Melville', 11),
(45, 'Montreal', 10),
(46, 'Quebec City', 10),
(47, 'Gatineau', 10),
(48, 'Sherbrooke', 10),
(49, 'Trois-Riveres ', 10),
(50, 'Chicoutimi', 10),
(51, 'Saint Jean ', 10),
(52, 'Chateauguay', 10),
(53, 'Drummondville', 10),
(54, 'Saint Jerome', 10),
(55, 'Charlottetown ', 9),
(56, 'Summerside', 9),
(57, 'Cornwall', 9),
(58, 'Montague', 9),
(59, 'Kensington', 9),
(60, 'Souris', 9),
(61, 'Alberton ', 9),
(62, 'Arkham', 9),
(63, 'North Rustico', 9),
(64, 'Victoria', 9),
(65, 'Iqaluit ', 8),
(66, 'Rankin Inlet', 8),
(67, 'Cambridge Place', 8),
(68, 'Resolute', 8),
(69, 'Baker Lake', 8),
(70, 'Arviat', 8),
(71, 'Kugluktuk', 8),
(72, 'Igloolik', 8),
(73, 'Pond Inlet', 8),
(74, 'Pangnirtung', 8),
(75, 'Halifax', 7),
(76, 'Sydney', 7),
(77, 'Truro', 7),
(78, 'New Glasgow', 7),
(79, 'Glace Bay', 7),
(80, 'Kentville', 7),
(81, 'Sydney Mines', 7),
(82, 'Amherst', 7),
(83, 'New Waterford', 7),
(84, 'Bridgewater', 7),
(85, 'Yellowknife', 6),
(86, 'Fort Simpson', 6),
(87, 'Fort Laird', 6),
(88, 'Tuktoyaktuk', 6),
(89, 'Fort Smith', 6),
(90, 'Whitehorse', 6),
(91, 'Pelly', 6),
(92, 'Hay River', 6),
(93, 'Inuvik', 6),
(94, 'Norman Wells', 6),
(95, 'St.John\'s', 5),
(96, 'Conception Bay South', 5),
(97, 'Mount Pearl', 5),
(98, 'Paradise', 5),
(99, 'Corner Brook', 5),
(100, 'Grand Falls', 5),
(101, 'Gander', 5),
(102, 'St.Phillips', 5),
(103, 'Goose Bay', 5),
(104, 'Torah', 5),
(105, 'Moncton', 4),
(106, 'Saint John', 4),
(107, 'Fredericton', 4),
(108, 'Bathurst', 4),
(109, 'Campbellton', 4),
(110, 'Miramichi', 4),
(111, 'Dieppe', 4),
(112, 'Woodstock', 4),
(113, 'Shediac', 4),
(114, 'Sussex', 4),
(115, 'Winnipeg ', 3),
(116, 'Brandon', 3),
(117, 'Steinbach', 3),
(118, 'Thompson', 3),
(119, 'Portage la Prairie', 3),
(120, 'Winkler', 3),
(121, 'Dauphin', 3),
(122, 'Morden', 3),
(123, 'Flin Flon', 3),
(124, 'Selkirk', 3),
(125, 'Vancouver', 2),
(126, 'Victoria', 2),
(127, 'Kelowna', 2),
(128, 'Nanaimo', 2),
(129, 'Abbotsford', 2),
(130, 'Kamloops', 2),
(131, 'Chilliwack', 2),
(132, 'White Rock', 2),
(133, 'Prince George', 2),
(134, 'Vernon', 2),
(135, 'Calgary ', 1),
(136, 'Edmonton', 1),
(137, 'Red Dear', 1),
(138, 'St. Albert', 1),
(139, 'Leith bridge ', 1),
(140, 'Fort Mcmurray', 1),
(141, 'Medicine Hat ', 1),
(142, 'Spruce Grove', 1),
(143, 'Cochrane', 1),
(144, 'Leduc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_type` varchar(50) NOT NULL,
  `remote_addr` varchar(255) NOT NULL,
  `request_uri` varchar(255) NOT NULL,
  `log_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `user_id`, `log_type`, `remote_addr`, `request_uri`, `log_date`) VALUES
(1, 1, 'login', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-26 11:58:50'),
(2, 1, 'logout', '39.42.33.187', '/machinefb/cosc/public/user/logout', '2017-11-26 12:03:15'),
(3, 1, 'login', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-27 11:51:52'),
(4, 1, 'logout', '39.42.33.187', '/machinefb/cosc/public/user/logout', '2017-11-27 11:52:23'),
(5, 1, 'fail', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-27 11:52:34'),
(6, 1, 'fail', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-27 11:52:38'),
(7, 1, 'fail', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-27 11:53:38'),
(8, 1, 'login', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-27 11:53:50'),
(9, 1, 'logout', '39.42.33.187', '/machinefb/cosc/public/user/logout', '2017-11-27 12:04:10'),
(10, 1, 'login', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-27 12:10:37'),
(11, 2, 'login', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-28 01:50:22'),
(12, 2, 'login', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-28 04:05:56'),
(13, 2, 'login', '39.42.33.187', '/machinefb/cosc/public/user/login', '2017-11-28 06:26:03'),
(14, 1, 'login', '39.42.77.216', '/machinefb/cosc/public//user/login', '2017-11-28 10:03:23'),
(15, 1, 'logout', '39.42.77.216', '/machinefb/cosc/public//user/logout', '2017-11-28 10:03:37'),
(16, 1, 'login', '39.42.77.216', '/machinefb/cosc/public//user/login', '2017-11-28 10:04:05'),
(17, 1, 'logout', '39.42.77.216', '/machinefb/cosc/public//user/logout', '2017-11-28 10:07:24'),
(18, 1, 'login', '39.42.77.216', '/machinefb/cosc/public//user/login', '2017-11-28 10:09:02'),
(19, 1, 'logout', '39.42.77.216', '/machinefb/cosc/public//user/logout', '2017-11-28 10:09:10'),
(20, 1, 'login', '39.42.77.216', '/machinefb/cosc/public//user/login', '2017-11-28 10:09:16'),
(21, 1, 'login', '39.42.77.216', '/machinefb/cosc/public//user/login', '2017-11-28 10:26:39'),
(22, 1, 'login', '39.42.77.216', '/machinefb/cosc/public//user/login', '2017-11-28 13:53:51'),
(23, 1, 'login', '39.42.77.216', '/machinefb/cosc/public//user/login', '2017-11-28 16:45:11'),
(24, 1, 'login', '39.42.51.24', '/machinefb/cosc/public//user/login', '2017-11-28 18:32:44'),
(25, 1, 'login', '39.42.83.221', '/machinefb/cosc/public//user/login', '2017-11-30 06:12:07'),
(26, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 06:29:05'),
(27, 1, 'login', '39.42.83.221', '/machinefb/cosc/public//user/login', '2017-11-30 06:29:16'),
(28, 1, 'login', '39.42.83.221', '/machinefb/cosc/public//user/login', '2017-11-30 06:40:25'),
(29, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 06:44:00'),
(30, 1, 'login', '39.42.83.221', '/machinefb/cosc/public//user/login', '2017-11-30 06:47:34'),
(31, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 06:53:42'),
(32, 1, 'login', '39.42.83.221', '/machinefb/cosc/public//user/login', '2017-11-30 06:54:01'),
(33, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 07:03:51'),
(34, 1, 'login', '39.42.83.221', '/machinefb/cosc/public//user/login', '2017-11-30 07:04:06'),
(35, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 07:13:45'),
(36, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 07:27:15'),
(38, 1, 'login', '39.42.83.221', '/machinefb/cosc/public/user/login', '2017-11-30 07:49:29'),
(39, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 08:16:32'),
(40, 1, 'login', '39.42.83.221', '/machinefb/cosc/public/user/login', '2017-11-30 08:16:52'),
(41, 1, 'login', '39.42.83.221', '/machinefb/cosc/public/user/login', '2017-11-30 12:40:29'),
(42, 1, 'logout', '39.42.83.221', '/machinefb/cosc/public//user/logout', '2017-11-30 13:39:57'),
(43, 2, 'login', '39.42.83.221', '/machinefb/cosc/public/user/login', '2017-11-30 13:40:05'),
(44, 2, 'logout', '39.42.83.221', '/machinefb/cosc/public/user/logout', '2017-11-30 13:43:22'),
(45, 2, 'login', '39.42.83.221', '/machinefb/cosc/public/user/login', '2017-11-30 13:43:32'),
(46, 2, 'logout', '39.42.83.221', '/machinefb/cosc/public/user/logout', '2017-11-30 13:54:37'),
(47, 1, 'login', '199.212.55.175', '/machinefb/cosc/public/user/login', '2017-12-01 02:12:07'),
(48, 1, 'login', '70.76.12.255', '/machinefb/cosc/public/user/login', '2017-12-01 08:16:35'),
(49, 1, 'logout', '70.76.12.255', '/machinefb/cosc/public//user/logout', '2017-12-01 08:16:46'),
(50, 1, 'login', '70.76.12.255', '/machinefb/cosc/public/user/login', '2017-12-01 08:21:14'),
(51, 1, 'logout', '70.76.12.255', '/machinefb/cosc/public//user/logout', '2017-12-01 08:25:13'),
(52, 1, 'login', '70.76.12.255', '/machinefb/cosc/public/user/login', '2017-12-01 08:25:29'),
(53, 1, 'logout', '70.76.12.255', '/machinefb/cosc/public//user/logout', '2017-12-01 08:28:37'),
(54, 2, 'fail', '39.42.30.213', '/machinefb/cosc/public/user/login', '2017-12-01 09:48:39'),
(55, 2, 'fail', '39.42.30.213', '/machinefb/cosc/public/user/login', '2017-12-01 09:48:51'),
(56, 2, 'fail', '39.42.30.213', '/machinefb/cosc/public/user/login', '2017-12-01 09:51:56'),
(57, 1, 'login', '70.76.12.255', '/machinefb/cosc/public/user/login', '2017-12-01 12:00:11'),
(58, 1, 'login', '70.76.12.255', '/machinefb/cosc/public/user/login', '2017-12-01 12:00:13'),
(59, 1, 'logout', '70.76.12.255', '/machinefb/cosc/public//user/logout', '2017-12-01 12:04:19'),
(60, 0, 'invalid', '119.155.2.38', '/machinefb/cosc/public/user/login', '2017-12-03 07:47:15'),
(61, 2, 'login', '119.155.2.38', '/machinefb/cosc/public/user/login', '2017-12-03 07:47:27'),
(62, 2, 'logout', '119.155.2.38', '/machinefb/cosc/public//user/logout', '2017-12-03 08:03:36'),
(63, 1, 'login', '119.155.2.38', '/machinefb/cosc/public/user/login', '2017-12-03 08:03:42'),
(64, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-03 05:24:49'),
(65, 1, 'logout', '::1', '/cosc/public//user/logout', '2017-12-03 06:18:29'),
(66, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-03 06:18:44'),
(67, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:04:02'),
(68, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:05:53'),
(69, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:06:01'),
(70, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:06:13'),
(71, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:06:38'),
(72, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:06:51'),
(73, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:06:57'),
(74, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:07:09'),
(75, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:07:13'),
(76, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:07:22'),
(77, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:07:27'),
(78, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:07:35'),
(79, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:07:48'),
(80, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:08:37'),
(81, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:08:49'),
(82, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 03:11:02'),
(83, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:20:54'),
(84, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:21:02'),
(85, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:21:09'),
(86, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:22:08'),
(87, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:22:19'),
(88, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:23:25'),
(89, 2, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:25:18'),
(90, 2, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:30:56'),
(91, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:31:02'),
(92, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:31:50'),
(93, 2, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:32:03'),
(94, 2, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 03:32:25'),
(95, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 03:32:31'),
(96, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 04:15:53'),
(97, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 04:15:55'),
(98, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 04:15:57'),
(99, 2, 'login', '::1', '/cosc/public/user/login', '2017-12-04 04:16:07'),
(100, 2, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 04:16:34'),
(101, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 04:16:40'),
(102, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 05:47:05'),
(103, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-04 05:47:14'),
(104, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 05:47:21'),
(105, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 05:48:39'),
(106, 2, 'login', '::1', '/cosc/public/user/login', '2017-12-04 05:48:54'),
(107, 2, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 05:52:50'),
(108, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 05:52:55'),
(109, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 05:53:10'),
(110, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-04 05:53:33'),
(111, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 05:54:10'),
(112, 10, 'login', '::1', '/cosc/public/user/login', '2017-12-04 05:54:21'),
(113, 10, 'logout', '::1', '/cosc/public/user/logout', '2017-12-04 06:00:16'),
(114, 0, 'invalid', '::1', '/coscfinal/public/user/login', '2017-12-05 01:17:42'),
(115, 1, 'login', '::1', '/coscfinal/public/user/login', '2017-12-05 01:17:50'),
(116, 1, 'logout', '::1', '/cosc_3/public/user/logout', '2017-12-05 07:05:58'),
(117, 11, 'login', '::1', '/cosc/public/user/login', '2017-12-05 07:33:39'),
(118, 11, 'logout', '::1', '/cosc/public/user/logout', '2017-12-05 07:36:53'),
(119, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-05 07:37:05'),
(120, 1, 'logout', '::1', '/cosc_3/public/user/logout', '2017-12-05 10:12:25'),
(121, 0, 'invalid', '::1', '/cosc_3/public/user/login', '2017-12-05 10:13:50'),
(122, 12, 'login', '::1', '/cosc_3/public/user/login', '2017-12-05 10:14:00'),
(123, 12, 'logout', '::1', '/cosc/public/user/logout', '2017-12-05 10:21:22'),
(124, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-05 10:21:38'),
(125, 1, 'fail', '::1', '/cosc/public/user/login', '2017-12-05 10:21:52'),
(126, 11, 'login', '::1', '/cosc/public/user/login', '2017-12-05 10:22:23'),
(127, 11, 'logout', '::1', '/cosc/public/user/logout', '2017-12-05 10:22:53'),
(128, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-05 10:23:05'),
(129, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-05 10:29:41'),
(130, 1, 'login', '::1', '/cosc/public/user/login', '2017-12-05 10:29:52'),
(131, 1, 'logout', '::1', '/cosc/public/user/logout', '2017-12-05 10:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `username`, `subject`, `description`, `created_date`, `deleted`) VALUES
(1, 'admin', 'english', 'This is a sample test', '2017-11-26 12:00:12', '0'),
(2, 'admin', 'maths', 'This is a sample test of maths', '2017-11-26 12:00:35', '0'),
(3, 'test', 'test - update', 'heloas', '2017-11-28 08:30:47', '0'),
(4, 'test', 'testing', 'helo', '2017-11-28 07:46:06', ''),
(5, 'test', 'test', 'helo', '2017-11-28 07:46:23', ''),
(6, 'test', 'ok', 'helo', '2017-11-28 08:31:17', '0'),
(7, 'test', 'test update', 'helo', '2017-11-28 07:57:36', '0'),
(8, 'test', 'test', 'ghj', '2017-11-28 08:14:36', '1'),
(9, 'sajidali', 'yes', 'abcdefghi', '2017-11-30 07:35:32', '0'),
(10, 'admin ', 'to do what i need to do ', 'do it when you need to do it ', '2017-12-01 08:22:04', '0'),
(11, 'spacecat', 'to do what i need to do ', 'do it right ', '2017-12-05 07:36:41', '0');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `province` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`id`, `user_id`, `firstname`, `lastname`, `email`, `birthday`, `phone_number`, `province`, `city`, `note`) VALUES
(2, 1, 'farooos', 'b', 'test@algomau.ca', '1800-12-04', '4565677849', 12, 18, NULL),
(4, 2, 'ok', 'profile', 'profile@algomau.ca', '1995-12-16', '1111111112', 1, 10, 'ok'),
(5, 4, 'test yo', 'sdaf', 'dfsaf@live.com', '1976-12-02', 'heloo', 3, 7, 'fdsafsaf'),
(6, 10, 'hello', 'test', 'hamid@algomau.ca', '1968-12-21', '1231231231', NULL, NULL, NULL),
(7, 11, 'whitney ', 'nicholson', 'witwit@algomau.ca', '1969-09-03', '1234567890', 2, 11, NULL),
(8, 12, 'pumba', 'b', 'bb@algomau.ca', '1909-12-12', '1234567890', 12, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_manager`
--

CREATE TABLE `staff_manager` (
  `id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_manager`
--

INSERT INTO `staff_manager` (`id`, `manager_id`, `staff_id`) VALUES
(1, 2, 3),
(2, 4, 3),
(3, 4, 3),
(11, 2, 4),
(12, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `log_tries` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_type` enum('admin','manager','staff') NOT NULL DEFAULT 'staff',
  `profile` int(11) NOT NULL DEFAULT '0',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `log_tries`, `status`, `user_type`, `profile`, `last_login`) VALUES
(1, 'admin', '$2y$10$oxn6WFc6nzld3Wdz2aUTHeOAY6yLKOZbFYwuGvzyv75Y2.zCz.zgW', 0, 0, 'admin', 1, '2017-12-05 10:29:52'),
(2, 'manager', '$2y$10$EhQRLXyI.FWf2TEg5559S.9ffwYpzec7pOFsqT8ekMNXVtQL4p1Ku', 0, 0, 'manager', 1, '2017-12-04 05:48:54'),
(3, 'new user', '$2y$10$1L194sWBAlhu6zQFFyuvJeoLHUPO9.JWlT8gQk7.rudQrk8ktk/y6', 0, 0, 'staff', 0, '0000-00-00 00:00:00'),
(4, 'hello', '$2y$10$6kC0RyOANurCWJVEha0pQuEz.N3HHYyV/ZwlSBo144khRK3mBwIk2', 0, 0, 'staff', 0, '0000-00-00 00:00:00'),
(8, 'admin1', '$2y$10$aUfpMnCj1s9mtegywcUQA.UKl.S34o2YdW6x5.tij0l0kOfX2SoAG', 0, 0, 'admin', 0, '2017-12-04 09:35:19'),
(10, 'staff', '$2y$10$ofeBoWNX7wDA9ENzdgck7uwZjV8rD9lZ/KYiBP7WIIQsrhD2DEBWS', 0, 0, 'staff', 1, '2017-12-04 05:54:21'),
(11, 'spacecat', '$2y$10$VkJOVGFv7dIdH4b68p9CEep0QtC0Zq/E3SCEz9fTIJVIdM8Pg/0Ru', 0, 0, 'staff', 1, '2017-12-05 10:22:23'),
(12, 'pumba', '$2y$10$K4bFY9PQP49xN0DOVGq.vO9wORbpz3oOYA/8wiogzGhWrxO5.LThK', 0, 0, 'staff', 1, '2017-12-05 10:14:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_manager`
--
ALTER TABLE `staff_manager`
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
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_manager`
--
ALTER TABLE `staff_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
