-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 11, 2025 lúc 10:04 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(9) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(9) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `status`, `slug`) VALUES
(19, 'ASUS', 'Asus là thương hiệu công nghệ toàn cầu nổi tiếng với các sản phẩm máy tính, laptop, linh kiện và thiết bị chơi game. Với sự kết hợp giữa chất lượng, sáng tạo và hiệu suất cao, Asus được người dùng đán', '1743332260424_asus.jpg', 1, 'ASUS'),
(17, 'AMD', 'AMD (Advanced Micro Devices) là một công ty công nghệ nổi tiếng của Mỹ, chuyên thiết kế và sản xuất các vi xử lý, bộ vi mạch, card đồ họa và các sản phẩm bán dẫn khác', '1743321966png-transparent-amd-logo-logos-logos-and-brands-icon.png', 1, 'AMD'),
(18, 'Intel', 'Intel (Integrated Electronics) là một tập đoàn công nghệ hàng đầu của Mỹ, được thành lập vào năm 1968. Công ty chuyên sản xuất vi xử lý, chipset, bộ nhớ và các giải pháp phần cứng khác.', '1743321994purepng_com-intel-logologobrand-logoiconslogos-251519939644r68ft.png', 1, 'INTEL'),
(12, 'Sony', 'Sony là tập đoàn công nghệ và giải trí hàng đầu thế giới, nổi tiếng với các sản phẩm điện tử như TV, máy ảnh, tai nghe và hệ máy chơi game PlayStation. Thành lập năm 1946, Sony kết hợp sáng tạo và chấ', '1735805169SONY.png', 1, 'sony');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(9) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(9) NOT NULL,
  `image` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `status`, `image`, `slug`) VALUES
