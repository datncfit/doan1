-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 12:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblisting`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Xiaomi'),
(2, 'Iphone'),
(3, 'Samsung'),
(4, 'lenovo'),
(5, 'asus'),
(6, 'dell'),
(7, 'Macbook'),
(8, 'Hp'),
(9, 'msi');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tecnology', NULL, '2023-04-03 08:11:18', '2023-04-03 08:11:18'),
(2, 'Design', NULL, '2023-04-03 08:11:18', '2023-04-03 08:11:18'),
(3, 'Development', NULL, '2023-04-03 08:21:55', '2023-04-03 08:21:55'),
(5, 'Android', NULL, '2023-04-09 05:04:15', '2023-04-09 05:04:15'),
(6, 'IOT', NULL, '2023-04-09 05:04:36', '2023-04-09 05:04:36'),
(7, 'Information Tecnology', NULL, '2023-04-09 05:05:08', '2023-04-09 05:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethinhanh`
--

CREATE TABLE `chitiethinhanh` (
  `mactha` int(10) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `prd_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chitiethinhanh`
--

INSERT INTO `chitiethinhanh` (`mactha`, `image`, `prd_id`) VALUES
(1, 'xiaomi_redmi_note_8_chitiet.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `MACV` int(10) NOT NULL,
  `TENCV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`MACV`, `TENCV`) VALUES
(1, 'Quản trị'),
(2, 'Nhà tuyển dụng'),
(3, 'nhân viên'),
(4, 'Người dùng');

-- --------------------------------------------------------

--
-- Table structure for table `cthd`
--

CREATE TABLE `cthd` (
  `SOHD` int(10) NOT NULL,
  `prd_id` int(10) NOT NULL,
  `SL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MAGIO` int(10) NOT NULL,
  `prd_id` int(10) DEFAULT NULL,
  `SL` int(10) DEFAULT NULL,
  `GIA` int(10) DEFAULT NULL,
  `TONGGIA` int(10) DEFAULT NULL,
  `NGTAO` varchar(50) DEFAULT NULL,
  `img` char(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `tensp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MAGIO`, `prd_id`, `SL`, `GIA`, `TONGGIA`, `NGTAO`, `img`, `EMAIL`, `tensp`) VALUES
(12, 1, 2, 522, 1044, NULL, NULL, 'caothaongan@gmail.com', NULL),
(32, 16, 2, 218, 436, '28/2/2022', 'Xiaomi_redmi_note_8_bac.jpg', '19004158@st.vlute.edu.vn', 'Xiaomi Redmi Note 8');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MAHA` int(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thongtin` varchar(255) DEFAULT NULL,
  `prd_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`MAHA`, `image`, `thongtin`, `prd_id`) VALUES
(1, 'bac.jpg', 'Xiaomi Redmi note 8 bạc', 16),
(2, 'xam.jpg', 'Xiaomi Redmi note 8 Xám', 16),
(3, 'xanh_duong.jpg', 'Xiaomi Redmi note 8 Xanh dương', 16),
(4, 'xanh_la.jpg', 'Xiaomi Redmi note 8 Xanh lá', 16),
(5, 'xiaomi_redmi_note_8_chitiet.jpg', 'Chi tiết Xiaomi ', 16);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `SOHD` int(10) NOT NULL,
  `NGHD` varchar(255) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `TRIGIA` int(10) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `yeucaukhac` varchar(255) DEFAULT NULL,
  `tinhtrangdonhang` int(10) DEFAULT NULL,
  `sodienthoai` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`SOHD`, `NGHD`, `EMAIL`, `TRIGIA`, `diachi`, `yeucaukhac`, `tinhtrangdonhang`, `sodienthoai`) VALUES
(17, '2022-02-28 07:28:08', '19004158@st.vlute.edu.vn', 436, 'Vinh Long', '', 2, '0975319991');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(10) NOT NULL,
  `TENKH` varchar(50) NOT NULL,
  `DOANHSO` int(10) NOT NULL,
  `SDT` int(20) NOT NULL,
  `gioitinh` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `TENKH`, `DOANHSO`, `SDT`, `gioitinh`) VALUES
