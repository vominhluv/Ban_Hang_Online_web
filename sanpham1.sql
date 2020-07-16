-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 04:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlao`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham1`
--

CREATE TABLE `sanpham1` (
  `id` int(11) NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double DEFAULT NULL,
  `price2` double DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham1`
--

INSERT INTO `sanpham1` (`id`, `image`, `name`, `price`, `price2`, `description`) VALUES
(1, 'img/product1.jpg', 'Áo khoác nam Nian Jeep - Màu Kaki', 570000, 700000, 'Áo khoác nam Nian Jeep Màu Kaki phong cách đầy nam tính, chất liệu Polyester cao cấp mềm mịn, không nhăn, giữ ấm tốt'),
(2, 'img/product2', 'Áo khoác Kaki nam trung niên ZERO-ALL - Màu xám', 1115000, 1450000, 'Áo khoác Kaki nam trung niên ZERO-ALL Màu xám chất liệu Cotton cao cấp thiết kế kiểu dáng thời trang, phong cách trang nhã, lịch thiệp'),
(3, 'img/product3', 'Áo khoác phao nam trung niên cổ lông BHG', 850000, 1250000, 'Áo khoác phao nam trung niên cổ lông BHG chất liệu cao cấp, lót bông dày giúp cản gió hiệu quả, giữ ấm tốt, bề mặt bóng nhẵn, mềm mịn, bền đẹp'),
(4, 'img/product4', 'Áo khoác trung niên nam DNG - Màu xanh', 750000, 900000, 'Áo khoác trung niên nam DNG Màu xanh chất liệu cao cấp, thiết kế kiểu dáng cổ đển phong cách trang nhã, lịch thiệp đậm chất quý ông'),
(5, 'img/product5', 'Áo khoác dạ trung niên lông cừu DNG - Xám M', 1250000, 1150000, 'Áo khoác dạ trung niên lông cừu DNG - Xám M'),
(6, 'img/product6', 'Áo khoác nam trung niên cổ bẻ JFS - Xanh M', 599000, 899000, 'Áo khoác nam trung niên cổ bẻ JFS Xanh M thiết kế phong cách cổ điển, đậm chất phái mạnh, chất liệu Polyester cao cấp bền đẹp, mềm mịn không nhăn'),
(7, 'img/product7', 'Áo khoác phao lông vũ nam BAINIOU', 1550000, 2150000, 'Áo khoác phao lông vũ nam BAINIOU siêu dày, nhẹ và ấm, chất vải mềm mịn, không thấm nước, thân thiện với da, phù hợp nhiều độ tuổi từ 25 - 60'),
(8, 'img/product8', 'Áo khoác nam cổ bóng chày Max Coopy', 550000, 750000, 'Áo khoác nam cổ bóng chày Max Coopy hàng xuất khẩu chất vải đẹp, đường may chuyên nghiệp, thiết kế thời trang, màu sắc trẻ trung'),
(9, 'img/product9', 'Áo vest nam Kaki 3 khuy NAUTIC', 1150000, 1500000, 'Áo vest nam Kaki 3 khuy NAUTIC xuất khẩu GERMANY vải cotton cao cấp chất đẹp, dày dặn, không nhăn, giữ ấm tốt, đường may tinh xảo, màu sắc trang nhã, lịch sự'),
(10, 'img/product10', 'Áo khoác nam da cừu cổ bẻ BHG - Nâu M', 1950000, 3500000, 'Áo khoác nam da cừu cổ bẻ BHG Nâu M được làm từ chất liệu da cừu cao cấp, bề mặt sáng bóng, trơn nhẵn, đảm bảo độ bền. Thiết kế phong cách cổ điển sang trọng\r\n\r\n'),
(11, 'img/product11', 'Áo Vest dạ cổ trụ ZuoMin - Màu Tím', 950000, 1250000, 'Áo Vest dạ cổ trụ ZuoMin Màu Tím kiểu dáng thời trang, đơn giản, mang đến cho phái mạnh phong thái lịch lãm sang trọng.'),
(12, 'img/product12', 'Áo khoác nam trung niên cổ bẻ JBP - Lam đậm M', 650000, 950000, 'Áo khoác nam trung niên cổ bẻ JBP Lam đậm M chất liệu cao cấp thiết kế phong cách cổ điển, đậm chất phái mạnh'),
(13, 'img/product13', 'Áo thun nam dài tay kẻ sọc BHG', 350000, 550000, 'Áo thun nam dài tay kẻ sọc BHG chất liệu sợi cotton tự nhiên, mềm mịn, thoáng khí chống nhăn, nổi bật họa tiết kẻ độc đáo, tạo gu thời trang riêng cho phái mạnh'),
(14, 'img/product14', 'Áo T-shirt trung niên cộc tay kẻ ô Acec - Đỏ M', 350000, 550000, 'Áo T-shirt trung niên cộc tay kẻ ô Acec Đỏ M với thiết kế trẻ trung, kiểu dáng khỏe khoắn đem lại vẻ lịch lãm cho phái mạnh. Chất liệu vải sợi bông thiên nhiên, mềm mịn, thoáng khí, thấm hút mồ hôi, chống nhăn, chống co rút sợi vải.'),
(15, 'img/product15', 'Áo polo nam họa tiết ô vuông to / nhỏ', 350000, 520000, 'Áo polo nam họa tiết ô vuông to / nhỏ được làm từ chất liệu vải bông tự nhiên, mềm mại, thấm hút mồ hôi. Cổ áo thuộc kiểu cổ điển, đường may đều, sắc nét'),
(16, 'img/product16', 'Áo polo sọc ngang thanh lịch nhỏ', 410000, 520000, 'Áo Polo nam cổ bẻ cổ điện, kiểu dáng trẻ trung, thanh lịch, dễ kết hợp với quần vải, quần bò ...'),
(17, 'img/product17', 'Áo thun dài tay nam trung tuổi ADG', 499000, 599000, 'Áo thun dài tay nam trung tuổi ADG chất liệu vải mềm mại, thấm hút mồ hôi, không nhăn. Thiết kế trẻ trung, kiểu dáng khỏe khoắn lịch lãm'),
(18, 'img/product18', 'Áo thun nam cotton cổ tròn SHN', 175000, 255000, 'Áo thun nam cotton cổ tròn SHN chất liệu vải sợi bông thiên nhiên, mềm mịn, thoáng khí, thấm hút mồ hôi, thiết kế trẻ trung, kiểu dáng khỏe khoắn.'),
(19, 'img/product19', 'Giày da nam trung niên đục lỗ thoáng khí DARAGON-FLY', 550000, 750000, 'Giày da nam trung niên đục lỗ thoáng khí DARAGON-FLY chất da cao cấp, bền đẹp, thiết kế dạng lỗ thoát mồ hôi tốt, thân thiện với da chân thoải mái khi sử dụng'),
(20, 'img/product20', 'Giày da nam trung niên đục lỗ thoáng khí DARAGON-FLY Màu nâu 37', 550000, 750000, 'Giày da nam trung niên đục lỗ thoáng khí DARAGON-FLY Màu nâu 37 chất da cao cấp, bền đẹp, thiết kế dạng lỗ thoát mồ hôi tốt, thân thiện với da chân thoải mái khi sử dụng'),
(21, 'img/product21', 'Giày da nam trung niên DARAGON-FLY', 550000, 750000, 'Giày da nam trung niên DARAGON-FLY chất da cao cấp, bền đẹp, đế cao su siêu đàn hồi, chịu mài mòn, thiết kế sang trọng lịch sự dễ phối đồ'),
(22, 'img/product22', 'Giày da nam trung niên DARAGON-FLY Nâu 37', 550000, 750000, 'Giày da nam trung niên DARAGON-FLY màu nâu 37 chất da cao cấp, bền đẹp, đế cao su siêu đàn hồi, chịu mài mòn, thiết kế sang trọng lịch sự dễ phối đồ'),
(23, 'img/product23', 'Giày da nam cao cấp Satchi', 2300000, 2800000, 'Giày da nam cao cấp Satchi da bò cao cấp bền đẹp, đế cao su nhẹ siêu êm, chịu mài mòn, thiết kế thời trang, ôm chân, dễ phối đồ'),
(24, 'img/product24', 'Giày thể thao nam Summer (Màu xám)', 550000, 790000, 'Giày thể thao nam Summer thiết kế đặc biệt, chất liệu vải lưới cao cấp, mềm mại, siêu đàn hồi, có các lỗ thoáng khí, tạo cảm giác mát lạnh thoải mái, thích hợp đi chơi, du lịch mùa hè.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham1`
--
ALTER TABLE `sanpham1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham1`
--
ALTER TABLE `sanpham1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
