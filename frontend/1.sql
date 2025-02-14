-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2025 lúc 02:22 PM
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
(8, 'Corsair', 'Corsair là thương hiệu công nghệ hàng đầu, nổi tiếng với các sản phẩm linh kiện máy tính, gaming gear và thiết bị ngoại vi chất lượng cao. Thành lập năm 1994, Corsair không ngừng đổi mới, cung cấp các', '1735799750CORSAIR.png', 1, 'corsair'),
(10, 'Samsung', 'Samsung là tập đoàn công nghệ hàng đầu thế giới, nổi tiếng với các sản phẩm điện tử tiêu dùng như điện thoại, TV, tủ lạnh, và chip bán dẫn. Với sự đổi mới không ngừng, chất lượng vượt trội và thiết kế', '1735800048SAMSUNG.png', 1, 'samsung'),
(11, 'Logitech', 'Logitech là thương hiệu công nghệ hàng đầu, chuyên sản xuất các thiết bị ngoại vi như chuột, bàn phím, tai nghe và webcam, nổi bật với thiết kế sáng tạo và chất lượng cao. Thành lập năm 1981, Logitech', '1735805128LOGITECH.png', 1, 'logitech'),
(12, 'Sony', 'Sony là tập đoàn công nghệ và giải trí hàng đầu thế giới, nổi tiếng với các sản phẩm điện tử như TV, máy ảnh, tai nghe và hệ máy chơi game PlayStation. Thành lập năm 1946, Sony kết hợp sáng tạo và chấ', '1735805169SONY.png', 1, 'sony'),
(13, 'Zowie', 'Zowie là thương hiệu gaming chuyên nghiệp thuộc BenQ, nổi tiếng với các sản phẩm chuột, màn hình và thiết bị ngoại vi tập trung vào eSports. Với thiết kế tối giản, hiệu suất cao và độ chính xác tối ưu', '1735805191ZOWIE.png', 1, 'zowie'),
(14, 'MSI', 'MSI (Micro-Star International) là thương hiệu công nghệ nổi tiếng, chuyên sản xuất laptop gaming, bo mạch chủ, card đồ họa và thiết bị PC. Thành lập năm 1986, MSI cam kết mang đến hiệu suất vượt trội,', '1735805216MSI.jpg', 1, 'msi'),
(15, 'Razer', 'Razer là thương hiệu công nghệ hàng đầu dành cho game thủ, chuyên sản xuất thiết bị gaming như chuột, bàn phím, tai nghe và laptop. Thành lập năm 2005, Razer nổi bật với thiết kế hiện đại, hiệu suất c', '1735805232RAZER.jpg', 1, 'razer'),
(16, 'ASUS', 'Asus là thương hiệu công nghệ toàn cầu nổi tiếng với các sản phẩm máy tính, laptop, linh kiện và thiết bị chơi game. Với sự kết hợp giữa chất lượng, sáng tạo và hiệu suất cao, Asus được người dùng đán', '1735806203z6189895199011_e8790bfef158a9e85964d112c11785ee.jpg', 1, 'asus');

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
(9, 'Console', 'Console là thiết bị chơi game chuyên dụng, dễ sử dụng và tối ưu hóa hiệu năng.', 1, '1735805386Console.png', 'console'),
(8, 'PC Gaming', 'PC gaming là hình thức chơi game trên máy tính với hiệu năng cao và đồ họa ấn tượng.', 1, '1735805365Case.png', 'pc_gaming'),
(10, 'Gaming gear', 'Bàn phím và chuột là thiết bị nhập liệu chính, hỗ trợ thao tác nhanh và chính xác.', 1, '1735805424hinh-anh-ban-phim-+-chuot.jpg', 'gaming-gear'),
(11, 'Laptop', 'Laptop là máy tính xách tay nhỏ gọn, tiện lợi, tích hợp pin và màn hình di động.', 1, '1735805446Laptop.png', 'laptop'),
(12, 'Tai nghe, ghế, loa', 'Tai nghe, ghế, loa gaming nâng cao âm thanh, thoải mái, và trải nghiệm chơi game chân thực.', 1, '1735805552Tai_nghe_gaming.png', 'tai_nghe_ghe_loa');

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

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `note`) VALUES
(7, 'Ngô Xuân Quý', 'luvngo27@gmail.com', 'Tôi hoàn toàn ấn tượng với trải nghiệm mua sắm trên website này! Họ cung cấp một loạt các sản phẩm gaming chất lượng từ các thương hiệu nổi tiếng. Giao diện trang web rất thân thiện, dễ dàng tìm kiếm và mua sắm.'),
(8, 'Nguyễn Xuân Huy', 'huy277003@gmail.com', 'Tôi rất hài lòng với dịch vụ của website bán đồ gaming này! Sản phẩm đa dạng, cập nhật mẫu mới thường xuyên, đảm bảo mang đến những lựa chọn phong phú. Trang web được thiết kế bắt mắt và dễ điều hướng, giúp tôi nhanh chóng tìm kiếm sản phẩm cần thiết. '),
(9, 'Nguyễn Đức Thảo', 'thao23@gmail.com', 'Website bán đồ gaming này thực sự đáng để trải nghiệm! Các sản phẩm được chọn lọc kỹ lưỡng, chất lượng cao và giá cả hợp lý. Giao diện thân thiện với người dùng, dễ dàng duyệt qua các danh mục và tìm kiếm sản phẩm nhanh chóng. Sẽ đề xuất cho người khác'),
(10, 'Nguyễn Đức Thảo', 'thao23@gmail.com', 'web hoạt động trơn tru tôi rất thích'),
(11, 'Ngô Xuân Quý', 'ngoq6155@gmail.com', 'web lam viec tot');

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
(21, 'Corn Spring Luv', 'naoimanetop@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Hà Nội', '0948926993', 1, '7200'),
(22, 'Ngô Văn Quý', 'ngoluv8@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0948926993', 1, '6938'),
(23, 'Nguyễn Đức Thảo', 'cornspringluv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '099999999', 0, '1906'),
(24, 'ngo quy', 'ngoq6155@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0889033006', 1, '8953'),
(25, 'Nguyễn Đức Thảo', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0336852003', 0, '1905'),
(26, 'admin', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0336852003', 0, '2684'),
(27, 'Nguyễn Đức Thảo', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '0208392984', 0, '5331'),
(28, 'admin', 'doanvanhau55555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội 1', '0938493479', 0, '9987');

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
(28, '2342', 1, 28);

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
(1, '2470', 17, 1),
(2, '2470', 70, 1),
(3, '2470', 75, 1),
(4, '2470', 41, 1),
(5, '2470', 26, 1),
(6, '2470', 52, 1),
(7, '2470', 35, 1),
(8, '2470', 38, 1),
(9, '2470', 44, 1),
(10, '5840', 15, 10),
(11, '5840', 16, 1),
(12, '9406', 15, 1),
(13, '1157', 15, 9),
(14, '9164', 17, 1),
(15, '254', 70, 1),
(16, '7817', 39, 1),
(30, '8933', 20, 5),
(31, '9966', 21, 3),
(32, '7457', 22, 5),
(33, '5854', 24, 4),
(34, '1155', 16, 1),
(35, '1396', 62, 7),
(36, '8935', 70, 6),
(37, '4216', 70, 1),
(38, '4216', 52, 1),
(39, '4216', 15, 1),
(40, '2342', 15, 7);

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
(15, 'PC R9-9950X RTX 4090', 'PC hiệu năng cao', '1735805725PC-GVN-AMD-R9-9950X-VGA-RTX-4090.png', 1, 8, 10, 'pc_r9_9950', 0, 50000000),
(16, 'PC R7-7700X RTX 4070 Ti Super', 'PC hiệu năng cao', '1735805831PC-GVN-G-STUDIO-AMD-R7-7700X-VGA-RTX-4070-Ti-Super-(Powered-by-ASUS).png', 1, 8, 10, 'pc_r7_7700', 4, 45000000),
(17, 'PC I9-14900K RTX 4090', 'PC hiệu năng cao', '1735805880PC-GVN-G-STUDIO-Intel-i914900K-VGA-RTX-4090-.png', 1, 8, 10, 'pc_i9_14900K', 9, 48000000),
(18, 'PC I7-14700F RTX 4060', 'PC hiệu năng cao', '1735805928PC-GVN-Intel-i7-14700F-VGA-RTX-4060.png', 1, 8, 11, 'pc_i7_14700K', 4, 40000000),
(19, 'PC I7-14900K RTX 4070', 'PC hiệu năng cao', '1735805963PC-GVN-Intel-i9-14900K-VGA-RTX-4070-Ti-Super.png', 1, 8, 13, 'pc_i9_14900K', 5, 60000000),
(20, 'PC I9-14900K RTX 4080 Super', 'PC hiệu năng cao', '1735806060PC-GVN-x-AORUS-XTREME-ICE-(Intel-i9-14900K-VGA-RTX-4080-Super).png', 1, 8, 10, 'pc_i9_14900K', 5, 65000000),
(21, 'PC Core Ultra 9 295K RTX 4090', 'PC hiệu năng cao', '1735806166PC-GVN-x-ASUS-Advanced-Ai-(Intel-Core-Ultra-9-285K-VGA-RTX-4090)-(Powered-by-ASUS).png', 1, 8, 10, 'pc_core_ultra_9_285K', 10, 66000000),
(22, 'PC Core Ultra 9 295K RTX 4080 Super', 'PC hiệu năng cao', '1735806243PC-GVN-x-MSI-Dragon-ACE-(Intel-Core-Ultra-9-285K-VGA-RTX-4080-Super).png', 1, 8, 14, 'pc_core_ultra_9_285K', 6, 63000000),
(23, 'PC ROG Hyperion EVA-02', 'PC hiệu năng cao', '1735806301Vỏ-máy-tính-ASUS-ROG-Hyperion-EVA-02-Edition.png', 1, 8, 16, 'pc_rog_hyperion_eva_02', 8, 8300000),
(24, 'Vỏ case Corsair iCUE 5000X', 'Vỏ case Corsair RGB QL TG White', '1735806397Vỏ-máy-tính-Corsair-iCUE-5000X-RGB-QL-TG-White.png', 1, 8, 8, 'vo_case_corsair', 6, 2000000),
(25, 'Chuột gaming razer v2', 'Chuột gaming cao cấp từ razer', '173580646451576_chuot_razer_deathadder_v2_rgb_gaming_mouse_black_rz01_03210100_r3m1_0003_1.jpg', 1, 10, 15, 'gaming_mouse', 10, 2000000),
(26, 'Chuột gaming Logitech G Pro X', 'Chuột gaming cao cấp từ logitech', '1735806499Chuột-Logitech-G-Pro-X-Superlight-Wireless-White.png', 1, 10, 11, 'gaming_mouse', 6, 2000000),
(27, 'Chuột gaming Logitech G502', 'Chuột gaming cao cấp từ logitech', '1735806525Chuột-Logitech-G502-X-Plus-LightSpeed-Black.png', 1, 10, 11, 'gaming_mouse', 10, 1400000),
(28, 'Chuột gaming Razer Basilisk V3 Pro', 'Chuột gaming cao cấp từ razer', '1735806557Chuột-Razer-Basilisk-V3-Pro-35K-Black.png', 1, 10, 15, 'gaming_mouse', 10, 2400000),
(29, 'Chuột gaming Razer Viper V3 Pro', 'Chuột gaming cao cấp từ razer', '1735806584Chuột-Razer-Không-dây-Viper-V3-Pro-Trắng.png', 1, 10, 15, 'gaming_mouse', 10, 2200000),
(30, 'Chuột gaming ASUS Gladius 3', 'Chuột gaming cao cấp từ asus', '1735806623chuot-gaming-asus-rog-gladius-iii-wireless-aimpoint.jpg', 1, 10, 16, 'gaming_mouse', 10, 2000000),
(31, 'Chuột gaming ZOWIE EC3', 'Chuột gaming cao cấp từ zowie', '1735806654chuot-gaming-zowie-ec3-c.jpg', 1, 10, 13, 'gaming_mouse', 10, 3000000),
(32, 'Chuột gaming ASUS Pugi 3', 'Chuột gaming cao cấp từ zowie', '1735806694gearvn-asus-rog-pugi-3.jpg', 0, 10, 16, 'gaming_mouse', 10, 300000),
(33, 'Ghế Razer Iskur 2', 'Ghế gaming cao cấp', '173580676617184-razer-iskur-2.jpg', 0, 12, 15, 'gaming_chair', 10, 2000000),
(34, 'Ghế Samsung Layer 4', 'Ghế gaming cao cấp', '173580680252280_anh_web_0003_layer_4.jpg', 1, 12, 10, 'gaming_chair', 9, 2000000),
(35, 'Ghế Corsair T3 RUSH', 'Ghế gaming cao cấp', '1735806831Ghế-Corsair-T3-RUSH-GrayCharcoal-2023.png', 1, 12, 8, 'gaming_chair', 10, 2900000),
(36, 'Ghế ASUS Chariot', 'Ghế gaming cao cấp', '1735806870ghe-gaming-asus-rog-chariot-core-sl300-1.jpg', 1, 12, 16, 'gaming_chair', 10, 2500000),
(37, 'Loa Logitech G560', 'Loa gaming cao cấp', '1735806921Loa-Logitech-G560-.png', 1, 12, 11, 'gaming_speaker', 10, 2000000),
(38, 'Loa Razer Leviathan V2', 'Loa gaming cao cấp', '1735806948Loa-Razer-Leviathan-V2-X.png', 1, 12, 15, 'gaming_speaker', 10, 2800000),
(39, 'Loa Razer Leviathan V3', 'Loa gaming cao cấp', '1735806982Loa-Razer-Leviathan-V2.png', 1, 12, 15, 'gaming_speaker', 9, 3800000),
(40, 'Màn hình ASUS ROG Strix 300Hz', 'Màn hình gaming cao cấp', '1735807032Màn-hình-ASUS-ROG-Strix-XG27AQMR-27-IPS-2K-300Hz-1ms-G-Sync.png', 1, 10, 16, 'gaming_moniter', 10, 5000000),
(41, 'Màn hình cong SAMSUNG 180Hz', 'Màn hình gaming cao cấp', '1735807080Màn-hình-cong-LG-27GS60QC-B-UltraGear-27-2K-180Hz-chuyên-game.png', 1, 10, 10, 'gaming_moniter', 10, 3000000),
(42, 'Màn hình SAMSUNG 2K 240Hz', 'Màn hình gaming cao cấp', '1735807114Màn-hình-LG-45GS95QE-B-UltraGear-45-OLED-2K-240Hz-G-Sync.png', 1, 10, 10, 'gaming_moniter', 10, 6000000),
(43, 'Tai nghe nhét tai Razer', 'Tai nghe gaming', '173580717457da5fe88bc7e62a53c0ecc43fa6f7f3.jpg', 1, 12, 15, 'gaming_headphone', 10, 1600000),
(44, 'Tai nghe Razer Kraken Kitty', 'Tai nghe gaming razer', '1735807211-Kraken-Kitty-Chroma-USB---Quartz-(1).png', 1, 12, 15, 'gaming_headphone', 10, 3600000),
(45, 'Tai nghe ASUS ROG Delta Core', 'Tai nghe gaming asus', '1735807246Tai-nghe-Asus-ROG-Delta-Core.png', 1, 12, 16, 'gaming_headphone', 10, 3100000),
(46, 'Tai nghe ASUS ROG THETA 7.1', 'Tai nghe gaming asus', '1735807272Tai-nghe-Asus-ROG-THETA-7_1.png', 1, 12, 16, 'gaming_headphone', 10, 3500000),
(47, 'Tai nghe Razer Barracuda Pro', 'Tai nghe gaming razer', '1735807301Tai-nghe-Razer-Barracuda-Pro.png', 1, 12, 15, 'gaming_headphone', 10, 2900000),
(48, 'Tai nghe Razer BlackShark V2', 'Tai nghe gaming razer', '1735807325Tai-nghe-Razer-BlackShark-V2-X.png', 1, 12, 15, 'gaming_headphone', 10, 2900000),
(49, 'Tai nghe Logitech G Pro', 'Tai nghe gaming logitech', '1735807360tai-nghe-gaming-logitech-g-pro-black.png', 1, 12, 11, 'gaming_headphone', 10, 2600000),
(50, 'Bàn phím ASUS ROG Strix Flare', 'Bàn phím gaming', '1735807467asus-rog-strix-flare.jpg', 1, 10, 16, 'gaming_keyboard', 10, 5000000),
(51, 'Bàn phím ASUS ROG Strix Scope 2', 'Bàn phím gaming', '1735807492Bàn-phím-Asus-ROG-Strix-Scope-II-96-Wireless-ROG-NX-Snow-Switch.png', 1, 10, 16, 'gaming_keyboard', 10, 3400000),
(52, 'Bàn phím ASUS ROG Strix Scope TKL', 'Bàn phím gaming', '1735807511Bàn-phím-Asus-ROG-Strix-Scope-TKL-Red-Switch.png', 1, 10, 16, 'gaming_keyboard', 9, 3100000),
(53, 'Bàn phím Corsair K100 RGB', 'Bàn phím gaming', '1735807537Bàn-phím-cơ-Corsair-K100-RGB-Cherry-MX-Speed-(CH-912A014-NA).png', 1, 10, 8, 'gaming_keyboard', 10, 3500000),
(54, 'Bàn phím Razer Huntsman V2', 'Bàn phím gaming', '1735807573Bàn-phím-cơ-Razer-Huntsman-V2-Linear-Optical-Switch-PUBG-BATTLEGROUNDS-Edition.png', 1, 10, 15, 'gaming_keyboard', 10, 4500000),
(55, 'Bàn phím Logitech G813', 'Bàn phím gaming', '1735807598Bàn-phím-Logitech-G813-RGB-Clicky.png', 1, 10, 11, 'gaming_keyboard', 10, 4500000),
(56, 'Bàn phím Logitech G913', 'Bàn phím gaming', '1735807617Bàn-phím-Logitech-G913-TKL-Lightspeed-Wireless-Clicky.png', 1, 10, 11, 'gaming_keyboard', 10, 6500000),
(57, 'Bàn phím Razer BlackWidow V4', 'Bàn phím gaming', '1735807644Bàn-phím-Razer-BlackWidow-V4-Yellow-Switch.png', 1, 10, 15, 'gaming_keyboard', 10, 5500000),
(58, 'Bàn phím ASUS TUF', 'Bàn phím gaming', '1735807674gaming-asus-tuf.jpg', 1, 10, 16, 'gaming_keyboard', 10, 3600000),
(59, 'Laptop ASUS Zenbook 14 OLED', 'Laptop gaming asus', '1735807833Laptop-ASUS-Zenbook-14-OLED-UX3405MA-PP152W.png', 1, 11, 16, 'gaming_laptop', 10, 30000000),
(60, 'Laptop ASUS Zenbook Dou OLED', 'Laptop gaming asus', '1735807856Laptop-ASUS-Zenbook-Duo-OLED-UX8406MA-PZ142W.png', 1, 11, 16, 'gaming_laptop', 8, 32000000),
(61, 'Laptop ASUS ROG Strix G16', 'Laptop gaming asus', '1735807890Laptop-gaming-Asus-ROG-Strix-G16-G614JU-N4132W.png', 1, 11, 16, 'gaming_laptop', 10, 36000000),
(62, 'Laptop ASUS TUF A15', 'Laptop gaming asus', '1735808032Laptop-gaming-ASUS-TUF-Gaming-A15-FA506NC-HN011W.png', 1, 11, 16, 'gaming_laptop', 3, 32000000),
(63, 'Laptop ASUS TUF F15', 'Laptop gaming asus', '1735808064Laptop-gaming-ASUS-TUF-Gaming-F15-FX507VV-LP304W.png', 1, 11, 16, 'gaming_laptop', 10, 32000000),
(64, 'Laptop ASUS Vivobook 16X', 'Laptop gaming asus', '1735808094Laptop-gaming-ASUS-Vivobook-16X-K3605ZU-RP296W.png', 1, 11, 16, 'gaming_laptop', 10, 37000000),
(65, 'Laptop MSI Cyborg 14', 'Laptop gaming MSI', '1735808128Laptop-gaming-MSI-Cyborg-14-A13VE-090VN.png', 1, 11, 14, 'gaming_laptop', 10, 37000000),
(66, 'Laptop MSI Katana A15', 'Laptop gaming MSI', '1735808155Laptop-gaming-MSI-Katana-A15-AI-B8VG-465VN-(20th-Edition).png', 1, 11, 14, 'gaming_laptop', 10, 36000000),
(67, 'Laptop MSI Stealth 16 AI', 'Laptop gaming MSI', '1735808185Laptop-gaming-MSI-Stealth-16-AI-Studio-A1VHG-241VN.png', 1, 11, 14, 'gaming_laptop', 10, 46000000),
(68, 'Laptop MSI Titan 18 HX', 'Laptop gaming MSI', '1735808211Laptop-gaming-MSI-Titan-18-HX-A14VIG-410VN-(20th-Edition).png', 1, 11, 14, 'gaming_laptop', 10, 56000000),
(69, 'Laptop MSI Vector GP78HX', 'Laptop gaming MSI', '1735808237Laptop-gaming-MSI-Vector-GP78HX-13VI-476VN.png', 1, 11, 14, 'gaming_laptop', 10, 41000000),
(70, 'Máy chơi game console PS5 Standard', 'Máy chơi game đồ họa cao giá cả phải chăng', '1735808348Sony-Playstation-5-Standard-Edition.png', 1, 9, 12, 'gaming_console', 2, 15000000),
(71, 'Tay cầm PS5 DualSense', 'Tay cầm ps5', '1735808402Tay-cầm-Sony-PS5-DualSense-White.png', 1, 9, 12, 'ps5_controller', 10, 2000000),
(72, 'Tay cầm gaming MSI Pro', 'Tay cầm gaming msi', '1735808458Tay-cầm-chơi-game-Asus-ROG-Kunai-3-Gamepad-Black.png', 1, 9, 14, 'gaming_controller', 10, 1300000),
(73, 'Tay cầm Dualsense Chroma Pearl', 'Tay cầm Dualsense Chroma', '1735808498Tay-cầm-Dualsense-Chroma-Pearl.png', 1, 9, 12, 'gaming_controller', 10, 1900000),
(74, 'Tay cầm Razer Raiju Ultimate', 'Tay cầm gaming razer', '1735808536Tay-cầm-Razer-Raiju-Ultimate.png', 1, 9, 15, 'gaming_controller', 10, 2000000),
(75, 'Đĩa game Black Myth Wukong', 'Đĩa game ps5', '1735808597Đĩa-Game-Black-Myth-Wukong-Deluxe-Edition-PS5.jpg', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(76, 'Đĩa game The Last Of Us 1', 'Đĩa game ps5', '1735808619dia_game_ps5_the_last_of_us_part_1.jpg', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(77, 'Đĩa game Spider man Miles Morales', 'Đĩa game ps5', '1735808644dia-game-ps5-spider-man-miles-morales-1.jpg', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(78, 'Đĩa game Elden Ring', 'Đĩa game ps5', '1735808663Eldenring.png', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(79, 'Đĩa game FC 25', 'Đĩa game ps5', '1735808686Game-PS5-EA-Sports-FC-25-Standard-Edition.png', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(80, 'Đĩa game Ghost of Tsushima', 'Đĩa game ps5', '1735808705Ghost-of-Tsushima-Directors-Cut---PS5.png', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(81, 'Đĩa game GOW Ragnarok', 'Đĩa game ps5', '1735808725God-of-war-Ragnarok-PS5.jpg', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(82, 'Đĩa game Spider man 2', 'Đĩa game ps5', '1735808741Spider-man-2.png', 1, 9, 12, 'ps5_game_disk', 10, 1300000),
(83, 'Đĩa game COD Modern Warfare 3', 'Đĩa game ps5', '1735808801vn-11134207-7r98o-lyp1m8x8i0y5d8.jpg', 1, 9, 12, 'ps5_game_disk', 16, 1300000),
(84, 'Đĩa game Yakuza Like a Dragon', 'Đĩa game ps5', '1735808825Yakuza-Like-A-Dragon.jpg', 0, 9, 12, 'ps5_game_disk', 10, 500000),
(85, 'Tay cầm PS5 DualSense Edge', 'Tay cầm ps5 for pro gamer', '1735808868dual-sensel-edge.png', 1, 9, 12, 'ps5_controller', 10, 5000000);

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
(1, 'Ngô Xuân Quý', 'luvngo27@gmail.com', 'Sản phẩm gaming này thực sự xuất sắc. Thiết kế tinh tế, hình ảnh và âm thanh cực kỳ chất lượng. Hiệu suất ổn định và pin dùng lâu. Một lựa chọn tuyệt vời cho mọi game thủ.', 1, 27),
(2, 'Ngô Quý', 'luvngo27@gmail.com', 'Sản phẩm gaming này thực sự xuất sắc. Thiết kế tinh tế, hình ảnh và âm thanh cực kỳ chất lượng. Hiệu suất ổn định và pin dùng lâu. Một lựa chọn tuyệt vời cho mọi game thủ.', 1, 15),
(5, 'Ngô Xuân Quý', 'luvngo27@gmail.com', 'Sản phẩm tốt lắm, cấu hình cao render video nhanh, sẽ giới thiệu cho người quen <3', 1, 16),
(8, 'nga ', '1@gmail.com', 'đáng để mua và dùng thử', 1, 77),
(9, 'nga ', '1@gmail.com', 'đáng để mua và dùng thử', 1, 77),
(10, 'Nga Xuân Quý 1', 'luvngo2237@gmail.com', 'Đúng thứ tôi cần mua thật tuyệt', 1, 19),
(11, 'Nghiêm Xuân Quý 2', 'luvngo223237@gmail.com', 'Thứ tôi ao ước đây rồi', 1, 20),
(12, 'Ngọc Xuân Quý 3', 'luvngohh27@gmail.com', 'quá tuyệt ', 1, 21),
(13, 'Quỳnh Xuân Quý4', 'luvngoqqwqw27@gmail.com', 'sao mình không biết web này sớm hơn nhỉ', 1, 22),
(14, 'Lan Xuân Quý 5', 'luvngosdsd27@gmail.com', 'cấu hình quá kinh khủng', 1, 23),
(15, 'Khiêm Xuân Quý 6', 'luvngo2sdsd7@gmail.com', 'Vỏ case này đẹp nha', 1, 24),
(16, 'Điệp Xuân Quý 7', 'luvngo2cxc7@gmail.com', 'Chuột gì mà cầm sướng thế', 1, 25),
(17, 'Quyền Xuân Quý8', 'luvngo2sdsd7@gmail.com', 'logitech vẫn quá ngon', 1, 26),
(18, 'Mạnh Xuân Quý9', 'luvngocv27@gmail.com', 'tôi chỉ thích chuột nhà razer', 1, 28),
(19, 'Yếu Xuân Quý10', 'luvngoqd27@gmail.com', ' Khách ruột của razer', 1, 29),
(20, 'Quỳnh Xuân Quý11', 'luvngosds27@gmail.com', ' hở là hết', 1, 30),
(21, 'Hưng Xuân Quý12', 'luvngo233137@gmail.com', ' đứa con của zowie', 1, 31),
(22, 'Đông Xuân Quý13', 'luvngo27@gmail.com', ' fan asus', 1, 32),
(23, 'Tây Xuân Quý14', 'luvngo213137@gmail.com', 'chỉ tin dùng ghế razer ', 1, 33),
(24, 'Nam Xuân Quý15', 'luvngo23137@gmail.com', ' ghế samsung này đẹp', 1, 34),
(25, 'Bắc Xuân Quý16', 'luvngo213137@gmail.com', ' ghế này ưng nha', 1, 35),
(26, 'Xuân Xuân Quý17', 'luvngo242427@gmail.com', ' tốt', 1, 36),
(27, 'Hạ Xuân Quý18', 'luvngo2713@gmail.com', ' Loa này nghe thích quá', 1, 37),
(28, 'Thu Xuân Quý19', 'luvngo235357@gmail.com', ' từ khi mua xong nghe 24 tiếng', 1, 38),
(29, 'Đông Xuân Quý20', 'luvngo2aaaa7@gmail.com', ' loa này tôi dùng đc 5 năm r vẫn tốt nha', 1, 39),
(30, 'Alex Xuân Quý21', 'luvngovfvf27@gmail.com', 'màn này nhìn đẹp ác', 1, 40),
(31, 'Lê Xuân Quý22', 'luvngo2ntn7@gmail.com', ' màn hình cong dùng đã quá', 1, 41),
(32, 'Thái Xuân Quý23', 'luvngo2tnn7@gmail.com', ' quá đã', 1, 42),
(33, 'Việt Xuân Quý24', 'luvngo27@gmail.com', ' không bị đau tai nha mn', 1, 43),
(34, 'Chính Xuân Quý25', 'luvngoeeee27@gmail.com', ' chỉ mua đồ razer', 1, 44),
(35, 'Huy Xuân Quý26', 'luvngo2qqq7@gmail.com', ' tiện quá', 1, 45),
(36, 'Quang Xuân Quý27', 'luvngoqaqa27@gmail.com', ' yêu asus', 1, 46),
(37, 'Minh Xuân Quý28', 'luvngoqqq27@gmail.com', ' đẹp lại rẻ', 1, 47),
(38, 'Lương Xuân Quý29', 'luvngqzqo27@gmail.com', ' chống ồn tốt quá', 1, 48),
(39, 'Chúc Xuân Quý31', 'luvngo2zqz7@gmail.com', 'cứ logitech là mua', 1, 49),
(40, 'Mạc Xuân Quý32', 'luvnzqgo27@gmail.com', ' bấm sướng tay lắm', 1, 50),
(41, 'Khê Xuân Quý334', 'luvzqngzqzo27@gmail.com', ' không nên mua', 1, 51),
(42, 'Wibu Xuân Quý33', 'luvnzqgo27@gmail.com', ' cũng được', 1, 52),
(43, 'Quất Xuân Quý33', 'luvnzqzgo27@gmail.com', ' tạm ổn', 1, 53),
(44, 'Đào Xuân Quý5555', 'luvnzqgo27@gmail.com', 'tốt ', 1, 54),
(45, 'Mai Xuân Quý113', 'luvngozq27@gmail.com', ' xấu', 1, 55),
(46, 'Liêm Xuân Quý66', 'luvngzqo27@gmail.com', ' không nên mua', 1, 56),
(47, 'Ronaldo Xuân Quý424', 'luvngozq27@gmail.com', ' thất vọng', 1, 57),
(48, 'Bích Xuân Quý4', 'luvngozq27@gmail.com', ' yêu tuf', 1, 58),
(49, 'Châm Xuân Quý555552', 'luvzqngo27@gmail.com', ' tạm ổn', 1, 59),
(50, 'Chiến Xuân Quý232', 'luvzqngozq27@gmail.com', ' chê nha', 1, 60),
(51, 'Hải Xuân Quý2525', 'luvngzqzqzo27@gmail.com', 'dùng mãi không hết hiệu năng ', 1, 61),
(52, 'Quên Xuân Quý1111', 'z@gmail.com', ' đỉnh', 1, 62),
(53, 'Bạc Xuân Quý00', 'luvngzqzqo27@gmail.com', 'bảo hành tốt ', 1, 63),
(54, 'Sắt Xuân Quý1112', 'luvzqzqngo27@gmail.com', ' xấu quá', 1, 64),
(55, 'Đồng Xuân Quý3434', 'luvnzqzgo27@gmail.com', ' gì mà đắt thế', 1, 65),
(56, 'Vàng Xuân Quý5334', 'luvnzqzgo27@gmail.com', ' nặng quá', 1, 66),
(57, 'Kim cương Xuân Quý56', 'luvnzqzqgo27@gmail.com', ' không qlai lần 2', 1, 67),
(58, 'Cao thủ Xuân Quý78', 'luvngo2zqz7@gmail.com', ' bền đẹp', 1, 68),
(59, 'Thách đấu Xuân Quý70', 'luvngo2zqzq7@gmail.com', ' máy gì chạy như bò rống', 1, 69),
(60, 'Điên Xuân Quý112', 'luvnzqzgo27@gmail.com', 'làm đồ họa mê ly ', 1, 70),
(61, 'Vô dịch Xuân Quý113', 'luvnzqzgo27@gmail.com', 'cầm nhẹ tay thích ', 1, 71),
(62, 'Heloo Xuân Quý114', 'luvnzqgo27@gmail.com', ' bấm nút tay cầm này thích quá', 1, 72),
(63, 'Hi Xuân Quý155', 'luvngzqo27@gmail.com', ' tay cầm chán', 1, 73),
(64, 'Minh Xuân Quý116', 'luvnzqzgo27@gmail.com', ' tay cầm oke', 1, 74),
(65, 'Chinh Xuân Quý117', 'luvnqzgo27@gmail.com', ' tốt ', 1, 75),
(66, 'Thao Xuân Quý118', 'luvngzqzqo27@gmail.com', ' đã mua và trải nghiệm', 1, 76),
(67, 'Thao Xuân Quý12323218', 'luvngzqzqo27@gmail.com', ' đĩa mới mua chưa trải nghiệm', 1, 78),
(68, 'Thao Xuân Quý1111128', 'luvngzqzqo27@gmail.com', ' đĩa thơm quá', 1, 79),
(69, 'Thao Xuân Quý1118', 'luvngzqzqo27@gmail.com', ' đĩa gì mà nét thế', 1, 80),
(70, 'Thao Xuân Quý11a8', 'luvngzqzqo27@gmail.com', ' gói hàng cẩn thận quá ạ', 1, 81),
(71, 'Thao Xuân Quý11bb8', 'luvngzqzqo27@gmail.com', 'game mới ra mua luôn đĩa mới', 1, 82),
(72, 'Thao Xuân Quý118ssd', 'luvngzqzqo27@gmail.com', ' mua đĩa ở shop được mấy lần rồi', 1, 83),
(73, 'Thao Xuân Quý118s', 'luvngzqzqo27@gmail.com', ' đã mua để tặng thằng bạn nghiện game', 1, 84),
(74, 'Thao Xuân Quý118qqq', 'luvngzqzqo27@gmail.com', ' quá tệ', 1, 85),
(75, 'Nguyễn Xuân Huy', 'huy277003@gmail.com', 'dàn pc này chiến game bao đã', 1, 17),
(76, 'Nguyễn Xuân Huy', 'huy277003@gmail.com', 'cấu hình này vừa mạnh lại còn giá hợp lý nữa, đúng là món hời', 1, 18);

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
(1, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(2, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(3, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(4, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(5, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(6, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(7, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(8, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(9, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(10, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(11, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(12, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(13, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(14, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(15, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(16, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(17, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(18, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(19, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(20, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(21, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(22, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(23, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoluv8@gmail.com', 'cod'),
(24, 'Ngô Văn Quý', '0948926993', 'Hưng Yên', 'ngoq6155@gmail.com', 'cod'),
(25, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(26, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(27, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod'),
(28, 'Ngô Xuân Quý', '0889033006', 'Hà Nội', 'luvngo27@gmail.com', 'cod');

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

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `status`, `image`) VALUES
(1, 'Laptop Asus 2', 'slider của asus', 1, '1736513227ASUS2.jpg'),
(2, 'Asus TUF 14', 'slider của asus', 1, '1736513303ASUS.jpg'),
(3, 'Màn hình MSI', 'slider của msi', 1, '1736513341MSI.jpg'),
(4, 'Chuột Asus', 'slider của asus', 1, '1736513404asus9.jpg'),
(5, 'Bàn phím Asus', 'slider của asus', 1, '1736513422asus8.jpg'),
(6, 'PC Asus', 'slider của asus', 1, '1736513436asus7.jpg'),
(7, 'Màn hình Asus', 'slider của asus', 1, '1736513453asus6.jpg'),
(8, 'Laptop Asus', 'slider của asus', 1, '1736513467asus5.png');

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
