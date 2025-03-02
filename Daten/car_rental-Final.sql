-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 02. Mrz 2025 um 15:01
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `car_rental`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `VehicleID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `BookingTimestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `bookings`
--

INSERT INTO `bookings` (`BookingID`, `UserID`, `VehicleID`, `StartDate`, `EndDate`, `BookingTimestamp`) VALUES
(1, 126, 202, '2025-02-10', '2025-02-10', '2024-10-26 11:03:25'),
(3, 102, 84, '2024-12-14', '2025-02-08', '2025-01-25 21:57:41'),
(4, 74, 32, '2025-02-10', '2025-02-16', '2025-02-22 03:40:15'),
(5, 16, 237, '2025-01-14', '2025-02-09', '2024-12-25 02:52:30'),
(6, 99, 28, '2025-01-20', '2025-03-02', '2025-02-04 06:40:12'),
(7, 83, 137, '2024-12-17', '2025-02-17', '2024-10-09 02:22:47'),
(8, 136, 148, '2025-02-20', '2025-02-27', '2024-11-18 18:52:56'),
(9, 142, 243, '2024-08-25', '2025-02-14', '2024-11-09 00:58:43'),
(10, 135, 5, '2025-01-30', '2025-02-21', '2024-11-02 15:05:47'),
(11, 32, 5, '2025-01-09', '2025-01-16', '2024-11-22 22:19:47'),
(12, 132, 117, '2024-11-19', '2024-12-15', '2024-11-03 14:58:30'),
(13, 91, 69, '2024-09-12', '2025-03-04', '2024-09-16 14:26:55'),
(14, 74, 42, '2024-10-16', '2025-01-11', '2024-10-30 11:27:03'),
(15, 64, 9, '2025-01-08', '2025-03-04', '2024-12-05 11:19:16'),
(16, 39, 119, '2024-11-10', '2025-02-07', '2025-01-06 12:54:32'),
(17, 61, 124, '2025-02-09', '2025-02-20', '2025-01-15 03:14:30'),
(18, 79, 197, '2024-11-17', '2024-12-01', '2024-09-23 06:18:13'),
(19, 137, 161, '2025-01-16', '2025-01-28', '2024-12-03 07:00:17'),
(20, 142, 22, '2025-01-31', '2025-02-22', '2025-02-06 20:25:09'),
(21, 49, 135, '2024-09-18', '2024-10-10', '2025-01-25 15:59:09'),
(22, 142, 124, '2025-01-31', '2025-02-03', '2025-02-03 16:36:50'),
(23, 144, 85, '2025-01-06', '2025-01-18', '2024-10-12 06:57:30'),
(24, 25, 198, '2024-12-08', '2025-01-10', '2024-09-05 08:34:05'),
(25, 118, 168, '2024-11-24', '2025-01-01', '2025-02-21 11:49:45'),
(26, 58, 70, '2025-01-21', '2025-01-25', '2024-12-15 20:14:52'),
(27, 84, 165, '2025-01-18', '2025-02-12', '2024-08-31 04:08:58'),
(28, 91, 178, '2025-01-06', '2025-01-20', '2024-09-15 09:22:12'),
(29, 79, 223, '2024-11-23', '2025-02-27', '2024-10-31 04:44:01'),
(30, 84, 161, '2024-11-04', '2024-12-05', '2024-09-22 12:10:34'),
(31, 124, 188, '2024-11-18', '2025-02-01', '2025-01-28 14:18:01'),
(32, 53, 33, '2024-09-01', '2025-01-14', '2024-09-19 07:59:37'),
(33, 118, 159, '2024-10-23', '2024-12-10', '2024-10-18 03:07:30'),
(34, 65, 142, '2024-10-08', '2025-02-28', '2024-09-08 08:00:31'),
(35, 111, 244, '2024-11-18', '2024-11-28', '2024-10-11 05:30:29'),
(36, 114, 71, '2024-10-18', '2024-12-25', '2024-11-28 07:18:45'),
(37, 56, 45, '2025-01-09', '2025-03-09', '2024-12-20 03:25:10'),
(39, 30, 189, '2024-12-15', '2024-12-24', '2024-12-21 12:36:23'),
(40, 14, 240, '2025-01-21', '2025-02-13', '2024-12-08 07:18:24'),
(41, 77, 108, '2024-10-29', '2025-01-03', '2024-09-05 14:29:38'),
(42, 66, 159, '2025-01-21', '2025-02-06', '2024-10-06 05:46:00'),
(43, 125, 85, '2025-02-12', '2025-03-04', '2024-09-01 04:36:34'),
(44, 70, 41, '2024-08-29', '2025-02-06', '2024-10-19 07:25:59'),
(46, 33, 75, '2025-01-13', '2025-02-24', '2024-12-03 07:45:08'),
(47, 79, 59, '2024-08-29', '2024-10-01', '2024-09-01 04:04:06'),
(48, 61, 20, '2024-11-25', '2025-02-03', '2024-11-25 23:42:49'),
(49, 100, 44, '2024-10-06', '2024-12-29', '2024-10-21 02:58:22'),
(50, 42, 61, '2024-11-12', '2025-01-07', '2025-01-26 08:40:20'),
(51, 67, 85, '2025-02-17', '2025-02-22', '2025-02-17 23:36:40'),
(52, 147, 181, '2024-12-14', '2025-01-19', '2025-02-21 13:28:05'),
(53, 13, 133, '2024-11-18', '2024-12-21', '2024-10-06 09:23:22'),
(54, 83, 80, '2024-12-03', '2025-01-07', '2024-12-07 23:52:02'),
(55, 129, 133, '2025-02-14', '2025-03-07', '2025-01-30 18:12:40'),
(56, 39, 40, '2024-10-28', '2024-12-27', '2024-10-02 15:31:00'),
(57, 75, 59, '2024-09-21', '2024-10-19', '2025-01-30 02:52:40'),
(58, 132, 96, '2024-09-02', '2025-01-29', '2024-11-06 06:11:18'),
(59, 107, 187, '2024-10-11', '2024-10-18', '2024-12-31 09:48:37'),
(60, 87, 103, '2024-11-16', '2024-12-06', '2024-12-06 19:54:35'),
(61, 53, 143, '2024-09-22', '2024-12-11', '2025-02-14 04:24:19'),
(62, 32, 247, '2024-09-11', '2024-12-09', '2024-11-02 12:08:48'),
(63, 115, 5, '2025-01-18', '2025-02-09', '2025-01-19 05:39:46'),
(64, 48, 247, '2024-10-03', '2025-01-06', '2025-02-18 20:15:18'),
(67, 70, 94, '2024-12-05', '2025-02-23', '2025-01-05 06:34:35'),
(69, 22, 204, '2024-09-05', '2024-11-05', '2024-09-10 22:43:29'),
(70, 148, 68, '2024-11-21', '2024-12-30', '2024-12-26 22:43:45'),
(71, 13, 231, '2024-12-17', '2025-01-05', '2024-10-05 03:21:31'),
(72, 16, 229, '2025-01-23', '2025-02-17', '2024-12-15 00:33:15'),
(73, 23, 153, '2025-01-08', '2025-03-03', '2024-10-11 03:22:26'),
(74, 128, 213, '2024-10-13', '2024-12-19', '2025-01-31 07:59:12'),
(75, 23, 195, '2024-11-24', '2025-02-23', '2024-11-24 08:44:41'),
(76, 3, 34, '2024-09-30', '2025-02-12', '2024-09-29 18:48:00'),
(77, 84, 91, '2025-01-30', '2025-03-02', '2024-10-12 09:54:25'),
(79, 100, 147, '2025-01-31', '2025-02-09', '2025-02-12 16:10:44'),
(80, 9, 41, '2025-01-19', '2025-02-18', '2024-09-26 22:18:48'),
(81, 115, 240, '2025-02-07', '2025-02-28', '2025-01-07 10:34:02'),
(82, 91, 91, '2024-09-12', '2024-11-02', '2024-12-31 06:36:59'),
(83, 41, 66, '2025-02-10', '2025-02-26', '2025-02-10 06:13:23'),
(84, 7, 63, '2024-10-02', '2024-10-10', '2025-01-11 16:27:33'),
(85, 97, 67, '2024-12-29', '2025-01-25', '2025-01-28 05:59:28'),
(86, 70, 171, '2025-01-23', '2025-02-21', '2025-01-17 06:46:12'),
(87, 115, 178, '2024-10-20', '2024-11-15', '2024-10-06 07:33:03'),
(88, 64, 218, '2024-10-20', '2025-02-05', '2025-02-23 08:04:58'),
(89, 87, 222, '2024-09-11', '2024-12-21', '2025-01-11 23:49:23'),
(90, 11, 27, '2025-01-17', '2025-02-08', '2025-01-31 07:08:47'),
(91, 28, 32, '2024-09-10', '2025-02-27', '2024-12-29 16:58:15'),
(92, 67, 138, '2024-12-07', '2025-02-22', '2024-10-24 04:06:56'),
(93, 14, 215, '2024-11-29', '2025-02-26', '2025-01-02 23:58:46'),
(94, 136, 116, '2025-02-12', '2025-02-18', '2024-12-27 18:29:26'),
(95, 56, 209, '2024-10-07', '2025-01-05', '2025-01-16 20:07:13'),
(96, 85, 242, '2024-12-12', '2025-01-21', '2025-01-29 07:15:48'),
(97, 92, 100, '2024-10-11', '2024-10-14', '2024-10-13 16:13:46'),
(99, 61, 53, '2025-02-05', '2025-02-15', '2025-02-06 04:35:25'),
(100, 114, 83, '2025-02-13', '2025-03-08', '2025-02-09 18:55:51'),
(101, 28, 160, '2024-10-11', '2024-11-18', '2024-12-31 09:06:58'),
(102, 150, 228, '2024-09-27', '2024-12-24', '2024-09-28 01:52:52'),
(103, 65, 169, '2024-09-09', '2024-10-06', '2024-11-11 02:40:29'),
(104, 31, 242, '2024-09-17', '2025-03-03', '2024-12-29 13:55:29'),
(105, 106, 178, '2024-09-06', '2025-02-24', '2025-02-04 15:18:13'),
(106, 90, 96, '2024-11-05', '2024-12-31', '2024-10-12 14:57:38'),
(107, 116, 161, '2025-01-16', '2025-02-25', '2024-11-17 01:46:56'),
(108, 71, 234, '2024-09-04', '2024-11-16', '2025-01-16 23:54:33'),
(109, 12, 74, '2025-02-06', '2025-02-26', '2024-11-23 18:19:42'),
(110, 127, 159, '2024-11-15', '2024-12-14', '2024-10-23 15:48:26'),
(111, 107, 162, '2025-01-03', '2025-03-07', '2024-11-13 18:54:35'),
(112, 27, 155, '2024-09-17', '2024-10-11', '2024-11-12 09:02:20'),
(113, 7, 123, '2024-12-25', '2025-02-27', '2024-10-21 23:14:31'),
(115, 13, 23, '2024-11-10', '2025-01-27', '2024-11-22 15:12:19'),
(116, 49, 199, '2025-02-13', '2025-03-09', '2025-01-12 08:07:45'),
(117, 133, 210, '2025-02-02', '2025-03-04', '2024-09-17 11:08:15'),
(118, 11, 158, '2024-11-26', '2024-12-08', '2024-09-03 12:36:38'),
(119, 47, 223, '2024-12-08', '2024-12-20', '2024-12-15 15:19:02'),
(120, 127, 143, '2025-01-24', '2025-02-01', '2025-02-04 07:00:28'),
(121, 44, 164, '2025-02-18', '2025-02-22', '2025-01-19 08:29:56'),
(122, 18, 39, '2025-01-26', '2025-02-21', '2024-10-17 01:35:31'),
(123, 107, 88, '2024-12-26', '2025-01-26', '2024-12-31 19:06:34'),
(124, 85, 147, '2025-02-20', '2025-03-06', '2024-10-15 23:21:05'),
(125, 129, 33, '2024-11-29', '2025-01-12', '2024-12-03 06:55:47'),
(126, 9, 173, '2025-01-23', '2025-01-24', '2024-11-21 03:41:51'),
(127, 146, 165, '2025-02-16', '2025-03-09', '2024-12-07 17:00:32'),
(128, 50, 161, '2024-11-17', '2024-11-17', '2024-11-27 02:58:42'),
(129, 106, 53, '2024-10-19', '2024-11-21', '2024-11-22 07:26:51'),
(130, 30, 160, '2025-01-05', '2025-02-12', '2024-11-28 15:15:38'),
(131, 41, 143, '2025-02-07', '2025-03-09', '2024-09-04 22:21:33'),
(133, 13, 193, '2025-02-03', '2025-02-24', '2024-10-26 06:16:59'),
(134, 75, 42, '2025-02-05', '2025-02-19', '2025-01-15 08:24:36'),
(135, 35, 55, '2025-01-17', '2025-02-23', '2024-11-04 08:46:56'),
(136, 127, 204, '2024-10-20', '2025-01-30', '2024-09-08 01:47:16'),
(137, 148, 192, '2025-01-30', '2025-03-07', '2025-01-20 03:43:44'),
(139, 18, 63, '2024-09-26', '2025-01-12', '2025-02-11 23:53:19'),
(140, 136, 64, '2024-12-14', '2025-02-05', '2024-10-16 23:09:41'),
(141, 21, 198, '2024-11-24', '2024-12-21', '2024-11-23 12:37:31'),
(142, 16, 192, '2024-12-22', '2025-01-14', '2024-10-10 05:27:00'),
(143, 38, 119, '2024-10-13', '2024-11-27', '2025-02-14 01:35:41'),
(144, 140, 204, '2024-08-25', '2024-10-09', '2024-11-16 13:24:17'),
(145, 120, 106, '2024-09-07', '2024-11-11', '2024-11-30 01:56:01'),
(146, 83, 240, '2025-01-02', '2025-02-04', '2024-11-23 01:05:30'),
(147, 84, 73, '2025-01-23', '2025-02-11', '2025-02-22 18:41:09'),
(148, 138, 114, '2024-12-19', '2025-03-07', '2025-01-18 03:04:31'),
(149, 92, 83, '2024-10-21', '2025-02-21', '2024-09-09 03:22:01'),
(150, 104, 63, '2024-11-07', '2025-01-14', '2024-11-21 19:02:57'),
(151, 72, 51, '2024-11-29', '2025-01-14', '2025-02-11 14:30:46'),
(152, 25, 36, '2024-09-15', '2025-02-16', '2024-09-19 02:34:17'),
(153, 135, 6, '2024-11-05', '2025-03-02', '2024-08-31 23:05:51'),
(154, 137, 23, '2025-02-01', '2025-02-19', '2025-02-12 00:42:35'),
(156, 57, 215, '2024-12-04', '2025-01-16', '2024-10-14 11:32:21'),
(157, 104, 42, '2024-11-12', '2024-12-20', '2024-09-11 10:50:30'),
(158, 82, 48, '2025-01-11', '2025-02-02', '2024-09-04 19:21:20'),
(159, 10, 63, '2024-10-22', '2024-12-14', '2025-01-14 19:38:02'),
(160, 141, 32, '2024-12-27', '2025-01-17', '2025-01-15 18:56:22'),
(161, 9, 243, '2024-10-23', '2024-10-31', '2024-11-27 16:29:16'),
(162, 96, 40, '2024-09-02', '2024-12-12', '2025-01-30 11:10:06'),
(163, 130, 153, '2024-10-10', '2024-12-03', '2025-01-04 14:33:50'),
(164, 24, 181, '2025-01-03', '2025-02-24', '2025-02-21 02:45:22'),
(165, 63, 164, '2024-11-14', '2025-03-06', '2024-12-28 07:47:47'),
(168, 30, 150, '2024-12-25', '2025-01-19', '2025-01-01 18:37:51'),
(169, 91, 183, '2025-02-07', '2025-02-14', '2025-02-23 13:56:24'),
(170, 126, 9, '2025-02-06', '2025-03-03', '2024-09-30 23:20:02'),
(171, 123, 56, '2024-11-19', '2025-03-06', '2024-09-18 08:02:35'),
(172, 55, 18, '2024-10-01', '2024-11-01', '2024-09-08 13:37:24'),
(173, 34, 101, '2024-09-15', '2024-12-30', '2024-10-30 09:09:15'),
(174, 7, 18, '2025-02-04', '2025-02-08', '2025-01-27 18:44:47'),
(175, 70, 195, '2024-09-18', '2024-12-10', '2024-11-03 03:47:03'),
(176, 118, 33, '2024-11-26', '2025-03-05', '2024-12-28 07:18:10'),
(177, 75, 194, '2024-12-28', '2025-01-03', '2024-09-16 09:43:22'),
(178, 140, 150, '2024-10-01', '2025-02-25', '2025-01-14 02:51:26'),
(179, 77, 70, '2024-12-14', '2025-02-07', '2024-12-17 23:24:09'),
(180, 69, 18, '2024-11-24', '2024-12-20', '2024-10-05 01:49:51'),
(181, 65, 160, '2024-10-26', '2025-02-23', '2025-01-08 12:36:49'),
(182, 17, 126, '2024-12-14', '2025-02-12', '2024-12-16 06:30:19'),
(183, 130, 247, '2024-12-03', '2024-12-31', '2024-12-20 13:53:23'),
(184, 7, 18, '2024-09-18', '2025-01-21', '2025-02-18 07:57:13'),
(185, 133, 10, '2025-02-02', '2025-02-06', '2024-10-29 05:09:45'),
(186, 55, 191, '2024-11-12', '2025-01-17', '2024-11-01 20:41:58'),
(187, 113, 227, '2025-01-10', '2025-01-14', '2024-12-05 16:48:53'),
(188, 95, 67, '2025-02-17', '2025-02-21', '2024-12-20 20:40:09'),
(189, 112, 128, '2024-09-08', '2024-12-02', '2025-02-08 04:35:16'),
(190, 3, 153, '2024-09-27', '2025-02-14', '2024-12-03 03:30:04'),
(191, 138, 153, '2025-01-10', '2025-02-03', '2025-02-21 18:11:29'),
(192, 117, 154, '2024-12-26', '2025-01-14', '2024-12-11 20:13:02'),
(193, 127, 18, '2024-12-15', '2025-01-24', '2025-01-31 11:52:09'),
(194, 31, 114, '2024-11-06', '2024-11-10', '2025-01-03 23:47:52'),
(195, 121, 72, '2025-01-28', '2025-02-22', '2024-10-07 07:46:05'),
(196, 120, 207, '2025-02-19', '2025-02-27', '2024-11-24 11:15:03'),
(197, 4, 186, '2024-09-05', '2024-10-12', '2024-11-23 13:23:24'),
(198, 25, 220, '2024-09-08', '2025-01-24', '2025-01-12 14:25:07'),
(199, 48, 63, '2024-10-05', '2024-10-09', '2024-12-20 19:28:57'),
(200, 125, 202, '2024-10-26', '2024-11-23', '2025-01-03 21:11:35'),
(201, 95, 142, '2024-12-03', '2025-01-30', '2024-11-26 17:19:17'),
(202, 102, 16, '2024-11-11', '2025-01-18', '2025-02-12 19:08:39'),
(203, 73, 75, '2024-12-09', '2025-01-10', '2024-12-14 08:50:04'),
(204, 43, 94, '2024-10-26', '2024-12-29', '2024-12-13 20:44:50'),
(205, 55, 28, '2024-12-07', '2024-12-28', '2024-11-26 00:29:02'),
(206, 142, 87, '2024-11-08', '2024-12-09', '2024-12-21 14:12:33'),
(207, 88, 150, '2025-01-27', '2025-02-02', '2024-08-29 06:51:44'),
(208, 89, 53, '2024-10-15', '2024-12-21', '2024-12-16 01:52:17'),
(209, 34, 5, '2025-02-07', '2025-03-06', '2024-09-20 21:22:21'),
(210, 11, 76, '2025-02-20', '2025-02-28', '2024-11-26 14:58:43'),
(211, 48, 203, '2024-11-01', '2025-01-04', '2024-11-30 22:08:14'),
(213, 142, 171, '2025-01-20', '2025-02-09', '2024-11-25 11:52:05'),
(215, 70, 169, '2024-11-16', '2025-01-22', '2025-02-24 08:12:14'),
(216, 41, 159, '2024-11-18', '2025-03-01', '2025-01-08 19:47:03'),
(218, 29, 195, '2025-02-11', '2025-02-26', '2024-12-27 05:12:34'),
(219, 122, 110, '2025-01-18', '2025-02-21', '2025-02-02 14:44:16'),
(220, 127, 112, '2025-02-23', '2025-03-08', '2024-10-03 16:13:07'),
(221, 137, 63, '2025-01-18', '2025-02-24', '2024-11-24 18:04:47'),
(222, 2, 86, '2025-02-10', '2025-03-08', '2025-01-22 23:20:26'),
(223, 77, 72, '2024-09-07', '2024-11-11', '2025-02-14 07:19:52'),
(224, 48, 207, '2025-02-06', '2025-02-18', '2025-02-06 17:08:06'),
(225, 132, 85, '2025-02-21', '2025-02-27', '2024-10-04 08:05:07'),
(226, 120, 103, '2024-12-18', '2025-01-24', '2024-12-07 19:03:55'),
(227, 15, 74, '2024-12-21', '2024-12-21', '2025-01-21 19:15:49'),
(228, 55, 215, '2025-01-24', '2025-02-05', '2024-10-26 19:03:50'),
(229, 75, 55, '2024-08-28', '2024-10-23', '2025-02-08 14:02:57'),
(230, 9, 176, '2024-12-21', '2024-12-26', '2024-10-03 02:01:34'),
(231, 26, 20, '2024-12-15', '2025-02-19', '2024-12-08 02:30:34'),
(232, 30, 169, '2024-12-22', '2025-02-12', '2025-01-28 13:30:31'),
(233, 60, 169, '2024-10-02', '2024-12-08', '2024-09-21 06:27:15'),
(234, 62, 42, '2024-09-15', '2024-10-14', '2024-11-03 23:13:48'),
(235, 125, 126, '2024-11-22', '2025-02-11', '2024-11-04 14:58:31'),
(237, 7, 205, '2025-02-12', '2025-03-08', '2024-12-29 08:33:59'),
(238, 117, 234, '2025-02-20', '2025-02-24', '2024-11-17 14:46:14'),
(239, 10, 191, '2025-01-09', '2025-02-03', '2024-09-24 12:40:25'),
(240, 7, 198, '2025-01-04', '2025-02-08', '2024-08-28 16:20:16'),
(241, 81, 193, '2024-11-29', '2024-12-04', '2024-12-08 13:29:24'),
(242, 132, 196, '2024-09-08', '2024-09-30', '2025-01-24 08:44:36'),
(243, 138, 86, '2025-02-10', '2025-02-15', '2024-09-25 04:58:03'),
(244, 17, 5, '2024-11-16', '2025-02-02', '2024-12-08 00:54:00'),
(245, 13, 103, '2024-10-28', '2025-02-14', '2024-11-21 22:23:21'),
(246, 92, 26, '2025-01-05', '2025-01-25', '2024-10-03 02:01:02'),
(247, 102, 124, '2024-08-25', '2025-01-15', '2024-10-07 01:45:28'),
(248, 20, 4, '2024-09-02', '2024-09-05', '2024-11-23 07:25:57'),
(249, 110, 204, '2024-11-21', '2024-12-24', '2025-02-22 10:09:46'),
(250, 35, 228, '2024-09-06', '2024-11-27', '2025-02-22 08:33:25'),
(251, 79, 71, '2024-11-13', '2025-01-20', '2024-09-25 17:46:08'),
(252, 56, 192, '2025-01-23', '2025-02-18', '2024-10-22 10:56:45'),
(253, 148, 158, '2024-11-09', '2024-11-09', '2025-02-23 14:11:37'),
(254, 40, 216, '2025-01-23', '2025-02-18', '2025-02-15 03:28:08'),
(256, 3, 229, '2024-10-13', '2024-11-02', '2024-09-08 22:31:50'),
(257, 118, 11, '2024-12-05', '2025-02-08', '2024-12-30 14:42:22'),
(258, 46, 161, '2024-10-31', '2025-01-04', '2025-01-06 23:37:52'),
(260, 80, 201, '2025-02-13', '2025-03-01', '2024-10-03 17:59:20'),
(261, 24, 38, '2024-09-10', '2025-03-03', '2024-11-22 14:35:05'),
(262, 69, 229, '2025-01-22', '2025-02-24', '2025-01-02 18:22:37'),
(263, 9, 192, '2025-01-12', '2025-02-18', '2025-02-04 18:23:17'),
(264, 108, 120, '2024-11-26', '2025-01-29', '2024-10-12 09:45:36'),
(265, 141, 36, '2024-09-09', '2025-01-11', '2024-10-13 10:53:32'),
(266, 31, 244, '2024-11-27', '2025-02-05', '2025-01-09 06:31:22'),
(267, 62, 148, '2024-08-26', '2025-01-26', '2025-02-22 20:44:11'),
(269, 141, 16, '2024-11-03', '2024-11-20', '2025-02-02 05:37:14'),
(270, 114, 206, '2024-09-16', '2024-11-10', '2025-02-13 18:09:15'),
(271, 141, 151, '2024-09-27', '2025-03-01', '2024-11-11 09:45:44'),
(272, 31, 104, '2024-11-14', '2025-03-07', '2025-02-20 07:18:22'),
(273, 111, 133, '2025-01-27', '2025-02-07', '2024-11-19 23:27:55'),
(274, 144, 199, '2024-10-22', '2025-02-17', '2024-12-16 01:54:46'),
(275, 86, 25, '2024-10-26', '2025-02-09', '2024-10-08 12:01:24'),
(276, 5, 216, '2025-01-17', '2025-02-26', '2024-09-20 14:48:51'),
(277, 35, 178, '2024-12-02', '2024-12-22', '2024-11-03 10:09:56'),
(278, 133, 23, '2024-09-20', '2024-10-23', '2025-01-23 14:01:46'),
(279, 139, 21, '2025-02-14', '2025-02-15', '2024-10-23 13:57:37'),
(280, 66, 89, '2024-11-30', '2025-02-03', '2025-02-04 08:07:38'),
(281, 88, 202, '2024-11-30', '2025-02-20', '2024-12-24 13:04:42'),
(283, 51, 24, '2024-12-19', '2025-02-26', '2024-10-27 07:41:36'),
(284, 85, 161, '2024-10-18', '2024-10-27', '2025-01-15 13:29:22'),
(285, 107, 79, '2024-11-28', '2024-12-23', '2024-10-14 18:22:27'),
(286, 62, 191, '2024-10-06', '2024-11-30', '2024-10-07 15:41:21'),
(287, 71, 78, '2025-01-03', '2025-03-01', '2024-11-24 10:34:05'),
(288, 20, 226, '2024-12-21', '2025-02-26', '2024-11-04 06:35:49'),
(289, 75, 118, '2024-11-20', '2024-12-07', '2024-12-29 04:53:29'),
(290, 139, 244, '2025-02-03', '2025-02-03', '2024-12-13 19:48:37'),
(291, 35, 56, '2024-11-02', '2024-11-10', '2024-09-24 08:20:51'),
(292, 100, 156, '2024-09-14', '2024-10-25', '2024-12-12 10:36:58'),
(293, 97, 35, '2024-09-28', '2024-12-24', '2025-02-09 00:57:25'),
(294, 141, 102, '2025-01-17', '2025-03-01', '2024-11-18 17:01:37'),
(295, 10, 126, '2024-11-09', '2025-01-14', '2024-09-29 17:50:07'),
(296, 26, 1, '2024-12-14', '2025-02-03', '2024-09-30 18:16:12'),
(297, 119, 23, '2024-11-08', '2025-01-21', '2024-10-23 12:24:30'),
(298, 54, 173, '2025-01-24', '2025-02-18', '2024-12-29 16:44:37'),
(299, 65, 48, '2024-12-29', '2025-01-27', '2024-12-07 19:40:17'),
(300, 60, 42, '2025-01-30', '2025-02-08', '2024-12-02 16:59:20');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `locations`
--