(18, 'Linh kiện máy tính', 'Linh kiện máy tính', 1, '1743388171linh-kien-may-tinh-gia-re-2.jpg', 'linh-kien-may-tinh'),
(8, 'PC Pro Gaming', 'PC gaming là hình thức chơi game trên máy tính với hiệu năng cao và đồ họa ấn tượng.', 1, '17433881941743322990PC-AMD-GAMING-PRO-RYZEN-5-7500F---RTX-5070-12GB-OC-WHITE-(All-NEW---Bảo-hành-36-', 'pc-pro-gaming'),
(17, 'PC Workstation', 'PC Workstation', 1, '1743322111Ảnh-chụp-màn-hình-2025-03-25-130622.png', 'pc-workstation'),
(16, 'PC Core Ultra', 'PC Core Ultra', 1, '1743322098Ảnh-chụp-màn-hình-2025-03-25-130622.png', 'pc-core-ultra'),
(14, 'PC Gaming AMD', 'PC Gaming AMD', 1, '1743322065Ảnh-chụp-màn-hình-2025-03-25-130622.png', 'pc-gaming-amd'),
(15, 'PC Gaming Intel', 'PC Gaming Intel', 1, '1743322082Ảnh-chụp-màn-hình-2025-03-25-130622.png', 'pc-gaming-intel'),
(19, 'Màn hình', 'Màn hình', 1, '1743322152Ảnh-chụp-màn-hình-2025-03-25-130622.png', 'man-hinh'),
(20, 'PC Mini', 'PC Mini', 1, '1743322166Ảnh-chụp-màn-hình-2025-03-25-130622.png', 'pc-mini'),
(21, 'Máy Console PS5', 'Máy Console PS5', 1, '1743322180Ảnh-chụp-màn-hình-2025-03-25-130622.png', 'may-console-ps5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `location`, `phone`, `status`, `token`) VALUES
(1, 'Ngô Xuân Quý', 'luvngo27@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0889033006', 1, '3234'),
(22, 'Ngô Văn Quý', 'ngoluv8@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0948926993', 1, '6938'),
(23, 'Nguyễn Đức Thảo', 'cornspringluv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '099999999', 0, '1906'),
(24, 'ngo quy', 'ngoq6155@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0889033006', 1, '8953'),
(25, 'Nguyễn Đức Thảo', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0336852003', 0, '1905'),
(26, 'admin', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0336852003', 0, '2684'),
(27, 'Nguyễn Đức Thảo', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0208392984', 0, '5331'),
(28, 'admin', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội 1', '0938493479', 0, '9987'),
(29, 'Nguyễn Xuân Huy', 'huy123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nam', '0882334455', 0, '3586');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `status`, `ship_id`) VALUES
(1, '2470', 2, 1),
(2, '5840', 2, 2),
(3, '9406', 1, 3),
(4, '1157', 1, 4),
(5, '9164', 1, 5),
(6, '254', 1, 6),
(7, '7817', 1, 7),
(20, '8933', 1, 20),
(21, '9966', 1, 21),
(22, '7457', 1, 22),
(23, '5854', 1, 23),
(24, '1155', 2, 24),
(25, '1396', 1, 25),
(26, '8935', 1, 26),
(27, '4216', 1, 27),
(28, '2342', 1, 28),
(30, '233', 1, 30),
(31, '8255', 1, 31),
(32, '5462', 1, 32),
(33, '1642', 1, 33),
(34, '4883', 1, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_code` varchar(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_code`, `product_id`, `quantity`) VALUES
(41, '233', 86, 1),
(42, '8255', 113, 21),
(43, '5462', 90, 1),
(44, '5462', 136, 1),
(45, '5462', 278, 1),
(46, '5462', 178, 1),
(47, '5462', 255, 2),
(48, '5462', 87, 1),
(49, '5462', 258, 1),
(50, '5462', 256, 1),
(51, '5462', 260, 1),
(52, '5462', 262, 1),
(53, '1642', 89, 1),
(54, '4883', 86, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `status`, `category_id`, `brand_id`, `slug`, `quantity`, `price`) VALUES
(86, 'PC AMD 4K GAMING RYZEN 7 9800X3D - RTX 5090 32GB (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743322358PC-AMD-4K-GAMING-RYZEN-7-9800X3D---RTX-5090-32GB-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 4, 139999000),
(87, 'PC AMD GAMING PRO RYZEN 5 7500F - RTX 5070 12GB OC WHITE (All NEW - Bảo hành 36 tháng)', 'pc', '1743322558PC-AMD-GAMING-PRO-RYZEN-5-7500F---RTX-5070-12GB-OC-WHITE-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 9, 32999000),
(88, 'PC AMD GAMING PRO Ryzen 5 7500F - RX 9070 XT 16GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743322642PC-AMD-GAMING-PRO-Ryzen-5-7500F---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 10, 33999000),
(89, 'PC AMD GAMING PRO Ryzen 7 5700X3D - RX 9070 XT 16GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743322728PC-AMD-GAMING-PRO-Ryzen-7-5700X3D---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 11, 34999000),
(90, 'PC AMD GAMING PRO RYZEN 7 7700 - RTX 5070 12GB OC WHITE (All NEW - Bảo hành 36 tháng)', 'pc', '1743322788PC-AMD-GAMING-PRO-RYZEN-7-7700---RTX-5070-12GB-OC-WHITE-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 19, 33999000),
(91, 'PC AMD GAMING PRO Ryzen 7 7700 - RX 9070 XT 16GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743322850PC-AMD-GAMING-PRO-Ryzen-7-7700---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng)-(1).jpg', 1, 14, 17, 'pc', 19, 34999000),
(92, 'PC AMD GAMING PRO Ryzen 7 7700 - RX 9070 XT 16GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743322898PC-AMD-GAMING-PRO-Ryzen-7-7700---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 19, 34999000),
(93, 'PC AMD GAMING PRO RYZEN 7 7800X3D - RTX 5070 12GB OC WHITE (All NEW - Bảo hành 36 tháng)', 'pc', '1743322990PC-AMD-GAMING-PRO-RYZEN-5-7500F---RTX-5070-12GB-OC-WHITE-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 19, 41999000),
(94, 'PC AMD GAMING PRO Ryzen 7 7800X3D - RX 9070 XT 16GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743323061PC-AMD-GAMING-PRO-Ryzen-7-7800X3D---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 18, 41999000),
(95, 'PC AMD GAMING PRO RYZEN 9 9900X - RTX 5070 TWIN X2 12GB (All NEW - Bảo hành 36 tháng)', 'pc', '1743323141PC-AMD-GAMING-PRO-RYZEN-9-9900X---RTX-5070-TWIN-X2-12GB-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 18, 41999000),
(96, 'PC AMD GAMING PRO RYZEN 9 9900X - RTX 5080 16GB X3 (All NEW - Bảo hành 36 tháng)', 'pc', '1743323208PC-AMD-GAMING-PRO-RYZEN-9-9900X---RTX-5080-16GB-X3-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 20, 60999000),
(97, 'PC AMD GAMING PRO RYZEN 9 9900X - RTX 5090 32GB OC (All NEW - Bảo hành 36 tháng)', 'pc', '1743323235PC-AMD-GAMING-PRO-RYZEN-9-9900X---RTX-5090-32GB-OC-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 20, 156999000),
(99, 'PC AMD GAMING PRO RYZEN 9 9950X3D - RTX 4060 Ti 8GB OC (All NEW - Bảo hành 36 tháng)', 'pc', '1743323354PC-AMD-GAMING-PRO-RYZEN-9-9950X---RTX-4060-Ti-8GB-OC-(1).jpg', 1, 14, 17, 'pc', 20, 48999000),
(100, 'PC AMD GAMING PRO RYZEN 9 9950X - RTX 4060 Ti 8GB OC(All NEW - Bảo hành 36 tháng)', 'pc', '1743323418PC-AMD-GAMING-PRO-RYZEN-9-9950X---RTX-4060-Ti-8GB-OC.jpg', 1, 14, 17, 'pc', 19, 43999000),
(101, 'PC AMD GAMING PRO RYZEN 9 9950X - RTX 4060 Ti 16GB (All NEW - Bảo hành 36 tháng)', 'pc', '1743323489PC-AMD-GAMING-PRO-RYZEN-9-9950X---RTX-4060-Ti-16GB-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 19, 44999000),
(102, 'PC AMD GAMING PRO RYZEN 9 9950X - RTX 5070 Ti 16GB (All NEW - Bảo hành 36 tháng)', 'pc', '1743323531PC-AMD-GAMING-PRO-RYZEN-9-9950X---RTX-5070-Ti-16GB-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 20, 65999000),
(103, 'PC AMD GAMING PRO RYZEN 9 9950X - RTX 5070 TWIN X2 12GB (All NEW - Bảo hành 36 tháng)', 'pc', '1743323571PC-AMD-GAMING-PRO-RYZEN-9-9950X---RTX-5070-TWIN-X2-12GB-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 8, 17, 'pc', 20, 57999000),
(104, 'PC AMD HIGH PERFORMANCE GAMING RYZEN 7 7800X3D - RTX 3070 8GB (All NEW - Bảo hành 36 tháng)', 'pc', '1743323611PC-AMD-HIGH-PERFORMANCE-GAMING-RYZEN-7-7800X3D---RTX-3070-8GB.jpg', 1, 14, 17, 'pc', 19, 33999000),
(105, 'PC AMD SUPER GAMING Ryzen 7 5700X3D - RTX 3070 8GB ( ALL NEW - Bảo hành 36 Tháng)', 'pc', '1743323641PC-AMD-SUPER-GAMING-Ryzen-7-5700X3D---RTX-3070-8GB-(-ALL-NEW---Bảo-hành-36-Tháng).jpg', 1, 14, 17, 'pc', 20, 34999000),
(106, 'PC AMD SUPER GAMING Ryzen 7 5700X3D - RTX 4060 8GB OC ( ALL NEW - Bảo hành 36 Tháng)', 'pc', '1743323682PC-AMD-SUPER-GAMING-Ryzen-7-5700X3D---RTX-4060-8GB-OC-(-ALL-NEW---Bảo-hành-36-Tháng).jpg', 1, 14, 17, 'pc', 20, 36999000),
(107, 'PC AMD Ryzen 9 9900X - RTX 3060 12GB OC (All NEW - Bảo hành 36 tháng)', 'pc', '1743323865PC_AMD_FPS_GAMING_PRO_Ryzen_7_5700X3D_RX_6600_8GB.jpg', 1, 14, 17, 'pc', 20, 38999000),
(108, 'PC AMD GAMING PRO Ryzen 7 5700X3D - RTX 3060 8GB DUAL (All NEW - Bảo hành 36 tháng)', 'pc', '1743323950PC-AMD-GAMING-PRO-RYZEN-9-9950X---RTX-4060-Ti-16GB-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 20, 17999000),
(109, 'PC ASUS GAMING PERFORMANCE RTX 4060 - I5 12400F ( Toàn bộ linh kiện All New - Bảo hành 36 tháng)', 'pc', '1743324219PC-TTG-GAMING-LUXURY-i5-13400F---RTX-5070-12GB-OC-(All-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 19, 15999000),
(110, 'PC 4K GAMING RTX 4070, I5 12400F (ALL NEW - BH 36 tháng).png', 'pc', '1743324096PC-4K-GAMING-RTX-4070-12400F-(ALL-NEW---BH-36-tháng).png', 1, 15, 18, 'pc', 18, 23999000),
(111, 'PC BEST FOR GAMING i3 10105F - RTX 3050 6GB DUAL (All NEW - Bảo hành 36 tháng)', 'pc', '1743324133PC-BEST-FOR-GAMING-i3-10105F---RTX-3050-6GB-DUAL-(All-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 8999000),
(112, 'PC BEST FOR GAMING i5 10400F- GTX 1660 Super 6GB(Tất cả linh kiện đều All New - bảo hành 36 tháng)', 'pc', '1743324236PC-TTG-GAMING-PRO-i5-13400F---RTX-5070-12GB-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 15, 18, 'pc', 20, 9999000),
(113, 'PC CHƠI GAME HIỆU SUẤT CAO RTX 3060 12GB - I5 12400F ( ALL NEW - Bảo hành 36 tháng)', 'pc', '1743324328PC-CHƠI-GAME-HIỆU-SUẤT-CAO-RTX-3060-12GB---12400F-(-ALL-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 15999000),
(114, 'PC MINI LUV GAMING LUXURY i5 13400F - RTX 5070 12GB OC WHITE (Toàn bộ linh kiện All New - Bảo hành 36 tháng)', 'pc', '1743324397PC-MINI-TTG-GAMING-LUXURY-i5-13400F---RTX-5070-12GB-OC-WHITE.png', 1, 15, 18, 'pc', 20, 37999000),
(116, 'PC ROG STRIX GAMING PERFORMANCE RTX 4060 8GB - I5 12400F ( Toàn bộ linh kiện All New - Bảo hành 36 tháng)', 'pc', '1743324540PC-TTG-GAMING-PRO-i5-13400F---RTX-5070-12GB-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 15, 18, 'pc', 20, 19999000),
(117, 'PC LUV GAMING I5 12400F - RTX 3060 8GB (All New - Bảo hành 36 Tháng)', 'pc', '1743324634PC-TTG-GAMING-I5-12400F---RTX-3060-8GB-(All-New---Bảo-hành-36-Tháng).png', 1, 15, 18, 'pc', 20, 15999000),
(118, 'PC LUV GAMING i5 12400F - RX 6500 XT 4GB OC (All New - Bảo hành 36 Tháng)', 'pc', '1743324710PC-TTG-GAMING-i5-12400F---RX-6500-XT-4GB-OC-(All-New---Bảo-hành-36-Tháng).jpg', 1, 15, 18, 'pc', 20, 10999000),
(119, 'PC LUV GAMING i5 13400F - RTX 5070 12GB OC WHITE (All NEW - Bảo hành 36 tháng)', 'pc', '1743324756PC-TTG-GAMING-i5-13400F---RTX-5070-12GB-OC-WHITE-(All-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 37999000),
(120, 'PC LUV GAMING i5 13400F- 16GB DDR5- RTX 4070 SUPER 12GB OC (All NEW - Bảo hành 36 tháng)', 'pc', '1743324987PC-TTG-GAMING-PRO-i9-14900KF---RX-9070-XT-16GB-OC-(-ALL-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 35999000),
(122, 'PC LUV GAMING i5 14600KF - RTX 5080 16GB OC WHITE (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743325159PC-TTG-GAMING-i5-14600KF---RTX-5080-16GB-OC-WHITE-(ALL-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 57999000),
(123, 'PC LUV GAMING I5 12400F - RTX 3060 8GB (All New - Bảo hành 36 Tháng)', 'pc', '1743325297PC-TTG-GAMING-I5-12400F---RTX-3060-8GB-(All-New---Bảo-hành-36-Tháng).png', 1, 15, 18, 'pc', 20, 37999000),
(124, 'PC LUV GAMING LUXURY i5 13400F - RTX 5070 12GB OC (All NEW - Bảo hành 36 tháng).png', 'pc', '1743325584PC-TTG-GAMING-LUXURY-i5-13400F---RTX-5070-12GB-OC-(All-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 36999000),
(125, 'PC LUV GAMING LUXURY i5 14600KF - RTX 5070 12GB OC ULTRA WHITE (All NEW - Bảo hành 36 tháng)', 'pc', '1743325664PC-TTG-GAMING-LUXURY-i5-14600KF---RTX-5070-12GB-OC-WHITE-(All-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 40999000),
(126, 'PC LUV GAMING PRO i5 13400F - RTX 5070 12GB (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743325742PC-TTG-GAMING-PRO-i5-13400F---RTX-5070-12GB-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 15, 18, 'pc', 20, 28999000),
(127, 'PC LUV GAMING PRO i5 14600KF - RTX 5070 12GB (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743325846PC-TTG-GAMING-PRO-i5-14600KF---RTX-5070-12GB-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 15, 18, 'pc', 20, 33999000),
(128, 'PC LUV GAMING PRO i7 14700KF - RX 9070 XT 16GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743325882PC-TTG-GAMING-PRO-i7-14700KF---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 42999000),
(129, 'STEAM GAMING PC RTX 3060 12GB - 12400F ( All new - Bảo hành 36 tháng)', 'pc', '1743325953STEAM-GAMING-PC-RTX-3060-12GB---12400F-(-All-new---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 14999000),
(130, 'PC LUV GAMING PRO i9 14900KF - RX 9070 XT 16GB OC ( ALL NEW - Bảo hành 36 tháng)', 'pc', '1743326023PC-TTG-GAMING-PRO-i9-14900KF---RX-9070-XT-16GB-OC-(-ALL-NEW---Bảo-hành-36-tháng).png', 1, 15, 18, 'pc', 20, 46999000),
(131, 'PC MINI LUV i3 10105F- RAM 16GB-GTX 1650 4GB', 'pc', '1743326183PC_MINI_TTG_i3_10105F__RAM_16GB_GTX_1650_4GB.jpg', 1, 20, 18, 'pc', 20, 9999000),
(132, 'PC MINI LUV i3 10105F- RAM 16GB-RTX 3050 6GB OC', 'pc', '1743326241PC_MINI_TTG_i3_10105F__RAM_16GB_GTX_1650_4GB.jpg', 1, 20, 18, 'pc', 19, 10999000),
(133, 'PC MINI LUV i3 12100F-RAM 16GB - RTX 3050 6GB OC', 'pc', '1743326277PC_MINI_TTG_i3_10105F__RAM_16GB_GTX_1650_4GB.jpg', 1, 20, 18, 'pc', 20, 11999000),
(134, 'PC MINI LUV i3 12100F-RAM 16GB - RX 6600 8GB BLACK', 'pc', '1743326329PC_MINI_TTG_i5_12400F__RAM_16GB__RTX_3070_8GB_OC.jpg', 1, 20, 18, 'pc', 20, 12999000),
(135, 'PC MINI LUV i5 12400F- RAM 16GB- RTX 3060 12GB OC', 'pc', '1743326383PC_MINI_TTG_i5_12400F__RAM_16GB__RTX_3070_8GB_OC.jpg', 1, 20, 18, 'pc', 20, 17999000),
(136, 'PC MINI LUV i5 12400F- RAM 16GB- RTX 3070 8GB OC', 'pc', '1743326431PC_MINI_TTG_i5_12400F__RAM_16GB__RTX_3070_8GB_OC.jpg', 1, 20, 18, 'pc', 19, 20999000),
(137, 'PC MINI LUV i5 12400F- RAM 16GB- RTX 4060 8GB OC', 'pc', '1743326566PC_MINI_TTG_i5_12400F__RAM_16GB__RTX_3070_8GB_OC.jpg', 1, 20, 18, 'pc', 20, 17999000),
(138, 'PC MINI LUV i5 12400F- RAM 16GB-RTX 3050 6GB OC', 'pc', '1743326623PC_MINI_TTG_i5_12400F__RAM_16GB_RTX_3050_6GB_OC.jpg', 1, 20, 18, 'pc', 19, 14999000),
(139, 'PC MINI LUV i5 14500- RAM 16GB- RTX 3060 12GB OC', 'pc', '1743326714PC_MINI_TTG_i5_12400F__RAM_16GB__RTX_3070_8GB_OC.jpg', 1, 20, 18, 'pc', 20, 20999000),
(140, 'PC MINI LUV i5 14500- RAM 16GB- RTX 3070 8GB OC', 'pc', '1743326758PC_MINI_TTG_i5_12400F__RAM_16GB__RTX_3070_8GB_OC.jpg', 1, 20, 18, 'pc', 20, 23999000),
(141, 'PC MINI LUV i5 14500- RAM 32GB- RTX 4060 Ti 16GB TWIN X2 OC BLACK', 'pc', '1743326828PC_MINI_TTG_i5_12400F__RAM_16GB__RTX_3070_8GB_OC.jpg', 1, 20, 18, 'pc', 20, 27999000),
(142, 'PC MINI LUV i7 13700K- RAM 32GB- RTX 3060 12GB OC', 'pc', '1743326871PC_MINI_TTG_i5_12400F__RAM_16GB_RTX_3050_6GB_OC.jpg', 1, 20, 18, 'pc', 20, 29999000),
(143, 'Bộ máy chơi game PS5 hai tay cầm', 'ps5', '1743327333Bộ-máy-chơi-game-PS5-hai-tay-cầm.png', 1, 21, 12, 'ps5', 17, 15999000),
(144, 'Death Stranding Director\'s Cut Digital Edition', 'ps5', '1743327392Death-Stranding-Directors-Cut.png', 1, 21, 12, 'ps5', 19, 1299000),
(145, 'Đĩa game PS5 God of War Ragnarok PS5 Standard Edition', 'ps5', '1743327456Đĩa-game-PS5-God-of-War-Ragnarok-PS5-Standard-Edition.png', 1, 21, 12, 'ps5', 17, 1799000),
(146, 'Đĩa PS5 Astro Bot Digital Edition', 'ps5', '1743327494Đĩa-PS5-Astro-Bot.png', 1, 21, 12, 'ps5', 19, 1499000),
(147, 'Đĩa PS5 Final Fantasy XVI STD Digital Edition', 'ps5', '1743327527Đĩa-PS5-Final-Fantasy-XVI-STD.png', 1, 21, 12, 'ps5', 19, 1299000),
(150, 'Đĩa PS5 Rise of the Ronin Digital Edition', 'ps5', '1743327646Đĩa-PS5-Rise-of-the-Ronin.png', 1, 21, 12, 'ps5', 19, 1299000),
(151, 'Đĩa PS5 Spider-Man 2 Standard Edition', 'ps5', '1743327676Đĩa-PS5-Spider-Man-2-Standard.png', 1, 21, 12, 'ps5', 18, 1299000),
(152, 'Đĩa PS5 The Last of Us II Remastered', 'ps5', '1743327702Đĩa-PS5-The-Last-of-Us-II-Remastered.png', 1, 21, 12, 'ps5', 19, 1799000),
(153, 'Đĩa PS5 Until Dawn Digital Edition', 'ps5', '1743327731Đĩa-PS5-Until-Dawn.png', 1, 21, 12, 'ps5', 20, 1299000),
(154, 'Máy chơi game PlayStation 5 Slim', 'ps5', '1743327775Máy-chơi-game-PlayStation-5-Slim.png', 1, 21, 12, 'ps5', 18, 13999000),
(155, 'Ốp bọc PlayStation 5 Grey Camo', 'ps5', '1743327816Ốp-bọc-PlayStation®5-Grey-Camo.png', 1, 21, 12, 'ps5', 15, 1499000),
(156, 'Ốp bọc PS5 Cobalt Blue PlayStation 5', 'ps5', '1743327844Ốp-bọc-PS5-Cobalt-Blue.png', 1, 21, 12, 'ps5', 19, 1499000),
(157, 'Ốp bọc PS5 Volcanic Red PlayStation 5', 'ps5', '1743327869Ốp-bọc-PS5-Volcanic-Red.png', 1, 21, 12, 'ps5', 20, 1499000),
(158, 'Tai nghe không dây dùng cho máy chơi game Playstation 5', 'ps5', '1743327961Tai-nghe-không-dây-dùng-cho-máy-chơi-game-Playstation-5.png', 1, 21, 12, 'ps5', 19, 2499000),
(159, 'Tai nghe PULSE 3D Gray Camouflage', 'ps5', '1743327997Tai-nghe-PULSE-3D-Gray-Camouflage.png', 1, 21, 12, 'ps5', 19, 2699000),
(160, 'Tai nghe Playstation Pulse Explore Wireless Earbuds', 'ps5', '1743328087Tai-nghe-Pulse-Explore.png', 1, 21, 12, 'ps5', 19, 5699000),
(161, 'Tay cầm Dualsense Chroma Pearl', 'ps5', '1743328123Tay-cầm-Dualsense-Chroma-Pearl.png', 1, 21, 12, 'ps5', 20, 2299000),
(162, 'Tay cầm Dualsense Sterling Silver (CFI-ZCT1G 08)', 'ps5', '1743328148Tay-cầm-Dualsense-Sterling-Silver-(CFI-ZCT1G-08).png', 1, 21, 12, 'ps5', 8, 2299000),
(163, 'Tay cầm không dây Dualsense - Chorma Indigo', 'ps5', '1743328179Tay-cầm-không-dây-Dualsense---Chorma-Indigo.png', 1, 21, 12, 'ps5', 19, 2299000),
(164, 'Tay cầm không dây Dualsense - Đen', 'ps5', '1743328229Tay-cầm-không-dây-Dualsense---Đen.png', 1, 21, 12, 'ps5', 20, 1799000),
(165, 'Tay cầm không dây Dualsense - Tím', 'ps5', '1743328251Tay-cầm-không-dây-Dualsense---Tím.png', 1, 21, 12, 'ps5', 19, 1799000),
(166, 'Tay cầm không dây Dualsense Edge', 'ps5', '1743328275Tay-cầm-không-dây-Dualsense-Edge.png', 1, 21, 12, 'ps5', 20, 5699000),
(167, 'Tay cầm không dây điều khiển máy game PlayStation 5 (CFI-ZCT1G)', 'ps5', '1743328302Tay-cầm-không-dây-điều-khiển-máy-game-PlayStation-5-(CFI-ZCT1G).png', 1, 21, 12, 'ps5', 17, 1799000),
(168, 'PC AMD GAMING PRO RYZEN 9 9900X - RTX 5070 TWIN X2 12GB (All NEW - Bảo hành 36 tháng)', 'pc', '1743328775PC-AMD-GAMING-PRO-RYZEN-9-9900X---RTX-5070-TWIN-X2-12GB-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 20, 57999000),
(169, 'PC AMD GAMING PRO RYZEN 9 9900X- RTX 5070 Ti 16GB OC (All NEW - Bảo hành 36 tháng)', 'pc', '1743328851PC-AMD-GAMING-PRO-RYZEN-9-9900X--RTX-5070-Ti-16GB-OC-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 14, 17, 'pc', 20, 48999000),
(170, 'PC LUV GAMING ULTRA 7 265K - RTX 4080 SUPER 16GB OC (All NEW - Bảo hành 36 tháng)', 'pc', '1743329649PC-LUV-GAMING-ULTRA-7-265K---RTX-4080-SUPER-16GB-OC-(All-NEW---Bảo-hành-36-tháng).png', 1, 16, 18, 'pc', 20, 59999000),
(171, 'PC LUV GAMING ULTRA 7 265K - RTX 5080 16GB X3 (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743329692PC-LUV-GAMING-ULTRA-7-265K---RTX-5080-16GB-X3-(ALL-NEW---Bảo-hành-36-tháng).png', 1, 16, 18, 'pc', 20, 62999000),
(172, 'PC LUV GAMING ULTRA 7 265KF - RTX 4070 SUPER 12GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743329743PC-LUV-GAMING-ULTRA-7-265KF---RTX-4070-SUPER-12GB-OC-(ALL-NEW---Bảo-hành-36-tháng).png', 1, 16, 18, 'pc', 20, 41999000),
(173, 'PC LUV GAMING ULTRA 7 265KF - RTX 4070 SUPER OC 12GB (All new - Bảo hành 36 Tháng)', 'pc', '1743329792PC-LUV-GAMING-ULTRA-7-265KF---RTX-4070-SUPER-OC-12GB-(All-new---Bảo-hành-36-Tháng).png', 1, 16, 18, 'pc', 20, 49999000),
(174, 'PC LUV GAMING ULTRA 7 265KF - RTX 5080 16GB SOLID OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743329833PC-LUV-GAMING-ULTRA-7-265KF---RTX-5080-16GB-SOLID-OC-(ALL-NEW---Bảo-hành-36-tháng).png', 1, 16, 18, 'pc', 20, 62999000),
(175, 'PC LUV GAMING ULTRA 7 265K - RTX 5080 16GB OC WHITE (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743329877PC-TTG-GAMING-ULTRA-7-265K---RTX-5080-16GB-OC-WHITE-(ALL-NEW---Bảo-hành-36-tháng).png', 1, 16, 18, 'pc', 20, 66999000),
(176, 'PC LUV GAMING ULTRA 9 285K - RTX 4080 SUPER 16GB OC WHITE (All NEW - Bảo hành 36 tháng)', 'pc', '1743329993PC-TTG-GAMING-ULTRA-9-285K---RTX-4090-24GB-OC-WHITE_11zon.png', 1, 16, 18, 'pc', 19, 79999000),
(177, 'PC LUV GAMING ULTRA 9 285K - RTX 4090 24GB OC WHITE', 'pc', '1743329952PC-TTG-GAMING-ULTRA-9-285K---RTX-4090-24GB-OC-WHITE_11zon.png', 1, 16, 18, 'pc', 20, 126999000),
(178, 'Card màn hình ASROCK AMD Radeon RX 7900 XTX TAICHI WHITE 24GB OC', 'card', '1743331092Card-màn-hình-ASROCK-AMD-Radeon-RX-7900-XTX-TAICHI-WHITE-24GB-OC.png', 1, 18, 17, 'card', 19, 329999000),
(179, 'Card màn hình ASUS ROG Astral GeForce RTX 5080 16GB GDDR7 OC Edition', 'card', '1743331266Card-màn-hình-ASUS-ROG-Astral-GeForce-RTX-5080-16GB-GDDR7-OC-Edition.png', 1, 18, 10, 'card', 20, 53999000),
(180, 'Card màn hình ASUS ROG Astral GeForce RTX 5090 32GB GDDR7 OC Edition', 'card', '1743331312Card-màn-hình-ASUS-ROG-Astral-GeForce-RTX-5090-32GB-GDDR7-OC-Edition.png', 1, 18, 10, 'card', 20, 159999000),
(181, 'Card Màn Hình ASUS ROG STRIX RTX 4090 O24G White', 'card', '1743331370Card-Màn-Hình-ASUS-ROG-STRIX-RTX-4090-O24G-White.png', 1, 18, 10, 'card', 20, 65999000),
(182, 'Card màn hình Asus ROG STRIX-RTX 4090-O24G-GAMING', 'card', '1743331407Card-màn-hình-Asus-ROG-STRIX-RTX-4090-O24G-GAMING.png', 1, 18, 10, 'card', 20, 64999000),
(183, 'Card màn hình ASUS TUF Gaming GeForce RTX 5090 32GB GDDR7 OC', 'card', '1743331455Card-màn-hình-ASUS-TUF-Gaming-GeForce-RTX-5090-32GB-GDDR7-OC.png', 1, 18, 10, 'card', 20, 110999000),
(184, 'Card màn hình Colorful iGame RTX 4090 Neptune OC-V', 'card', '1743331496Card-màn-hình-Colorful-iGame-RTX-4090-Neptune-OC-V.png', 1, 18, 10, 'card', 20, 59999000),
(185, 'Card màn hình GIGABYTE AORUS GeForce RTX 5090 MASTER 32GB GDDR7', 'card', '1743331545Card-màn-hình-GIGABYTE-AORUS-GeForce-RTX-5090-MASTER-32GB-GDDR7.png', 1, 18, 10, 'card', 20, 139999000),
(186, 'Card màn hình MSI RTX 4090 SUPRIM LIQUID X 24G.png', 'card', '1743331586Card-màn-hình-MSI-RTX-4090-SUPRIM-LIQUID-X-24G.png', 1, 18, 10, 'card', 20, 55999000),
(188, 'CPU AMD Ryzen 9 9900X3D (12 nhân 24 luồng, up to 5.5GHz ,140MB Cache , AM5)', 'cpu', '1743331789CPU-AMD-Ryzen-9-9900X3D-(12-nhân-24-luồng,-up-to-5_5GHz-,140MB-Cache-,-AM5).png', 1, 18, 17, 'cpu', 20, 16999000),
(189, 'CPU AMD Ryzen 9 9950X3D (16 nhân 32 luồng, up to 5.7GHz ,144MB Cache , AM5)', 'cpu', '1743331820CPU-AMD-Ryzen-9-9950X3D-(16-nhân-32-luồng,-up-to-5_7GHz-,144MB-Cache-,-AM5).png', 1, 18, 17, 'cpu', 20, 20999000),
(190, 'CPU Intel Core i9 12900K (3.2GHz turbo up to 5.2Ghz, 16 nhân 24 luồng, 30MB Cache, 125W) - Socket Intel LGA 1700,Alder Lake)', 'cpu', '1743332012CPU-INTEL-CORE-I9-14900-(UP-TO-5_8GHZ,-24-NHÂN-32-LUỒNG,-36MB-CACHE,-65W).png', 1, 18, 18, 'cpu', 20, 10999000),
(191, 'CPU INTEL CORE I9 14900 (UP TO 5.8GHZ, 24 NHÂN 32 LUỒNG, 36MB CACHE, 65W)', 'cpu', '1743331885CPU-INTEL-CORE-I9-14900-(UP-TO-5_8GHZ,-24-NHÂN-32-LUỒNG,-36MB-CACHE,-65W).png', 1, 18, 18, 'cpu', 20, 15999000),
(192, 'CPU Intel Core i9 14900KS ( up to 6.2GHz , 24 nhân 32 luồng ,36MB, 150W, LGA 1700 )', 'cpu', '1743331920CPU-Intel-Core-i9-14900KS-(-up-to-6_2GHz-,-24-nhân-32-luồng-,36MB,-150W,-LGA-1700-).png', 1, 18, 17, 'cpu', 20, 18999000),
(193, 'CPU Intel Core Ultra 7 265K (Up to 5.5GHz , 20 nhân 20 luồng, 30MB Cache, Arrow Lake)', 'cpu', '1743331963CPU-Intel-Core-Ultra-7-265K-(Up-to-5_5GHz-,-20-nhân-20-luồng,-30MB-Cache,-Arrow-Lake).png', 1, 18, 18, 'cpu', 20, 12999000),
(194, 'Mainboard ASUS ROG MAXIMUS Z890 APEX', 'main', '1743332129Mainboard-ASUS-ROG-MAXIMUS-Z890-APEX_11zon.png', 1, 18, 10, 'main', 20, 20999000),
(195, 'Mainboard ASUS ROG MAXIMUS Z890 EXTREME', 'main', '1743332161Mainboard-ASUS-ROG-MAXIMUS-Z890-EXTREME_11zon.png', 1, 18, 10, 'main', 20, 28999000),
(196, 'Card màn hình ASUS ROG Astral GeForce RTX 5080 16GB GDDR7 OC Edition', 'card', '1743332341Card-màn-hình-ASUS-ROG-Astral-GeForce-RTX-5080-16GB-GDDR7-OC-Edition.png', 1, 18, 19, 'card', 20, 59999000),
(197, 'Card màn hình ASUS ROG Astral GeForce RTX 5090 32GB GDDR7 OC Edition', 'card', '1743332381Card-màn-hình-ASUS-ROG-Astral-GeForce-RTX-5090-32GB-GDDR7-OC-Edition.png', 1, 18, 19, 'card', 20, 159999000),
(198, 'Card Màn Hình ASUS ROG STRIX RTX 4090 O24G White', 'card', '1743332409Card-Màn-Hình-ASUS-ROG-STRIX-RTX-4090-O24G-White.png', 1, 18, 19, 'card', 20, 65999000),
(199, 'Card màn hình Asus ROG STRIX-RTX 4090-O24G-GAMING', 'card', '1743332434Card-màn-hình-Asus-ROG-STRIX-RTX-4090-O24G-GAMING.png', 1, 18, 19, 'card', 20, 64999000),
(200, 'Card màn hình ASUS TUF Gaming GeForce RTX 5090 32GB GDDR7 OC', 'card', '1743332470Card-màn-hình-ASUS-TUF-Gaming-GeForce-RTX-5090-32GB-GDDR7-OC.png', 1, 18, 19, 'card', 20, 110999000),
(201, 'Card màn hình Colorful iGame RTX 4090 Neptune OC-V', 'card', '1743332498Card-màn-hình-Colorful-iGame-RTX-4090-Neptune-OC-V.png', 1, 18, 19, 'card', 20, 59999000),
(202, 'Card màn hình GIGABYTE AORUS GeForce RTX 5090 MASTER 32GB GDDR7', 'card', '1743332541Card-màn-hình-GIGABYTE-AORUS-GeForce-RTX-5090-MASTER-32GB-GDDR7.png', 1, 18, 19, 'card', 20, 139999000),
(203, 'Card màn hình MSI RTX 4090 SUPRIM LIQUID X 24G', 'card', '1743332567Card-màn-hình-MSI-RTX-4090-SUPRIM-LIQUID-X-24G.png', 1, 18, 19, 'card', 20, 55999000),
(204, 'Mainboard ASUS ROG MAXIMUS Z890 APEX', 'main', '1743332605Mainboard-ASUS-ROG-MAXIMUS-Z890-APEX_11zon.png', 1, 18, 19, 'main', 20, 20999000),
(205, 'Mainboard ASUS ROG MAXIMUS Z890 EXTREME_11zon.png', 'main', '1743332632Mainboard-ASUS-ROG-MAXIMUS-Z890-EXTREME_11zon.png', 1, 18, 19, 'main', 20, 28999000),
(206, 'Mainboard ASUS ROG STRIX CROSSHAIR X870E HERO', 'main', '1743332682Mainboard-ASUS-ROG-STRIX-CROSSHAIR-X870E-HERO_11zon.png', 1, 18, 19, 'main', 20, 18999000),
(207, 'MAINBOARD GIGABYTE Z790 AORUS XTREME X DDR5', 'main', '1743332712MAINBOARD-GIGABYTE-Z790-AORUS-XTREME-X-DDR5_11zon.png', 1, 18, 19, 'main', 20, 26999000),
(208, 'Mainboard MSI MEG Z890 GODLIKE DDR5', 'main', '1743332742Mainboard-MSI-MEG-Z890-GODLIKE-DDR5_11zon.png', 1, 18, 19, 'main', 20, 40999000),
(209, 'Mainboard MSI MEG Z890 UNIFY-X (Intel Z890, Socket 1851, ATX, RAM DDR5)', 'main', '1743332778Mainboard-MSI-MEG-Z890-UNIFY-X-(Intel-Z890,-Socket-1851,-ATX,-RAM-DDR5)_11zon.png', 1, 18, 19, 'main', 20, 21999000),
(211, 'NGUỒN ASUS ROG THOR - 1600T GAMING TITANIUM - 1600W ( 80 PLUS Titanium , Full Modular)', 'source', '1743332865NGUỒN-ASUS-ROG-THOR---1600T-GAMING-TITANIUM---1600W-(-80-PLUS-Titanium-,-Full-Modular).png', 1, 18, 19, 'source', 20, 8999000),
(212, 'Nguồn Corsair RM1000e PCIe 5.0 850w 80 Plus Gold', 'source', '1743332906Nguồn-Corsair-RM1000e-PCIe-5_0-850w-80-Plus-Gold.png', 1, 18, 19, 'source', 20, 4999000),
(213, 'Nguồn máy tính Asus ROG THOR 1200W Platinum III', 'source', '1743332959Nguồn-máy-tính-Asus-ROG-THOR-1200W-Platinum-III.png', 1, 18, 19, 'source', 20, 12999000),
(214, 'Nguồn máy tính Corsair RM1000x Shift White 1000W 80 Plus Gold CP-9020275-NA', 'source', '1743332995Nguồn-máy-tính-Corsair-RM1000x-Shift-White-1000W-80-Plus-Gold-CP-9020275-NA.png', 1, 18, 19, 'source', 20, 4999000),
(216, 'Nguồn SFX-L ASUS ROG LOKI 1000P 1000W PLATINUM ( PCI GEN 5.0 - Full Modular )', 'source', '1743333054Nguồn-SFX-L-ASUS-ROG-LOKI-1000P-1000W-PLATINUM-(-PCI-GEN-5_0---Full-Modular-).png', 1, 18, 19, 'source', 20, 5999000),
(217, 'Nguồn Super Flower Leadex Titanium 1600W Full Modular', 'source', '1743333082Nguồn-Super-Flower-Leadex-Titanium-1600W-Full-Modular.png', 1, 18, 19, 'source', 20, 9999000),
(218, 'Ổ CỨNG HDD SEAGATE IRONWOLF 4TB ( 3.5 INCH, 5400RPM, SATA3, 256MB CACHE )', 'ssd', '1743333128Ổ-CỨNG-HDD-SEAGATE-IRONWOLF-4TB-(-3_5-INCH,-5400RPM,-SATA3,-256MB-CACHE-).png', 1, 18, 19, 'ssd', 20, 3999000),
(219, 'Ổ CỨNG HDD SEAGATE IRONWOLF 6TB (3.5 INCH, 5400RPM, SATA3, 256 MB CACHE)', 'ssd', '1743333206Ổ-CỨNG-HDD-SEAGATE-IRONWOLF-6TB-(3_5-INCH,-5400RPM,-SATA3,-256-MB-CACHE).png', 1, 18, 19, 'ssd', 20, 4999000),
(220, 'Ổ CỨNG SSD GIGABYTE AORUS GEN5 10000 2TB PCIE 5.0 X 4', 'ssd', '1743333238Ổ-CỨNG-SSD-GIGABYTE-AORUS-GEN5-10000-2TB-PCIE-5_0-X-4.png', 1, 18, 19, 'ssd', 20, 9999000),
(221, 'Ổ cứng SSD Kingston KC3000 2048GB NVMe M.2 2280 PCIe Gen 4x4', 'ssd', '1743333277Ổ-cứng-SSD-Kingston-KC3000-2048GB-NVMe-M_2-2280-PCIe-Gen-4x4.png', 1, 18, 19, 'ssd', 20, 4999000),
(222, 'Ổ cứng SSD Kingston NV3 2TB PCIe 4.0 x4 M.2 NVMe', 'ssd', '1743333313Ổ-cứng-SSD-Kingston-NV3-2TB-PCIe-4_0-x4-M_2-NVMe.png', 1, 18, 19, 'ssd', 20, 3999000),
(223, 'Ổ CỨNG SSD SAMSUNG 980 PRO 1TB PCIE NVME 4.0X4', 'ssd', '1743333346Ổ-CỨNG-SSD-SAMSUNG-980-PRO-1TB-PCIE-NVME-4_0X4.png', 1, 18, 19, 'ssd', 20, 3999000),
(224, 'Ổ CỨNG SSD SAMSUNG 990 PRO 2TB PCIE NVME 4.0X4', 'ssd', '1743333448Ổ-CỨNG-SSD-SAMSUNG-990-PRO-2TB-PCIE-NVME-4_0X4-.png', 1, 18, 19, 'ssd', 20, 6999000),
(225, 'Ổ CỨNG SSD SAMSUNG 990 PRO 4TB PCIE NVME 4.0X4', 'ssd', '1743333480Ổ-CỨNG-SSD-SAMSUNG-990-PRO-4TB-PCIE-NVME-4_0X4.png', 1, 18, 19, 'ssd', 20, 10999000),
(227, 'RAM CORSAIR DOMINATOR PLATINUM RGB BLACK 64GB (2X32GB) DDR5 5600MHZ', 'ssd', '1743333549RAM-CORSAIR-DOMINATOR-PLATINUM-RGB-BLACK-64GB-(2X32GB)-DDR5-5600MHZ_11zon.png', 1, 18, 19, 'ssd', 20, 6999000),
(230, 'RAM CORSAIR VENGEANCE RGB 64GB (2x32GB) DDR5 5600Mhz (CMH64GX5M2B5600C40)', 'ssd', '1743333656RAM-CORSAIR-VENGEANCE-RGB-64GB-(2x32GB)-DDR5-5600Mhz-(CMH64GX5M2B5600C40)_11zon.png', 1, 18, 19, 'ssd', 20, 5999000),
(234, 'Tản nhiệt khí CPU Deepcool AG620 ARGB BLACK', 'tan nhiet', '1743336280Tản-nhiệt-khí-CPU-Deepcool-AG620-ARGB-BLACK.png', 1, 18, 19, 'tan nhiet', 20, 1590000),
(235, 'Tản nhiệt khí Deepcool AG620 Digital BK', 'tan nhiet', '1743336312Tản-nhiệt-khí-Deepcool-AG620-Digital-BK.png', 1, 18, 19, 'tan nhiet', 20, 1490000),
(236, 'Tản nhiệt nước AIO Jonsbo TH-240 ARGB Black (LCD hiển thị nhiệt độ)', 'tan nhiet', '1743336388Tản-nhiệt-nước-AIO-Jonsbo-TH-240-ARGB-Black-(LCD-hiển-thị-nhiệt-độ).png', 1, 18, 19, 'tan nhiet', 20, 1590000),
(237, 'Tản nhiệt nước AIO Jonsbo TH-240 ARGB White (LCD hiển thị nhiệt độ).png', 'tan nhiet', '1743336415Tản-nhiệt-nước-AIO-Jonsbo-TH-240-ARGB-White-(LCD-hiển-thị-nhiệt-độ).png', 1, 18, 19, 'tan nhiet', 20, 1590000),
(238, 'Tản nhiệt nước AIO Thermalright Hyper Vision 360 BLACK ARGB', 'tan nhiet', '1743336455Tản-nhiệt-nước-AIO-Thermalright-Hyper-Vision-360-BLACK-ARGB.png', 1, 18, 19, 'tan nhiet', 20, 3590000),
(239, 'Tản nhiệt nước AIO Thermalright Hyper Vision 360 WHITE ARGB.png', 'tan nhiet', '1743336493Tản-nhiệt-nước-AIO-Thermalright-Hyper-Vision-360-WHITE-ARGB.png', 1, 18, 19, 'tan nhiet', 20, 3590000),
(240, 'Tản nhiệt nước AIO Thermalright Mjolnir Vision 360 White - ARGB', 'tan nhiet', '1743336524Tản-nhiệt-nước-AIO-Thermalright-Mjolnir-Vision-360-White---ARGB.png', 1, 18, 19, 'tan nhiet', 20, 3680000),
(241, 'TẢN NHIỆT NƯỚC ASUS ROG RYUJIN III 360 ARGB WHITE', 'tan nhiet', '1743336577TẢN-NHIỆT-NƯỚC-ASUS-ROG-RYUJIN-III-360-ARGB-WHITE.png', 1, 18, 19, 'tan nhiet', 20, 9490000),
(242, 'TẢN NHIỆT NƯỚC JONSBO TF2-360SC WHITE ARGB', 'tan nhiet', '1743336617TẢN-NHIỆT-NƯỚC-JONSBO-TF2-360SC-WHITE-ARGB.png', 1, 18, 19, 'tan nhiet', 20, 3390000),
(243, 'VỎ CASE ASUS GR701 ROG HYPERION WHITE EDITION (EATX,FULL TOWER, MÀU TRẮNG)', 'case', '1743336648VỎ-CASE-ASUS-GR701-ROG-HYPERION-WHITE-EDITION-(EATX,FULL-TOWER,-MÀU-TRẮNG).png', 1, 18, 19, 'case', 20, 10999000),
(244, 'VỎ CASE ASUS ROG HYPERION GR701 (FULL TOWER , MÀU ĐEN )', 'case', '1743336675VỎ-CASE-ASUS-ROG-HYPERION-GR701-(FULL-TOWER-,-MÀU-ĐEN-).png', 1, 18, 19, 'case', 20, 10999000),
(246, 'VỎ CASE HYTE Y60 BLACK (EATX.MID TOWER,MÀU ĐEN)', 'case', '1743336740VỎ-CASE-HYTE-Y60-BLACK-(EATX_MID-TOWER,MÀU-ĐEN).png', 1, 18, 19, 'case', 20, 5590000),
(247, 'VỎ CASE HYTE Y60 SNOW WHITE (EATX, MID TOWER, MÀU TRẮNG)', 'case', '1743336801VỎ-CASE-HYTE-Y60-SNOW-WHITE-(EATX,-MID-TOWER,-MÀU-TRẮNG).png', 1, 18, 19, 'case', 20, 5590000),
(248, 'Vỏ Case Segotep Slath Mini ITX (Mini Tower,Màu Bạc)', 'case', '1743336828Vỏ-Case-Segotep-Slath-Mini-ITX-(Mini-Tower,Màu-Bạc).png', 1, 18, 19, 'case', 20, 4899000),
(255, 'Màn hình Asus ROG Swift PG32UCDP 32\" WOLED 4K 240Hz HDR10 Gsync chuyên game', 'Màn hình', '1743337289Asus_ROG_PG32UCDM.png', 1, 19, 19, 'Màn hình', 31, 40999000),
(256, 'Màn Hình Gaming Asus ROG Swift OLED PG32UCDM (32 Inch/ 4K/ QD-OLED/ 240Hz/ 0.03ms)', 'Màn hình', '1743337316Asus_ROG_PG32UCDP.png', 1, 19, 19, 'Màn hình', 18, 39999000),
(257, 'Màn hình LG 27GP95R-B 27Inch UltraGear 4K 1Ms144Hz/160Hz(OC) Nano IPS', 'Màn hình', '1743337364LG_27GP95R-B.png', 1, 19, 19, 'Màn hình', 16, 19999000),
(258, 'Màn hình LG OLED 45GS95QE-B (45 inch/OLED/QHD/240Hz/0.03ms/Cong)', 'Màn hình', '1743337393LG_45GS95QE-B.png', 1, 19, 19, 'Màn hình', 17, 30999000),
(259, 'Màn Hình ASUS TUF GAMING VG279QM (27 inch FHD, IPS , 280Hz , G-SYNC Compatible , DisplayHDR™ 400)', 'Màn hình', '1743337529Asus_ROG_PG32UCDP.png', 1, 19, 19, 'Màn hình', 18, 6980000),
(260, 'Màn hình BenQ ZOWIE XL2546K (24inch,FHD,TN,240Hz,0.5ms)', 'Màn hình', '1743337467Màn-hình-BenQ-ZOWIE-XL2546K-(24inch,FHD,TN,240Hz,0_5ms).png', 1, 19, 19, 'Màn hình', 17, 10999000),
(262, 'MÀN HÌNH GAMING LG 32GR93U-B (32 INCH,UHD,IPS,144HZ,1MS)', 'Màn hình', '1743337572MÀN-HÌNH-GAMING-LG-32GR93U-B-(32-INCH,UHD,IPS,144HZ,1MS).png', 1, 19, 19, 'Màn hình', 17, 15999000),
(263, 'MÀN HÌNH VIEWSONIC VX3219-2K-PRO-2 (31.5 INCH,QHD,IPS,165HZ,0.43MS)', 'Màn hình', '1743337620MÀN-HÌNH-VIEWSONIC-VX3219-2K-PRO-2-(31_5-INCH,QHD,IPS,165HZ,0_43MS).png', 1, 19, 19, 'Màn hình', 18, 7999000),
(264, 'MÀN HÌNH GAMING MSI MPG 491CQP QD-OLED (49 INCH/DQHD/OLED/144HZ/0.03MS/CONG)', 'Màn hình', '1743337682MSI_MPG_491CQP.png', 1, 19, 19, 'Màn hình', 19, 36999000),
(265, 'MÀN HÌNH GAMING MSI MPG 321URX QD-OLED (31.5 INCH/ UHD/ QD-OLED/ 240HZ/ 0.03MS)', 'Màn hình', '1743337727MSI_MPG_321UPX.png', 1, 19, 19, 'Màn hình', 20, 35999000),
(266, 'Màn hình cong Samsung Odyssey G8 LS34BG850 34\" OLED 2K 175Hz', 'Màn hình', '1743337763Samsung_Odyssey_G8.png', 1, 19, 19, 'Màn hình', 19, 27999000),
(267, 'MÀN HÌNH GAMING MSI MPG 271QRX QD-OLED (27 INCH/WQHD/QD-OLED/360HZ/0.03MS)', 'Màn hình', '1743337794MSI_MPG_321UPX.png', 1, 19, 19, 'Màn hình', 20, 28999000),
(269, 'PC AMD GAMING PRO Ryzen 5 7800x3D - RX 9070 XT 16GB OC (ALL NEW - Bảo hành 36 tháng)', 'pc', '1743337934PC-AMD-GAMING-PRO-Ryzen-5-7500F---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 8, 19, 'pc', 19, 40999000),
(271, 'PC AMD GAMING PRO RYZEN 5 7500F - RTX 5070 12GB OC', 'pc', '1743338746PC-AMD-GAMING-PRO-RYZEN-5-7500F---RTX-5070-12GB-OC_11zon.png', 1, 17, 17, 'pc', 20, 32999000),
(272, 'PC Đồ Họa 2D i5 12400F - GTX 1660 Super 6GB ( ALL NEW - Bảo hành 36 Tháng)', 'pc', '1743338785PC-Đồ-Họa-2D-i5-12400F---GTX-1660-Super-6GB-(-ALL-NEW---Bảo-hành-36-Tháng).png', 1, 17, 18, 'pc', 20, 12999000),
(273, 'PC Đồ Họa 2D-3D i5 12400F- RTX 3050 6GB OC ( ALL NEW - Bảo hành 36 tháng)', 'pc', '1743338814PC-Đồ-Họa-2D-3D-i5-12400F--RTX-3050-6GB-OC-(-ALL-NEW---Bảo-hành-36-tháng).png', 1, 17, 18, 'pc', 20, 12999000),
(274, 'PC Đồ Họa Hiệu Suất Cao i5 14500-GTX 1660 Super 6GB ( ALL NEW - Bảo hành 36 Tháng)', 'pc', '1743338845PC-Đồ-Họa-Hiệu-Suất-Cao-i5-14500-GTX-1660-Super-6GB-(-ALL-NEW---Bảo-hành-36-Tháng).png', 1, 17, 18, 'pc', 20, 16999000),
(275, 'PC Workstation - Edit Video i7 12700KF- RTX 3050 6GB OC (All NEW - Bảo hành 36 tháng)', 'pc', '1743338884PC-Workstation---Edit-Video-i7-12700KF--RTX-3050-6GB-OC-(All-NEW---Bảo-hành-36-tháng).png', 1, 17, 18, 'ps5', 20, 16999000),
(276, 'PC Workstation 2D 3D- Edit Video i5 12600K - RTX 3050 6GB OC (ALL NEW - Bảo hành 36 Tháng)', 'pc', '1743339003PC-AMD-GAMING-PRO-Ryzen-7-5700X3D---RX-9070-XT-16GB-OC-(ALL-NEW---Bảo-hành-36-tháng).jpg', 1, 17, 18, 'pc', 20, 18999000),
(277, 'PC Workstation 2D 3D- Edit Video i5 12600K - RTX 4060 8GB OC (ALL NEW - Bảo hành 36 Tháng)', 'pc', '1743339015PC-AMD-GAMING-PRO-RYZEN-9-9900X---RTX-5090-32GB-OC-(All-NEW---Bảo-hành-36-tháng).jpg', 1, 17, 18, 'pc', 20, 17999000),
(278, 'PC Workstation 2D 3D- Edit Video i5 14600K - GTX 1660 Super 6GB OC', 'pc', '1743339089PC-Workstation-2D-3D--Edit-Video-i5-14600K---GTX-1660-Super-6GB-OC_11zon.png', 1, 17, 18, 'pc', 19, 31999000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `review`, `status`, `product_id`) VALUES
(77, 'Người dùng ẩn danh', 'abc@gmail.com', 'Bộ PC này là một cỗ máy gaming khủng, trang bị Ryzen 7 9800X3D với bộ nhớ đệm 3D V-Cache giúp tối ưu hiệu năng game, kết hợp RTX 5090 32GB cho khả năng chơi game 4K max setting mượt mà. RAM 32GB đảm bảo đa nhiệm tốt, phù hợp cả streamer lẫn content creato', 1, 86),
(78, 'Người dùng A', 'ngoluv8@gmail.com', 'Giá cả phải chăng mà hiệu năng cho ra lại cực kì bất ngờ, tôi vẫn có thể chiến các tựa game AAA ở cấu hình tốt mà vẫn giữ được 60fps. Shop 10/10', 1, 113);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `phone`, `location`, `email`, `method`) VALUES
(29, 'Ngô Xuân Quý', '0889033006', 'Lưu Xá, Quất Động, Thường Tín, Hà Nội', 'luvngo27@gmail.com', 'cod'),
(30, 'Ngô Xuân Quý', '0889033006', 'Lưu Xá, Quất Động, Thường Tín, Hà Nội', 'luvngo27@gmail.com', 'cod'),
(31, 'Ngô Xuân Quý', '0889033006', 'Lưu Xá, Quất Động, Thường Tín, Hà Nội', 'luvngo27@gmail.com', 'cod'),
(32, 'Ngô Xuân Quý', '0889033006', 'Lưu Xá, Quất Động, Thường Tín, Hà Nội', 'luvngo27@gmail.com', 'cod'),
(33, 'Ngô Xuân Quý', '0889033006', 'Lưu Xá, Quất Động, Thường Tín, Hà Nội', 'luvngo27@gmail.com', 'cod'),
(34, 'Ngô Xuân Quý', '0889033006', 'Lưu Xá, Quất Động, Thường Tín, Hà Nội', 'luvngo27@gmail.com', 'cod');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'Admin Huy', 'admin@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1),
(4, 'Chủ sở hữu', 'owner@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(6, 'Admin Quang', 'admin2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(7, 'Admin Thao', 'thao23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
