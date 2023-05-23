-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 25, 2022 lúc 04:49 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `brands`
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
-- Cấu trúc bảng cho bảng `chitiethinhanh`
--

CREATE TABLE `chitiethinhanh` (
  `mactha` int(10) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `prd_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiethinhanh`
--

INSERT INTO `chitiethinhanh` (`mactha`, `image`, `prd_id`) VALUES
(1, 'xiaomi_redmi_note_8_chitiet.jpg', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `MACV` int(10) NOT NULL,
  `TENCV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`MACV`, `TENCV`) VALUES
(1, 'Quản trị'),
(2, 'Quản lí'),
(3, 'Nhân viên'),
(4, 'Người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `SOHD` int(10) NOT NULL,
  `prd_id` int(10) NOT NULL,
  `SL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MAGIO`, `prd_id`, `SL`, `GIA`, `TONGGIA`, `NGTAO`, `img`, `EMAIL`, `tensp`) VALUES
(12, 1, 2, 522, 1044, NULL, NULL, 'caothaongan@gmail.com', NULL),
(32, 16, 2, 218, 436, '28/2/2022', 'Xiaomi_redmi_note_8_bac.jpg', '19004158@st.vlute.edu.vn', 'Xiaomi Redmi Note 8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MAHA` int(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thongtin` varchar(255) DEFAULT NULL,
  `prd_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`MAHA`, `image`, `thongtin`, `prd_id`) VALUES
(1, 'bac.jpg', 'Xiaomi Redmi note 8 bạc', 16),
(2, 'xam.jpg', 'Xiaomi Redmi note 8 Xám', 16),
(3, 'xanh_duong.jpg', 'Xiaomi Redmi note 8 Xanh dương', 16),
(4, 'xanh_la.jpg', 'Xiaomi Redmi note 8 Xanh lá', 16),
(5, 'xiaomi_redmi_note_8_chitiet.jpg', 'Chi tiết Xiaomi ', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`SOHD`, `NGHD`, `EMAIL`, `TRIGIA`, `diachi`, `yeucaukhac`, `tinhtrangdonhang`, `sodienthoai`) VALUES
(17, '2022-02-28 07:28:08', '19004158@st.vlute.edu.vn', 436, 'Vinh Long', '', 2, '0975319991');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(10) NOT NULL,
  `TENKH` varchar(50) NOT NULL,
  `DOANHSO` int(10) NOT NULL,
  `SDT` int(20) NOT NULL,
  `gioitinh` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `TENKH`, `DOANHSO`, `SDT`, `gioitinh`) VALUES
(1, 'HUY', 45333, 365042355, NULL),
(2, 'Phuc', 0, 975319991, 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` int(10) NOT NULL,
  `TENKM` varchar(255) NOT NULL,
  `gia` int(10) NOT NULL,
  `prd_id` int(10) DEFAULT NULL,
  `ngaybd` date DEFAULT NULL,
  `ngaykt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MAKM`, `TENKM`, `gia`, `prd_id`, `ngaybd`, `ngaykt`) VALUES
(1, 'SIÊU SALE 13 / 1', 2, 1, '2021-11-03', '2021-11-18'),
(2, 'sieu sale trọn đời', 5, 7, '2021-11-01', '2021-12-31'),
(3, 'SIEU SALE', 3, 16, '2021-11-11', '2022-01-21'),
(4, 'SIEU SALE', 7, 9, '2021-11-12', '2021-12-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
(1, 'dienthoai'),
(2, 'laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mau`
--

CREATE TABLE `mau` (
  `mamau` varchar(10) NOT NULL,
  `tenmau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mau`
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
-- Cấu trúc bảng cho bảng `nhanvien`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `TENNV`, `DIACHI`, `GIOITINH`, `NGAYVAOLAM`, `DOANH_SO`, `MACV`, `SDT`) VALUES
(1, 'Huỳnh Vĩnh Phúc', 'Hòa Thạnh, Tam Bình, Vĩnh Long', b'0000000001', '2021-11-01', 0, 1, '0975319991'),
(2, 'Nguyễn Chí Đạt', 'Gần Cần Thơ', b'0000000001', '2021-11-02', 0, 2, '0365042355'),
(3, 'Lê Thanh Huy', 'Hựu Thành, Đồng Tháp', b'0000000001', '2021-11-03', 0, 2, '0912854550'),
(4, 'Cao Thảo Ngân', 'Vũng Liêm', b'0000000000', '2021-11-05', 0, 3, 'Không biết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `price`, `quantity`, `description`, `brand_id`, `maloai`, `ngaynhap`, `mamau`, `manhinh`, `hedieuhanh`, `cameratr`, `cameras`, `chip`, `ram`, `bnt`, `sim`, `pinsac`, `hang`, `loaiCPU`, `cad`, `ocung`, `ktmh`, `conggt`, `kichthuoc`, `congnghemh`, `dophangiai`) VALUES
(1, 'Iphone X', 'iphone_x.jpg', 522, 10, 'Điện thoại chất lượng', 2, 1, '2021-11-01', '000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'lenovo ideapad L340 ', 'lenovo_l340_9300h.jpg', 800, 3, 'Laptop mạnh mẻ', 4, 2, '2021-11-01', NULL, NULL, 'Windows 10 Home SL', NULL, NULL, NULL, '8GB', NULL, NULL, '3 Cell 45 WHr', NULL, 'Intel Core i5-9300HF 2.4GHz up to 4.1GHz 8MB', 'NVIDIA GeForce GTX 1650 4GB GDDR5', '512GB SSD M.2 2242 NVMe', '15.6 inches', '2x USB 3.1, 1x USB 3.1 Type-C, HDMI, RJ-45', '363 x 254.6 x 23.9 (mm)', '15.6\" FHD (1920 x 1080) IPS, Anti-Glare', '1920 x 1080 pixels (FullHD)'),
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
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MATK` int(10) NOT NULL,
  `TENTK` varchar(50) NOT NULL,
  `PASS` varchar(255) NOT NULL,
  `MANV` int(10) DEFAULT NULL,
  `MACV` int(10) NOT NULL,
  `MAKH` int(10) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MATK`, `TENTK`, `PASS`, `MANV`, `MACV`, `MAKH`, `EMAIL`) VALUES
(50, 'Haha', '$2y$10$J5Yg3WAPYWoXAXDgKEsFYuQsDC/KM2hSqg9Y234cge/g05lifhNLe', NULL, 3, NULL, 'haha@gmail.com'),
(52, 'Phuc', '$2y$10$yE1MFsfzq9npJEThamSZAOXLe3SGtk6sBVXxDGul7LVptd6cWeiIu', NULL, 4, NULL, '19004158@st.vlute.edu.vn'),
(53, 'VinhPhuc', '$2y$10$Y7DQED6WtB8YDuWtos.Jo.6vlnaOyjAENYDbOboNeGz1YZI9GGBfO', NULL, 1, NULL, 'huynhvinhphuc7777@gmail.com'),
(56, 'Dat2', '$2y$10$jd5BNdKbZSI4AyS.uBHrgeUh1lRIbmrPOasAV6o8/0.Mz1uMdGdDy', 2, 3, NULL, 'nguyenchidat@st.vlute.edu.vn'),
(57, 'LE THANH HUY', '$2y$10$YtkrYJUgc.8pLG7YOhQSqudllUtPMQTIhXehyXtldItZRPhhkRE9u', 3, 1, NULL, 'LTH@gmail.com'),
(58, 'Cao Thảo Ngân', '$2y$10$ri.2s9GUp8auNLoijN/JvuYlVTB3ARL9BVPyyzFLNkqj5.oUE9DVm', NULL, 3, NULL, 'caothaongan@gmail.com'),
(59, 'ngan3', '$2y$10$Jbvoa1WCTDxZryM//NTl6.WjFiODHBMKOH/BH1OuLwKgqHnv4q7VC', NULL, 3, NULL, 'greber'),
(60, 'NGUYEN VAN A', '$2y$10$gRNmEa.HFV85HfqZ3FtHmu3sxrsA44.1h4XLo5QH00PqkAbQHhAx2', NULL, 4, NULL, 'AVANNGUYEN@gmail.com'),
(61, 'HoangAnh', '$2y$10$kz19cvUV9wZNthe95nUdIuWt83EOMWaMqjoRhIS/B/27YAp3bK7vy', NULL, 4, NULL, 'hte@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrangthanhtoan`
--

CREATE TABLE `tinhtrangthanhtoan` (
  `MATTTT` int(10) NOT NULL,
  `TENTTTT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tinhtrangthanhtoan`
--

INSERT INTO `tinhtrangthanhtoan` (`MATTTT`, `TENTTTT`) VALUES
(1, 'Rồi'),
(2, 'Chưa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD PRIMARY KEY (`mactha`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MACV`);

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`SOHD`,`prd_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MAGIO`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MAHA`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SOHD`),
  ADD KEY `fk_hd_tttt` (`tinhtrangdonhang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`mamau`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `MACV` (`MACV`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `mamau` (`mamau`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MATK`),
  ADD UNIQUE KEY `TENTK` (`TENTK`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `MANV` (`MANV`),
  ADD KEY `MACV` (`MACV`),
  ADD KEY `MAKH` (`MAKH`);

--
-- Chỉ mục cho bảng `tinhtrangthanhtoan`
--
ALTER TABLE `tinhtrangthanhtoan`
  ADD PRIMARY KEY (`MATTTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  MODIFY `mactha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `MACV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MAGIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `MAHA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `SOHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MAKM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MATK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `tinhtrangthanhtoan`
--
ALTER TABLE `tinhtrangthanhtoan`
  MODIFY `MATTTT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD CONSTRAINT `chitiethinhanh_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`);

--
-- Các ràng buộc cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `cthd_ibfk_1` FOREIGN KEY (`SOHD`) REFERENCES `hoadon` (`SOHD`),
  ADD CONSTRAINT `cthd_ibfk_2` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`),
  ADD CONSTRAINT `cthd_ibfk_3` FOREIGN KEY (`SOHD`) REFERENCES `hoadon` (`SOHD`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hd_tttt` FOREIGN KEY (`tinhtrangdonhang`) REFERENCES `tinhtrangthanhtoan` (`MATTTT`);

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MACV`) REFERENCES `chucvu` (`MACV`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`mamau`) REFERENCES `mau` (`mamau`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MANV`),
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`MACV`) REFERENCES `chucvu` (`MACV`),
  ADD CONSTRAINT `taikhoan_ibfk_3` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
