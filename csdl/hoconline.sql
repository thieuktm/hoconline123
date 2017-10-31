-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 31, 2017 lúc 03:09 PM
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
  `diem` int(11) NOT NULL,
  PRIMARY KEY (`MaHV`,`MaMH`,`MaLH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bang_diem`
--

INSERT INTO `bang_diem` (`MaHV`, `MaMH`, `MaLH`, `diem`) VALUES
(1011, 'm1', '3', 6),
(1012, 'm2', '2', 6),
(1012, 'm2', '3', 7),
(1015, 'm3', '3', 7),
(1014, 'm4', '5', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky`
--

DROP TABLE IF EXISTS `dang_ky`;
CREATE TABLE IF NOT EXISTS `dang_ky` (
  `MaHV` int(255) NOT NULL,
  `MaMH` int(255) NOT NULL,
  `Diem` int(255) NOT NULL,
  PRIMARY KEY (`MaHV`),
  KEY `MaMH` (`MaMH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giao_trinh`
--

DROP TABLE IF EXISTS `giao_trinh`;
CREATE TABLE IF NOT EXISTS `giao_trinh` (
  `MaMH` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ma_Giaotrinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenGiaotrinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungchinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungfull` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaMH`,`Ma_Giaotrinh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_vien`
--

DROP TABLE IF EXISTS `hoc_vien`;
CREATE TABLE IF NOT EXISTS `hoc_vien` (
  `MaHV` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `giới tính` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '1',
  `ngay_dk` datetime NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`MaHV`)
) ENGINE=MyISAM AUTO_INCREMENT=1017 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoc_vien`
--

INSERT INTO `hoc_vien` (`MaHV`, `ho_ten`, `email`, `phone`, `dia_chi`, `ngay_sinh`, `giới tính`, `ngay_dk`, `active`) VALUES
(1010, 'a', 'a@gmail.com', '0123456789', 'thfs', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1011, 'b', 'b@gmail.com', '0123456789', 'sdffh', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1012, 'c', 'c@gmail.com', '123456789', 'edfg', '2017-10-05', '1', '2017-10-09 00:00:00', 1),
(1013, 'e', 'e@gmail.com', '0123456789', 'errt', '2017-10-04', '1', '2017-10-24 00:00:00', 1),
(1014, 'e1', 'e1@gmail.com', '0123456789', 'errt', '2017-10-04', '1', '2017-10-24 00:00:00', 1),
(1016, 'b1', 'b1@gmail.com', '0123456789', 'sdffh', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1015, 'b12', 'b12@gmail.com', '0123456789', 'sdffh', '2017-10-02', '0', '2017-10-10 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_hoc`
--

DROP TABLE IF EXISTS `lop_hoc`;
CREATE TABLE IF NOT EXISTS `lop_hoc` (
  `MaLH` int(11) NOT NULL,
  `TenLH` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaMH` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenMH` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magv` int(11) NOT NULL,
  `TenGV` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_BD` datetime NOT NULL,
  `ngay_KT` datetime NOT NULL,
  `Soluong_HV` int(11) NOT NULL,
  `hoc_phi` int(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`MaLH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop_hoc`
--

INSERT INTO `lop_hoc` (`MaLH`, `TenLH`, `MaMH`, `TenMH`, `magv`, `TenGV`, `ngay_BD`, `ngay_KT`, `Soluong_HV`, `hoc_phi`, `active`) VALUES
(0, 'lop_1', '12', 'toan_lop1', 5, 'hand', '2017-10-02 00:00:00', '2017-10-31 00:00:00', 12, NULL, 1),
(1, 'lop_2', '12', 'toan_lop2', 6, 'gs_thieu', '2017-10-03 00:00:00', '2017-10-31 00:00:00', 30, NULL, 1),
(2, 'lop_10', '13', 'Anh_Van', 6, 'Davir_Tom', '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1),
(3, 'lop_10', '10', 'Anh_Van', 6, 'Davir_Tom', '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1),
(6, 'lop_3', '14', 'ngu_van', 6, 'Davir_Josh', '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1),
(5, 'lop_4', '15', 'ngu_van', 6, 'Davir_sam', '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1),
(7, 'lop_5', '17', 'gd_connguoi', 7, 'Davir_RIM', '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1),
(8, 'lop_8', '18', 'hoa_hoc', 8, 'Davir_DAM', '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hoc`
--

DROP TABLE IF EXISTS `mon_hoc`;
CREATE TABLE IF NOT EXISTS `mon_hoc` (
  `MaMH` char(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_estonian_ci NOT NULL,
  `TenMH` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotinchi` int(255) NOT NULL,
  `MaLH` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`MaMH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mon_hoc`
--

INSERT INTO `mon_hoc` (`MaMH`, `TenMH`, `sotinchi`, `MaLH`, `active`) VALUES
('10', 'Anh_van', 2, '', 1),
('12', 'toan_lop1', 2, '', 1),
('14', 'ngu_van', 2, '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
