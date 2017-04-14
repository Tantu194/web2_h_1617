-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2017 lúc 03:30 SA
-- Phiên bản máy phục vụ: 5.7.11
-- Phiên bản PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2_h_1617`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_menu`
--

CREATE TABLE `coffee_menu` (
  `coffee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coffee_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `coffee_menu`
--
ALTER TABLE `coffee_menu`
  ADD PRIMARY KEY (`coffee_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
