-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2017 lúc 03:49 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopquanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) UNSIGNED NOT NULL,
  `user_admin` varchar(30) NOT NULL,
  `pasword_admin` varchar(30) NOT NULL,
  `email_admin` varchar(50) DEFAULT NULL,
  `phone_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `user_admin`, `pasword_admin`, `email_admin`, `phone_admin`) VALUES
(1, 'admin', 'admin', 'admin@shop.com', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contactus`
--

CREATE TABLE `contactus` (
  `id_contact` int(6) UNSIGNED NOT NULL,
  `name_contact` varchar(30) NOT NULL,
  `title_contact` varchar(300) NOT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  `content_contact` text,
  `status_contact` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contactus`
--

INSERT INTO `contactus` (`id_contact`, `name_contact`, `title_contact`, `email_contact`, `content_contact`, `status_contact`) VALUES
(1, '1', '1', '1', '1', 0),
(2, 't', 't', 't', 't', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_shop`
--

CREATE TABLE `customer_shop` (
  `id_cus` int(6) UNSIGNED NOT NULL,
  `username_cus` varchar(50) DEFAULT NULL,
  `password_cus` varchar(50) DEFAULT NULL,
  `adress_cus` varchar(100) DEFAULT NULL,
  `email_cus` varchar(50) DEFAULT NULL,
  `phone_cus` varchar(50) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `status_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer_shop`
--

INSERT INTO `customer_shop` (`id_cus`, `username_cus`, `password_cus`, `adress_cus`, `email_cus`, `phone_cus`, `name`, `status_user`) VALUES
(1, 'tuanluu', '12345', 'Hà Nội , Việt Nam', 'lqtuan@mail.com', '1234', NULL, NULL),
(2, 'tuancucai', '2', 'tuan@mail.com', 'tuan@gmail.com', '09123', 'tuan', NULL),
(3, 'tuancuai123', '1', '1', '1', '1', '1', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gr_product`
--

CREATE TABLE `gr_product` (
  `id_gr_product` int(6) UNSIGNED NOT NULL,
  `name_gr` varchar(30) DEFAULT NULL,
  `date_gr` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gr_product`
--

INSERT INTO `gr_product` (`id_gr_product`, `name_gr`, `date_gr`) VALUES
(1, 'Giầy Nam', '2017-04-18 00:00:00'),
(2, 'Giầy Nữ', '2017-04-18 00:00:00'),
(3, 'Khác', '2017-04-18 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_cus`
--

CREATE TABLE `order_cus` (
  `id_order` int(6) UNSIGNED NOT NULL,
  `id_cus` int(6) DEFAULT NULL,
  `total_money_order` int(100) DEFAULT NULL,
  `date_order` datetime DEFAULT NULL,
  `status_Oder` int(1) DEFAULT NULL,
  `name_cus` varchar(50) DEFAULT NULL,
  `phone_cus` varchar(50) DEFAULT NULL,
  `address_cus` varchar(200) DEFAULT NULL,
  `email_cus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_cus`
--

INSERT INTO `order_cus` (`id_order`, `id_cus`, `total_money_order`, `date_order`, `status_Oder`, `name_cus`, `phone_cus`, `address_cus`, `email_cus`) VALUES
(5, 2, 1500000, '2017-06-01 09:08:06', 0, 'tuan', '09123', 'tuan@mail.com', 'tuan@gmail.com'),
(6, 0, 324000, '2017-06-02 03:33:06', 0, 'tuan', '0971300776', 'cucai', 'tuan@mail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id_order_detail` int(6) UNSIGNED NOT NULL,
  `id_order` int(6) NOT NULL,
  `quality_order_detail` int(5) DEFAULT NULL,
  `id_product` int(6) NOT NULL,
  `money_product` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id_order_detail`, `id_order`, `quality_order_detail`, `id_product`, `money_product`) VALUES
(18, 5, 3, 5, 300000),
(19, 5, 2, 6, 300000),
(20, 6, 2, 2, 132000),
(21, 6, 3, 7, 20000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(6) UNSIGNED NOT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `price_product` int(20) DEFAULT NULL,
  `description_product` text,
  `img_product` varchar(300) DEFAULT NULL,
  `price_new` int(20) DEFAULT NULL,
  `date_product` datetime DEFAULT NULL,
  `status_product` int(1) DEFAULT NULL,
  `id_gr_product` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price_product`, `description_product`, `img_product`, `price_new`, `date_product`, `status_product`, `id_gr_product`) VALUES
(1, 'Giầy Kenimi', 349000, 'Giầy Nam', 'asset/user/images/1.jpg', NULL, '2017-04-18 00:00:00', 1, 1),
(2, 'Dép nữ', 132000, 'Dép nữ nhập khẩu\r\n', 'asset/user/images/1.jpg', NULL, '2017-04-18 00:00:00', 1, 2),
(4, 'Giầy 2', 300000, 'Giầy Giầy Giầy', 'asset/user/images/1.jpg', 290000, '2017-04-12 00:00:00', 1, 1),
(5, 'Giầy 2', 300000, 'Giầy Giầy Giầy', 'asset/user/images/1.jpg', 290000, '2017-04-12 00:00:00', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `customer_shop`
--
ALTER TABLE `customer_shop`
  ADD PRIMARY KEY (`id_cus`);

--
-- Chỉ mục cho bảng `gr_product`
--
ALTER TABLE `gr_product`
  ADD PRIMARY KEY (`id_gr_product`);

--
-- Chỉ mục cho bảng `order_cus`
--
ALTER TABLE `order_cus`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id_contact` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `customer_shop`
--
ALTER TABLE `customer_shop`
  MODIFY `id_cus` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `gr_product`
--
ALTER TABLE `gr_product`
  MODIFY `id_gr_product` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `order_cus`
--
ALTER TABLE `order_cus`
  MODIFY `id_order` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id_order_detail` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