(1, 'HUY', 45333, 365042355, NULL),
(2, 'Phuc', 0, 975319991, 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` int(10) NOT NULL,
  `TENKM` varchar(255) NOT NULL,
  `gia` int(10) NOT NULL,
  `prd_id` int(10) DEFAULT NULL,
  `ngaybd` date DEFAULT NULL,
  `ngaykt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MAKM`, `TENKM`, `gia`, `prd_id`, `ngaybd`, `ngaykt`) VALUES
(1, 'SIÊU SALE 13 / 1', 2, 1, '2021-11-03', '2021-11-18'),
(2, 'sieu sale trọn đời', 5, 7, '2021-11-01', '2021-12-31'),
(3, 'SIEU SALE', 3, 16, '2021-11-11', '2022-01-21'),
(4, 'SIEU SALE', 7, 9, '2021-11-12', '2021-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
(1, 'dienthoai'),
(2, 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `mamau` varchar(10) NOT NULL,
  `tenmau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`mamau`, `tenmau`) VALUES
('000000', 'đen'),
('1E90FF', 'Xanh dương'),
('808080', 'Xám'),
('C0C0C0', 'Bạc'),
('FF0000', 'Đỏ'),
('FFC0CB', 'Hồng'),
('FFD700', 'Vàng'),
('FFFFFF', 'Trắng');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` int(10) NOT NULL,
  `TENNV` varchar(50) NOT NULL,
  `DIACHI` varchar(100) NOT NULL,
  `GIOITINH` bit(10) NOT NULL,
  `NGAYVAOLAM` date NOT NULL,
  `DOANH_SO` int(10) NOT NULL,
  `MACV` int(10) NOT NULL,
  `SDT` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_user_company` int(11) NOT NULL,
  `id_user_created` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `list_tag` varchar(256) NOT NULL,
  `position` varchar(255) NOT NULL,
  `city` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `wards` int(11) NOT NULL,
  `job_native` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `thumb` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user_company`, `id_user_created`, `name`, `title`, `description`, `list_tag`, `position`, `city`, `district`, `wards`, `job_native`, `salary`, `created_at`, `updated_at`, `thumb`) VALUES
(8, 65, 53, 'sdf', 'sdf', 'sdfs', '2,3', 'sfdsf', 86, 855, 29548, '1', 'dgdf', '2023-04-05 11:06:26', '2023-04-05 11:06:26', '14c62cf5b4206064aec871f0f8376af2.png'),
(9, 65, 53, 'CÔNG TY TNHH TIMIND', 'Technical SEO Specialist (Chuyên Viên SEO Kỹ Thuật) Thu Nhập Lên Tới 25 Triệu/ Tháng', '<h3><a href=\"https://www.thegioididong.com/dtdd/iphone-14-pro-max-1tb\" target=\"_blank\" title=\"Tham khảo điện thoại di động đang kinh doanh tại Thế Giới Di Động\">iPhone 14 Pro Max 1TB</a>&nbsp;l&agrave; phi&ecirc;n bản điện thoại cao cấp nhất m&agrave; Apple đ&atilde; cho ra mắt tại sự kiện giới thiệu sản phẩm mới cho năm 2022. Được thừa hưởng mọi c&ocirc;ng nghệ h&agrave;ng đầu thế giới n&ecirc;n m&aacute;y hứa hẹn sẽ mang lại trải nghiệm sử dụng tốt nhất từ chơi game cho tới chụp ảnh, xứng đ&aacute;ng l&agrave; chiếc điện thoại đ&aacute;ng mua nhất tr&ecirc;n thị trường hiện tại.</h3>\n\n<h3>Kiểu d&aacute;ng thiết kế sang trọng v&agrave; cao cấp</h3>\n\n<p>Cho đến nay th&igrave; kiểu d&aacute;ng thiết kế vu&ocirc;ng vức như thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone-13-series\" target=\"_blank\" title=\"Xem thêm iPhone 13 series đang kinh doanh tại Thế Giới Di Động\">iPhone 13 series</a>&nbsp;vẫn được người d&ugrave;ng rất ưa chuộng vậy n&ecirc;n Apple đ&atilde; giữ nguy&ecirc;n tạo h&igrave;nh n&agrave;y tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-14-pro-max\" target=\"_blank\" title=\"Tham khảo điện thoại đang kinh doanh tại Thế Giới Di Động\">iPhone 14 Pro Max</a>, c&aacute;c cạnh v&agrave; hai mặt được gia c&ocirc;ng phẳng gi&uacute;p cho điện thoại to&aacute;t l&ecirc;n vẻ ngo&agrave;i sang trọng đầy t&iacute;nh thời thượng.</p>\n', '2,3', 'sdadsa', 86, 861, 29809, '2', 'sdfsd', '2023-04-05 11:20:29', '2023-04-05 11:20:29', '03a760e6c95e183caff8d9660f8888fe-1024x576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prd_id` int(10) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `image` char(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `maloai` int(10) DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `mamau` varchar(10) DEFAULT NULL,
  `manhinh` varchar(200) DEFAULT NULL,
  `hedieuhanh` varchar(100) DEFAULT NULL,
  `cameratr` varchar(100) DEFAULT NULL,
  `cameras` varchar(100) DEFAULT NULL,
  `chip` varchar(100) DEFAULT NULL,
  `ram` varchar(100) DEFAULT NULL,
  `bnt` varchar(100) DEFAULT NULL,
  `sim` varchar(100) DEFAULT NULL,
  `pinsac` varchar(100) DEFAULT NULL,
  `hang` varchar(100) DEFAULT NULL,
  `loaiCPU` varchar(200) DEFAULT NULL,
  `cad` varchar(200) DEFAULT NULL,
  `ocung` varchar(100) DEFAULT NULL,
  `ktmh` varchar(200) DEFAULT NULL,
  `conggt` varchar(200) DEFAULT NULL,
  `kichthuoc` varchar(200) DEFAULT NULL,
  `congnghemh` varchar(200) DEFAULT NULL,
  `dophangiai` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `price`, `quantity`, `description`, `brand_id`, `maloai`, `ngaynhap`, `mamau`, `manhinh`, `hedieuhanh`, `cameratr`, `cameras`, `chip`, `ram`, `bnt`, `sim`, `pinsac`, `hang`, `loaiCPU`, `cad`, `ocung`, `ktmh`, `conggt`, `kichthuoc`, `congnghemh`, `dophangiai`) VALUES
