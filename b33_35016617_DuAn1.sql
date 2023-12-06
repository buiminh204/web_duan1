-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql308.byetcluster.com
-- Thời gian đã tạo: Th12 01, 2023 lúc 09:18 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `b33_35016617_DuAn1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbl` int(10) NOT NULL,
  `noidung` varchar(225) NOT NULL,
  `iduser` int(20) NOT NULL,
  `idproduct` int(20) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL,
  `tennguoidung` varchar(50) DEFAULT NULL,
  `anhnguoidung` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbl`, `noidung`, `iduser`, `idproduct`, `ngaybinhluan`, `tennguoidung`, `anhnguoidung`) VALUES
(1, 'Rất tuyệt vời', 1, 1, '28/11/23', 'thinhhung', 'ava.jpg'),
(2, 'Äáº¹p láº¯m e Æ¡i', 2, 14, '01/12/23', 'admin', '312495131_2137268889808741_4450810782664033756_n.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `tendm` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`) VALUES
(1, 'Ão sÆ¡ mi'),
(2, 'Quáº§n Jean'),
(3, 'Ão KhoÃ¡c'),
(4, 'Äá»“ Bá»™'),
(5, 'Quáº§n Thun'),
(6, 'Ão Thun'),
(7, 'Quáº§n Kaki');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(10) NOT NULL,
  `tensp` varchar(225) NOT NULL,
  `gia` int(10) NOT NULL,
  `luotxem` int(10) NOT NULL,
  `mota` varchar(225) NOT NULL,
  `iddm` int(10) NOT NULL,
  `img` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `gia`, `luotxem`, `mota`, `iddm`, `img`) VALUES
(1, 'Ão sÆ¡ mi nam tay dÃ i form oversize nam ná»¯', 100, 200, 'Ão sÆ¡ mi nam tay dÃ i form oversize nam ná»¯', 1, 'sp9.jpg'),
(2, 'Quáº§n Jean á»‘ng loe dÃ i mÃ u xÃ¡m unisex nam ná»¯', 150, 59, 'Quáº§n Jean á»‘ng loe dÃ i mÃ u xÃ¡m unisex nam ná»¯ , xuáº¥t xá»© nháº­t báº£n', 2, 'quanvocko.jpg'),
(3, 'Quáº§n Jean dÃ¡ng Baggy cho nam vÃ  ná»¯ mÃ u xanh', 150, 78, 'Quáº§n Jean dÃ¡ng Baggy cho nam vÃ  ná»¯ mÃ u xanh, xuáº¥t xá»© tá»« xá»© sá»Ÿ kimchi HÃ n Quá»‘c', 2, 'quanjeanbaggy.jpg'),
(4, 'Quáº§n Jean á»‘ng suÃ´ng dÃ i mÃ u xanh lam unisex nam ná»¯', 189, 120, 'Quáº§n Jean á»‘ng suÃ´ng dÃ i mÃ u xanh lam unisex nam ná»¯, Xuáº¥t xá»© táº¡i Viá»‡t Nam', 2, 'quancityboy.jpg'),
(5, 'Quáº§n kaki á»‘ng suÃ´ng 2 mÃ u Ä‘en kem dÃ nh cho nam', 199, 49, 'Quáº§n kaki á»‘ng suÃ´ng 2 mÃ u Ä‘en kem dÃ nh cho nam, xuáº¥t xá»© á»Ÿ xá»© sá»Ÿ KimChi HÃ n Quá»‘c', 7, 'quankaki.jpg'),
(6, 'Ão Quáº§n Thun Ná»¯ Äen Tráº¯ng Form Oversize Dá»ƒ Máº·c', 99, 18, 'Ão Quáº§n Thun Ná»¯ Äen Tráº¯ng Form Oversize Dá»ƒ Máº·c', 4, 'aopolo.jpg'),
(7, 'Äá»“ bá»™ em bÃ© 2 mÃ u 3 lá»›p cho nam vÃ  ná»¯', 98, 17, 'Äá»“ bá»™ em bÃ© 2 mÃ u 3 lá»›p cho nam vÃ  ná»¯, xuáº¥t xá»© VN', 4, 'aounisex.jpg'),
(8, 'Ão Thun Ná»¯ Äen Tráº¯ng Form Oversize Dá»ƒ Máº·c', 129, 90, 'Ão Thun Ná»¯ Äen Tráº¯ng Form Oversize Dá»ƒ Máº·c, Xuáº¥t xá»© nháº­t báº£n', 6, 'sp4.jpg'),
(9, 'Ão Thun Nam Ná»¯ phong cÃ¡ch HÃ n Äen Tráº¯ng  Oversize', 129, 124, 'Ão Thun Nam Ná»¯ phong cÃ¡ch HÃ n Äen Tráº¯ng  Oversize, xuáº¥t xá»© hÃ n Quá»‘c', 7, 'sp5.jpg'),
(10, 'Ão khoÃ¡c Jean Ä‘en nam tÃ­nh 3 lá»›p lÃ´ng xÃ¹ cho nam', 159, 112, 'Ão khoÃ¡c Jean Ä‘en nam tÃ­nh 3 lá»›p lÃ´ng xÃ¹ cho nam, xuáº¥t xá»© VN', 3, 'aojean.jpg'),
(11, 'Ão khoÃ¡c haihand dÃ i tráº¯ng Ä‘en unisex nam ná»¯', 169, 126, 'Ão khoÃ¡c haihand dÃ i tráº¯ng Ä‘en unisex nam ná»¯, xuáº¥t xá»© HÃ n Quá»‘c\r\n\r\n', 3, 'aokhoac.jpg'),
(12, 'Ão khoÃ¡c dÃ¹ 2 lá»›p mÃ u tráº¯ng Ä‘en dÃ nh chi nam ná»¯', 210, 225, 'Ão khoÃ¡c dÃ¹ 2 lá»›p mÃ u tráº¯ng Ä‘en dÃ nh chi nam ná»¯, xuáº¥t xá»© tá»« xá»© sá»Ÿ KimChi HÃ n Quá»‘c', 3, 'aogio.jpg'),
(13, 'Quáº§n thun á»‘ng suÃ´ng nam ná»¯ Oversize dá»ƒ máº·c', 150, 115, 'Quáº§n thun á»‘ng suÃ´ng nam ná»¯ Oversize dá»ƒ máº·c, xuáº¥t xá»© China', 5, 'sp1.jpg'),
(14, 'Ão KhoÃ¡c Nhung TÄƒm Äen Tráº¯ng CÃ³ Khuy CÃ i', 359, 290, 'Ão KhoÃ¡c Nhung TÄƒm Äen Tráº¯ng CÃ³ Khuy CÃ i, xuáº¥t xá»© tá»« HÃ n Quá»‘c xá»© sá»Ÿ kimchi', 3, 'sp3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtk` int(10) NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addres` varchar(50) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `avatar` varchar(225) NOT NULL,
  `vaitro` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idtk`, `tentk`, `pass`, `email`, `addres`, `sdt`, `avatar`, `vaitro`) VALUES
(1, 'buiminh', 'buiminh2004', 'mbui683@gmail.com', NULL, NULL, 'ava.jpg', 1),
(2, 'admin', 'admin123', 'mbui683@gmail.com', NULL, NULL, '312495131_2137268889808741_4450810782664033756_n.jpg', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbl`),
  ADD KEY `lk_binhluan_taikhoan` (`iduser`),
  ADD KEY `lk_binhluan_sanpham` (`idproduct`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`idproduct`) REFERENCES `sanpham` (`idsp`),
  ADD CONSTRAINT `lk_binhluan_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`idtk`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
