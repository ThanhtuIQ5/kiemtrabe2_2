-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 20, 2025 lúc 09:39 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bka`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 1, '2025-03-20 07:35:24', '2025-03-20 07:35:24'),
(2, 2, '2025-03-20 07:35:24', '2025-03-20 07:35:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_detail_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `updated_at`, `created_at`) VALUES
(1, 1, 2, '2025-03-20 07:34:55', '2025-03-20 07:34:55'),
(2, 2, 1, '2025-03-20 07:34:55', '2025-03-20 07:34:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `updated_at`, `created_at`) VALUES
(1, 'Ti vi LED 4K', 10000000, 'Trải nghiệm hình ảnh sắc nét và màu sắc sống động với công nghệ LED 4K tiên tiến.', '2025-03-20 07:31:51', '2025-03-20 07:31:51'),
(2, 'Ti vi Smart', 20000000, ' Kết nối internet, xem phim trực tuyến và sử dụng các ứng dụng giải trí ngay trên màn hình TV.', '2025-03-20 07:31:51', '2025-03-20 07:31:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `updated_at`, `created_at`) VALUES
(1, 'Vinh', 'Phan199@gmail.com', '12345', '2025-03-20 07:30:21', '2025-03-20 07:30:21'),
(2, 'Bao', 'Bao205@gmail.com', '12345', '2025-03-20 07:30:21', '2025-03-20 07:30:21'),
(3, 'Tu', 'nguyenthanhtu@gmail.com', '12345', '2025-03-20 07:50:20', '2025-03-20 07:50:20'),
(4, 'Thu', 'chayngaydi123@gmail.com', 'chay123', '2025-03-20 07:50:20', '2025-03-20 07:50:20'),
(5, 'Nam', 'NamHen99@tdc.edu.vn', '55555', '2025-03-20 07:52:50', '2025-03-20 07:52:50'),
(6, 'Tho', 'thobaymau777@gmail.com', 'tho7777', '2025-03-20 07:53:21', '2025-03-20 07:53:21'),
(7, 'BayLiem', 'ronaldo7@gmail.com', 'siuuuu', '2025-03-20 07:53:53', '2025-03-20 07:53:53'),
(8, 'Messi', 'messi10@gmail.com', 'messi10', '2025-03-20 08:09:31', '2025-03-20 08:09:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
