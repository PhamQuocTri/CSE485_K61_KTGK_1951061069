-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 04:22 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951061069_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namsinh` date DEFAULT NULL,
  `nghenghiep` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycapthe` date DEFAULT NULL,
  `ngayhethan` date DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
('01', 'Phạm Văn Toàn', 'nam', '2021-09-09', 'Bác sĩ', '2021-09-03', '2022-09-09', 'Hà Nội'),
('02', 'Nguyễn Xuân Phúc', 'nam', '2001-09-09', 'Chủ tịch', '2021-09-09', '2021-09-01', 'Hà Nội'),
('03', 'Nguyễn Minh Phúc', 'nam', '1998-09-09', 'Chủ tịch', '2021-09-09', '2021-09-01', 'Hà Nội'),
('04', 'Trần Bảo', 'nam', '2003-09-09', 'Công an', '2021-09-09', '2022-09-09', 'Quảng Nam'),
('05', 'Phạm Hải Yến', 'nữ', '2006-09-09', 'Học sinh', '2021-09-09', '2021-09-01', 'Vĩnh Phúc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
