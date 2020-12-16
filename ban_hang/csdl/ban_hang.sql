-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 10:20 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ban_hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(1, 'nhan', 'nnhann99@gmail.com', 'cao lo quan 8', '0337876016', 'size M', '16[|||]1[|||||]'),
(2, 'nhanh', 'nnhann99@gmail.com', 'cao loox', '00011', 'san pham', '26[|||]1[|||||]'),
(3, 'ngoc nhan', 'nnhann99@gmail.com', 'hcm', '0337876016', 'nha', '1[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`id`, `ten`) VALUES
(1, 'Đầm Xòe'),
(2, 'Đầm Công Sở'),
(3, 'Đầm Suông'),
(4, 'Đầm Bầu'),
(5, 'Đầm Body');

-- --------------------------------------------------------

--
-- Table structure for table `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(1, 'Giới thiệu', '<h3><br />Chúng tôi không ngừng tìm tồi và đưa ra những sản phẩm đầm mới<br /><br /> Với những thiết kế độc đáo dành riêng cho bạn <br /><br /> Tôn vinh vẻ đẹp của chị em phụ nữ  <br /><br /> Gia đình tôi có 3 đời bán quần áo đầm vấy <br /><br /> Sản phẩm của chúng tôi được may gia công tỉ mĩ <br />\r\n<h6/>', ''),
(2, 'Sản phẩm', '', 'san_pham'),
(3, 'Hướng dẫn  ', '\r\n<h3>Hướng dẫn chọn size đầm theo chiều cao cân nặng <br><br>\r\nSize XS: Nặng 38 – 39 kg / Chiều cao từ 1m50 – 1m65.<br><br>\r\nSize S: Nặng 40 – 42 kg / Chiều cao từ 1m50 – 1m65.<br><br>\r\nSize M: Nặng 43 – 49 kg / Chiều cao từ 1m50 – 1m65.<br><br>\r\nSize L: Nặng 50 – 57 kg / Chiều cao từ 1m50 – 1m65.<br><br>\r\nSize XL: Nặng 58 – 60 kg / Chiều cao từ 1m50 – 1m65.<br><br>\r\n<h6/>', '');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `thuoc_loai` int(255) NOT NULL,
  `trang_chu` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `noi_dung`, `hinh_anh`, `gia`, `thuoc_loai`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(1, 'Đầm maxi trắng có yếm', '<p>Đầm maxi trắng có yếm</p>', '1.jpg', 55000, 1, '', '0'),
(2, 'Đầm chân vấy xòe', '<p>Đầm chân vấy xòe</p>', '3.jpg', 82000, 1, 'co', '7'),
(3, 'Đầm dự tiệc ', 'Đầm dự tiệc màu trắng', '1_2.jpg', 86000, 1, '', '0'),
(4, 'Đầm dự tiệc ', 'Vấy đầm dự tiệc màu trắng', '1_3.jpg', 97000, 1, 'co', '3'),
(5, 'Đầm trắng suông ', 'Đầm trắng suông Hàn Quốc đẹp', '1_4.jpg', 42000, 3, '', '0'),
(6, 'đầm dự tiệc chữ V', '<p>Vấy đầm dự tiệc chữ V</p>', '1_5.jpg', 100000, 1, 'co', '0'),
(7, 'Đầm maxi dự tiệc ', 'Đầm maxi dự tiệc màu trắng', '1_6.jpg', 120000, 1, 'co', '2'),
(8, 'Đầm voan dực tiệc', 'Đầm voan dực tiệc màu trắng', '1_7.jpg', 80000, 1, '', '0'),
(9, 'Kiểu vấy đầm xòe', 'Kiểu vấy đầm xòe xếp ly', '1_8.jpg', 160000, 1, '', '0'),
(10, 'Vấy đầm suông trắng', 'Vấy đầm suông trắng', '1_9.jpg', 160000, 3, 'co', '7'),
(11, 'Kiểu đầm xòe', '<p>Kiểu vấy đầm xòe chữ A</p>', '1_10.jpg', 135000, 1, 'co', '0'),
(12, 'Kiểu đầm xòe thêu hoa', '<p>Kiểu vấy đầm xòe thêu hoa</p>', '1_11.jpg', 55000, 1, 'co', '13'),
(13, 'Đầm suông form rộngg', '<p>Đầm suông form rộng</p>', '1_12.jpg', 72000, 3, '', '0'),
(14, 'Đầm dự tiệc body trang', '<p>Đầm dự tiệc body</p>', '1_13.jpg', 78000, 5, 'co', '11'),
(15, 'Kiểu vấy đầm xòe', '<p>kiểu vấy đầm xòe </p>', '1_14.jpg', 123000, 1, 'co', '0'),
(16, 'đầm cong so den', 'Kiểu vấy đầm cong so', '1_15.jpg', 125000, 1, 'co', '5'),
(17, 'Đầm dự tiệc trắngg', 'Đầm dự tiệc trắng', '1_16.jpg', 99000, 1, '', '0'),
(18, 'kiểu vấy đầm xòe', '<p>kiểu vấy đầm xòe</p>', '1_17.jpg', 145000, 3, 'co', '1'),
(19, 'Đầm xòe công sở', 'Đầm xòe công sở', '1_18.jpg', 145000, 2, '', '0'),
(20, 'Đầm suông đen Hàn Quốc', 'Đầm suông đen Hàn Quốc', '1_19.jpg', 170000, 3, '', '0'),
(21, 'Đầm dự tiệc chân vấy đuôi cá', 'Đầm dự tiệc chân vấy đuôi cá', '1_20.jpg', 85000, 1, '', '0'),
(22, 'Đầm suông sọc trắng đen', '<p>Đầm suông sọc trắng đen</p>', '3_2.jpg', 30000, 3, 'co', '8'),
(23, 'Đầm sòe liền thân', 'Đầm sòe liền thân', '3_3.jpg', 40000, 1, '', '6'),
(24, 'Đầm liền thân ngắn', 'Đầm liền thân ngắn', '3_4.jpg', 50000, 2, '', '0'),
(25, 'Vấy đầm liền thân ', 'Vấy đầm liền thân ', '3_5.jpg', 60000, 1, '', '9'),
(26, 'Đầm body đen', '<p>Đầm dự tiệc body </p>', '3_6.jpg', 70000, 5, 'co', '12'),
(27, 'Đầm công sở lệch vai', 'Đầm dự tiệc lệch vai', '3_7.jpg', 80000, 2, '', '0'),
(28, 'Đầm công sở body', '<p>Đầm công sở body</p>', '3_8.jpg', 90000, 5, '', '8'),
(29, 'Đầm bầu công sở', 'Đầm bầu công sở', '3_9.jpg', 100000, 4, '', '0'),
(30, 'Đầm đen công sở', 'Đầm đen công sở', '3_10.jpg', 110000, 2, '', '7'),
(31, 'Đầm suông ngắn', '<p>Đầm suông ngắn</p>', '3_11.jpg', 120000, 3, 'co', '9'),
(32, 'Vấy đầm bầu', 'Vấy đầm bầu', '3_12.jpg', 50000, 4, '', '12'),
(33, 'Đầm công sở', '<p>Đầm công sở</p>', '3_13.jpg', 60000, 1, '', '1'),
(34, 'Vấy đầm bầu den', 'Vấy đầm bầu', '3_14.jpg', 70000, 4, '', '11'),
(35, 'Đầm suông chữ A', '<p>Đầm suông chữ A sát nách</p>', '3_15.jpg', 80000, 3, '', '0'),
(36, 'Đầm công sở', 'Vấy đầm công sở', '3_16.jpg', 90000, 2, '', '16'),
(37, 'đầm xòe phối lưới', 'Kiểu vấy đầm xòe phối lưới', '3_17.jpg', 170000, 1, '', '15'),
(38, 'Đầm công sở lệch vai', 'Đầm công sở lệch vai', '3_18.jpg', 180000, 2, '', '0'),
(39, 'Đầm xòe 2 dây', '<p>Đầm xòe 2 dây</p>', '3_19.jpg', 190000, 1, '', '0'),
(40, 'Đầm xòe dự tiệc đen', '<p>Đầm xòe dự tiệc đen</p>', '3_20.jpg', 200000, 1, 'co', '2');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.png', '#'),
(2, 'a_2.png', '#'),
(3, 'a_3.png', '#'),
(4, 'a_4.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'bb4e31f2d20f8e7f88e2b8459263657f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
