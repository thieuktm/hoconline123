-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 02, 2017 lúc 10:23 AM
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
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `ten`, `acount`, `pass`) VALUES
(1, 'Thiệu', 'admin', '21232f297a57a5a743894a0e4a801fc3');

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

--
-- Đang đổ dữ liệu cho bảng `dang_ky`
--

INSERT INTO `dang_ky` (`MaHV`, `MaMH`, `Diem`) VALUES
(1010, 10, 7),
(1011, 10, 7),
(1012, 11, 7),
(1013, 10, 6),
(1014, 12, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

DROP TABLE IF EXISTS `giaovien`;
CREATE TABLE IF NOT EXISTS `giaovien` (
  `magv` int(11) NOT NULL,
  `TenGV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`magv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`magv`, `TenGV`, `mail`, `SDT`, `Avatar`) VALUES
(3, 'Davir_DAM', 'asd@gamil.com', '123456778', 'images/img_avatar.png'),
(4, 'Davir_RIM', 'asdq@gamil.com', '1234578', 'images/img_avatar.png'),
(5, 'hand', 'easd@gamil.com', '123455678', 'images/img_avatar.png'),
(6, 'gs_thieu', 'aysd@gamil.com', '12345678', 'images/img_avatar.png'),
(7, '	\r\nDavir_Tom', 'ausd@gamil.com', '123456789', 'images/img_avatar.png'),
(9, 'Davir_Josh', 'aysd@gamil.com', '12987654', 'images/img_avatar.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giao_trinh`
--

DROP TABLE IF EXISTS `giao_trinh`;
CREATE TABLE IF NOT EXISTS `giao_trinh` (
  `MaMH` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ma_Giaotrinh` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenGiaotrinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungchinh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungfull` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaMH`,`Ma_Giaotrinh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giao_trinh`
--

INSERT INTO `giao_trinh` (`MaMH`, `Ma_Giaotrinh`, `TenGiaotrinh`, `video`, `noidungchinh`, `noidungfull`, `gioithieu`) VALUES
('1', '1', 'tiếng anh', 'https://www.youtube.com/embed/ap2asVc3Csg', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới', '', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới. Mang lại tiếng nói chung và kiến cả thế giới gần nhau hơn hiểu nhau hơn'),
('2', '2', 'ngữ Văn', 'https://www.youtube.com/embed/7KX3VXzsVq8', 'môn ngữ văn cuốn giáo trình mang lại cho ta kiến thức cơ bản về ngôn ngữ tiếng việt, và cho thấy sự đa dạng và phong phú ngữ điệu', '', 'Ngữ Văn là nơi là mang niềm đam mê với các giao tiếp và sự hấp dẫn của ngôn từ'),
('3', '3', 'toán', 'https://www.youtube.com/embed/j-giDZE0OT4', 'là toán tổng hợp từ mức cơ ban đến mức khó để phân loại học viên tăng tính học hỏi ham học', '', 'Toán là nơi là mang niềm đam mê với công thức và suy tư'),
('4', '1', 'tiếng anh', 'https://www.youtube.com/embed/ap2asVc3Csg', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới', '', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới. Mang lại tiếng nói chung và kiến cả thế giới gần nhau hơn hiểu nhau hơn'),
('5', '2', 'ngữ Văn', 'https://www.youtube.com/watch?v=uTtRrnSIPJs', 'môn ngữ văn cuốn giáo trình mang lại cho ta kiến thức cơ bản về ngôn ngữ tiếng việt, và cho thấy sự đa dạng và phong phú ngữ điệu', '', 'Ngữ Văn là nơi là mang niềm đam mê với các giao tiếp và sự hấp dẫn của ngôn từ'),
('6', '3', 'toán', 'https://www.youtube.com/watch?v=6LUT0r1W16c', 'là toán tổng hợp từ mức cơ ban đến mức khó để phân loại học viên tăng tính học hỏi ham học', '', 'Toán là nơi là mang niềm đam mê với công thức và suy tư'),
('7', '1', 'tiếng anh', 'https://www.youtube.com/embed/ap2asVc3Csg', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới', '', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới. Mang lại tiếng nói chung và kiến cả thế giới gần nhau hơn hiểu nhau hơn'),
('8', '2', 'ngữ Văn', 'https://www.youtube.com/embed/7KX3VXzsVq8', 'môn ngữ văn cuốn giáo trình mang lại cho ta kiến thức cơ bản về ngôn ngữ tiếng việt, và cho thấy sự đa dạng và phong phú ngữ điệu', '', 'Ngữ Văn là nơi là mang niềm đam mê với các giao tiếp và sự hấp dẫn của ngôn từ'),
('9', '3', 'toán', 'https://www.youtube.com/embed/j-giDZE0OT4', 'là toán tổng hợp từ mức cơ ban đến mức khó để phân loại học viên tăng tính học hỏi ham học', '', 'Toán là nơi là mang niềm đam mê với công thức và suy tư'),
('10', '1', 'tiếng anh', 'https://www.youtube.com/embed/ap2asVc3Csg', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới', '', 'tiếng anh là ngôn ngữ được thế giới sử dụng như là ngôn ngữ chung giao tiếp với tất cả con người của khắp thế giới. Mang lại tiếng nói chung và kiến cả thế giới gần nhau hơn hiểu nhau hơn'),
('11', '2', 'ngữ Văn', 'https://www.youtube.com/embed/7C80PsFX-fY', 'môn ngữ văn cuốn giáo trình mang lại cho ta kiến thức cơ bản về ngôn ngữ tiếng việt, và cho thấy sự đa dạng và phong phú ngữ điệu', '', 'Ngữ Văn là nơi là mang niềm đam mê với các giao tiếp và sự hấp dẫn của ngôn từ'),
('12', '3', 'toán', 'https://www.youtube.com/embed/ZgpgavgE3Xg', 'là toán tổng hợp từ mức cơ ban đến mức khó để phân loại học viên tăng tính học hỏi ham học', '', 'Toán là nơi là mang niềm đam mê với công thức và suy tư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_vien`
--

DROP TABLE IF EXISTS `hoc_vien`;
CREATE TABLE IF NOT EXISTS `hoc_vien` (
  `MaHV` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `gioi_tinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '1',
  `ngay_dk` datetime NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`MaHV`)
) ENGINE=MyISAM AUTO_INCREMENT=1028 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoc_vien`
--

INSERT INTO `hoc_vien` (`MaHV`, `ho_ten`, `email`, `pass`, `phone`, `dia_chi`, `ngay_sinh`, `gioi_tinh`, `ngay_dk`, `active`) VALUES
(1010, 'a', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 'thfs', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1011, 'b', 'b@gmail.com', '', '0123456789', 'sdffh', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1012, 'c', 'c@gmail.com', '', '123456789', 'edfg', '2017-10-05', '1', '2017-10-09 00:00:00', 1),
(1013, 'e', 'e@gmail.com', '', '0123456789', 'errt', '2017-10-04', '1', '2017-10-24 00:00:00', 1),
(1014, 'e1', 'e1@gmail.com', '', '0123456789', 'errt', '2017-10-04', '1', '2017-10-24 00:00:00', 1),
(1016, 'b1', 'b1@gmail.com', '', '0123456789', 'sdffh', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1015, 'b12', 'b12@gmail.com', '', '0123456789', 'sdffh', '2017-10-02', '0', '2017-10-10 00:00:00', 1),
(1018, NULL, 'minhtuan9922@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, '1', '0000-00-00 00:00:00', 1),
(1019, NULL, 'h@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, '1', '0000-00-00 00:00:00', 1),
(1020, 'Tuấn', 'tuan.abcd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Bình Định', '1992-03-10', NULL, '2017-11-08 08:16:09', 1),
(1021, 'thiệu', 'th@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Đăk Nông', '1991-01-01', NULL, '2017-11-08 15:40:38', 1),
(1022, 'abc', 'abc@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '1990-11-11', '1', '2017-11-09 09:22:08', 1),
(1023, 'văn thị', 'sdr@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, '1900-10-10', '1', '2017-11-09 09:29:42', 1),
(1024, 'ư', 'r@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, '0011-12-12', '1', '2017-11-09 10:25:05', 1),
(1025, 'tran', 'tran1@gamil.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, '0022-03-02', '1', '2017-11-14 09:31:27', 1),
(1026, 'phi', 'p@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, '1212-12-12', '1', '2017-11-14 20:09:20', 1),
(1027, '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, '0000-00-00', '1', '2017-12-01 12:04:28', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_hoc`
--

DROP TABLE IF EXISTS `lop_hoc`;
CREATE TABLE IF NOT EXISTS `lop_hoc` (
  `MaLH` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLH` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magv` int(11) NOT NULL,
  `ngay_BD` datetime NOT NULL,
  `ngay_KT` datetime NOT NULL,
  `Soluong_HV` int(11) NOT NULL,
  `hoc_phi` int(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap` int(11) NOT NULL,
  `hot` tinyint(4) NOT NULL DEFAULT '0',
  `Ma_Giaotrinh` int(11) NOT NULL,
  PRIMARY KEY (`MaLH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop_hoc`
--

INSERT INTO `lop_hoc` (`MaLH`, `TenLH`, `magv`, `ngay_BD`, `ngay_KT`, `Soluong_HV`, `hoc_phi`, `active`, `poster`, `cap`, `hot`, `Ma_Giaotrinh`) VALUES
('1', 'Lớp 1', 5, '2017-10-02 00:00:00', '2017-10-31 00:00:00', 12, NULL, 1, 'images/1.jpg', 1, 0, 1),
('2', 'Lớp 2', 6, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 30, NULL, 1, 'images/1.jpg', 1, 0, 1),
('10', 'Lớp 10', 7, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 3, 0, 3),
('11', 'Lớp 11', 7, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 3, 0, 1),
('3', 'Lớp 3', 9, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 1, 0, 2),
('4', 'Lớp 4', 8, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 1, 0, 3),
('5', 'Lớp 5', 4, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 1, 0, 1),
('8', 'Lớp 8', 3, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 2, 0, 2),
('6', 'Lớp 6', 5, '2017-10-02 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/3.jpg', 2, 0, 3),
('7', 'Lớp 7', 5, '2017-10-02 00:00:00', '2017-10-31 00:00:00', 30, NULL, 1, 'images/1.jpg', 2, 0, 1),
('9', 'Lớp 9', 6, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 30, NULL, 1, 'images/1.jpg', 2, 0, 2),
('12', 'Lớp 12', 7, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 3, 0, 3),
('13', 'Kỹ Sư', 7, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 4, 0, 1),
('14', 'Cư Nhân', 9, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 4, 0, 2),
('15', 'Cư Nhân Kinh Tế', 8, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 4, 0, 3),
('16', 'Cư Nhân giáo Viên', 4, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 4, 0, 1),
('17', 'Kỹ Sư Công Nghệ', 3, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/2.jpg', 4, 0, 2),
('18', 'Kỹ Thuật Viên', 5, '2017-10-02 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/3.jpg', 4, 0, 3),
('8b', 'lơp nâng cao', 3, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/3.jpg', 2, 0, 1),
('6b', 'Lớp Năng khiếu', 5, '2017-10-02 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/3.jpg', 2, 0, 2),
('7b', 'Lớp TÌm hiểu khoa học', 5, '2017-10-02 00:00:00', '2017-10-31 00:00:00', 30, NULL, 1, 'images/1.jpg', 2, 0, 3),
('10b', 'Lớp Chuyên khối A', 7, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/1.jpg', 3, 0, 1),
('11b', 'Lớp Chuyên khối C', 7, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/3.jpg', 3, 0, 2),
('12b', 'Lớp Chuyên khối B', 7, '2017-10-03 00:00:00', '2017-10-31 00:00:00', 25, NULL, 1, 'images/3.jpg', 3, 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hoc`
--

DROP TABLE IF EXISTS `mon_hoc`;
CREATE TABLE IF NOT EXISTS `mon_hoc` (
  `MaMH` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('1', 'Anh_van', 2, '1', 1),
('2', 'toan_lop1', 2, '2', 1),
('3', 'ngu_van', 2, '3', 1),
('4', 'Anh_van', 2, '4', 1),
('5', 'toan_lop1', 2, '5', 1),
('6', 'ngu_van', 2, '6', 1),
('7', 'Anh_van', 2, '7', 1),
('8', 'toan_lop1', 2, '8', 1),
('9', 'ngu_van', 2, '9', 1),
('10', 'toan_lop10', 2, '10', 1),
('11', 'ngu_van', 2, '11', 1),
('12', 'Anh_van', 2, '12', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