(1, 'Iphone X', 'iphone_x.jpg', 522, 10, 'Điện thoại chất lượng', 1, 1, '2021-11-01', '000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'lenovo ideapad L340 ', 'lenovo_l340_9300h.jpg', 800, 3, 'Laptop mạnh mẻ', 1, 2, '2021-11-01', NULL, NULL, 'Windows 10 Home SL', NULL, NULL, NULL, '8GB', NULL, NULL, '3 Cell 45 WHr', NULL, 'Intel Core i5-9300HF 2.4GHz up to 4.1GHz 8MB', 'NVIDIA GeForce GTX 1650 4GB GDDR5', '512GB SSD M.2 2242 NVMe', '15.6 inches', '2x USB 3.1, 1x USB 3.1 Type-C, HDMI, RJ-45', '363 x 254.6 x 23.9 (mm)', '15.6\" FHD (1920 x 1080) IPS, Anti-Glare', '1920 x 1080 pixels (FullHD)'),
(5, 'lenovo ideapad L240 ', 'lenovo_l340_9300h.jpg', 800, 3, 'Laptop mạnh mẻ', 4, 2, '2021-11-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Laptop HP Envy 13 ba1031TU i7', 'hp-envy-13-ba1031tu-i7-.jpg', 1464, 7, 'Laptop mạnh mẻ', 6, 2, '2021-11-15', NULL, NULL, 'Windows 10 Home SL + Office Home & Student 2019 vĩnh viễn', NULL, NULL, NULL, NULL, NULL, NULL, '3-cell Li-ion, 51 Wh', NULL, 'Intel Core i7 Tiger Lake - 1165G7', 'Card tích hợp - Intel Iris Xe Graphics', '1 TB SSD M.2 PCIe', 'Dài 306.5 mm - Rộng 194.6 mm - Dày 16.9 mm ', '2 x USB 3.1\r\n\r\nJack tai nghe 3.5 mm\r\n\r\nThunderbolt 3', '13.3 inch', '400 nits\r\n\r\n60Hz\r\n\r\nTấm nền IPS\r\n\r\nWled-backlit', '\r\nFull HD (1920 x 1080)'),
(7, 'Iphone 12', 'iphone_x.jpg', 522, 10, 'Điện thoại chất lượng', 2, 1, '2021-11-01', NULL, 'OLED6.1\"Super Retina XDR', 'iOS 14', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '4 GB', '64 GB', '1 Nano SIM & 1 eSIMHỗ trợ 5G', '2815 mAh20 W', 'Apple Inc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Samsung Galaxy J7 pro', 'sam_sung_galaxy.jpg', 326, 5, 'Điện thoại bền bỉ', 3, 1, '2021-11-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Laptop Lenovo Yoga Slim 7 14ITL05 i5 1135G7/8GB/512GB/Win10', '20711_lenovo_thinkbook_15.jpg', 800, 3, 'Laptop mạnh mẻ', 4, 2, '2021-11-01', NULL, NULL, 'Windows 10 Home SL', NULL, NULL, NULL, NULL, NULL, NULL, '4-cell, 60.7 Wh', NULL, 'i51135G72.4GHz', 'Card tích hợpIntel Iris Xe', 'SSD 512 GB NVMe PCIe', '14 inch', '1 x USB 3.2\r\n\r\n1 x USB 3.2 (Always on)\r\n\r\n2 x Thunderbolt 4 USB-C\r\n\r\nHDMI\r\n\r\nJack tai nghe 3.5 mm', 'Dài 320.6 mm - Rộng 208.18 mm - Dày 14.9 mm', 'Dolby AtmosStereo speakers', 'Full HD (1920 x 1080)'),
(11, 'Lenovo ThinkBook 14', 'lenovo-thinkbook-14.jpg', 800, 3, 'Laptop mạnh mẻ', 4, 2, '2021-11-04', NULL, NULL, 'Up to Windows 10 Pro', NULL, NULL, NULL, '8 GB, DDR4, 3200 MHz', NULL, NULL, NULL, NULL, 'AMD Ryzen 5-5500U', 'Đồ họa Intel UHD\r\nTùy chọn: Đồ họa rời AMD Radeon™625', 'SSD 512 GB NVMe PCIeHỗ trợ khe cắm HDD SATA', '14.0\", 1920 x 1080 Pixel, IPS, 60 Hz, 300 nits, IPS LCD LED Backlit, True Tone', '2 x USB 3.2\r\n\r\nHDMI\r\n\r\nLAN (RJ45)\r\n\r\nThunderbolt 4 USB-C\r\n\r\nUSB Type-C', '323 x 217.5 x 17.9', '250 nitsTấm nền IPS', 'Full HD (1920 x 1080)'),
(12, 'Laptop HP Envy 13 ba1535TU i7', 'hp-envy-13-ba1535tu-i7.jpg', 1285, 7, 'Laptop mạnh mẻ', 6, 2, '2021-11-15', NULL, NULL, 'Windows 11 Home SL', NULL, NULL, NULL, NULL, NULL, NULL, '3-cell Li-ion, 51 Wh', NULL, 'Intel Core i7 Tiger Lake - 1165G7', 'Card tích hợp - Intel Iris Xe Graphics', 'SSD 512 GB NVMe PCIe', 'Dài 306.5 mm - Rộng 194.6 mm - Dày 16.9 mm', '2x SuperSpeed USB A\r\n\r\nJack tai nghe 3.5 mm\r\n\r\nThunderbolt 4 USB-C', '13.3 inch', '100% sRGB\r\n\r\n400 nits\r\n\r\nTấm nền IPS\r\n\r\nWled-backlit', '\r\nFull HD (1920 x 1080)'),
(15, 'Iphone X', 'iphone_x_bac.jpg', 522, 7, 'Điện thoại xịn', 2, 1, '2021-11-12', 'C0C0C0', 'OLED, 5,8\", Super Retina', 'iOS 12', '\r\n7 MP', '2 camera 12 MP', 'Apple A11 Bionic', '3 GB', '64 GB', '1 Nano SIM', '2716 mAh', ' Apple Inc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Xiaomi Redmi Note 8', 'bac.jpg', 218, 5, 'Đỉnh cao của công nghệ', 1, 1, '2021-11-13', 'C0C0C0', 'Màn hình: \r\nIPS LCD, 6.3\'\', Full HD+', 'Android 11', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2MP', '13 MP', 'Snapdragon 665', '8 GB', '\r\n128 GB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh, 18 W', 'Xiaomi', 'MediaTek 1100', 'Mali-G57 MC2', NULL, '6,53 inch', NULL, 'Dài 161.8 mm - Ngang 75.3 mm - Dày 8.9 mm - Nặng 190 g', 'IPS LCD', 'FHD+ (1080 x 2400 pixel)');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MATK` int(10) NOT NULL,
  `TENTK` varchar(50) NOT NULL,
  `PASS` varchar(255) NOT NULL,
  `MANV` int(10) DEFAULT NULL,
  `MACV` int(10) NOT NULL,
  `MAKH` int(10) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `masothue` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MATK`, `TENTK`, `PASS`, `MANV`, `MACV`, `MAKH`, `EMAIL`, `phone`, `masothue`, `address`) VALUES
(65, 'VLUTE', '$2y$10$fekm7JP/cwV2USV5oItzbeFNsv9zdeD8K23PaamjKBY8CcNK5s2hu', NULL, 1, NULL, 'vlute@gmail.com', '08994561765', '000111222333', 'Vĩnh Long'),
(66, 'Công Ty Cổ Phần 111', '$2y$10$n4wwzmWzH9S3dNUx4ZFcJOrz64NTAexelB7FO9HVZDAHTH.iBIwCq', NULL, 2, NULL, '111@gmail.com', '11122233311', NULL, NULL),
(70, 'minhthien', '$2y$10$Y7DQED6WtB8YDuWtos.Jo.6vlnaOyjAENYDbOboNeGz1YZI9GGBfO', NULL, 4, NULL, 'meo@gmail.com', '098987654', NULL, NULL),
(71, 'nam', '$2y$10$8ABEQ/YbLnfMdyySE/CYbeB6GE8m2Ec42SOBHBJGAgUNN2.qWSBbK', NULL, 4, NULL, 'nam@gmail.com', '01324556', NULL, NULL),
(72, 'AAAA', '$2y$10$yaajjYyYINcA03IsLfY7xe/fmMVsLBNgq6btv/F0PhncBSRCjFVUO', NULL, 1, NULL, 'aa@gmail.com', '', NULL, NULL),
(73, 'bbb', '$2y$10$Dc7luriTIIAeB/8/RLZgL.Ucb9QBlnUywQCSxs4W7tjlV00Y3AIve', NULL, 2, NULL, 'bb@gmail.com', '', NULL, NULL),
(74, 'gggg', '$2y$10$s6UAaVzwU5DUd7RDMDHen.zdNfE0/KGBs.7tSkQUYvvjbZUaSQR6m', NULL, 4, NULL, 'ggg@gmail.com', '', NULL, NULL),
(77, 'sfsdsd', '$2y$10$IPW2gM3KJqnjU5dAsZtzve6lH4jZPPX2tknOP6L3hpaNEkbwvZKCy', NULL, 2, NULL, 'nguoidung@gmail.com', '98987654111', '12312344', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangthanhtoan`
--

CREATE TABLE `tinhtrangthanhtoan` (
  `MATTTT` int(10) NOT NULL,
  `TENTTTT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tinhtrangthanhtoan`
--

INSERT INTO `tinhtrangthanhtoan` (`MATTTT`, `TENTTTT`) VALUES
(1, 'Rồi'),
(2, 'Chưa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD PRIMARY KEY (`mactha`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MACV`);

--
-- Indexes for table `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`SOHD`,`prd_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MAGIO`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MAHA`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SOHD`),
  ADD KEY `fk_hd_tttt` (`tinhtrangdonhang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`mamau`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `MACV` (`MACV`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `mamau` (`mamau`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MATK`),
  ADD UNIQUE KEY `TENTK` (`TENTK`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `masothue` (`masothue`),
  ADD KEY `MANV` (`MANV`),
  ADD KEY `MACV` (`MACV`),
  ADD KEY `MAKH` (`MAKH`);

--
-- Indexes for table `tinhtrangthanhtoan`
--
ALTER TABLE `tinhtrangthanhtoan`
  ADD PRIMARY KEY (`MATTTT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  MODIFY `mactha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `MACV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MAGIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `MAHA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `SOHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MAKM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MATK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tinhtrangthanhtoan`
--
ALTER TABLE `tinhtrangthanhtoan`
  MODIFY `MATTTT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD CONSTRAINT `chitiethinhanh_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`);

--
-- Constraints for table `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `cthd_ibfk_1` FOREIGN KEY (`SOHD`) REFERENCES `hoadon` (`SOHD`),
  ADD CONSTRAINT `cthd_ibfk_2` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`),
  ADD CONSTRAINT `cthd_ibfk_3` FOREIGN KEY (`SOHD`) REFERENCES `hoadon` (`SOHD`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hd_tttt` FOREIGN KEY (`tinhtrangdonhang`) REFERENCES `tinhtrangthanhtoan` (`MATTTT`);

--
-- Constraints for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MACV`) REFERENCES `chucvu` (`MACV`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`mamau`) REFERENCES `mau` (`mamau`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MANV`),
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`MACV`) REFERENCES `chucvu` (`MACV`),
  ADD CONSTRAINT `taikhoan_ibfk_3` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
