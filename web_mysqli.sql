-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2021 lúc 10:33 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(9, 'covid', '<p>psđá</p>\r\n', '<p>sadsad</p>\r\n', 6, 1, '1640402222_winged-dragon-of-ra-15692947627111722823033.jpg'),
(10, 'covid', '<p>dsadá</p>\r\n', '<p>dsađasadá</p>\r\n', 6, 1, '1640421574_14001_obutto_ozone_14.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `tenkhachhang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `binhluan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `binhluan_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`id_binhluan`, `id_sanpham`, `tenkhachhang`, `binhluan`, `binhluan_date`) VALUES
(23, 41, 'hoangphuong6', 'đâsd', '2021-12-22 20:03:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`) VALUES
(131, 21, '2027', 0, '2021-12-18 08:55:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(244, '2027', 26, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(9, 'hoàng phươnh', 'phuongde123456@gmail.com', 'dsd', '202cb962ac59075b964b07152d234b70', '0914964766');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(6, 'mainboad', 1),
(7, 'laptop', 2),
(8, 'CPU', 3),
(9, 'điện thoại', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(6, 'tin nông sản', 1),
(7, 'cá', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id`, `id_khachhang`, `name`, `phone`, `gmail`, `diachi`, `note`) VALUES
(49, 21, 'Nguyễn hoàng phương', '0335237372', 'phuongde123456@gmail.com', 'sda', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `ten`, `email`, `sdt`, `noidung`) VALUES
(16, 'vũ ngọc ly', 'phuongde123456@gmail.com', 'dsad', 'sadá'),
(17, 'phương', 'phuongde123456@gmail.com', '0582171677', '123'),
(18, 'phương', 'phuongde123456@gmail.com', '0333669999', 'qưewqe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `giagoc` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `giagoc`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(24, 'CPU i9 9900k', 'cpu123', '10000000', '12000000', 40, '1638692495_37193_11900k.jpg', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Sản phẩm</td>\r\n			<td>B&ocirc;̣ vi xử lý CPU</td>\r\n		</tr>\r\n		<tr>\r\n			<td>H&atilde;ng sản xuất</td>\r\n			<td>Intel&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>Core i9-9900K</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Socket</td>\r\n			<td>FCLGA1200</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&ocirc;́c đ&ocirc;̣ cơ bản</td>\r\n			<td>3.50 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cache</td>\r\n			<td>16 MB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&acirc;n CPU</td>\r\n			<td>8</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lu&ocirc;̀ng CPU</td>\r\n			<td>16</td>\r\n		</tr>\r\n		<tr>\r\n			<td>VXL đ&ocirc;̀ họa</td>\r\n			<td>Intel&reg; UHD Graphics 750</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ hỗ trợ</td>\r\n			<td>Tối đa&nbsp;128GB&nbsp;DDR4-3200Mhz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>D&acirc;y chuy&ecirc;̀n c&ocirc;ng ngh&ecirc;̣</td>\r\n			<td>14 nm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đi&ecirc;̣n áp ti&ecirc;u thụ t&ocirc;́i đa</td>\r\n			<td>95 W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nhiệt độ tối đa</td>\r\n			<td>100&deg;C</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '', 1, 8),
(26, 'CPU AMD Ryzen 5 5600X', 'CPUA0052', '7599000', '8499000', 50, '1634139647_29890_r52.png', 'ryzen 5', 'ryzen 5', 1, 8),
(31, 'Laptop Acer Nitro 5', 'NBAC0309', '25990000', '26990000', 40, '1634140130_37406_nbac0283.jpg', 'lap', 'lap', 1, 7),
(32, 'Laptop  ROG Zephyrus G14', 'NBAS0935', '48590000', '49990000', 100, '1634141227_38039_g14_aw_se_product_display.jpg', 'lap', 'lap', 1, 7),
(35, 'Laptop Acer Aspire 3', 'NBAC0267 ', '13490000', '13990000', 60, '1634141369_35172_nbac0267.jpg', 'laptop', 'laptop', 1, 7),
(37, 'Laptop Dell Latitude 3420', 'NBDE0666', '20790000', '21990000', 80, '1638692663_38241_nbde0666.jpg', '<p>laptop 123</p>\r\n', '<p>laptop1</p>\r\n', 1, 7),
(41, 'ASROCK Z590 Taichi', ' MAAR0135', '12299000', '12913950', 10, '1634141921_36261_z590_taichi_l7_.png', 'main', 'main', 1, 6),
(42, 'Mainboard GIGABYTE Z590 AORUS', 'MAGI0272 ', '10999000', '11759000', 10, '1640424508_36261_z590_taichi_l2_.png', '<p>main</p>\r\n', '<p>main</p>\r\n', 0, 6),
(43, 'iPhone 13 Pro Max 128GB', 'iphone5', '33990000', '40000000', 40, '1634910398_iphone-13-pro-max-grey-2.jpg', '', '', 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2021-10-23', 50, '15500000', 25),
(2, '2021-10-22', 55, '25500000', 25),
(3, '2021-10-21', 50, '15600000', 30),
(4, '2021-10-24', 10, '36500000', 30),
(5, '2021-10-25', 2, '5600000', 10),
(6, '2021-10-26', 8, '6500000', 9),
(7, '2021-10-28', 2, '600000', 10),
(8, '2021-10-29', 8, '500000', 9),
(9, '2021-10-31', 8, '500000', 9),
(10, '2021-10-01', 8, '500000', 9),
(11, '2021-08-01', 8, '700000', 9),
(12, '2021-10-03', 8, '700000', 9),
(14, '2021-10-30', 3, '1500000', 1),
(17, '2021-12-17', 1, '10999000', 1),
(18, '2021-12-20', 1, '7599000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_khachhang` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_khachhang`, `username`, `email`, `password`, `level`) VALUES
(18, 'hoangphuong1', 'phuongnguyenhunter@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(19, 'hoangphuong2', 'phuongde123456@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(20, 'hoangphuong3', 'phuongde123456@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(21, 'hoangphuong4', 'phuongde123456@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(22, 'hoangphuong5', 'phuongnguyenhunter@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(23, 'hoangphuong6', 'phuongde123456@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(24, 'hoangphuong7', 'phuongnguyenhunter@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(25, 'hoangphuong8', 'phuongnguyenhunter@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(26, 'hoangphuong9', 'phuongnguyenhunter@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(27, 'hoangphuong10', 'phuongde123456@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(28, 'hoàng long', 'phuongnguyenhunter@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
