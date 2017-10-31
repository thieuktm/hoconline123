-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 31, 2017 lúc 04:40 AM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoconline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang_diem`
--

DROP TABLE IF EXISTS `bang_diem`;
CREATE TABLE IF NOT EXISTS `bang_diem` (
  `MaHV` int(255) NOT NULL,
  `MaMH` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLH` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemgiuaky` int(22) NOT NULL,
  `diemcuoiky` int(11) NOT NULL,
  `diemtongket` int(11) NOT NULL,
  PRIMARY KEY (`MaHV`,`MaMH`,`MaLH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctr_dao_tao`
--

DROP TABLE IF EXISTS `ctr_dao_tao`;
CREATE TABLE IF NOT EXISTS `ctr_dao_tao` (
  `cap_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daotaonghe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_hoc` int(11) NOT NULL,
  PRIMARY KEY (`khoa_hoc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctr_dao_tao`
--

INSERT INTO `ctr_dao_tao` (`cap_1`, `cap_2`, `cap_3`, `daotaonghe`, `khoa_hoc`) VALUES
('a', 'a', 'a', 'a', 1),
('a', 'b', 'c', 'd', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_vien`
--

DROP TABLE IF EXISTS `hoc_vien`;
CREATE TABLE IF NOT EXISTS `hoc_vien` (
  `MaHV` int(11) NOT NULL AUTO_INCREMENT,
  `MaLH` int(11) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `giới tính` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '1',
  `ngay_dk` datetime NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`MaHV`)
) ENGINE=MyISAM AUTO_INCREMENT=1014 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoc_vien`
--

INSERT INTO `hoc_vien` (`MaHV`, `MaLH`, `ho_ten`, `email`, `phone`, `dia_chi`, `ngay_sinh`, `giới tính`, `ngay_dk`, `active`) VALUES
(1010, 0, 'a', 'a@gmail.com', '0123456789', 'thfs', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1011, 0, 'b', 'b@gmail.com', '0123456789', 'sdffh', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1012, 1, 'c', 'c@gmail.com', '123456789', 'edfg', '2017-10-05', '1', '2017-10-09 00:00:00', 1),
(1013, 1, 'e', 'e@gmail.com', '0123456789', 'errt', '2017-10-04', '1', '2017-10-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_hoc`
--

DROP TABLE IF EXISTS `lop_hoc`;
CREATE TABLE IF NOT EXISTS `lop_hoc` (
  `MaLH` int(11) NOT NULL,
  `MaMH` int(11) NOT NULL,
  `magv` int(11) NOT NULL,
  `ngay_BD` datetime NOT NULL,
  `ngay_KT` datetime NOT NULL,
  `Soluong_HV` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop_hoc`
--

INSERT INTO `lop_hoc` (`MaLH`, `MaMH`, `magv`, `ngay_BD`, `ngay_KT`, `Soluong_HV`) VALUES
(0, 12, 5, '2017-10-02 00:00:00', '2017-10-31 00:00:00', 12),
(1, 11, 6, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 30),
(2, 13, 6, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hoc`
--

DROP TABLE IF EXISTS `mon_hoc`;
CREATE TABLE IF NOT EXISTS `mon_hoc` (
  `MaMH` int(255) NOT NULL,
  `TenMH` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotinchi` int(255) NOT NULL,
  PRIMARY KEY (`MaMH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
