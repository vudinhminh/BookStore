-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2016 at 12:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiet` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tenSach` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chitiet`, `id_hd`, `id`, `tenSach`, `DonGia`, `SoLuong`) VALUES
(10, 2, 61, 'đsfsdfsd', 214748, 3),
(11, 2, 59, 'Lời hứa về một cây bút chì', 80000, 7),
(12, 3, 60, 'minh 94', 90000, 56),
(13, 4, 14, 'Sinh', 1900000, 1),
(14, 6, 61, 'đsfsdfsd', 214748, 1),
(15, 8, 60, 'minh 94', 90000, 1),
(16, 9, 61, 'đsfsdfsd', 214748, 4),
(17, 10, 60, 'minh 94', 90000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_hd` int(11) NOT NULL,
  `TenKH` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayDat` datetime NOT NULL,
  `ThanhTien` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_hd`, `TenKH`, `SDT`, `Email`, `DiaChi`, `GhiChu`, `NgayDat`, `ThanhTien`, `TrangThai`) VALUES
(2, 'minh', 1213111994, 'vudinhminh9x@gmail.com', 'cu khê', 'minh', '0000-00-00 00:00:00', 1204244, 1),
(3, 'minh', 1, '1@1', '2', '3', '0000-00-00 00:00:00', 5040000, 1),
(4, 'Minh', 1669945594, 'vudinhminh9x@gmail.com', 'Hà Nội', '', '2016-07-12 00:00:00', 1900000, 1),
(6, 'Minh', 1669945594, 'vudinhminh9x@gmail.com', 'Hà Nội', '', '2016-07-12 00:00:00', 214748, 1),
(9, 'Minh', 1669945594, 'vudinhminh9x@gmail.com', 'Hà Nội', '', '2016-07-12 10:32:56', 858992, 1),
(10, 'Minh', 1669945594, 'vudinhminh9x@gmail.com', 'Hà Nội', '', '2016-07-12 10:33:18', 360000, 1),
(11, 'minh1994', 123, '1@1', '111', '111', '2016-07-12 10:42:03', 0, 2),
(12, 'minh32', 123, '1@1', '321', '123', '2016-07-12 10:43:34', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

CREATE TABLE `loaisach` (
  `id_loai` int(11) NOT NULL,
  `TenLoai` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisach`
--

INSERT INTO `loaisach` (`id_loai`, `TenLoai`) VALUES
(11, 'Sách Văn Học'),
(17, 'Sách kinh tế'),
(20, 'Sách khoa học tự nhiên'),
(37, 'Sách Lịch Sử - địa lý'),
(43, 'Sách công nghệ thông tin'),
(50, 'Sách giáo dục'),
(51, 'Sách kĩ thuật'),
(52, 'Sách pháp luật'),
(53, 'Sách y dược'),
(56, 'Sách kĩ năng hay'),
(57, 'Truyện tranh'),
(58, 'Sách tiếng anh'),
(59, 'Sách truyện văn học thiếu nhi'),
(61, 'Truyện cổ tích'),
(62, 'Truyện kể cho bé'),
(63, 'Truyện tranh thiếu nhi'),
(64, 'Truyện ngắn'),
(65, 'Truyện cười'),
(68, 'Tiểu thuyết tình cảm lãng mạn'),
(69, 'Truyện ngôn tình'),
(71, 'Sách học tiếng hàn'),
(72, 'Sách học tiếng nhật');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `id_nxb` int(11) NOT NULL,
  `TenNXB` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDTNXB` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChiNXB` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`id_nxb`, `TenNXB`, `SDTNXB`, `DiaChiNXB`) VALUES
(1, 'Văn học', '01213111994', 'Cự khê - thanh oai - hà nội'),
(3, 'Giáo dục', '01213111994', 'Hà Nội1'),
(16, 'Giáo dục và đào tạo', '01213111994', 'Hà nội'),
(18, 'Kim Đồng', '01213111994', 'Hà Nội'),
(19, 'Y học', '01213111994', 'Thanh hóa'),
(20, 'Xây dựng', '01213111994', 'Hồ chí minh'),
(23, 'Lao động ', '01213111994', 'Đà nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `id` int(11) NOT NULL,
  `TenSach` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_nxb` int(11) NOT NULL,
  `id_tg` int(11) NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GiaCu` int(11) NOT NULL,
  `GiaMoi` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `SoTrang` int(11) NOT NULL,
  `SoLuotXem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`id`, `TenSach`, `id_nxb`, `id_tg`, `HinhAnh`, `GiaCu`, `GiaMoi`, `id_loai`, `SoLuong`, `SoTrang`, `SoLuotXem`) VALUES
(2, 'Thương Mấy Cũng Là', 1, 2, 'image38.jpg', 110000, 110000, 11, 5021, 350, 7),
(3, 'Ví Dụ Ta Yêu Nhau', 1, 1, 'image38.jpg', 150000, 150001, 11, 20, 4, 2),
(5, 'Hóa', 1, 1, 'image38.jpg', 0, 90000, 11, 20, 893, 2),
(6, 'Lý', 3, 2, 'image38.jpg', 0, 200000, 11, 120, 200, 1),
(7, 'Văn', 1, 1, 'image38.jpg', 300000, 300000, 11, 100, 200, 1),
(8, 'Anh', 1, 1, 'image38.jpg', 400000, 410000, 11, 100, 100, 1),
(14, 'Sinh', 1, 1, 'image38.jpg', 2147483647, 1900000, 11, 123, 12, 1),
(15, 'abc', 3, 13, 'image38.jpg', 112, 112, 11, 211, 121, 1),
(16, 'Sinh', 1, 13, 'image38.jpg', 0, 1910000, 11, 123, 12, 1),
(18, '1', 1, 1, 'image38.jpg', 1, 1, 11, 1, 1, 1),
(19, '1', 1, 1, 'image38.jpg', 1, 12, 11, 12, 12, 1),
(24, 's', 1, 1, 'image38.jpg', 0, 1, 11, 1, 1, 13),
(26, 'a', 1, 1, 'image38.jpg', 1000000, 1000000, 11, 1, 2, 1),
(34, 'aaa', 1, 1, 'image38.jpg', 1, 11111, 11, 1, 1, 1),
(41, '112', 1, 1, 'image38.jpg', 0, 12, 11, 12, 12, 1),
(44, '123', 1, 1, 'image38.jpg', 123, 123, 11, 1234, 123, 1),
(46, 'aâ', 1, 1, 'image18.jpg', 10001, 10000, 20, 1, 1, 1),
(50, '2', 1, 1, 'image41.jpg', 10000, 100000, 11, 2, 2, 1),
(51, 'Giáo dục quốc phòng', 1, 1, 'image19.jpg', 100000, 100000, 17, 121, 320, 1),
(52, 'á', 16, 13, 'image11.jpg', 12000, 1233, 17, 21, 3, 1),
(54, 'Toán', 1, 1, 'image33.jpg', 1000000, 100000, 17, 12, 123, 27),
(55, 'Toán', 16, 13, 'image18.jpg', 200000, 200000, 20, 2, 200, 1),
(56, 'mihn', 3, 2, 'image38.jpg', 100000, 100000, 17, 12, 12, 1),
(57, 'Kỹ năng mềm - Khởi nghiệp', 18, 32, 'image12.jpg', 240000, 220000, 43, 100, 230, 1),
(58, 'Công chúa ngủ trong rừng', 16, 44, 'image11.jpg', 330000, 310000, 61, 12, 50, 2),
(59, 'Lời hứa về một cây bút chì', 23, 39, 'image10.jpg', 120000, 80000, 62, 30, 45, 5),
(60, 'minh 94', 3, 1, 'image18.jpg', 100000, 90000, 11, 13, 6, 33),
(61, 'đsfsdfsd', 3, 35, 'image11.jpg', 263543, 214748, 11, 45, 5544, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `id_tg` int(11) NOT NULL,
  `TenTG` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDTTG` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChiTG` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`id_tg`, `TenTG`, `SDTTG`, `DiaChiTG`) VALUES
(1, 'Kim Dung', '01213111994', 'ha noi'),
(2, 'Tố Hữu', '01669945594', 'Hà Nội'),
(13, 'Vũ trọng Phụng', '012466', 'Vinh phuc'),
(32, 'Nam cao', '01694667194', 'Thanh hóa'),
(35, 'Tô hòa', '01653898064', 'Nam định'),
(36, 'Trần quốc tiến', '0979456358', 'Hà Nam'),
(38, 'Bảo Ninh', '01213111994', 'Hà Nội'),
(39, 'Bùi Ngọc Tấn', '01213111994', 'Thái Bình'),
(43, 'Cao Thái Sơn', '01213111994', 'Hưng yên'),
(44, 'Dạ ngân', '01213111994', 'Quảng ninh'),
(45, 'Minh', '01213111994', 'hà nội');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(11) NOT NULL,
  `TenDangNhap` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TenHienThi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `SDT`, `Email`, `Quyen`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Hà Nội', '01213111994', 'vudinhminh9x@gmail.com', 1),
(2, 'minh', 'e10adc3949ba59abbe56e057f20f883e', 'Minh', 'Hà Nội', '01669945594', 'vudinhminh9x@gmail.com', 2),
(5, '', 'e10adc3949ba59abbe56e057f20f883e', 'vũ đình minh', 'cự khê', '01213111994', 'vudinhminh9x@gmail.com', 1),
(10, '12', 'c20ad4d76fe97759aa27a0c99bff6710', '1', '1', '1', '1@1', 1),
(11, 'minhưq', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '1', 'vudinhminh9x@gmail.com', 1),
(12, 'minh123', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '122', '1@1', 2),
(13, 'minh1212', 'e10adc3949ba59abbe56e057f20f883e', '11', '11', '112', '1@1', 2),
(14, 'minh9', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '1', '1@1', 1),
(15, 'minh934', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '123', '1@1', 2),
(19, '3', '', '3', '3', '3333', '4', 2),
(20, '', '', '', 'hà tây', '01213111994', 'vudinhminh9x@gmail.com', 0),
(21, '', '', '', '111', '111', '1@1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiet`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_hd`);

--
-- Indexes for table `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`id_loai`);

--
-- Indexes for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`id_nxb`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id_tg`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `loaisach`
--
ALTER TABLE `loaisach`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `id_nxb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `id_tg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