CREATE TABLE `locations` (
  `LocationID` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `locations`
--

INSERT INTO `locations` (`LocationID`, `City`, `Address`, `PhoneNumber`) VALUES
(1, 'Berlin', 'Beispielstraße 1, Berlin', '+49 30 89458439'),
(2, 'Hamburg', 'Beispielstraße 2, Hamburg', '+49 30 71464703'),
(3, 'München', 'Beispielstraße 3, München', '+49 30 71663622'),
(4, 'Köln', 'Beispielstraße 4, Köln', '+49 30 73643640'),
(5, 'Bochum', 'Beispielstraße 5, Bochum', '+49 30 44241853'),
(6, 'Rostock', 'Beispielstraße 6, Rostock', '+49 30 13371180'),
(7, 'Paderborn', 'Beispielstraße 7, Paderborn', '+49 30 79683475'),
(8, 'Leipzig', 'Beispielstraße 8, Leipzig', '+49 30 45849133'),
(9, 'Dortmund', 'Beispielstraße 9, Dortmund', '+49 30 60186113'),
(10, 'Freiburg', 'Beispielstraße 10, Freiburg', '+49 30 91511497'),
(11, 'Bremen', 'Beispielstraße 11, Bremen', '+49 30 45917846'),
(12, 'Dresden', 'Beispielstraße 12, Dresden', '+49 30 10492607'),
(13, 'Bielefeld', 'Beispielstraße 13, Bielefeld', '+49 30 95616819'),
(14, 'Nürnberg', 'Beispielstraße 14, Nürnberg', '+49 30 59850929');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Email`, `Password`, `Phone`, `Address`) VALUES
(1, 'Ing. Irma Steinberg', 'stefania28@ackermann.de', 'eN5Q3W_q(s', '(01563) 56023', 'Wellerweg 2\n38477 Monschau'),
(2, 'Igor Lange', 'walterhanny@hauffer.net', 'g@37Sw&rr8', '(07065) 291904', 'Hüseyin-Winkler-Platz 127\n68527 Uelzen'),
(3, 'Joanna Dörschner', 'brunitlustek@atzler.de', 'K0Zd)FjH$6', '+49(0) 044868691', 'Karola-Vogt-Ring 935\n48098 Miltenberg'),
(4, 'Prof. Emilia Schacht', 'meinolfhenschel@aol.de', '0VKxL*gg*3', '+49(0)0866302593', 'Beyerstraße 68\n55633 Hammelburg'),
(5, 'Eckhard Drewes MBA.', 'anna-luise70@mitschke.de', '!7!ggSBtX9', '01677297332', 'Barthweg 23\n81276 Berlin'),
(6, 'Giovanna Linke', 'ckensy@hotmail.de', 'Te45YKDs$T', '+49(0)8377032649', 'Miroslav-Mühle-Gasse 15\n57946 Finsterwalde'),
(7, 'Fatih Flantz', 'zimmerabdul@bachmann.net', ')mOUKPe1X8', '(02937) 51452', 'Gloria-Krause-Platz 9\n27398 Illertissen'),
(8, 'Felicia Hermighausen B.Sc.', 'hackermann@schueler.com', '^4FS%ByvN0', '+49(0)5701 09371', 'Kabusallee 417\n87095 Wurzen'),
(9, 'Herr Hans-Theo Jüttner MBA.', 'geislerwenke@schuster.de', '#0!ZbWguqv', '+49(0)2322032062', 'Zobelring 77\n89301 Wolgast'),
(10, 'Elise Drewes', 'seiferthanife@hotmail.de', '5492lJei)C', '(05428) 826569', 'Martinplatz 0\n50923 Hildburghausen'),
(11, 'Mareike Bauer', 'ekoch-ii@aol.de', 'Z5HzGHm$$R', '04417 60215', 'Bergerallee 9/1\n28404 Apolda'),
(12, 'Corina Finke B.Eng.', 'gunpfbranka@hotmail.de', 'eEl4Pzwp%a', '(00110) 52326', 'Schenkweg 059\n58385 Gera'),
(13, 'Liliane Kade', 'jeimer@doehn.com', 'F^8YOy6aW*', '03639411816', 'Fadime-Haering-Ring 26\n03721 Chemnitz'),
(14, 'Renato Junken-Jessel', 'traugottwulf@hotmail.de', 'QpU*2ImJ0M', '0792036847', 'Cilli-Gehringer-Gasse 6\n91933 Rothenburg ob der Tauber'),
(15, 'Dagobert Zirme', 'liesel75@googlemail.com', '*F_rHHK0p3', '(01768) 94032', 'Marius-Wagner-Ring 40\n61948 Riesa'),
(16, 'Ernst-Otto Bien', 'ullrichxenia@hess.net', 'fa5SeqyU+z', '+49 (0) 8251 374722', 'Kristian-Ruppersberger-Straße 553\n10274 Kötzting'),
(17, 'Prof. Muharrem Walter', 'hilde02@stoll.org', '!JmfG9Ca^)', '+49 (0) 3023 911299', 'Elfie-Stadelmann-Straße 85\n01376 Hildburghausen'),
(18, 'Marleen Karge B.Eng.', 'peer09@butte.com', 'wX&2+Viewh', '+49(0)2806 462628', 'Jungferallee 632\n23865 Tübingen'),
(19, 'Fabienne Misicher-Sager', 'loderwald@gmail.com', 'BD8P$4QgK(', '+49(0)8924314769', 'Ingmar-Hartmann-Gasse 8/2\n57702 Magdeburg'),
(20, 'Alberto Girschner', 'antje88@gmx.de', 'S@5M+XSuQt', '+49(0)3773282456', 'Alfred-Gieß-Platz 1\n33254 Mühldorf am Inn'),
(21, 'H.-Dieter Höfig MBA.', 'sonia24@kreusel.net', 'Tr0&Dt_c!1', '+49(0)0298 321722', 'Buchholzgasse 5/3\n97026 Ebersberg'),
(22, 'Rochus Blümel', 'iliasbarkholz@yahoo.de', '&9gyPqXiIG', '+49(0) 315380752', 'Benderallee 3\n20804 Gadebusch'),
(23, 'Bruno Pohl-Pohl', 'andrey24@linke.com', 'c0yxCtTF_*', '+49(0) 442929760', 'Katrin-Butte-Ring 2\n37746 Altötting'),
(24, 'Jessica Schinke', 'berta14@yahoo.de', '$p8ADaJk!7', '03938 84886', 'Selma-Tröst-Weg 15\n47431 Rockenhausen'),
(25, 'Prof. Konstantin auch Schlauchin B.A.', 'amosemann@googlemail.com', 'r(pA6uWxl!', '+49(0)1009239856', 'Gröttnerstr. 073\n64722 Gera'),
(26, 'Gerfried Warmer', 'kostolzinmathias@tschentscher.com', 'lA#)M6GkMx', '(06899) 640343', 'Andrej-Gehringer-Ring 9\n07053 Cottbus'),
(27, 'Swantje Koch II MBA.', 'insastiffel@gmail.com', '&C^MJ0Kd)1', '+49(0)4949 78365', 'Kreuselallee 1\n51862 Nabburg'),
(28, 'Wiltrud Hornich', 'evelin52@web.de', '#93JeLwlU^', '01133293715', 'Gisela-Drewes-Allee 6/2\n73262 Tirschenreuth'),
(29, 'Laura Döhn-Loos', 'kgeissler@grein.org', '%e0S@nVs5d', '01184 632396', 'Lisa-Patberg-Straße 788\n18157 Illertissen'),
(30, 'Willfried Wulf', 'valentina34@gmx.de', 'O^5L5CVws%', '00642346788', 'Natalija-Cichorius-Allee 6\n09421 Erfurt'),
(31, 'Birgitt Dussen van', 'heinz-joachim38@web.de', 'LMU)o2Ouf)', '07041443596', 'Vladimir-Lange-Gasse 844\n68848 Tirschenreuth'),
(32, 'Judith Kambs MBA.', 'erol58@weitzel.de', '5n(rQVdF+V', '+49(0)2349584947', 'Mandy-Nohlmans-Platz 698\n80707 Schlüchtern'),
(33, 'Univ.Prof. Leopoldine Johann', 'gbeier@gmail.com', 'RBT2XPvr@8', '00069 78967', 'Rörrichtweg 6\n52178 Lüdinghausen'),
(34, 'Thorsten Seifert', 'michelhermann@hahn.de', '38SDrCc$(g', '(00600) 98144', 'Ante-Schacht-Gasse 1\n79385 Torgau'),
(35, 'Kay-Uwe Segebahn', 'hermaauch-schlauchin@hotmail.de', '&qa4AChjZM', '(05447) 178175', 'Otfried-Pieper-Straße 7\n31268 Helmstedt'),
(36, 'Zbigniew Seifert', 'binnercatherine@klingelhoefer.de', 'A@0Son7&8c', '08223 866509', 'Gudeplatz 91\n13397 Saulgau'),
(37, 'Hans-Hinrich Pieper', 'sophiehaering@aol.de', 'C1Cagb^y*)', '02253 320629', 'Kathleen-Harloff-Gasse 3\n85646 Aachen'),
(38, 'Rose Hänel-Rosemann', 'amalianoack@dehmel.de', '*Zaze)NuZ9', '00248 770905', 'Gotthilf-Zobel-Gasse 3/6\n08100 Karlsruhe'),
(39, 'Rose Kruschwitz', 'annemie08@bohnbach.com', '@^OumlKD0X', '+49 (0) 2924 733726', 'Schaafring 9\n92800 Ochsenfurt'),
(40, 'Betti Stadelmann-Müller', 'rosemannrosa@steinberg.com', 'Pv7v3S+z(!', '+49 (0) 1767 821338', 'Jungfergasse 6\n80093 Sangerhausen'),
(41, 'Prof. Michaele Kambs MBA.', 'mbonbach@jaekel.de', '%Os!5(FfhH', '+49(0) 627722901', 'Freddy-Röhricht-Ring 26\n87052 Niesky'),
(42, 'Roland Klapp', 'kunibert64@gmail.com', 'f_Xc53FsAE', '(06038) 03663', 'Paffrathweg 4/0\n29503 Starnberg'),
(43, 'Marina Hiller B.A.', 'nikolashamann@gorlitz.de', 'M%O8+DeV0I', '+49(0)1944 68971', 'Konrad-Haering-Ring 31\n79180 Marienberg'),
(44, 'Rosalie Thies', 'smetz@aol.de', '@8y5!H2qK8', '(04341) 709337', 'Geißlerstraße 477\n70430 Siegen'),
(45, 'George Neureuther', 'jopichstephen@poelitz.org', 'l2Z8trBf^u', '01841 14997', 'Rennerweg 9\n17104 Rastatt'),
(46, 'Aysel Adler B.A.', 'eveline65@roemer.com', 'c#)8pBFsb)', '+49(0) 415606575', 'Ottfried-Dehmel-Straße 62\n66595 Vechta'),
(47, 'Hakan Rogge-Höfig', 'gerfriedkitzmann@gmail.com', '!21OyAsLCv', '08961 98430', 'Süßebierplatz 6\n74751 Berchtesgaden'),
(48, 'Mariusz Benthin', 'ggnatz@hornig.com', 'U*5GAQiyfP', '+49(0)8199 640256', 'Giovanna-Löwer-Straße 68\n43535 Geldern'),
(49, 'Prof. Ada Franke B.A.', 'sevimfiebig@stroh.com', 'n)5Wx6**Tt', '+49(0)6763 470817', 'Fritschgasse 4/0\n83729 Bad Kissingen'),
(50, 'Ismet Wilms B.Eng.', 'putzthilo@junitz.net', '%l8K3)PbFh', '+49(0)4567 21356', 'Mato-Reuter-Gasse 74\n49571 Riesa'),
(51, 'Dipl.-Ing. Karoline Mohaupt B.A.', 'ernsttheres@googlemail.com', 'H0Fb7KiGa&', '09132 16467', 'Rognerplatz 9/0\n78961 Bad Mergentheim'),
(52, 'Sibel Jäkel', 'priska65@atzler.org', '@5Cie8)xeD', '+49(0) 767035914', 'Engin-Conradi-Ring 31\n71810 Jüterbog'),
(53, 'Sabine Karz B.Eng.', 'gerhard79@patberg.org', 'e6RhhYuu^y', '05999 908879', 'Roggering 3\n04200 Hünfeld'),
(54, 'Ing. Ivana Junck B.A.', 'wauch-schlauchin@ditschlerin.de', '$5SyKcDgIj', '05000972095', 'Mirjam-Schacht-Allee 5/6\n40946 Bad Kreuznach'),
(55, 'Prof. Ernst Spieß B.A.', 'jkaul@jessel.com', 'L)j2EDOwOb', '07561 511603', 'Evangelos-Kühnert-Gasse 94\n69116 Wertingen'),
(56, 'Prof. Ildiko Pergande B.Sc.', 'tsteinberg@googlemail.com', '^6Q7gp_p@v', '0757382680', 'Mohamed-Stumpf-Straße 3\n51164 Gerolzhofen'),
(57, 'Erhardt Freudenberger', 'lia21@hotmail.de', 'P5iK^pEl@n', '+49(0)9379048230', 'Gisbert-Beckmann-Weg 009\n33434 Darmstadt'),
(58, 'Reiner Budig-Jacob', 'kkaul@hotmail.de', ')7)5Uc69&b', '+49(0)3076 66409', 'Celal-Hövel-Gasse 4\n42500 Roding'),
(59, 'Rosmarie Caspar', 'ottoheinz-guenther@karz.de', '+v!Z59G#F&', '+49 (0) 2810 165687', 'Beckmannstr. 722\n40750 Heinsberg'),
(60, 'Jeanette Steinberg', 'fechnerpriska@gmail.com', 'e0tPvPaV^9', '+49(0)0561 97653', 'Bernward-Gröttner-Straße 25\n70173 Königs Wusterhausen'),
(61, 'Prof. Danuta Jäntsch', 'usoeding@wilms.net', '+m6QbvLA^+', '0931325742', 'Hoffmannstr. 62\n84525 Neubrandenburg'),
(62, 'Loretta Stadelmann', 'iwiek@mosemann.de', 'S)60MRRp^3', '0523089407', 'Rafael-Harloff-Weg 54\n08976 Eggenfelden'),
(63, 'Univ.Prof. Linus Mentzel B.A.', 'weissbenedikt@web.de', '#w77Qzf6k&', '(03126) 411473', 'Loosstraße 097\n44778 Siegen'),
(64, 'Prof. Aleksandar Oderwald B.Eng.', 'zdoering@aol.de', 'H0Fap2Js+1', '+49(0)4753785187', 'Justine-Heintze-Weg 0\n79194 Viersen'),
(65, 'Dipl.-Ing. Jaroslaw Conradi B.A.', 'heserhans-peter@gmail.com', '*2Yx@(Qx3M', '08039 762122', 'Reinhardtgasse 9\n00692 Freising'),
(66, 'Ing. Dora Mosemann', 'huhnklaus-dieter@huebel.net', '7%)r5Dqefl', '+49(0)2218 244287', 'Johann-Krause-Straße 5/7\n56063 Weimar'),
(67, 'Univ.Prof. Siegrid Grein Groth B.A.', 'erudolph@raedel.de', '58R9U4zO^P', '09327 695923', 'Gregor-Kohl-Weg 0\n24983 Sömmerda'),
(68, 'Dr. Konstanze Ortmann B.Eng.', 'ltrueb@patberg.com', 'epW1uVd6a$', '(03373) 645115', 'Hövelplatz 824\n69137 Badibling'),
(69, 'Jacek Becker MBA.', 'pohleva@googlemail.com', '#6MFwGtQPm', '+49(0)7853 645450', 'Nikolaos-Noack-Platz 358\n07130 Einbeck'),
(70, 'Prof. Stephan Eimer B.Sc.', 'heinzjann@barkholz.de', 'qEv8QlH2l#', '07683787164', 'Raymund-Rosenow-Weg 53\n14817 Eisenhüttenstadt'),
(71, 'Sven Ladeck-Steinberg', 'tkuhl@beyer.com', '6waY6rLW&D', '05141836316', 'Ehrenfried-Margraf-Ring 8/7\n35429 Gardelegen'),
(72, 'Dogan Eberhardt-Köster', 'ortwin75@web.de', '&iMBufBs!0', '+49(0)8474008539', 'Klaus-Peter-Schlosser-Weg 3\n49262 Zerbst'),
(73, 'Cindy Siering', 'zita99@mude.com', '770!MRLj(7', '03389 686772', 'Schachtplatz 5/0\n36548 Gelnhausen'),
(74, 'Jörg-Peter Scheibe', 'pedro50@web.de', 'x7Z8l0Qr)F', '+49 (0) 5354 606113', 'Hedy-Gude-Weg 0\n69791 Schlüchtern'),
(75, 'Valentina Etzler', 'valeribaum@gmx.de', 'hM08EdXkZ^', '+49 (0) 0176 920869', 'Elfi-Seifert-Gasse 4/2\n98062 Dessau'),
(76, 'Miodrag Hettner', 'tfritsch@yahoo.de', 'JI!2$5MgZg', '+49 (0) 7922 680194', 'Arzu-Eberth-Allee 0\n74546 Amberg'),
(77, 'Ernestine Renner', 'whaase@aol.de', '&c6rGSyTgS', '+49 (0) 9732 513065', 'Theda-Thies-Weg 65\n64632 Badibling'),
(78, 'Stefani Trapp', 'kriemhildhering@boerner.com', '3*@JYsqx!6', '(07615) 339547', 'Atzlerweg 541\n43862 Kitzingen'),
(79, 'Cindy Harloff B.A.', 'kaestererich@siering.net', '5_ZEmbzQ!d', '08468 88501', 'Gundolf-Bolzmann-Platz 3\n07177 Kleve'),
(80, 'Katherina Trupp B.Sc.', 'liesbeth86@segebahn.com', 'A&A27(Bn$m', '(00329) 92741', 'Anselm-Heuser-Straße 102\n41116 Bad Kissingen'),
(81, 'Kornelius Matthäi', 'jspeer@gmx.de', '&RNi@o9jj1', '04725760211', 'Marian-Rogner-Platz 048\n23282 Eisenhüttenstadt'),
(82, 'Gina Heß', 'adelbert11@hotmail.de', 'zu9YIys#^z', '(05015) 235611', 'Raphaela-Ebert-Gasse 4\n44740 Kehl'),
(83, 'Siegmund Mohaupt', 'nerminfoerster@yahoo.de', 'Li@@8Ra2xR', '+49 (0) 8406 288941', 'Helma-Junitz-Platz 1\n59250 Finsterwalde'),
(84, 'Ismail Drubin', 'deborah36@pieper.com', '#iZLs!Bu9p', '+49(0)0623 001447', 'Henkstraße 28\n95429 Greifswald'),
(85, 'Willi Süßebier MBA.', 'sbonbach@mangold.com', '_j0TQEl2Y1', '+49(0)1649 30294', 'Jungferring 29\n92623 Rosenheim'),
(86, 'Roland Pruschke', 'kuschthilo@hotmail.de', '1JB+QFdi)X', '+49(0)4326 981154', 'Bolanderstr. 5/5\n48933 Eichstätt'),
(87, 'Nancy Heydrich-Wieloch', 'berntkaul@yahoo.de', '&797jyYTKn', '+49(0)4498 52016', 'Florence-Paffrath-Straße 28\n73423 Soest'),
(88, 'Tibor Schüler-Bähr', 'maike58@gmail.com', 'Aghu1CBb&(', '+49(0)7147 05321', 'Sebastiano-Bruder-Weg 4/5\n77291 Büsingen am Hochrhein'),
(89, 'Birgitta Linke', 'schombermarion@peukert.org', '_8pZQ&1h42', '00825 43543', 'Pedro-Gröttner-Ring 9/2\n35923 Senftenberg'),
(90, 'Prof. Jan-Peter Löffler', 'harrietfritsch@wieloch.de', '^3Z&IsFkz7', '04820488268', 'Rouven-Stolze-Straße 1\n31336 Riesa'),
(91, 'Frau Marina Hofmann B.A.', 'rennerfriederike@kitzmann.com', '732G)2Gs@h', '08043 26209', 'Susann-Klemm-Gasse 9\n53434 Rockenhausen'),
(92, 'Carmelo Weimer B.Eng.', 'etrueb@gmail.com', '$%P6wSzip6', '03285 785112', 'Trudi-Köhler-Gasse 88\n97015 Erbisdorf'),
(93, 'Wolf-Dieter Hein', 'annischeibe@kabus.net', 'XM3KkSNni&', '+49(0)9447 65626', 'Eimerring 12\n03432 Chemnitz'),
(94, 'Kasimir Gerlach-Scheel', 'claudius10@aol.de', '80YENTd7^9', '+49 (0) 1421 327439', 'Schinkestraße 773\n70648 Gransee'),
(95, 'Doreen Killer', 'ypohl@googlemail.com', 'U8ZjqUv+)7', '+49 (0) 8640 379970', 'Pamela-Bonbach-Allee 3/7\n40270 Scheinfeld'),
(96, 'Sükrü Zirme', 'virginiafiebig@kruschwitz.com', '9%GJnhjG+V', '+49(0)6501535122', 'Galina-Gehringer-Allee 981\n04415 Augsburg'),
(97, 'Eckart Grein Groth', 'hasanjuncken@gmail.com', '02X4(Tsy^V', '(08726) 322534', 'Mina-Girschner-Ring 431\n49176 Rochlitz'),
(98, 'Andrej Kuhl', 'apollonia28@gmail.com', 'n^1oMd7T)X', '+49(0)8175 08814', 'Weimergasse 0\n41920 Bad Mergentheim'),
(99, 'Prof. Ilias Fechner B.A.', 'sconradi@mitschke.com', '#To2BD^n+0', '07429 29158', 'Zimmerallee 1\n13223 Euskirchen'),
(100, 'Britta Roht MBA.', 'skitzmann@klotz.de', 'RG@v3&KzB#', '+49(0)6840960447', 'Korinna-Hering-Weg 4\n39731 Sömmerda'),
(101, 'Prof. Carl-Heinz Karz MBA.', 'magarete89@gmx.de', 'DF+1KAeV!Y', '+49(0) 648424710', 'Barthweg 0\n61217 Wiedenbrück'),
(102, 'Minna Barth B.A.', 'edeltraut64@yahoo.de', 'LSNlyLZg_5', '+49(0) 103300587', 'Milan-Jopich-Straße 96\n70343 Neunburg vorm Wald'),
(103, 'Claas Schönland', 'sylwiawilmsen@aol.de', 'L@G$Q4PpM6', '09379 85677', 'Woldemar-Pechel-Allee 9/8\n54533 Gera'),
(104, 'Hans-Dieter Pechel', 'vstumpf@stiebitz.de', 't*7*GEyJdX', '(02344) 446187', 'Pölitzring 0/1\n12330 Bad Kissingen'),
(105, 'Univ.Prof. Franka Seifert', 'uhenk@gmx.de', '*xYRcUv37f', '(00477) 424114', 'Handeweg 832\n44338 Füssen'),
(106, 'Ing. Daniele Ackermann', 'fatmapreiss@gmx.de', 'g30RYqBi$w', '+49 (0) 3461 529529', 'Rohtring 4/6\n84147 Sulzbach-Rosenberg'),
(107, 'Christine Geisler', 'ruperthaenel@aol.de', '+$q8nTHci3', '+49 (0) 5587 424214', 'Kreszentia-Kusch-Allee 275\n09116 Niesky'),
(108, 'Gerolf Dobes', 'bauerernestine@aol.de', '9JF7Aw*0s$', '0837883524', 'Lindnerweg 3/9\n75605 Meiningen'),
(109, 'Denise Klemm', 'pkuehnert@googlemail.com', 'ayR@H6xa(3', '+49 (0) 9100 514391', 'Weinholdstraße 79\n37592 Husum'),
(110, 'Univ.Prof. Cäcilia Budig', 'gnatzvalerij@becker.com', '&EQ@HZHpG5', '(09626) 729434', 'Seifertallee 5\n59725 Parchim'),
(111, 'Dipl.-Ing. Aleksej Krebs', 'lidijatrub@ritter.com', '*l3GOXIwR!', '+49(0) 701996826', 'Gretchen-Zorbach-Gasse 04\n08603 Bersenbrück'),
(112, 'Univ.Prof. Krystyna Christoph B.Sc.', 'ljunck@briemer.com', 'TmR80N(Aw^', '+49(0)3273 407890', 'Oscar-Harloff-Platz 816\n25791 Marktheidenfeld'),
(113, 'Natali Albers', 'cgertz@kuhl.net', '%q4RrSKC7w', '+49(0)8102 293012', 'Luise-Mentzel-Platz 8\n95914 Zschopau'),
(114, 'Simona Jüttner-Roht', 'klaus-wernermielcarek@trapp.org', 'fxB2NWag2#', '(03224) 38947', 'Weinhagestraße 33\n13282 Bamberg'),
(115, 'Nico Zahn', 'lailageissler@neuschaefer.com', '0kNbAgS5#X', '+49(0)5140 090818', 'Jüttnerweg 1/4\n05261 Fulda'),
(116, 'Ing. Carin Hermighausen B.Sc.', 'juergenbeyer@rosemann.com', 'R80UtJ5W!%', '05395247431', 'Hillergasse 5/1\n96417 Iserlohn'),
(117, 'Eckart Scholl B.Eng.', 'aleksej06@googlemail.com', 't93YjWZd6*', '+49(0)4482 39612', 'Ekkehard-Scholl-Weg 180\n64735 Holzminden'),
(118, 'Daria Beyer B.Sc.', 'heinz-gerdkostolzin@thies.de', 'u^6KZSxwq5', '+49(0)0724 40685', 'Nadeschda-Jockel-Straße 938\n99877 Gotha'),
(119, 'Kevin Sontag-Striebitz', 'ercan68@holzapfel.de', '%x4WqSNxGt', '+49(0)8064 891721', 'Ditschlerinring 8\n10693 Brand'),
(120, 'Salih Heß MBA.', 'foerstersibylla@benthin.de', 'g$o$5Upsus', '03970 83433', 'Lilija-Rust-Ring 2/0\n43101 Artern'),
(121, 'Lissy Eigenwillig MBA.', 'mauch-schlauchin@web.de', 'Pk3I#zCJ*J', '+49(0)4448 194219', 'Caren-Stahr-Straße 313\n31459 Main-Höchst'),
(122, 'Eduard Römer-Becker', 'ahmadkitzmann@googlemail.com', '^9F(w_6#h3', '+49(0)9379182637', 'Slavko-Ebert-Platz 0/5\n84595 Neustrelitz'),
(123, 'Dipl.-Ing. Fedor Becker', 'pmargraf@bluemel.com', 'Gor_1D3@R!', '+49 (0) 0193 199229', 'Schleichallee 2/2\n53980 Vilsbiburg'),
(124, 'Claudia Schaaf', 'ditmarbenthin@aol.de', '^nqZzG89&1', '04965873361', 'Bauerring 4/9\n18451 Kemnath'),
(125, 'Prof. Hansgeorg Dobes', 'tschulz@drewes.org', 'Yk5qT$^By*', '+49(0)7215 64110', 'Weißplatz 5/8\n03129 Erkelenz'),
(126, 'Ingelore Biggen B.Sc.', 'nathalie32@gmail.com', 'IO7FIvCiU+', '00327 064529', 'Hartungstraße 355\n47325 Weißenfels'),
(127, 'Sahin Jacobi Jäckel-Weinhage', 'fweiss@fritsch.com', '^n$1TaAjlR', '0154277689', 'Kochstr. 93\n77433 Donaueschingen'),
(128, 'Pawel Scholz', 'trappsylvia@walter.de', '9^#3uOOnJP', '+49(0)6565615563', 'Elwira-Wiek-Platz 990\n94253 Calw'),
(129, 'Louise Meyer', 'gordon90@jockel.de', 'Ak8Ap7^4_L', '03424050847', 'Gretchen-Kostolzin-Allee 4\n45160 Zschopau'),
(130, 'Olav Kroker B.A.', 'johannariehl@gmx.de', '(RECHmSY5X', '+49 (0) 3585 141094', 'Bergerweg 9\n70128 Badoberan'),
(131, 'Ing. Hans-J. Weimer', 'willy38@aol.de', '@mUeH8IbGj', '+49(0)8014 094290', 'Scheibestraße 1\n28998 Wanzleben'),
(132, 'Eva-Maria Finke B.A.', 'dkramer@web.de', 'q9lxTO(e$d', '00483 57242', 'Martinallee 267\n58438 Bad Kissingen'),
(133, 'Alwina Hermighausen', 'doramude@web.de', '&u65_5FoBL', '(01825) 347888', 'Pierre-Beier-Straße 377\n20697 Bützow'),
(134, 'Hans-Helmut Trüb', 'fatmahecker@gmx.de', '&@f_F*il&9', '+49(0)8776 115351', 'Apostolos-Eberth-Ring 036\n63633 Euskirchen'),
(135, 'Heide-Marie Ring', 'adapeukert@googlemail.com', '@K0UVoN)Sa', '02536 958449', 'Vittorio-Wilmsen-Straße 54\n13116 Zerbst'),
(136, 'Dipl.-Ing. Wolfgang Kramer', 'gholt@web.de', ')gG2z1@yP8', '06100 93993', 'Sabina-Heinz-Allee 466\n15421 Neuruppin'),
(137, 'Mirjana Meyer', 'waehnergottlob@warmer.de', '(Kn97PdiAT', '+49(0)7064 989863', 'Fliegnerstraße 68\n50661 Aue'),
(138, 'Herr Sebastian Drewes B.Sc.', 'drewesmagrit@gmail.com', '&d0i+iYx4&', '(09707) 425508', 'Ruben-Bohlander-Ring 08\n55027 Kronach'),
(139, 'Ilse Gerlach', 'dietzrandolf@gmx.de', 'E!3KQ5alOt', '+49(0)1484 84738', 'Margrit-Rosemann-Platz 4\n86414 Pfaffenhofen an der Ilm'),
(140, 'Marie Hänel', 'kataweimer@koester.net', 'CB4Y+jBk#@', '08521 20418', 'Zorbachring 63\n53808 Stade'),
(141, 'Nikola Killer B.Eng.', 'kzahn@yahoo.de', '#&h2YFhU&o', '+49(0)0870 50633', 'Giuseppina-Oderwald-Weg 540\n98801 Ravensburg'),
(142, 'Zeynep Nette', 'rritter@aol.de', '+b2JDiUdPO', '(09299) 69432', 'Seifertplatz 4/3\n18369 Potsdam'),
(143, 'Valerij Hiller', 'dlachmann@sorgatz.com', 'zzoBhFbS+9', '00204888632', 'Kunigunde-Junitz-Ring 5\n11771 Bad Brückenau'),
(144, 'Ing. Erwin Tintzmann B.Sc.', 'siglinde27@gmx.de', 'n(07A3_!Xo', '07191597894', 'Mudering 9/7\n94677 Hannoversch Münden'),
(145, 'Justus Winkler', 'jhaering@yahoo.de', 'v1gpq7Fx(6', '(03193) 28232', 'Marika-Hornig-Straße 9\n39332 Deggendorf'),
(146, 'Dipl.-Ing. Wera Koch II', 'bebert@yahoo.de', 'Rwc3ZzMf%+', '02005 595228', 'Dehmelallee 5\n51188 Marienberg'),
(147, 'Berend Trub B.Sc.', 'rainer92@patberg.com', '&5DoxlNh^h', '(01566) 373733', 'Herma-Budig-Weg 4/0\n69284 Lübeck'),
(148, 'Kai-Uwe Pruschke', 'salvatorefreudenberger@jungfer.de', 'r4i(Fo%z_M', '05716 46324', 'Gorlitzweg 618\n87949 Olpe'),
(149, 'Ing. Jaroslav Römer', 'hans-dietrichheser@aol.de', 'X9RJK7Ik)(', '05968 51891', 'Betina-Koch-Ring 32\n19057 Biedenkopf'),
(150, 'Gino Dehmel', 'ingriedjockel@haering.org', 'VIVz7Zs$)%', '(01001) 787084', 'Tadeusz-Preiß-Platz 2\n95663 Badibling');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vehiclemodels`
--

CREATE TABLE `vehiclemodels` (
  `ModelID` int(11) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `ModelName` varchar(50) NOT NULL,
  `VehicleType` varchar(50) NOT NULL,
  `SeatCount` int(11) NOT NULL,
  `Transmission` enum('Automatikschaltung','manuelle Schaltung') NOT NULL,
  `FuelType` enum('Benzin','Diesel','Hybrid','Elektro') NOT NULL,
  `DriveType` enum('FWD','RWD','AWD','4WD') NOT NULL,
  `Doors` int(11) NOT NULL,
  `ClimateControl` tinyint(1) NOT NULL,
  `GPS` tinyint(1) NOT NULL,
  `PricePerDay` decimal(10,2) NOT NULL,
  `ImagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `vehiclemodels`
--

INSERT INTO `vehiclemodels` (`ModelID`, `Manufacturer`, `ModelName`, `VehicleType`, `SeatCount`, `Transmission`, `FuelType`, `DriveType`, `Doors`, `ClimateControl`, `GPS`, `PricePerDay`, `ImagePath`) VALUES
(1, 'Volkswagen', 'Up!', 'Limousine', 4, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 56.49, 'assets/carpics/A black Jeep Compass.webp'),
(2, 'Volkswagen', 'Polo', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 61.24, 'assets/carpics/A black Mercedes-Benz C-Class.webp'),
(3, 'BMW', 'Mini', '3-Türer', 4, 'manuelle Schaltung', 'Hybrid', '4WD', 3, 0, 1, 93.99, 'assets/carpics/A black Toyota Aygo.webp'),
(4, 'Opel', 'Astra', 'Limousine', 5, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 0, 95.99, 'assets/carpics/A black Volkswagen Passat .webp'),
(5, 'Volkswagen', 'Golf', 'Limousine', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 2, 0, 0, 101.49, 'assets/carpics/A blue Audi A3 Sportback, a five-doo.webp'),
(6, 'Skoda', 'Oktavia', 'Combi', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 5, 1, 1, 110.99, 'assets/carpics/A blue Kia Picanto.webp'),
(7, 'Opel', 'Insignia', 'Limousine', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 101.48, 'assets/carpics/A blue Renault Twingo.webp'),
(8, 'BMW', 'Mini', 'Cabrio', 4, 'manuelle Schaltung', 'Benzin', 'AWD', 2, 1, 0, 156.99, 'assets/carpics/A dark blue BMW 3 Series.webp'),
(9, 'BMW', '1er', 'Limousine', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 2, 0, 1, 98.66, 'assets/carpics/A dark blue Chevrolet Malibu.webp'),
(10, 'Volkswagen', 'Touran', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 105.49, 'assets/carpics/A dark blue Nissan Micra.webp'),
(11, 'Volkswagen', 'Passat', 'Limousine', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 105.49, 'assets/carpics/A dark blue Peugeot .webp'),
(12, 'BMW', 'I3', 'Limousine', 4, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 1, 102.55, 'assets/carpics/A dark blue Peugeot 208.webp'),
(13, 'Ford', 'Mondeo', 'Turnier', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 106.50, 'assets/carpics/A dark blue Volvo.webp'),
(14, 'Audi', 'A3', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 110.50, 'assets/carpics/A dark gray Ford EcoSport.webp'),
(15, 'Ford', 'S-Max', 'Turnier', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 1, 113.49, 'assets/carpics/A blue Kia Picanto.webp'),
(16, 'BMW', '1er', 'Aut.', 5, 'Automatikschaltung', 'Benzin', 'AWD', 4, 1, 0, 108.31, 'assets/carpics/A dark gray Ford Fiesta.webp'),
(17, 'BMW', 'M135', 'Limousine', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 88.99, 'assets/carpics/A dark gray Ford Kuga.webp'),
(18, 'Audi', 'A4', 'Limousine', 5, 'Automatikschaltung', 'Elektro', 'FWD', 2, 1, 1, 121.49, 'assets/carpics/A dark gray Hyundai i30.webp'),
(19, 'BMW', '3er', 'Touring', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 124.49, 'assets/carpics/A dark gray Jaguar F-Pace.webp'),
(20, 'Volkswagen', 'Tiguan', 'Allspace', 5, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 0, 108.50, 'assets/carpics/A dark gray Mazda 2 .webp'),
(21, 'Audi', 'A4', 'Aut.', 5, 'Automatikschaltung', 'Diesel', 'RWD', 4, 0, 1, 129.99, 'assets/carpics/A dark gray Mitsubishi Outlander.webp'),
(22, 'Audi', 'A4 Avant', 'Aut.', 5, 'Automatikschaltung', 'Elektro', 'FWD', 4, 1, 0, 133.00, 'assets/carpics/A dark gray Opel Astra.webp'),
(23, 'BMW', 'M340', 'Limousine', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 177.49, 'assets/carpics/A dark gray Seat Leon.webp'),
(24, 'BMW', 'X1', 'Limousine', 5, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 1, 117.49, 'assets/carpics/A dark gray Toyota Corolla, a reliable sedan with four doors,.webp'),
(25, 'Audi', 'A3', 'Cabriolet', 4, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 131.49, 'assets/carpics/A dark green Land Rover Discovery.webp'),
(26, 'Mercedes-Benz', 'E200', 'Aut.', 5, 'Automatikschaltung', 'Elektro', 'FWD', 4, 1, 0, 143.99, 'assets/carpics/A red Alfa Romeo Giulia.webp'),
(27, 'Mercedes-Benz', 'E200', 'T-Modell', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 1, 149.99, 'assets/carpics/A red BMW X5 with five doors,'),
(28, 'Audi', 'A6 45/50 ', 'Aut.', 5, 'Automatikschaltung', 'Benzin', 'AWD', 4, 1, 0, 152.00, 'assets/carpics/A red Fiat Panda.webp'),
(29, 'BMW', '530/540 ', 'Touring Aut.', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 152.99, 'assets/carpics/A red Mazda CX-5.webp'),
(30, 'Volkswagen', 'Sharan', 'Limousine', 7, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 1, 178.49, 'assets/carpics/A red Suzuki Swift.webp'),
(31, 'Volkswagen', 'Sharan', 'Aut.', 7, 'Automatikschaltung', 'Hybrid', '4WD', 4, 0, 0, 196.48, 'assets/carpics/A red Toyota RAV4.webp'),
(32, 'BMW', '2er ', 'Coupé', 4, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 0, 115.48, 'assets/carpics/A red Toyota Yaris.webp'),
(33, 'Mercedes-Benz', 'SLC', 'Limousine', 2, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 1, 161.98, 'assets/carpics/A silver Chevrolet Spark.webp'),
(34, 'Audi', 'A5 40', 'Coupé', 4, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 148.49, 'assets/carpics/A silver Dacia Duster.webp'),
(35, 'BMW', 'X3 20', 'Limousine', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 152.48, 'assets/carpics/A silver Ford Focus, a compact and efficient hatchback with five doors.webp'),
(36, 'BMW', '430/435', 'Coupé', 4, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 1, 161.49, 'assets/carpics/A silver Ford Mondeo.webp'),
(37, 'BMW', 'X4 30', 'Limousine', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 144.32, 'assets/carpics/A white Subaru Impreza.webp'),
(38, 'Jaguar', 'Jaguar I-PACE', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 217.49, 'assets/carpics/A white Tesla Model 3.webp'),
(39, 'Mercedes-Benz', 'C-Klasse', 'Cabrio', 4, 'manuelle Schaltung', 'Hybrid', '4WD', 2, 0, 1, 171.99, 'assets/carpics/A silver Honda Civic.webp'),
(40, 'Mercedes-Benz', 'S-Klasse', 'Aut.', 5, 'Automatikschaltung', 'Benzin', 'AWD', 4, 1, 0, 239.48, 'assets/carpics/A silver Kia Sportage SUV.webp'),
(41, 'Audi', 'A7', 'Cabrio', 4, 'manuelle Schaltung', 'Diesel', 'RWD', 2, 0, 0, 188.99, 'assets/carpics/A silver Kia Sportage.webp'),
(42, 'BMW', 'M2', 'Coupé', 4, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 1, 361.99, 'assets/carpics/A silver Mercedes-Benz E-Class.webp'),
(43, 'Volkswagen', 'T6', 'Transporter', 9, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 171.49, 'assets/carpics/A silver Mitsubishi Lancer.webp'),
(44, 'Mercedes-Benz', 'Vito', 'Aut.', 9, 'Automatikschaltung', 'Benzin', 'AWD', 4, 1, 0, 198.50, 'assets/carpics/A silver Nissan Qashqai.webp'),
(45, 'Audi', 'A7', 'Coupé', 4, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 1, 259.49, 'assets/carpics/A silver Peugeot 3008.webp'),
(46, 'BMW', 'X5', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 242.00, 'assets/carpics/A silver Renault Clio.webp'),
(47, 'Ford', 'Mustang', 'Cabrio', 4, 'manuelle Schaltung', 'Hybrid', '4WD', 2, 0, 0, 205.20, 'assets/carpics/A silver Skoda Fabia.webp'),
(48, 'Mercedes-Benz', 'S350L', 'Limousine', 5, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 1, 269.48, 'assets/carpics/A silver Subaru Outback.webp'),
(49, 'Maserati', 'Ghibli', 'Limousine', 4, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 722.49, 'assets/carpics/A silver Toyota Yaris.webp'),
(50, 'Mercedes-Benz', 'S500L', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 302.50, 'assets/carpics/A silver Volkswagen Golf.webp'),
(51, 'Mercedes-Benz', 'V-Klasse', 'Limousine', 8, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 1, 539.99, 'assets/carpics/A silver Volkswagen Polo,.webp'),
(52, 'BMW', 'X3 M40', 'Limousine', 5, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 0, 217.99, 'assets/carpics/A white Audi Q5.webp'),
(53, 'Maserati', 'Levante', 'Limousine', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 732.49, 'assets/carpics/A white Citroe╠ên C3.webp'),
(54, 'BMW', 'X4M', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 1, 285.99, 'assets/carpics/A white Fiat 500.webp'),
(55, 'BMW', 'X3M', 'Limousine', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 285.99, 'assets/carpics/A white Hyundai Tucson.webp'),
(56, 'Mercedes-Benz', 'GLS 350', 'Limousine', 7, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 0, 609.99, 'assets/carpics/A white Lexus RX, a luxury mid-size.webp'),
(57, 'Mercedes-Benz', 'G500', 'Limousine', 5, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 1, 609.00, 'assets/carpics/A white Mercedes-Benz GLC.webp'),
(58, 'Range Rover', 'Sport', 'Limousine', 5, 'manuelle Schaltung', 'Elektro', 'FWD', 4, 1, 0, 433.49, 'assets/carpics/A white Mini Cooper Cabrio with two doors.webp'),
(59, 'BMW', 'X5M 50D', 'Limousine', 5, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 0, 279.49, 'assets/carpics/A white Nissan Juke.webp'),
(60, 'Range Rover', 'Velar', 'Limousine', 5, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 1, 410.99, 'assets/carpics/A white Opel Corsa.webp'),
(61, 'Mercedes-AMG', 'S63', 'Cabriolet', 2, 'manuelle Schaltung', 'Diesel', 'RWD', 4, 0, 0, 899.99, 'assets/carpics/A white Porsche Macan.webp'),
(62, 'Mercedes-Benz', 'S-Klasse', 'Cabrio', 4, 'manuelle Schaltung', 'Elektro', 'FWD', 2, 1, 0, 552.99, 'assets/carpics/A white Renault Megane.webp'),
(63, 'BMW', 'M850', 'Coupé', 4, 'manuelle Schaltung', 'Hybrid', '4WD', 4, 0, 1, 826.49, 'assets/carpics/A white Skoda Octavia.webp'),
(64, 'BMW', 'I8', 'Roadster', 2, 'manuelle Schaltung', 'Benzin', 'AWD', 4, 1, 0, 568.49, 'assets/carpics/A white Volkswagen Touran.webp');

--
-- Trigger `vehiclemodels`
--
DELIMITER $$
CREATE TRIGGER `set_transmission_before_insert` BEFORE INSERT ON `vehiclemodels` FOR EACH ROW BEGIN
    IF NEW.ModelName IN ('Up!', 'Polo', 'Mini Cabrio', 'Astra', 'Golf','A3 Cabriolet') THEN
        SET NEW.Transmission = 'manuelle Schaltung';
    ELSEIF NEW.ModelName IN ('A4', 'A4 Avant', '1er') THEN
        SET NEW.Transmission = 'Automatik';
    ELSE
        SET NEW.Transmission = 'manuelle Schaltung'; -- Standardwert
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vehicles`
--

CREATE TABLE `vehicles` (
  `VehicleID` int(11) NOT NULL,
  `ModelID` int(11) NOT NULL,
  `LocationID` int(11) NOT NULL,
  `LicensePlate` varchar(20) DEFAULT NULL,
  `Mileage` int(11) NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `vehicles`
--

INSERT INTO `vehicles` (`VehicleID`, `ModelID`, `LocationID`, `LicensePlate`, `Mileage`, `Year`) VALUES
(1, 41, 1, 'BE-5179', 29303, 2015),
(2, 2, 1, 'BE-2192', 68326, 2021),
(4, 51, 1, 'BE-6829', 8199, 2019),
(5, 29, 1, 'BE-4474', 80261, 2021),
(6, 38, 1, 'BE-3112', 13096, 2021),
(7, 45, 1, 'BE-3903', 16635, 2021),
(8, 16, 1, 'BE-9019', 51433, 2023),
(9, 62, 1, 'BE-3611', 76958, 2015),
(10, 57, 1, 'BE-2813', 96944, 2020),
(11, 32, 1, 'BE-1069', 75076, 2018),
(13, 29, 1, 'BE-2927', 25309, 2016),
(14, 46, 1, 'BE-9642', 29415, 2021),
(15, 34, 1, 'BE-9587', 15595, 2021),
(16, 12, 1, 'BE-8092', 96358, 2016),
(17, 17, 1, 'BE-1340', 90951, 2023),
(18, 24, 1, 'BE-8121', 73308, 2021),
(19, 49, 2, 'HA-7800', 76584, 2021),
(20, 39, 2, 'HA-7218', 18389, 2015),
(21, 36, 2, 'HA-7922', 38550, 2022),
(22, 27, 2, 'HA-8638', 61279, 2016),
(23, 46, 2, 'HA-2975', 18174, 2019),
(24, 11, 2, 'HA-2585', 84734, 2020),
(25, 12, 2, 'HA-4796', 80295, 2015),
(26, 12, 2, 'HA-6054', 46808, 2021),
(27, 43, 2, 'HA-6296', 24617, 2018),
(28, 59, 2, 'HA-6292', 82048, 2022),
(30, 11, 2, 'HA-3972', 35217, 2016),
(31, 35, 2, 'HA-1014', 76959, 2019),
(32, 18, 2, 'HA-1823', 59423, 2023),
(33, 51, 2, 'HA-9430', 66658, 2016),
(34, 18, 2, 'HA-8529', 43770, 2016),
(35, 53, 2, 'HA-9981', 56648, 2016),
(36, 50, 2, 'HA-1867', 6896, 2015),
(37, 53, 2, 'HA-9930', 21276, 2019),
(38, 4, 2, 'HA-5091', 51006, 2019),
(39, 43, 2, 'HA-2914', 53242, 2019),
(40, 52, 3, 'MÜ-9092', 92430, 2020),
(41, 53, 3, 'MÜ-4164', 68153, 2022),
(42, 33, 3, 'MÜ-7196', 17794, 2022),
(43, 4, 3, 'MÜ-7289', 91293, 2021),
(44, 2, 3, 'MÜ-5616', 77592, 2015),
(45, 34, 3, 'MÜ-1332', 51023, 2023),
(46, 13, 3, 'MÜ-7525', 23332, 2022),
(48, 51, 3, 'MÜ-1256', 40626, 2015),
(50, 3, 3, 'MÜ-1279', 41718, 2020),
(51, 15, 3, 'MÜ-2458', 6368, 2023),
(52, 22, 3, 'MÜ-5647', 69957, 2023),
(53, 56, 3, 'MÜ-6035', 43851, 2020),
(55, 30, 3, 'MÜ-4941', 20400, 2023),
(56, 14, 3, 'MÜ-8569', 47606, 2015),
(57, 25, 3, 'MÜ-1984', 71246, 2023),
(58, 35, 3, 'MÜ-4203', 63835, 2020),
(59, 17, 4, 'KÖ-7534', 43894, 2021),
(60, 27, 4, 'KÖ-9068', 56832, 2020),
(61, 31, 4, 'KÖ-7039', 19598, 2020),
(62, 8, 4, 'KÖ-4233', 49340, 2015),
(63, 28, 4, 'KÖ-6170', 88640, 2016),
(64, 4, 4, 'KÖ-4709', 62643, 2015),
(66, 13, 4, 'KÖ-9593', 88862, 2020),
(67, 14, 4, 'KÖ-5682', 15294, 2020),
(68, 7, 4, 'KÖ-6387', 42998, 2015),
(69, 22, 4, 'KÖ-7083', 78145, 2019),
(70, 33, 4, 'KÖ-1531', 63912, 2019),
(71, 33, 4, 'KÖ-7880', 99635, 2018),
(72, 36, 4, 'KÖ-6671', 96422, 2023),
(73, 64, 4, 'KÖ-4059', 99714, 2021),
(74, 64, 4, 'KÖ-5997', 9775, 2015),
(75, 14, 4, 'KÖ-5244', 22460, 2021),
(76, 60, 4, 'KÖ-2560', 22633, 2023),
(77, 23, 4, 'KÖ-8340', 96633, 2021),
(78, 47, 4, 'KÖ-6797', 79899, 2016),
(79, 36, 4, 'KÖ-4582', 93226, 2021),
(80, 40, 5, 'FR-6059', 68008, 2018),
(81, 37, 5, 'FR-3374', 33955, 2018),
(82, 22, 5, 'FR-8022', 93561, 2023),
(83, 2, 5, 'FR-4069', 20501, 2023),
(84, 3, 5, 'FR-5527', 39124, 2020),
(85, 43, 5, 'FR-6579', 79680, 2023),
(86, 39, 5, 'FR-8624', 11308, 2016),
(87, 55, 5, 'FR-2187', 93713, 2018),
(88, 8, 5, 'FR-9685', 21528, 2015),
(89, 43, 5, 'FR-3212', 9743, 2022),
(90, 23, 5, 'FR-9231', 25610, 2019),
(91, 64, 5, 'FR-5528', 36672, 2015),
(92, 30, 5, 'FR-7672', 60657, 2018),
(93, 55, 5, 'FR-4886', 71865, 2019),
(94, 54, 6, 'ST-2258', 99721, 2021),
(95, 11, 6, 'ST-5385', 92904, 2022),
(96, 30, 6, 'ST-5895', 7449, 2020),
(97, 57, 6, 'ST-5243', 97378, 2019),
(98, 43, 6, 'ST-8541', 56568, 2023),
(99, 6, 6, 'ST-3744', 51287, 2021),
(100, 30, 6, 'ST-2520', 41035, 2019),
(101, 2, 6, 'ST-5388', 7225, 2020),
(102, 47, 6, 'ST-3143', 89439, 2023),
(103, 28, 6, 'ST-3039', 33419, 2023),
(104, 14, 6, 'ST-8981', 27035, 2016),
(106, 16, 6, 'ST-8627', 21110, 2023),
(107, 10, 6, 'ST-1889', 90630, 2022),
(108, 47, 6, 'ST-8861', 81886, 2017),
(110, 32, 7, 'DÜ-6803', 78540, 2020),
(111, 53, 7, 'DÜ-2870', 83703, 2021),
(112, 21, 7, 'DÜ-5393', 19329, 2019),
(114, 39, 7, 'DÜ-8405', 33818, 2019),
(115, 36, 7, 'DÜ-3401', 67307, 2020),
(116, 63, 7, 'DÜ-8060', 71047, 2017),
(117, 2, 7, 'DÜ-1806', 99025, 2015),
(118, 37, 7, 'DÜ-5267', 41846, 2019),
(119, 59, 7, 'DÜ-5258', 48760, 2018),
(120, 43, 7, 'DÜ-5021', 40300, 2019),
(121, 58, 7, 'DÜ-8351', 17241, 2022),
(122, 2, 7, 'DÜ-2123', 44083, 2022),
(123, 64, 7, 'DÜ-8223', 95301, 2019),
(124, 40, 7, 'DÜ-8553', 78143, 2017),
(125, 30, 7, 'DÜ-1933', 57674, 2020),
(126, 24, 7, 'DÜ-7940', 99483, 2020),
(127, 50, 7, 'DÜ-4159', 58795, 2022),
(128, 57, 7, 'DÜ-1654', 32486, 2018),
(129, 5, 8, 'LE-5413', 28806, 2017),
(130, 39, 8, 'LE-9883', 57077, 2021),
(131, 29, 8, 'LE-4211', 76629, 2017),
(132, 31, 8, 'LE-5556', 29283, 2016),
(133, 18, 8, 'LE-3297', 93560, 2023),
(134, 57, 8, 'LE-5307', 75524, 2017),
(135, 3, 8, 'LE-1768', 56528, 2017),
(136, 57, 8, 'LE-3955', 85439, 2020),
(137, 62, 8, 'LE-1036', 9092, 2021),
(138, 8, 8, 'LE-9830', 47537, 2017),
(139, 16, 8, 'LE-4726', 58136, 2018),
(140, 64, 8, 'LE-1991', 67453, 2015),
(141, 5, 8, 'LE-8251', 80681, 2017),
(142, 8, 8, 'LE-6042', 50980, 2016),
(143, 30, 8, 'LE-2688', 77425, 2018),
(144, 18, 8, 'LE-3136', 80842, 2019),
(145, 9, 9, 'DO-4539', 70398, 2015),
(147, 44, 9, 'DO-1663', 50313, 2018),
(148, 48, 9, 'DO-8569', 99810, 2015),
(149, 18, 9, 'DO-8099', 5797, 2023),
(150, 61, 9, 'DO-1662', 62260, 2016),
(151, 7, 9, 'DO-3773', 54088, 2023),
(152, 28, 9, 'DO-2739', 57771, 2021),
(153, 48, 9, 'DO-1548', 77284, 2015),
(154, 31, 9, 'DO-5904', 36028, 2016),
(155, 64, 9, 'DO-1795', 55136, 2022),
(156, 6, 9, 'DO-6260', 89993, 2015),
(157, 27, 9, 'DO-3463', 42661, 2021),
(158, 45, 9, 'DO-3539', 93094, 2017),
(159, 34, 9, 'DO-7014', 9409, 2015),
(160, 20, 9, 'DO-7269', 12161, 2018),
(161, 24, 9, 'DO-1131', 73653, 2023),
(162, 37, 9, 'DO-6996', 86510, 2017),
(163, 23, 9, 'DO-4243', 9092, 2019),
(164, 10, 9, 'DO-5166', 96928, 2015),
(165, 54, 9, 'DO-9700', 23790, 2015),
(166, 2, 10, 'ES-2890', 14459, 2017),
(168, 47, 10, 'ES-8464', 34118, 2019),
(169, 28, 10, 'ES-6635', 91833, 2017),
(170, 58, 10, 'ES-2562', 71666, 2015),
(171, 3, 10, 'ES-4871', 52081, 2022),
(172, 8, 10, 'ES-5610', 14953, 2021),
(173, 22, 10, 'ES-2566', 46586, 2016),
(174, 21, 10, 'ES-6140', 79294, 2019),
(176, 5, 10, 'ES-3510', 59564, 2019),
(177, 62, 10, 'ES-5308', 15546, 2022),
(178, 45, 11, 'BR-2211', 63328, 2023),
(179, 48, 11, 'BR-9621', 93764, 2017),
(180, 31, 11, 'BR-1497', 8548, 2019),
(181, 30, 11, 'BR-4524', 36690, 2020),
(182, 35, 11, 'BR-5206', 65147, 2023),
(183, 21, 11, 'BR-8852', 44240, 2020),
(184, 9, 11, 'BR-2568', 27782, 2023),
(185, 18, 11, 'BR-2385', 50170, 2015),
(186, 37, 11, 'BR-6195', 50649, 2015),
(187, 52, 11, 'BR-2429', 25512, 2019),
(188, 27, 11, 'BR-3155', 29643, 2015),
(189, 15, 11, 'BR-3910', 19183, 2015),
(190, 49, 11, 'BR-8032', 67038, 2022),
(191, 4, 11, 'BR-9098', 83204, 2017),
(192, 46, 11, 'BR-1999', 51045, 2016),
(193, 57, 11, 'BR-3926', 65580, 2021),
(194, 24, 11, 'BR-4409', 26384, 2018),
(195, 16, 11, 'BR-6740', 52550, 2016),
(196, 38, 11, 'BR-8796', 37172, 2017),
(197, 5, 12, 'DR-3003', 77065, 2020),
(198, 61, 12, 'DR-1395', 12144, 2022),
(199, 23, 12, 'DR-5067', 10356, 2017),
(201, 59, 12, 'DR-6354', 70328, 2016),
(202, 45, 12, 'DR-5831', 35216, 2021),
(203, 48, 12, 'DR-9492', 84927, 2017),
(204, 50, 12, 'DR-4969', 11469, 2022),
(205, 62, 12, 'DR-8503', 33211, 2019),
(206, 56, 12, 'DR-2624', 63991, 2022),
(207, 17, 12, 'DR-8626', 87318, 2015),
(208, 15, 12, 'DR-2233', 41200, 2017),
(209, 27, 12, 'DR-5076', 18371, 2023),
(210, 58, 12, 'DR-2124', 11959, 2018),
(211, 50, 12, 'DR-8246', 50997, 2021),
(213, 43, 12, 'DR-6775', 66394, 2019),
(215, 55, 13, 'HA-8055', 7286, 2016),
(216, 41, 13, 'HA-3466', 58301, 2023),
(217, 16, 13, 'HA-6247', 6767, 2018),
(218, 49, 13, 'HA-6166', 64799, 2019),
(219, 45, 13, 'HA-1576', 90755, 2018),
(220, 6, 13, 'HA-6133', 58096, 2021),
(221, 8, 13, 'HA-8682', 89454, 2022),
(222, 9, 13, 'HA-4726', 29931, 2022),
(223, 21, 13, 'HA-8480', 18061, 2018),
(224, 14, 13, 'HA-2783', 15335, 2015),
(225, 8, 13, 'HA-2016', 88616, 2016),
(226, 20, 13, 'HA-1744', 81889, 2022),
(227, 43, 13, 'HA-2149', 85457, 2022),
(228, 61, 13, 'HA-5784', 11129, 2022),
(229, 61, 13, 'HA-8335', 75066, 2022),
(230, 18, 13, 'HA-2309', 78934, 2022),
(231, 6, 14, 'NÜ-3426', 21751, 2018),
(233, 19, 14, 'NÜ-9340', 30812, 2022),
(234, 7, 14, 'NÜ-9368', 13256, 2021),
(235, 44, 14, 'NÜ-4325', 52043, 2016),
(236, 57, 14, 'NÜ-3393', 25116, 2020),
(237, 58, 14, 'NÜ-9281', 88571, 2017),
(238, 63, 14, 'NÜ-8463', 45218, 2017),
(239, 51, 14, 'NÜ-3461', 20924, 2021),
(240, 41, 14, 'NÜ-1093', 65442, 2016),
(241, 60, 14, 'NÜ-5516', 67980, 2022),
(242, 40, 14, 'NÜ-4885', 75134, 2020),
(243, 17, 14, 'NÜ-1525', 8884, 2018),
(244, 15, 14, 'NÜ-4118', 98189, 2015),
(246, 7, 14, 'NÜ-5188', 79526, 2023),
(247, 64, 14, 'NÜ-6772', 81047, 2022),
(251, 35, 10, NULL, 96357, 2019),
(269, 26, 9, NULL, 39248, 2018),
(341, 42, 6, NULL, 122604, 2022),
(394, 1, 5, NULL, 8035, 2018);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `VehicleID` (`VehicleID`);

--
-- Indizes für die Tabelle `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`LocationID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indizes für die Tabelle `vehiclemodels`
--
ALTER TABLE `vehiclemodels`
  ADD PRIMARY KEY (`ModelID`);

--
-- Indizes für die Tabelle `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`VehicleID`),
  ADD UNIQUE KEY `LicensePlate` (`LicensePlate`),
  ADD KEY `ModelID` (`ModelID`),
  ADD KEY `LocationID` (`LocationID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT für Tabelle `locations`
--
ALTER TABLE `locations`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT für Tabelle `vehiclemodels`
--
ALTER TABLE `vehiclemodels`
  MODIFY `ModelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT für Tabelle `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `VehicleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=764;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`VehicleID`) REFERENCES `vehicles` (`VehicleID`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`ModelID`) REFERENCES `vehiclemodels` (`ModelID`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_ibfk_2` FOREIGN KEY (`LocationID`) REFERENCES `locations` (`LocationID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
