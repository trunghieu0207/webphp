-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 03:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetics`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'SON MÔI', NULL),
(2, 'SON DƯỠNG', NULL),
(3, 'KẺ MÀY', NULL),
(4, 'PHẤN MẮT', NULL),
(5, 'DƯỠNG DÀI MI', NULL),
(7, 'PHẤN NỀN', NULL),
(8, 'CUSHION', NULL),
(10, 'TẠO KHỐI', NULL),
(11, 'MÁ HỒNG', NULL),
(12, 'NƯỚC HOA', NULL),
(13, 'MASCARA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordeers-detail`
--

CREATE TABLE `ordeers-detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordeers-detail`
--

INSERT INTO `ordeers-detail` (`id`, `id_order`, `id_product`, `amount`, `price`) VALUES
(1, 1, 2, 1, 115000),
(2, 1, 3, 1, 550000),
(3, 1, 28, 1, 420000),
(4, 3, 2, 1, 115000),
(5, 3, 3, 1, 550000),
(6, 3, 28, 1, 420000),
(7, 4, 3, 1, 550000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date_order` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `note` varchar(250) NOT NULL,
  `status` char(20) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date_order`, `total`, `note`, `status`, `id_user`) VALUES
(1, '2020-11-28 00:00:00', 1085000, '', 'inprocess', 1),
(2, '2020-11-28 00:00:00', 1085000, '', 'inprocess', 1),
(3, '2020-11-28 00:00:00', 1085000, 'dâdadadadad', 'inprocess', 1),
(4, '2020-11-28 00:00:00', 550000, '', 'inprocess', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `promotion_price` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `new` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `total`, `price`, `promotion_price`, `image`, `unit`, `new`, `id_type`) VALUES
(1, 'Son Kem Lì Merzy The First Velvet Tint Season 3', 100, 190000, 139000, 'merzy1.png', 'cái', 1, 1),
(2, 'Son Tint Bóng Merzy Aurora Dewy Tint', 100, 180000, 115000, 'merzytint.png', 'cái', 1, 1),
(3, 'Phấn Nước 2 Trong 1 Laneige Layering Cover Cushion SPF34 PA++ Holiday Dream Bubble Collection', 100, 550000, 0, '10.png', 'hộp', 1, 8),
(5, 'Phấn Nước 3CE Glow Skin Cushion Pink SPF 50+,PA++++ ', 100, 440000, 0, '3cecushion.png', 'hộp', 1, 8),
(6, 'Sữa tắm chăm sóc da  toàn diện Lapoche', 100, 255000, 0, 'lapoche.png', 'hộp', 1, 8),
(7, 'Bảng Son Môi Dạng Kem NYX Pro Lip Cream Palette ', 100, 250000, 0, '1.png', 'hộp', 1, 1),
(8, 'Sáp Dưỡng Ẩm Vaseline Lip Therapy Rosy Lips', 100, 75000, 35000, 'vaselinerose.png', 'hộp', 1, 2),
(9, 'Dưỡng Môi Caudalie French Kiss Tinted Lip Balm', 100, 260000, 0, 'sonmoicauda.png', 'hộp', 1, 2),
(10, 'Mặt Nạ Ngủ Môi Care:nel Lip Night Mask Berry', 100, 190000, 0, 'care.png', 'hộp', 1, 2),
(11, 'Set 2 Son Tatcha Blushing Lips Duo', 100, 1450000, 0, 'tatcua.png', 'hộp', 1, 2),
(12, 'Set 3 Hũ Dưỡng Môi Vaseline Lip Therapy', 100, 120000, 0, 'setvase.png', 'hộp', 1, 2),
(13, 'Set Son 3 Cây Secret Key Sweet Glam Tint Glow Mini Kit', 100, 250000, 0, 'sweet.png', 'hộp', 1, 2),
(14, 'Sữa Tắm Hương Nước Hoa Love Beauty And Planet Body Wash With Murumuru Butter & Rose', 100, 165000, 145000, 'lovebeauty.png', 'hộp', 1, 12),
(15, 'Nước Hoa Berdoues 1902 Amande & Tonka Eau De Toilette', 100, 1055000, 0, '1902vang.png', 'hộp', 1, 12),
(16, 'Nước Hoa Berdoues 1902 Figuier & Sichuan Eau De Toilette', 100, 1055000, 0, '1902do.png', 'hộp', 1, 12),
(17, 'Nước Hoa Berdoues 1902 Lierre & Bois Eau De Toilette', 100, 1055000, 0, '1902xanh.png', 'hộp', 1, 12),
(18, 'Nước Hoa Berdoues 1902 Musc & Néroli Eau De Toilette', 100, 1055000, 0, '1902cam.png', 'hộp', 1, 12),
(19, 'Nước Hoa Berdoues 1902 Trèfle & Vétiver Eau De Toilette', 100, 1055000, 790000, '1902xanhla.png', 'hộp', 1, 12),
(20, 'Nước Hoa Burberry My Burberry Black Parfum', 100, 2900000, 0, 'burberry.png', 'hộp', 0, 12),
(21, 'Bút Kẻ Mắt Lâu Trôi L’Oreal Paris Flash Cat Eye By Superliner', 100, 210000, 160000, 'lorealkemay.png', 'cây', 1, 3),
(22, 'Bột Kẻ Chân Mày Missha Twin Brow Kit ', 100, 145000, 0, 'botkemay.png', 'hộp', 1, 3),
(23, 'Bột Tán Chân Mày 3CE Eyebrow Kit', 100, 280000, 0, 'botkemay3ce.png', 'hộp', 0, 3),
(24, 'Bột Tán Chân Mày Aritaum Idol Brow Powder Cake', 100, 180000, 0, 'botkemaypo.png', 'hộp', 1, 3),
(25, 'Chì Kẻ Chân Mày Karadium Auto Eyebrow Pencil', 100, 45000, 0, 'chikemay.png', 'hộp', 0, 3),
(26, 'Bảng Phấn Bắt Sáng Anastasia Beverly Hills Glow Kit – Ultimate Glow ', 100, 850000, 0, 'ug.png', 'hộp', 1, 4),
(27, 'Bảng Màu Mắt Colourpop Semi Precious Shadow Palette (8 x 2g)', 100, 580000, 0, 'semi.png', 'hộp', 1, 4),
(28, 'Bảng Phấn Mắt Beauty Creations Bella 35 Color Pro Palette', 100, 420000, 0, 'bella.png', 'hộp', 1, 4),
(29, 'Bảng Phấn Mắt + Phấn Má Peripera Ink Fitting Color Palette', 100, 150000, 0, 'palat.png', 'hộp', 1, 4),
(30, 'Bảng Phấn Mắt 10 Ô Clio Pro Eye Palette 02 Brown Choux', 100, 420000, 335000, 'pro.png', 'hộp', 0, 4),
(31, 'Bảng Phấn Mắt 12 ô Milani Mattes Eyeshadow Palette', 100, 580000, 0, 'mali.png', 'hộp', 0, 4),
(32, 'Bảng Phấn Mắt 16 Ô Focallure Sunrise Eyeshadow Palette', 100, 250000, 165000, 'foca.png', 'hộp', 0, 4),
(33, 'Bảng Phấn Mắt 9 Ô 3CE Mood Recipe Multi Eye Color Palette', 100, 720000, 0, '3cepm.png', 'hộp', 0, 4),
(34, 'Bảng Phấn Mắt 9 Ô Kylie Jenner Extended Pressed Powder Palette – Bronze', 100, 700000, 0, 'kylie.png', 'hộp', 0, 4),
(35, 'Bảng Phấn Mắt 9 Ô Colourpop Orange You Glad Pressed Powder Palette', 100, 380000, 0, 'grad.png', 'hộp', 0, 4),
(36, 'Set 5 Thỏi Son Lì 3CE Mood Recipe Lip Color Mini Kit 2', 100, 750000, 0, 'set3ce.png', 'hộp', 0, 1),
(37, 'Set Son + Chì Viền Môi Kylie Jenner Velvet Liquid Lipstick Lip Liner ', 100, 600000, 0, 'kylie1.png', 'cây', 0, 1),
(38, 'Set son Kylie The Birthday Collection Twenty Lip Kit', 100, 900000, 0, 'lip.png', 'cây', 0, 1),
(39, 'Son 3CE Lip Color Matte New', 100, 260000, 0, '3ce1.png', 'cây', 0, 1),
(40, 'Son 3CE Matte Lip Color – Màu 118 Holy Rose (3.5g)', 100, 260000, 0, '3ce2.png', 'cây', 0, 1),
(41, 'Son 3CE Mood Recipe Matte Lip Color (3.5g)', 100, 320000, 0, '3ce3.png', 'cây', 0, 1),
(42, 'Son 3CE Stylenanda Matte Lip Color 2018 (3.5g)', 100, 320000, 0, '3c.png', 'cây', 0, 1),
(43, 'Son A’Pieu Wild Matt Lipstick (3.5g)', 100, 155000, 0, 'ma.png', 'cây', 0, 1),
(44, 'Son Beauty Creations Matte Lipstick (3.5g)', 100, 130000, 0, 'cre.png', 'cây', 0, 1),
(45, 'Son Bóng 3CE Stylenanda Plumping Lips', 100, 250000, 139000, '3ce4.png', 'cây', 0, 1),
(46, 'Set Dưỡng Môi Và Dưỡng Tay Caudalie Winter Duo Holiday Set ', 100, 210000, 0, 'ca.png', 'hộp', 0, 2),
(47, 'Bộ Sản Phẩm Dưỡng Môi Fresh Prep & Pout Set', 100, 700000, 600000, 'su.png', 'hộp', 0, 2),
(48, 'Son 16Brand RU 16 Taste-Chu Edition Lipstick', 100, 180000, 0, '16.png', 'cây', 0, 2),
(49, 'Son Dưỡng Có Màu 3CE Heart Pot Li', 100, 190000, 0, '3ce5.png', 'hộp', 0, 2),
(50, 'Son Dưỡng Cle De Peau Magnificateur Levres Lip Glorifier ', 100, 750000, 0, 'cle.png', 'cây', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products_details`
--

CREATE TABLE `products_details` (
  `id` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mô tả` varchar(500) NOT NULL,
  `biến thể` int(11) DEFAULT NULL,
  `image_biến_thể` varchar(250) DEFAULT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_details`
--

INSERT INTO `products_details` (`id`, `id_products`, `name`, `mô tả`, `biến thể`, `image_biến_thể`, `id_type`) VALUES
(2, 1, 'Son Kem Lì Merzy The First Velvet Tint Season 3', 'Son Kem Lì Merzy The First Velvet Tint Season 3 \r\nVelvet Tint đã quay trở lại và tất nhiên là “lợi hại” hơn xưa nhé \r\n\r\nVẫn là chất Velvet Tint từng khiến bao trái tim mê mẩn, được nâng cấp trong lần comeback này\r\n\r\n💋 𝗬𝗼𝘂𝘁𝗵𝗳𝘂𝗹 𝗖𝗼𝗹𝗼𝗿: 6 màu son độc đáo được Merzy ấp ủ từ rất lâu, phù hợp với mọi tone da và được hạn chế tối đa base hồng\r\n💋 𝗟𝗶𝗴𝗵𝘁 𝗩𝗲𝗹𝘃𝗲𝘁 𝗧𝗲𝘅𝘁𝘂𝗿𝗲: kết cấu nhẹ như bông nhưng vẫn cực kì bám môi, lên chuẩn màu ngay từ lần chạm đầu tiên\r\n💋 𝗣𝗲𝗿𝗳𝗲𝗰𝘁 𝗟𝗼𝗻𝗴 𝗟𝗮𝘀𝘁𝗶𝗻𝗴: Chất son không hề xốp như ', 1, 'merzyv14.png merzyv15,png merzyv16.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `full-name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full-name`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'quythanh');

-- --------------------------------------------------------

--
-- Table structure for table `users-detail`
--

CREATE TABLE `users-detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `phone` char(15) DEFAULT NULL,
  `date-of-birth` char(15) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `permission` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordeers-detail`
--
ALTER TABLE `ordeers-detail`
  ADD PRIMARY KEY (`id`,`id_product`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `ordeers-detail_ibfk_2` (`id_product`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `products_details`
--
ALTER TABLE `products_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_products` (`id_products`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`);

--
-- Indexes for table `users-detail`
--
ALTER TABLE `users-detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ordeers-detail`
--
ALTER TABLE `ordeers-detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `products_details`
--
ALTER TABLE `products_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users-detail`
--
ALTER TABLE `users-detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordeers-detail`
--
ALTER TABLE `ordeers-detail`
  ADD CONSTRAINT `ordeers-detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `ordeers-detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `categories` (`id`);

--
-- Constraints for table `products_details`
--
ALTER TABLE `products_details`
  ADD CONSTRAINT `products_details_ibfk_1` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`);

--
-- Constraints for table `users-detail`
--
ALTER TABLE `users-detail`
  ADD CONSTRAINT `users-detail_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
