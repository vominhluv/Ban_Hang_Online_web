-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 16, 2020 lúc 06:21 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sp`
--

CREATE TABLE `tb_sp` (
  `sp_id` int(11) NOT NULL,
  `sp_hinhanh` varchar(300) DEFAULT NULL,
  `sp_theloai` varchar(300) DEFAULT NULL,
  `sp_tensanpham` varchar(300) DEFAULT NULL,
  `sp_gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_sp`
--

INSERT INTO `tb_sp` (`sp_id`, `sp_hinhanh`, `sp_theloai`, `sp_tensanpham`, `sp_gia`) VALUES
(1, 'https://cf.shopee.vn/file/dd13e980eb76483828104064e1901f6f', 'Áo Thun', 'Áo thêu tim hàn ZXG567', 30000),
(2, 'https://cf.shopee.vn/file/6ee1623b58ba56ba59931e6f7340851c', 'Áo thun', 'ÁO THUN NAM TRẮNG TRƠN SIÊU ĐẸP', 130000),
(3, 'https://cf.shopee.vn/file/e97f223bb37aaf26feb60f8310ab48f3', 'Áo thun', 'Áo polo siêu cấp Dolce Gabbana [ hot trend ]', 543705),
(4, 'https://cf.shopee.vn/file/341d6aa32e1d1348868b21aac614be64', 'Áo thun', 'Áo polo siêu cấp cách điệu Dsquared [ hot trend ]', 543705),
(5, 'https://cf.shopee.vn/file/195ce14e00ef271bdde6e985863e5258', 'Áo thun', 'Áo Thun Phông Nam Ngắn Tay Hai Màu Thời Trang Sành Điệu YODAI AO TOP 03 W', 49000),
(6, 'https://cf.shopee.vn/file/195ce14e00ef271bdde6e985863e5258', 'Áo thun', 'Áo thun nam in hình thời trang Everest AoKNam207', 19000),
(7, 'https://cf.shopee.vn/file/3186fb34817f5b67946041b31edfcb1d', 'Áo thun', 'Áo thun nam đẹp có cổ Riooshop logo nổi cao cấp RXP026', 109000),
(8, 'https://cf.shopee.vn/file/7f090c16abc2ae1ebfa0ee382bf5bde6', 'Áo thun', '[MS 005] ÁO POLO THỜI TRANG NAM', 85000),
(9, 'https://cf.shopee.vn/file/e4a43ed1c9b1843afacb3bfa0688e76e', 'Áo thun', 'Áo phông nam cổ bẻ trơn (4 MÀU ) Ikemen ngắn tay chất liệu cotton co giãn 4 chiều dáng ôm body', 36000),
(10, 'https://cf.shopee.vn/file/613fa99285d4d946e97b48de3fef3d86', 'Áo thun', 'Áo Phông Có Cổ Nam Vải Cotton Co Dãn Cao Cấp', 69000),
(11, 'https://cf.shopee.vn/file/0bc28c68a4addf4e32c95a7dbf73dce6', 'Áo thun', 'Áo Thun Nam có cổ đẹp chấm bi cá sấu Áo phông nam cổ bẻ chất liệu cotton co giãn form đẹp', 98000),
(12, 'https://cf.shopee.vn/file/7595b2d567dfe905cec7d8e09577b623', 'Áo thun', 'ÁO THUN NAM FORM ĐẸP (55-95kg) nhiều màu co giãn 4 chiều AN338', 59000),
(13, 'https://cf.shopee.vn/file/e0cb73ba911300757380cb097af145da', 'Áo thun', 'Áo thun thể thao nam BRELI có cổ cao cấp chất liệu co giãn bốn chiều thoáng mát BAS9019', 70000),
(14, 'https://cf.shopee.vn/file/53314c99f0ef100ab6cd9fd36f3cfb6f', 'Áo thun', 'o thun thể thao nam xuất Hàn', 99000),
(15, 'https://cf.shopee.vn/file/1a8a0065137e100f987a1c2f051f7e96', 'Áo thun', 'Áo thun nam vnxk', 85000),
(16, 'https://cf.shopee.vn/file/92b9c03f5eb80f60970f938dc0f99e90', 'Áo thun', 'Áo thun nam T.ommy xuất khẩu 7 mẫu', 89000),
(17, 'https://cf.shopee.vn/file/0b283b1e65103f6ce3eca7d4f9bfb482', 'Áo thun', 'Áo thể thao nam có cổ xuất Hàn dư xịn', 125000),
(18, 'https://cf.shopee.vn/file/8b36ba7e6fa1a18a03450c23dbe83a59', 'Áo thun', 'áo thun nam dài tay nam áo thể thao nam', 50000),
(19, 'https://cf.shopee.vn/file/db5533a98555c4ed13c6a8789176151b', 'Áo sơ mi', 'Áo sơ mi kẻ nữ cộc tay 2 màu đỏ và rêu LOZA PS1001', 159000),
(20, 'https://cf.shopee.vn/file/8fbd2df08657eafc4ea09116dab7a431', 'Áo sơ mi', 'Áo sơ mi kẻ nữ tay cộc cổ đức LOZA PS1015XA', 159000),
(21, 'https://cf.shopee.vn/file/af8bc301ba1bbf6cca6907b1d8444aa0', 'Áo sơ mi', 'Áo sơ mi nữ công sở Xuu Design💖 Freeship-Ảnh Thật💖 Sơ mi kẻ cổ sen [ BS11)', 149000),
(22, 'https://cf.shopee.vn/file/0114344fd30780688ed03a8ccf84e70e', 'Áo sơ mi', 'Áo sơ mi nữ họa tiết-sơ mi công sở phong cách Hàn Quốc kiểu tay ngắn hè 2020 (2 màu)- LOZA PS1002', 159000),
(23, 'https://cf.shopee.vn/file/1328a66ed87db643cf3f0e70fdce3d7b', 'Áo hai dây & Áo ba lỗ', 'ÁO 2 DÂY SỢI BÚN', 19999),
(24, 'https://cf.shopee.vn/file/3a3cf2486a97eee9c70e1577a06a43b9', 'Đồ lót, Đồ ngủ & Đồ mặc nhà', 'Áo bra nữ áobra len gân tăm đẹp 2 dây hở lưng khoét lưng chữ U giá rẻ giá rẻ siêu hot AL01', 21000),
(25, 'https://cf.shopee.vn/file/fe3ceb7d6e91fc559bff42179deb2375', 'Đồ lót, Đồ ngủ & Đồ mặc nhà', 'ÁO BRA GÂN TẬP GYM, YOGA DÁNG CROPTOP KHÔNG GỌNG', 14900),
(26, 'https://cf.shopee.vn/file/29deaa8b46a2713ad3ac64b0064cae85', 'Đồ lót, Đồ ngủ & Đồ mặc nhà', 'Áo bra gym/yoga bra thể thao dáng crotop hàng xịn giá rẻ', 27000),
(27, 'https://cf.shopee.vn/file/fbcb658d520b309a9599d65579c090fe', 'Áo', 'Áo CÚP TẦNG ĐŨI MỀM MÁT(kèm video,ảnh thật)', 85000),
(28, 'https://cf.shopee.vn/file/3d068324aef7321605253437fe53d90c', 'Áo Kiểu', 'Áo Trễ Vai Bánh Bèo Nữ 🌸 Áo thun phông cộc tay bồng tiểu thư màu trắng be tím hồng đỏ SIÊU HOT 🌸', 85000),
(29, 'https://cf.shopee.vn/file/bb5f7081f437bea8ab875718de25573f', 'Áo Kiểu', 'Áo ren đính ngọc bánh bèo tiểu thư cao cấp (FEEDBACK + VID TỰ QUAY-HÌNH THẬT 3 ẢNH CUỐI)', 270000),
(30, 'https://cf.shopee.vn/file/1459d3877388baba2260aeba4104916c', 'Set trang phục', 'Set sơ mi ren thêu hoa hồng chân váy ren cùng kiểu bánh bèo (FEEDBACK + HÌNH THẬT 3 ẢNH CUỐI)', 280000),
(31, 'https://cf.shopee.vn/file/0003aecf71ce87b216ab8489ff6fe4ed', 'ÁO kiểu', 'Sơ mi thêu hoa cổ bèo thắt nơ tay xòe bồng (FEEDBACK + VID TỰ QUAY - HÌNH THẬT4 ẢNH CUỐI)', 280000),
(32, 'https://cf.shopee.vn/file/85f26865e70274553bf24874a643815e', 'Set trang phục', 'Set sơ mi bèo tầng nơ cổ phối yếm váy xòe đính cúc tiểu thư (FEEDBACK + HÌNH THẬT 2 ẢNH CUỐI_', 570000),
(33, 'https://cf.shopee.vn/file/9db2099b6531c393042a2f5a3a65b769', 'Set trang phục', 'Set sơ mi tay voan bồng phối chân váy xòe (FEEDBACK+HÌNH THẬT 3 ẢNH CUỐI)', 490000),
(34, 'https://cf.shopee.vn/file/0a1944db060e30ae8007a36a86adbbb2', 'Set trang phục', 'Set sơ mi tay bồng nơ cổ + quần cạp cao bo eo đính cúc (FEEDBACK + HÌNH THẬT 3 ẢNH CUỐI)', 260000),
(35, 'https://cf.shopee.vn/file/de0d25a15581968947827b8ceaa64496', 'Set trang phục', 'Set sơ mi cổ kiểu phối chân váy lụa thanh lịch (FEEDBACK+HÌNH THẬT 3 ẢNH CUỐI)', 250000),
(36, 'https://cf.shopee.vn/file/55368ff30525a88b3a58078d3feaae3f', 'Áo Croptop', '[Mã WA157 giảm 15K đơn bất kỳ] Áo Croptop Dệt Kim Tay Ngắn Cổ Chữ V Màu Trơn Phong Cách Hàn Quốc', 74000),
(37, 'https://cf.shopee.vn/file/8b42593c195277d6eba71e36f57e3c25', 'Áo Croptop', 'Áo Croptop YAN CỔ TIM TAY DÀI Nữ', 69000),
(38, 'https://cf.shopee.vn/file/e398e01110e9ebf006e76f9e54dd07c3', 'Áo Croptop', 'Áo Thun Croptop GROUNDBREAKING 1974 (Set 2 áo CROPTOP & BRA)', 99000),
(39, 'https://cf.shopee.vn/file/55137e9578121d431c0614d3290eb5cf', 'Áo Croptop', 'ÁO THUN NỮ💕SET ÁO CROPTOP 1974 HÀN QUỐC', 120000),
(40, 'https://cf.shopee.vn/file/8f315e4ee46a2e9384fbf4adfbb7f166', 'Áo khoác & Áo vest', 'ÁO KHOÁC DÙ CAO CẤP', 134000),
(41, 'https://cf.shopee.vn/file/1a2918f0a79c9975d062171dffaf40cf', 'Áo khoác & Áo vest', 'Áo Khoác Dù Nam 2 Lớp Cao Cấp, Chống nắng chống mưa', 99000),
(42, 'https://cf.shopee.vn/file/82dc1d88fa7832469002b2d0719e91e3', 'Áo khoác & Áo vest', 'Áo Khoác HOODIE 3D Sói Xanh Lam Cao Cấp Nam Nữ Streetstyle Cực Chất', 390000),
(43, 'https://cf.shopee.vn/file/b9795a977aba46405de86efdf7738408', 'Áo khoác & Áo vest', 'Áo Hoodie in 3D Cao Cấp Sư Tử Đen', 400000),
(44, 'https://cf.shopee.vn/file/070850fafe59cc34049308f5e45733e8', 'Áo khoác & Áo vest', 'Áo Hoodie in 3D Cao Cấp The Wings', 400000),
(45, 'https://cf.shopee.vn/file/44e739ca08ba63d06793d9f71ab8675e', 'Áo cổ trụ', 'HOT Áo giữ nhiệt nam lót nỉ cổ 3 phân hàng loại 1', 55000),
(46, 'https://cf.shopee.vn/file/96b5c3cbc25459a9cdef6ce2a30fdcd5', 'Áo cổ trụ', 'Áo giữ nhiệt nam lót nỉ, cổ 3p. Nhiều màu', 55000),
(47, 'https://cf.shopee.vn/file/9e67029706b375876f418825f73e4ffa', 'Áo cổ trụ', 'Áo thun giữ nhiệt dài tay body Ariza', 35000),
(48, 'https://cf.shopee.vn/file/6a113d8ee5b57de3d795db6ac528522d', 'Áo sơ mi', '[kapeeshop]Combo Áo sơ mi + Quần Âu Gucci', 595000),
(49, 'https://cf.shopee.vn/file/7ce6140a5d0c400332e7f64255e206cf', 'Áo sơ mi', 'ÁO SƠ MI NAM TAY DÀI CỔ BẺ CÔNG SỞ', 304000),
(50, 'https://cf.shopee.vn/file/1ab7b9958072499e93a63ea8250f639a', 'Áo sơ mi', 'Áo sơ mi nam tay dài công sở cô bẻ vài chống nhăn Sơ mi nam cổ bẻ trắng đen xanh đỏ', 74000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_sp`
--
ALTER TABLE `tb_sp`
  ADD PRIMARY KEY (`sp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
