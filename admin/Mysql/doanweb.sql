-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2023 lúc 05:34 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiethoadon` int(11) NOT NULL,
  `id_hoadon` varchar(200) NOT NULL,
  `sanpham_id` varchar(200) NOT NULL,
  `topping_sanpham` varchar(100) NOT NULL,
  `tuychon_sp` varchar(100) NOT NULL,
  `size_sp` varchar(10) NOT NULL,
  `soluong_chitiet` int(11) NOT NULL,
  `total_sp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chitiethoadon`, `id_hoadon`, `sanpham_id`, `topping_sanpham`, `tuychon_sp`, `size_sp`, `soluong_chitiet`, `total_sp`) VALUES
(26, 'DHCFM487869', 'TS4', 'Không', 'Không', 'S', 1, 32000),
(27, 'DHCFM487869', 'TS7', 'Không', 'Không', 'S', 1, 20000),
(28, 'DHCFM877127', 'TS8', 'Không', 'Không', 'S', 1, 20000),
(29, 'DHCFM877127', 'TS6', 'chân châu bánh flan thạch rau câu ', 'Không', 'L', 1, 25000),
(30, 'DHCFM877127', 'TS9', 'bánh flan thạch rau câu ', 'Không', 'S', 4, 30000),
(31, 'DHCFM877127', 'CF1', 'Không', 'Có đá', 'M', 8, 50000),
(32, 'DHCFM398001', 'TS6', 'Không', 'Không', 'S', 1, 25000),
(33, 'DHCFM657406', 'TS7', 'Không', 'Không', 'S', 1, 20000),
(34, 'DHCFM771441', 'TS7', 'Không', 'Không', 'S', 1, 20000),
(35, 'DHCFM582683', 'TS7', 'Không', 'Không', 'S', 1, 20000),
(36, 'DHCFM245210', 'TS3', 'chân châu bánh flan thạch rau câu ', 'Không', 'M', 1, 23000),
(37, 'DHCFM699912', 'TS4', 'Không', 'Không', 'S', 1, 32000),
(38, 'DHCFM699912', 'TS9', 'Không', 'Không', 'S', 1, 30000),
(39, 'DHCFM699912', 'TS7', 'Không', 'Không', 'S', 6, 20000),
(40, 'DHCFM699912', 'CF7', 'Không', 'Có đá', 'S', 1, 32000),
(41, 'DHCFM186108', 'TS3', 'Không', 'Không', 'S', 1, 23000),
(42, 'DHCFM186108', 'CF6', 'Không', 'Có đá', 'S', 1, 25000),
(43, 'DHCFM186108', 'CF8', 'Không', 'Không đá', 'S', 1, 28000),
(44, 'DHCFM186108', 'CF10', 'Không', 'Có đá', 'S', 1, 25000),
(45, 'DHCFM186108', 'CF3', 'Không', 'Có đá', 'S', 1, 22000),
(46, 'DHCFM786734', 'TS3', 'Không', 'Không', 'S', 1, 23000),
(47, 'DHCFM786734', 'CF1', 'Không', 'Có đá', 'S', 1, 50000),
(48, 'DHCFM653196', 'TS6', 'Không', 'Không', 'S', 1, 25000),
(49, 'DHCFM653196', 'TS4', 'Không', 'Không', 'S', 1, 32000),
(50, 'DHCFM529727', 'TS2', 'Không', 'Không', 'S', 1, 24000),
(51, 'DHCFM529727', 'TS1', 'chân châu bánh flan thạch rau câu ', 'Không', 'S', 9, 25000),
(52, 'DHCFM529727', 'TS7', 'bánh flan thạch rau câu ', 'Không', 'S', 7, 20000),
(53, 'DHCFM722695', 'TS4', 'Không', 'Không', 'S', 1, 32000),
(54, 'DHCFM103161', 'CF10', 'Không', 'Có đá', 'S', 1, 25000),
(55, 'DHCFM829257', 'TS9', 'Không', 'Không', 'S', 1, 30000),
(56, 'DHCFM223025', 'CF3', 'Không', 'Có đá', 'S', 1, 22000),
(57, 'DHCFM133161', 'TS3', 'Không', 'Không', 'S', 1, 23000),
(58, 'DHCFM758565', 'TS4', 'Không', 'Không', 'S', 1, 32000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Trà sữa'),
(2, 'coffee');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_hoadon` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `quan` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `number_phone` varchar(200) NOT NULL,
  `price_total` float NOT NULL,
  `thanhtoan` varchar(200) NOT NULL,
  `thedate` datetime NOT NULL DEFAULT current_timestamp(),
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_hoadon`, `id_user`, `hoten`, `email`, `diachi`, `quan`, `city`, `number_phone`, `price_total`, `thanhtoan`, `thedate`, `cart_status`) VALUES
('DHCFM103161', 8, 'Phạm Ngọc Ánh', 'ngocanhvuive@gmail.com', '126/34 Vui Đời', '8', 'Thành Phố Hà Nội', '0863141519', 25000, 'Momo', '2023-05-09 19:51:39', 0),
('DHCFM133161', 2, 'Nguyễn Hoàng Chương', 'nguyenchuong010866az@gmail.com', '8', '8', 'Thành Phố Hồ Chí Minh', '0934010866', 23000, 'Chuyển Khoản', '2023-05-17 17:45:45', 0),
('DHCFM186108', 4, 'Nguyễn Công Danh', 'danhcodonhongmuonyeumotai@gmail.com', '89/3 Mình Tôi', 'Bình Thạnh ', 'Thành Phố Hồ Chí Minh', '0412612859', 123000, 'Momo', '2023-05-09 19:48:03', 0),
('DHCFM223025', 2, 'Nguyễn Hoàng Chương', 'nguyenchuong010866az@gmail.com', '8', '8', 'Thành Phố Hồ Chí Minh', '0934010866', 22000, 'Chuyển Khoản', '2023-05-17 17:45:06', 0),
('DHCFM245210', 2, 'Nguyễn Hoàng Chương', 'nguyenchuong010866az@gmail.com', '8', '8', 'Thành Phố Hồ Chí Minh', '0934010866', 43000, 'Chuyển Khoản', '2023-04-30 18:58:17', 2),
('DHCFM398001', 17, 'Nguyễn Ngọc Huyền', 'huyen@gmail.com', 'Tân Chánh HIệp', '12', 'Thành Phố Hồ Chí Minh', '0126898959', 25000, 'VNPAY', '2023-04-27 15:00:20', 0),
('DHCFM487869', 2, 'Nguyễn Hoàng Chương', 'nguyenchuong010866az@gmail.com', '8', '10', 'Thành Phố Hồ Chí Minh', '0934010866', 52000, 'VISA', '2023-04-27 09:41:05', 1),
('DHCFM529727', 8, 'Phạm Ngọc Ánh', 'ngocanhvuive@gmail.com', '126/34 Vui Đời', 'Bến tre', 'Bến Tre', '0863141519', 594000, 'Momo', '2023-05-09 19:51:16', 0),
('DHCFM582683', 2, 'Nguyễn Hoàng Chương', 'nguyenchuong010866az@gmail.com', '8', '8', 'Thành Phố Hồ Chí Minh', '0934010866', 20000, 'Chuyển Khoản', '2023-04-28 11:18:30', 0),
('DHCFM653196', 6, 'Phùng Phạm Quang Duy', 'quangduymituot@gmail.com', 'Nguyễn Cửu Đàm', 'Tân Phú', 'Thành phố Hồ Chí Minh', '0214126111', 57000, 'tiền mặt', '2023-05-01 19:50:04', 0),
('DHCFM657406', 17, 'Nguyễn Ngọc Huyền', 'huyen@gmail.com', 'Tân Chánh HIệp', '12', 'Thành Phố Hồ Chí Minh', '0126898959', 20000, 'Momo', '2023-09-27 15:02:50', 0),
('DHCFM699912', 51, 'Lý Quốc Thành', 'thanhkudo@gmail.com', 'Cống Quỳnh', '1', 'Thành Phố Hồ Chí Minh', '0125125127', 214000, 'VISA', '2016-03-09 19:38:18', 0),
('DHCFM722695', 8, 'Phạm Ngọc Ánh', 'ngocanhvuive@gmail.com', '126/34 Vui Đời', '8', 'Thành Phố Hồ Chí Minh', '0863141519', 32000, 'Chuyển Khoản', '2023-05-09 19:51:25', 0),
('DHCFM758565', 52, 'Sao Chả Được', 'saochaduoc@gmail.com', '2', '2', 'Hà Nội', '02147483647', 32000, 'VISA', '2023-05-17 18:34:42', 0),
('DHCFM771441', 2, 'Nguyễn Hoàng Chương', 'nguyenchuong010866az@gmail.com', '8', '8', 'Thành Phố Hồ Chí Minh', '0934010866', 20000, 'Chuyển Khoản', '2023-04-28 10:29:36', 2),
('DHCFM786734', 6, 'Phùng Phạm Quang Duy', 'quangduymituot@gmail.com', 'Nguyễn Cửu Đàm', 'Tân Phú', 'Thành phố Hồ Chí Minh', '0214126111', 73000, 'tiền mặt', '2023-05-09 19:49:27', 0),
('DHCFM829257', 6, 'Phùng Phạm Quang Duy', 'quangduymituot@gmail.com', 'Nguyễn Cửu Đàm', 'Tân Phú', 'Thành phố Hồ Chí Minh', '0214126111', 30000, 'Chuyển Khoản', '2019-05-14 21:04:11', 0),
('DHCFM877127', 2, 'Nguyễn Hoàng Chương', 'nguyenchuong010866az@gmail.com', '8', '8', 'Thành Phố Hồ Chí Minh', '0934010866', 670000, 'MOMO', '2023-12-27 14:55:23', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` varchar(200) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensp`, `hinhanh`, `price`, `soluong`, `tinhtrang`, `id_danhmuc`) VALUES
('CF1', 'Cafe Chồn', 'cafe-chồn.png', 50000, 56, 1, 2),
('CF10', 'Cafe sữa bọt', 'ca-phe-sua-bot.jpg', 25000, 38, 1, 2),
('CF2', 'Cafe Latte Macchiatio', 'Cafe Latte Macchiato.png', 32000, 60, 1, 2),
('CF3', 'Cafe Sương Sáo', 'cafe_suongsao.png', 22000, 60, 1, 2),
('CF4', 'Cafe Espresso', 'Cafe-Espresso.png', 25000, 60, 1, 2),
('CF5', 'cafe Americano', 'caffe_Americano.png', 24000, 25, 0, 2),
('CF6', 'Cafe Trứng', 'cafetrung.png', 25000, 36, 1, 2),
('CF7', 'Cafe late', 'caffe_latte.png', 32000, 45, 1, 2),
('CF8', 'Cafe Mocha', 'cafe_Mocha.png', 28000, 46, 1, 2),
('CF9', 'Cafe đá xây', 'ca-phe-da-xay.png', 20000, 88, 1, 2),
('TS1', 'Trà sữa Caramel', 'TrasuaCaramel.png', 25000, 60, 1, 1),
('TS2', 'Mocha', 'hongtra.png', 24000, 56, 1, 1),
('TS3', 'Trà sữa sương sáo', 'TrasuaSuongsao.png', 23000, 96, 1, 1),
('TS4', 'Trà sữa Pudding trứng', 'trasuaPuddingtrung.png', 32000, 46, 1, 1),
('TS5', 'Trà sữa khoai môn', 'trasuakhoaimon.png', 20000, 30, 1, 1),
('TS6', 'Trà sữa Pudding đậu đỏ', 'TrasuaPuddingdaudo.png', 25000, 40, 1, 1),
('TS7', 'Trà sữa thái xanh', 'trasuathaixanh.png', 20000, 50, 1, 1),
('TS8', 'Trà sữa Thái đỏ', 'Trasuathaido.png', 20000, 60, 1, 1),
('TS9', 'Trà sữa Mocha', 'anh-tra-sua-matcha-cuc-dep_062227575.jpg', 30000, 65, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `tk_user` varchar(200) NOT NULL,
  `password_user` varchar(200) NOT NULL,
  `name_user` varchar(100) DEFAULT NULL,
  `adress_user` varchar(200) DEFAULT NULL,
  `quan` varchar(200) NOT NULL,
  `thanhpho` varchar(200) NOT NULL,
  `email_user` varchar(200) DEFAULT NULL,
  `number_user` int(11) DEFAULT NULL,
  `role_user` int(1) NOT NULL,
  `tinhtrang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `tk_user`, `password_user`, `name_user`, `adress_user`, `quan`, `thanhpho`, `email_user`, `number_user`, `role_user`, `tinhtrang`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0, 1, 1),
