-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 19, 2023 lúc 05:03 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nguoi_dung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `ten` varchar(20) NOT NULL,
  `gioi_tinh` varchar(6) NOT NULL,
  `nam_sinh` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `ten`, `gioi_tinh`, `nam_sinh`) VALUES
(4, 'ri do', 'Nam', 1979),
(5, 'Duong', 'Nam', 2002),
(6, 'Duong', 'Nam', 2002),
(7, 'Huyen', 'Nu', 2003),
(8, 'Hien', 'Nu', 2004),
(9, 'Mark', 'Nam', 2000),
(10, 'Tony', 'Nam', 1999),
(11, 'Olaa', 'Nu', 2002),
(12, 'Calvin', 'Nam', 2005),
(13, 'Kelvin', 'Nam', 2002),
(14, 'Helley', 'Nu', 2001),
(15, 'Dogh', 'Nam', 1998),
(16, 'Divie', 'Nam', 2001),
(17, 'Drivers', 'Nam', 2002),
(18, 'Cookcoo', 'Nu', 2004),
(19, 'Heaven', 'LGBT', 2000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