(2, 'chuong', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Hoàng Chương', '8', '8', 'Thành Phố Hồ Chí Minh', 'nguyenchuong010866az@gmail.com', 934010866, 0, 1),
(4, 'danh', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Công Danh', '89/3 Mình Tôi', 'Bình Thạnh ', 'Thành Phố Hồ Chí Minh', 'danhcodonhongmuonyeumotai@gmail.com', 412612859, 0, 1),
(6, 'duy', 'e10adc3949ba59abbe56e057f20f883e', 'Phùng Phạm Quang Duy', 'Nguyễn Cửu Đàm', 'Tân Phú', 'Thành phố Hồ Chí Minh', 'quangduymituot@gmail.com', 214126111, 0, 1),
(8, 'ngocanh', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Ngọc Ánh', '126/34 Vui Đời', '8', 'Thành Phố Hồ Chí Minh', 'ngocanhvuive@gmail.com', 863141519, 0, 1),
(17, 'huyen', '25f9e794323b453885f5181f1b624d0b', 'Nguyễn Ngọc Huyền', 'Tân Chánh HIệp', '12', 'Thành Phố Hồ Chí Minh', 'huyen@gmail.com', 126898959, 0, 1),
(18, 'phuc', '579d9ec9d0c3d687aaa91289ac2854e4', 'Phúc Non', '9', '9', 'Hà Nội', 'phuc@gmail.com', 934010866, 0, 1),
(41, 'nghiadeptrai', '25f9e794323b453885f5181f1b624d0b', 'Dương Vũ Nghĩa', '5', '5', 'Thành Phố Hồ Chí Minh', 'nghia@gmail.com', 934456789, 0, 1),
(51, 'thanh', 'c56d0e9a7ccec67b4ea131655038d604', 'Lý Quốc Thành', 'Cống Quỳnh', '1', 'Thành Phố Hồ Chí Minh', 'thanhkudo@gmail.com', 125125127, 0, 1),
(52, 'saochaduoc', '14e1b600b1fd579f47433b88e8d85291', 'Sao Chả Được', '2', '2', 'Hà Nội', 'saochaduoc@gmail.com', 2147483647, 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`),
  ADD KEY `sanpham_id` (`sanpham_id`),
  ADD KEY `chitiethoadon_ibfk_1` (`id_hoadon`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `sanpham_ibfk_1` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiethoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_hoadon`) REFERENCES `donhang` (`id_hoadon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
