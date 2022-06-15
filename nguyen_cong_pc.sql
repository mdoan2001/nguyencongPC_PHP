-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 07:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nguyen_cong_pc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `maDonHang` int(11) NOT NULL,
  `maSanPham` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `tongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `maDonHang`, `maSanPham`, `soLuong`, `tongTien`) VALUES
(40, 21, 30, 1, 13990000),
(52, 31, 58, 1, 5000000),
(53, 32, 15, 1, 34990000),
(54, 32, 25, 1, 19490000);

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id` int(11) NOT NULL,
  `CPU` varchar(255) NOT NULL,
  `VGA` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `dungLuong` varchar(255) NOT NULL,
  `trongLuong` varchar(255) NOT NULL,
  `mauSac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id`, `CPU`, `VGA`, `RAM`, `dungLuong`, `trongLuong`, `mauSac`) VALUES
(2, 'Core i3 1125G4 2.0Ghz up to 3.7Ghz-8Mb', 'Intel Iris Xe Graphics', '4Gb (2 Khe cắm / Hỗ trợ tối đa 16GB)', '256Gb SSD, 1TB HDD', '1.2kg', 'Đen'),
(3, 'Core i3 1125G4 2.0Ghz up to 3.7Ghz-8Mb', 'Intel Iris Xe Graphics', '4Gb (2 Khe cắm / Hỗ trợ tối đa 16GB)', '256Gb SSD', '1.2Kg', 'Đen'),
(4, 'Intel Core i7-11800H thế hệ thứ 11 (8 nhân, 24MB L3 Cache, lên đến 4,6GHz với Turbo Boost)', 'Nvidia Geforce RTX3060 6G DDR6', '32GB DDR4 3200Mhz (2*16GB)', '1TB SSD M.2 PCIe NVMe', '3kg', 'Bạc'),
(5, 'Intel Core™ i3 1115G4 (3.0Ghz, 6MB Cache)', 'Intel® Iris® Xe Graphics', '4GB DDR4 3200Mhz (1*4GB) ', '256GB PCIe NVMe Class 35 M2 SSD (có slot 2.5 inch)', '1.52kg', 'Đen'),
(6, 'AMD Ryzen™ 7-4700U', 'AMD Reneon Graphics', '	\r\n8GB(1x 8GB) DDR4 3200Mhz', '512GB SSD M2 PCIe NVMe\r\n\r\n', '1.52kg', 'Đen'),
(7, 'Intel Core i5 1135G7 (2.4Ghz /8MB cache)', 'Intel Iris Xe Graphics\r\n\r\n', '8GB DDR4 3200MHz (2* 4GB)', '512GB M.2 PCIe NVMe SSD', '2Kg', 'Xám'),
(8, 'AMD Ryzen™ 5-5500U (2.10GHz up to 4.00GHz, 8MB Cache)', 'AMD Radeon Graphics', '8GB DDR4 3200MHz (2Khe)', '256GB M.2 PCIe NVMe SSD', '1.52Kg', 'Đen nhám'),
(9, 'Intel Core i5 1135G7 (2.4Ghz /8MB cache)', 'Intel Iris Xe Graphics', '8GB DDR4 3200MHz (2* 4GB', '512GB M.2 PCIe NVMe SSD', '2Kg', 'Xám'),
(10, 'Intel® Core™ i3-1115G4', 'Intel UHD Graphics', '4GB(4GBx1) DDR4 3200MHz', '256GB M.2 256GB PCIe NVMe', '2Kg', 'Đen'),
(11, 'Intel Core i5 1155G7 (2.5Ghz /8MB cache upto 4.5Ghz)', 'InTel UHD Graphics', '8GB DDR4 3200MHz ', '512GB M.2 PCIe NVMe SSD', '2Kg', 'Đen'),
(12, 'Apple M1 chip with 8‑core CPU, 7‑core GPU, and 16‑core Neural Engine', '7‑core GPU', '8GB unified memory', '256GB', '1Kg', 'Trắng'),
(13, 'M1 chip with 8-core CPU and 8-core GPU, 16-core Neural Engine', '8‑core GPU', '16GB', '256GB', '1Kg', 'Trắng'),
(14, 'Apple M1 chip with 8-core CPU and 7-core GPU', 'Apple GPU 7 core', '8GB (Dung lượng tối đa 16GB)', '256GB SSD', '1Kg', 'Vàng(Gold)'),
(15, 'Apple M1 chip with 8‑core CPU', 'Apple M1 GPU 7 cores', '16GB', '512GB SSD', '1Kg', 'Vàng (Gold)'),
(16, 'Apple M1 chip with 8‑core CPU and 8‑core GPU', 'GTX 1060', '8GB unified memory', '256GB SSD ', '1.52Kg', 'Trắng'),
(17, 'Apple M1 chip with 8‑core CPU, 7‑core GPU, and 16‑core Neural Engine', '7‑core GPU', '8GB unified memory', '512GB', '1.52Kg', 'Trắng'),
(20, 'Intel® Core™ i3-1115G4 Processor 3.0 GHz (6M Cache, up to 4.1 GHz, 2 cores)', 'Intel® UHD Graphics', '4GB DDR4 on board', '512GB M.2 NVMe™ PCIe® 3.0 SSD', '1.52kg', 'Bạc(Silver)'),
(21, 'Core i5 1135G7 2.4 Ghz up to 4.2Ghz-8Mb', 'Intel Iris Xe Graphics', '8Gb (Nâng cấp tối đa 20GB (4GB onboard + 16GB So-dimmed))', '512Gb SSD (nâng cấp tói đa 2TB HDD và 512SSD PCIe NVMe)', '1.52Kg', 'Trắng'),
(22, 'Intel Core i5-8250U (4 x 1.6GHz/6MB cache)', 'Intel UHD 620', '8GB DDR4', '256GB SSD (thêm 01 khe cắm SSD )', '2Kg', 'Xám'),
(23, 'Intel Core i5-1135G7 thế hệ thứ 11 (2,40 GHz, tối đa 4,20 GHz với Turbo Boost, 4 lõi, 8 luồng, 8 MB Cache)', 'Integrated Intel Iris Xe Graphics', '8 GB DDR4', 'SSD 256GB', '2Kg', 'Đen'),
(24, 'Bộ xử lý Intel® Core™ i5-10300H 2,5 GHz (Bộ nhớ đệm 8M, tối đa 4,5 GHz, 4 nhân)', 'NVIDIA® GeForce® GTX 1650 4GB GDDR6', '8GB DDR4 SO-DIMM 2933MHz tối đa 32GB', 'SSD 512GB M.2 NVMe™ PCIe® 3.0', '2Kg', 'Đen'),
(25, 'Intel® Core™ i5-11400H Processor 2.7 GHz (12M Cache, up to 4.5 GHz, 6 Cores)', 'NVIDIA® GeForce RTX™ 3050 Laptop GPU + Intel® UHD Graphics', '8GB DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)', '1TB HDD', '2Kg', 'Đen'),
(26, 'Intel® Core™ i5-1135G7 Processor 2.4 GHz (8M Cache, up to 4.2 GHz, 4 cores)', 'Intel® Iris Xe Graphics', '8GB DDR4 on board', '512GB M.2 NVMe™ PCIe® 3.0 SSD', '2Kg', 'Xám'),
(27, 'AMD Ryzen™ 7 6800H Mobile Processor (8-core/16-thread, 20MB cache, up to 4.7 GHz max boost)', 'NVIDIA® GeForce RTX™ 3050 Laptop GPU', '8GB DDR5-4800 SO-DIMM, 2 slots', '1TB HDD', '2kg', 'Đen'),
(28, 'AMD Ryzen™ 7-5700U', 'RTX 1080', '8GB (4GB DDR4 on board + 4GB DDR4 on board)', '512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n\r\n', '2Kg', 'Bạc'),
(29, 'Core i7 12700H 2.3Ghz-24MB', 'NVIDIA® GeForce RTX™ 3050 4GB DDR6', '16Gb (8GB*2 LPDDR4X on board)', '512GB M.2 2230 NVMe™ PCIe® 4.0 SSD', '2Kg', 'Đen'),
(30, 'Core i3 1115G4 3.0Ghz-6Mb', 'Intel Graphics UHD', '4Gb (DDR4-3200 SDRAM (1 x 4GB)/ 2 khe cắm)', '256GB PCIe® NVMe™ M.2 SSD', '1.5Kg', 'Trắng'),
(31, 'Intel® Core™ i3-1005G1', 'Intel UHD', '4 GB DDR4-2666 SDRAM (1 x 4 GB)', 'SSD 256GB M2. PCIe', '1.5Kg', 'Trắng'),
(32, 'Ryzen 7 5800H 3.2Ghz-16Mb', 'NVIDIA RTX 3050 4GB DDR6', '8Gb (Up to 32 GB DDR4-3200 MHz RAM/ 2 slots)', '512GB SSD', '1.5kg', 'Đen'),
(33, 'Core i3 1115G4 3.0Ghz-6Mb', 'Intel UHD Graphics', '8Gb (DDR4-3200 (2 slots))', '256GB SSD PCIe (M.2 2280)', '1.2Kg', 'Trắng'),
(34, 'Core i7', 'T600 NVIDIA QUADRO 4GB', '16GB (2x8GB) DDR4-3200', '1TB PCIe NVMe Three Layer Cell Solid State Drive', '2Kg', 'Trắng'),
(35, 'Ryzen 5 5600U 2.3Ghz-16Mb', 'AMD Radeon™ Graphics', '8Gb (8 GB DDR4-3200 SDRAM (onboard))', '256GB PCIe® NVMe™ M.2 SSD', '2kg', 'Đen'),
(36, 'Intel Core i5-1135G7', 'Intel Iris Xe', '8GB LPDDR4 3200 MHz', 'SSD 256GB M2. PCIe', '2Kg', 'Trắng'),
(37, 'Core i7- 11800H', 'T600 NVIDIA QUADRO 4GB', '16GB (2x8GB) DDR4-3200', '1TB PCIe NVMe Three Layer Cell Solid State Drive', '2Kg', 'Xám'),
(38, 'Intel Core i5-1135G7 thế hệ thứ 11', 'Integrated Intel Iris Xe Graphics', '8 GB DDR4', 'SSD 256GB', '2Kg', 'Đen'),
(39, 'AMD Ryzen 7 5800H', 'AMD Ryzen 7 5800H', '32GB', '1Tb SSD\r\n', '1.5Kg', 'Đen'),
(40, 'Intel Core i5-1135G7', 'VGA ON', '8Gb RAM', '512Gb SSD', '2Kg', 'Đen'),
(41, 'AMD Ryzen 5 5600H 3.3GHz up to 4.2GHz 16MB', 'NVIDIA GeForce RTX 3050 4GB GDDR6 Boost Clock 1500MHz, TGP 75W', '8GB (8x1) DDR4 3200MHz (2x SO-DIMM socket, up to 16GB SDRAM)', '512GB SSD M.2 2242 PCIe 3.0x4 NVMe', '2Kg', 'Đen'),
(42, 'Intel® Core™ i7-11800H Processors', 'GTX 1080', '32GB', '1TB HDD, 256 SSD', '2Kg', 'Trắng'),
(43, 'Ryzen 7 5800U (8C / 16T, 1.9 / 4.4GHz, 4MB L2 / 16MB L3)', 'Integrated AMD Radeon Graphics', '16Gb (Ram onmain bus 3200)', '512Gb SSD(One drive, 1x M.2 2280 SSD or 1x M.2 2242 SSD)', '2Kg', 'Đen'),
(44, 'M1 chip with 8-core CPU, 7-core GPU', '7‑core GPU', '16GB unified memory', '512GB', '1Kg', 'Trắng'),
(45, 'AMD Ryzen™ 5 5500U (2.1GHz/8MB cache)', 'NVIDIA® GeForce® GTX 1650 4G-GDDR6', '8GB DDR4', '512GB SSD PCIe NVMe (nâng cấp tối đa 1TB SSD)', '2Kg', 'Đen'),
(46, 'Core i5 1035G1 1.0 Ghz up to 3.6 Ghz-6MB', 'Nvidia GeForce MX330 2GB GDDR5', '8GB (Nâng cấp tối đa 20GB (4GB onboard + 16GB So-dimmed))', '512GB SSD ', '2Kg', 'Xám'),
(47, 'Intel® Core™ i7-12700H (up to 4.7Ghz, 24MB cache)- CPU thế hệ 12 mới nhất', 'NVIDIA® GeForce® RTX 3050Ti 4G-GDDR6', '8GB DDR4 3200Mhz', '512GB PCIe NVMe SED SSD (nâng cấp tối đa 2TB Gen4, 16 Gb/s, NVMe)', '2Kg', 'Đen'),
(48, 'Intel Core i7-11800H 2.3Ghz Up to 4.6Ghz-24MB', 'NVIDIA GeForce RTX 3050 with 4GB of dedicated GDDR6 VRAM', '8GB (2 Khe cắm / Hỗ trợ tối đa 32GB)', '512GB PCIe NVMe SSD ', '2Kg', 'Đen'),
(49, 'Intel® Core™ i5-1135G7 (2.4Ghz/8MB cache)', 'Intel® Iris® Xe Graphics', '16 GB LPDDR4X onboard', '512GB PCIe NVMe SSD (nâng cấp tối đa 1TB SSD)', '2Kg', 'Trắng'),
(50, 'i5-1035G7/1.20GHz/3.70GHz', 'ON board', '8GB DDR4 3200MHz', '256GB', '1.5Kg', 'Xám'),
(51, 'i5-1035G7/1.20GHz/3.70GHz', 'Intel GHU', '8GB DDR4 3200MHz', '256GB', '2Kg', 'Đen'),
(52, 'Intel Core i5-8250U (4 x 1.6GHz/6MB cache)', 'Intel UHD 620', '8GB DDR4', '256GB SSD (thêm 01 khe cắm SSD )', '1.5Kg', 'Bạc'),
(53, 'Intel® Core™ i5-8250U', 'Intel® UHD Graphics 620', '8GB DDR4 2400MHz', '512GB SSD M.2', '1.52Kg', 'Xám'),
(54, 'i5-1035G7/1.20GHz/3.70GHz', 'Intel Graphics Technology', '8GB DDR4 3200MHz', 'M.2 2280NVMe SSD', '2Kg', 'Xám'),
(59, 'Core i5 1035G1 1.0 Ghz up to 3.6Ghz-6Mb', 'Intel Iris Xe Graphics', '4Gb (DDR4 (On board 4GB +1 khe 4GB/ Hỗ trợ RAM tối đa 12Gb))', 'SSD 256GB M.2 PCIe. Hỗ trợ khe cắm HDD SATA', '2kg', 'Đen');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ngayMua` date NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `ghiChu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `email`, `ngayMua`, `hoTen`, `SDT`, `diaChi`, `ghiChu`) VALUES
(21, 'duc@gmail.com', '2022-06-05', 'Nguyễn Anh Đức', '123', 'Hà Nội', 'Giao hàng ban trưa'),
(31, 'mdoan2001@gmail.com', '2022-06-10', 'abc', 'abc', 'abc', 'abc'),
(32, 'mdoan2001@gmail.com', '2022-06-10', 'Nguyễn Minh Đoàn', '0962662287', 'Văn Giang - Hưng Yên', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `email` varchar(100) NOT NULL,
  `maSanPham` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`email`, `maSanPham`, `soLuong`) VALUES
('duc@gmail.com', 30, 1),
('mdoan2001@gmail.com', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `id` int(11) NOT NULL,
  `tenNSX` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`id`, `tenNSX`) VALUES
(1, 'DELL'),
(2, 'ASUS'),
(3, 'HP'),
(4, 'LENOVO'),
(5, 'APPLE'),
(6, 'ACER'),
(9, 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `khohang`
--

CREATE TABLE `khohang` (
  `id` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khohang`
--

INSERT INTO `khohang` (`id`, `soLuong`) VALUES
(2, 17),
(3, 20),
(4, 13),
(5, 16),
(6, 22),
(7, 24),
(8, 22),
(9, 4),
(10, 32),
(11, 9),
(12, 31),
(13, 17),
(14, 40),
(15, 11),
(16, 35),
(17, 12),
(20, 14),
(21, 18),
(22, 10),
(23, 2),
(24, 7),
(25, 3),
(26, 6),
(27, 5),
(28, 11),
(29, 3),
(30, 12),
(31, 12),
(32, 14),
(33, 51),
(34, 32),
(35, 12),
(36, 12),
(37, 32),
(38, 21),
(39, 21),
(40, 12),
(41, 31),
(42, 21),
(43, 12),
(44, 12),
(45, 24),
(46, 21),
(47, 13),
(48, 33),
(49, 31),
(50, 9),
(51, 11),
(52, 21),
(53, 5),
(54, 15),
(59, 10);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `gioiTinh` tinyint(1) NOT NULL COMMENT '0: nam, 1; nu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hoTen`, `email`, `diaChi`, `SDT`, `hinhAnh`, `gioiTinh`) VALUES
(1, 'Nguyễn Bích Ngọc', 'ngoc@gmail.com', 'Thanh Xuân - Hà Nội', '0962662287', 'https://vnn-imgs-a1.vgcloud.vn/icdn.dantri.com.vn/2021/05/26/ngo-ngang-voi-ve-dep-cua-hot-girl-anh-the-chua-tron-18-docx-1622043349706.jpeg', 1),
(2, 'Trần Hoàng Anh', 'anh@gmail.com', 'Cầu Giấy - Hà Nội', '1234567981', 'https://image.vtc.vn/resize/th/upload/2021/04/07/ek6qycqxiaiyiun-11052098.jpg', 1),
(3, 'Nguyễn Hoàng Đức', 'duc@gmail.com', 'Ba Đình - Hà Nội', '1237618738', 'https://toigingiuvedep.vn/wp-content/uploads/2021/07/mau-anh-the-dep-lam-the-can-cuoc.jpg', 0),
(4, 'Nguyễn Anh Đức', 'anhduc1@gmail.com', 'Bắc Từ Liêm- Hà Nội', '898984743', 'https://upload.wikimedia.org/wikipedia/commons/1/10/%E1%BA%A2nh-th%E1%BA%BB-v%C6%B0%E1%BB%A3ng.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenSanPham` varchar(255) NOT NULL,
  `maNSX` int(11) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenSanPham`, `maNSX`, `hinhAnh`, `gia`) VALUES
(2, 'Laptop Dell Latitude 3410 (70216823) (i3-10110U/4GB/ 256GB SSD/ 14.0\"HD/VGA on/HIHI)\r\n', 1, 'https://nguyencongpc.vn/media/product/20996-laptop-dell-latitude-3410-70216823-i3-10110u-4gb-ram256gb-ssd140-inch-hdfedoraxam.jpg', 12000000),
(3, 'Laptop Dell Inspiron N3501 (P90F005DBL) (i3-1125G4/4GB/256GB SSD/15.6\"FHD/VGA On/Win10/Đen/ 1Yr)', 1, 'https://nguyencongpc.vn/media/product/21177-laptop-dell-inspiron-3501d-p90f005dbl-i3.jpg', 11490000),
(4, 'Laptop Alienware Gaming M15 R6 P109F001BBL (i7 11800H/32GB/ 1TB SSD/15.6\" FHD/RTX3060 6G//Win10 )', 1, 'https://nguyencongpc.vn/media/product/21216-dell-alienware-gaming-m15-r6-p109f001bbl.jpg', 55990000),
(5, 'Laptop Dell Latitude 3420 42LT342001 (i3 1115G4/ 4Gb/ SSD 256Gb / 14.0\" HD/VGA On/ DOS/Đen/ 1 Yr )', 1, 'https://nguyencongpc.vn/media/product/21557-dell-5.jpg', 13090000),
(6, 'Laptop Dell Inspiron 5515 N5R75700U104W1 (Ryzen 7 5700U/ 8Gb/ 512Gb SSD/ 15.6\" FHD/ VGA ON/ Win11 + OfficeHS21/Bạc/ 1 Yr)', 1, 'https://nguyencongpc.vn/media/product/21578-delll9.jpg', 22690000),
(7, 'Laptop Dell Inspiron 5410 2in1 70270653 (i5-1155G7 / 8GB RAM/ 512GB SSD/ 14\" FHD Cảm ứng / VGA ON/ Win 11/ Bạc)', 1, 'https://nguyencongpc.vn/media/product/22008-5410-8.jpg', 22190000),
(8, 'Laptop Dell Inspiron 14 7415 2-in-1 ( Ryzen 5 5500U/ 8GB RAM / 256GB SSD/ 14\"FHD Touch/ Win 10/ Mist Blue/ 1 Yr/ NK)', 1, 'https://nguyencongpc.vn/media/product/22013-7415-4.jpg', 18990000),
(9, 'Laptop Dell Inspiron 5410 2in1 70270653 (i5-1155G7 / 8GB RAM/ 512GB SSD/ 14\" FHD Cảm ứng / VGA ON/ Win 11/ Bạc/ 1 Yr)', 1, 'https://nguyencongpc.vn/media/product/22008-5410-8.jpg', 23190000),
(10, 'Laptop Dell Latitude 3520 70251603 (i3 1115G4/ 4Gb/ SSD 256Gb / 15.6\" HD/VGA On/ DOS/Đen/ 1 Yr)', 1, 'https://nguyencongpc.vn/media/product/21584-dell31.jpg', 13490000),
(11, 'Laptop Dell Inspiron 5410 N4I5547W1 (I5-1155G7/ 8Gb/ 512Gb SSD/ 14.0\"FHD touch/PEN/ GeForce MX350 2GB/ Win11 + OfficST21/ Bạc/vỏ nhôm/Xoay 360/ 1 Yr)', 1, 'https://nguyencongpc.vn/media/product/21579-delll10.jpg', 25690000),
(12, 'Laptop Apple MacBook Air MGN63SA/A/ Space Grey/ M1 Chip/ 8GB/ 256GB SSD/ 13.3 inch', 5, 'https://nguyencongpc.vn/media/product/18192-laptop-apple-macbook-air-13-3-inch-mgn63sa.jpg', 23990000),
(13, 'Laptop Apple MacBook Pro Z11D000E5/ Silver/ M1 Chip/ RAM 16GB/ 256GB SSD/ 13.3 inch Retina/ Touch Bar and Touch ID/ Mac OS/ 1 Yr', 5, 'https://nguyencongpc.vn/media/product/20800-apple-macbook-pro-z11d000e5.jpg', 36990000),
(14, 'Laptop Apple Macbook Air MGND3SA/A/ Gold/ M1 Chip / 8GB/ 256GB SSD/ 13.3 inch', 5, 'https://nguyencongpc.vn/media/product/21207-apple-macbook-air-13-mgnd3sa-a.jpg', 23990000),
(15, 'Laptop Apple Macbook Air M1 7GPU/16Gb/512Gb Gold - Z12A00050', 5, 'https://nguyencongpc.vn/media/product/21606-ap2.jpg', 34990000),
(16, 'Laptop Apple MacBook Pro MYD82SA/A/ Space Grey/ M1 Chip/ RAM 8GB/ 256GB SSD/ 13.3 inch Retina/ Touch ID and Touch Bar/ Mac OS/ 1 Yr', 5, 'https://nguyencongpc.vn/media/product/21608-ap3.jpg', 31690000),
(17, 'Laptop Apple Macbook Air MGN93SA/A / Silver/ M1 Chip/ 8GB/ 256GB SSD/ 13.3 inch', 5, 'https://nguyencongpc.vn/media/product/18190-apple-macbook-air-13-3-inch-mgn93sa.jpg', 23990000),
(20, 'Laptop Vivobook Asus X515EA-BQ1006W ( I3-1115G4/ 4GB/ 512GB SSD/ 15.6FHD/ VGA ON/ Win11/ Silver/ 2 Yrs)', 2, 'https://nguyencongpc.vn/media/product/21598-x515-2.jpg', 11790000),
(21, 'Laptop Acer Aspire 3 A315-58-59LY NX.ADDSV.00G (i5 1135G7/8GB RAM/512GB SSD/15.6 inch FHD/ Win 11/Bạc/ 1 Yr)', 6, 'https://nguyencongpc.vn/media/product/22453-acer-aspire-7.jpg', 15490000),
(22, 'Laptop LG Gram 14Z980-G AH52A5', 9, 'https://nguyencongpc.vn/media/product/8858-laptop-lg-gram-14z980-g-ah52a5-900x.jpg', 29190000),
(23, 'Laptop Lenovo Thinkpad E14 Gen 2 20TA002LVA (Intel Core i5 1135G7/8GB RAM/256GB SSD/14.0\"FHD/VGA On/Dos/Đen/1 Yr)', 4, 'https://nguyencongpc.vn/media/product/21082-lenovo-thinkpad-e14-gen-2-20ta002lva.jpg', 18490000),
(24, 'Laptop Asus TUF Gaming FX506LH-HN002T (I5 10300H/ 8GB/ 512GB SSD/ 15.6FHD-144Hz/ GTX1650 4GB/ Win10/ Grey/ RGB_KB/ 2 Yrs)', 2, 'https://nguyencongpc.vn/media/product/18615-laptop-asus-tuf-gaming-f15-fx506lh-hn002t.jpg', 17190000),
(25, 'Laptop Asus TUF Gaming FX506HCB-HN144W (I5 11400H/ 8GB / 512GB SSD/ 15.6FHD/ RTX3050 4GB/ Win11/ 2 Yrs)', 2, 'https://nguyencongpc.vn/media/product/21600-asus-16.jpg', 19490000),
(26, 'Laptop Asus ZenBook UX325EA-KG656W (Intel Core i5 1135G7/8GB RAM/512GB SSD/13.3 Oled/ Win11//Xám/ 2 Yrs)', 2, 'https://nguyencongpc.vn/media/product/21811-alas1.jpg', 21990000),
(27, 'Laptop Asus Gaming ROG Strix G15 G513RC-HN038W (AMD Ryzen 7-6800H/ 8GB RAM/ 512GB SSD/ 15.6FHD, 144Hz/ RTX3050 4GB /Win11/ Grey/ 2 Yrs)', 2, 'https://nguyencongpc.vn/media/product/21874-11111111111111.jpg', 28990000),
(28, 'Laptop Asus Vivobook M513UA-L1240T (AMD Ryzen 7-5700U/ 8GB RAM/ 512GB SSD/ 15.6FHD/ VGA ON/ Win10/ Silver/ 2 Yrs)', 2, 'https://nguyencongpc.vn/media/product/21592-asus-10.jpg', 19790000),
(29, 'Laptop Asus ROG Flow Z13 GZ301ZC-LD110W ( i7-12700H/ 16GB /512GB SSD/ RTX 3050 4GB/ 13.4-inch WUXGA/ Pen/ Win 11/ Black/ 2 Yrs)', 2, 'https://nguyencongpc.vn/media/product/22030-asus-rog-flow-z13-9.jpg', 46190000),
(30, 'Laptop HP Pavilion 15-eg0007TU 2D9K4PA (i3-1115G4/4GB/ 256GB SSD/ VGA On/ 15.6\"FHD/ Win 10/Grey/ 1 Yr)', 3, 'https://nguyencongpc.vn/media/product/21543-hp.jpg', 13990000),
(31, 'Laptop HP 340s G7 240Q4PA (i3-1005G1/ 4GB/ 256GB SSD/ 14.0\"FHD/ VGA On/ Win 10/ Grey/ 1 Yr)', 3, 'https://nguyencongpc.vn/media/product/18406-hp-340s-g7-240q3pa.jpg', 11490000),
(32, 'Laptop HP VICTUS 16-e0170AX 4R0U7PA (AMD Ryzen 7-5800H/ 8GB RAM/ 512GB SSD/ 16.1FHD, 144Hz/ RTX3050 4GB/ Win 11/ Black/1 Yr)', 1, 'https://nguyencongpc.vn/media/product/21808-ahp2.jpg', 27290000),
(33, 'Laptop HP ProBook 430 G8 614K7PA (i3-1115G4/ 8GB RAM / 256GB SSD/ 13.3HD/ VGA ON/ WIN11/ Silver/ Vỏ nhôm/ 1 Yr)', 3, 'https://nguyencongpc.vn/media/product/22083-hp-480-g8.jpg', 14590000),
(34, 'Laptop HP Zbook Power 33D92AV ( i7- 11800H/ 16GB RAM/ 1TB SSD/ T600 QUADRO 4GB/ 15.6” FHD/ Fingerprint/ Windows 10 Pro/ Silver/ 1 Yr )', 3, 'https://nguyencongpc.vn/media/product/22402-laptop-hp-z-1.jpg', 49990000),
(35, 'Laptop HP Envy x360-ay1057AU 601Q9PA (Ryzen 5-5600U/ 8Gb/ 256Gb SSD/ 13.3FHD Touch/ VGA On/ Win11/ Black/ Pen)', 3, 'https://nguyencongpc.vn/media/product/21540-360.jpg', 22990000),
(36, 'Laptop HP Envy 13-ba1027TU 2K0B1PA (i5-1135G7/RAM 8GB/SSD 256GB/13.3Inch FHD/Iris Plus/Win10/Vàng)', 3, 'https://nguyencongpc.vn/media/product/17932-laptop-hp-envy-13-ba1027tu-2k0b1pa.jpg', 21890000),
(37, 'Laptop HP Zbook Power 33D92AV ( i7- 11800H/ 16GB RAM/ 1TB SSD/ T600 QUADRO 4GB/ 15.6” FHD/ Fingerprint/ Windows 10 Pro/ Silver/ 1 Yr )', 3, 'https://nguyencongpc.vn/media/product/22402-laptop-hp-z-1.jpg', 49990000),
(38, 'Laptop Lenovo Thinkpad E14 Gen 2 20TA002LVA (Intel Core i5 1135G7/8GB RAM/256GB SSD/14.0\"FHD/VGA On/Dos/Đen/1 Yr)', 4, 'https://nguyencongpc.vn/media/product/21082-lenovo-thinkpad-e14-gen-2-20ta002lva.jpg', 18490000),
(39, 'Laptop Lenovo Gaming Legion S7 15ACH6 82K800DPVN ( AMD Ryzen 7 5800H/ 16Gb RAM/ 1Tb SSD/ 15.6\" WQHD - 165Hz/ RTX 3060 6GB/ Win11/Shadow Black/ 3 Yrs)', 4, 'https://nguyencongpc.vn/media/product/21809-alnv1.jpg', 42490000),
(40, 'Laptop Lenovo Thinkpad X13 GEN 2 20WK00EBVA (Core i5 1135G7 /8Gb RAM/512Gb SSD/13.3\" WQXGA/VGA ON/Dos/Black/ 3 Yrs)', 4, 'https://nguyencongpc.vn/media/product/21705-lnv1.jpg', 30990000),
(41, 'Laptop Lenovo IdeaPad Gaming 3 15ACH6 82K2008WVN (Ryzen 5 5600H /8GB/ 512GB SSD/ 15.6” FHD/ RTX 3050 4GB / Win 10H/Đen/ 2Yrs)', 4, 'https://nguyencongpc.vn/media/product/21940-ft.jpg', 23490000),
(42, 'Laptop Lenovo Gaming Legion 5 Pro 16ITH6H 82JD00BCVN ( i7 11800H/ 16Gb/ 512GB SSD/ 16\" WQXGA/ RTX 3060 6GB/ Win11)', 4, 'https://nguyencongpc.vn/media/product/21812-a22lnv.jpg', 43990000),
(43, 'Laptop Lenovo Thinkbook 13S G3 ACN 20YA003BVN (Ryzen 7 5800U/16Gb RAM/ 512Gb SSD/13.3\"WUXGA 300 nits 100%sRGB/ VGA on/DOS/ Grey/ nhôm/ 2 Yrs)', 4, 'https://nguyencongpc.vn/media/product/22086-thinkbook-5.jpg', 25190000),
(44, 'Laptop Apple Macbook Air M1 7GPU/16Gb/512Gb Silver - Z127000DF', 5, 'https://nguyencongpc.vn/media/product/20790-apple-macbook-air-z127000df.jpg', 50000000),
(45, 'Laptop Acer Gaming Aspire 7 A715 42G R6ZR NH.QAYSV.003 (Ryzen 5 5500U/ 8Gb/512Gb SSD/ 15.6\"FHD 144Hz/ Nvidia GTX1650 4Gb DDR6/ Win10/Đen/ 1 Yr)', 6, 'https://nguyencongpc.vn/media/product/21662-ac12.jpg', 21290000),
(46, 'Laptop Acer Aspire A315-57G-573F NX.HZRSV.00B (i5-1035G1 /8GB RAM/ 512GB SSD/ MX330 2G/ 15.6\"FHD/ Win 11/Đen / 1 Yr)', 6, 'https://nguyencongpc.vn/media/product/22478-laptop-acer-a315-6.jpg', 13990000),
(47, 'Laptop Acer Nitro Tiger AN515 58 773Y NH.QFKSV.001 (Core i7 12700H/ 8Gb RAM/512Gb SSD/15.6\" FHD/ GTX3050Ti 4GB / Win11/ Black / 1 Yr)', 6, 'https://nguyencongpc.vn/media/product/22146-acer-nitro-tiger.jpg', 29990000),
(48, 'Laptop Acer Nitro 5 Eagle AN515-57-74RD NH.QD8SV.001 (i7-11800H/8GB/512GB-SSD/15.6-FHD/RTX-3050-4GB/Win10/ 1 Yr)', 6, 'https://nguyencongpc.vn/media/product/20482-acer-nitro-5-eagle-an515-57-74rd-nh-qd8sv-001.jpg', 27690000),
(49, 'Laptop Acer Swift 3 SF314-511-56G1 (i5-1135G7 | 16GBRAM | 512GBSSD | 14-FHD-IPS | Bạc | N20C12_NX.ABLSV.002)', 6, 'https://nguyencongpc.vn/media/product/20668-acer-swift-3-sf314-511-56g1.jpg', 20990000),
(50, 'Laptop LG gram 14Z90N-V.AR52A5 (14\"/FHD/i5-1035G7/RAM-8GB/SSD-256GB)', 9, 'https://nguyencongpc.vn/media/product/16752-laptop-lg-gram-14z90n-var52a5-14fhdi5-1035g7ram-8gbssd-256gb.jpg', 30000000),
(51, 'Laptop LG gram 14ZD90N-V.AX53A5 (14\"/FHD/i5-1035G7/RAM-8GB/SSD-256GB)', 9, 'https://nguyencongpc.vn/media/product/16750-laptop-lg-gram-14zd90n-v_ax53a5.jpg', 27500000),
(52, 'Laptop LG Gram 14Z980-G AH52A5', 9, 'https://nguyencongpc.vn/media/product/8858-laptop-lg-gram-14z980-g-ah52a5-900x.jpg', 29190000),
(53, 'Laptop LG Gram 15Z980-G AH55A5', 9, 'https://nguyencongpc.vn/media/product/8866-laptop-lg-gram-15z980-g-ah55a5-900x.jpg', 36200000),
(54, 'Laptop LG gram 14ZD90N-V.AX55A5 (14\"/FHD/i5-1035G7/RAM-8GB/SSD-512GB)', 9, 'https://nguyencongpc.vn/media/product/16751-laptop-lg-gram-14zd90n-v_ax55a5.jpg', 29000000),
(58, 'VGA GALAX GeForce GTX 1660 SUPER 1-CLICK OC', 9, 'https://nguyencongpc.vn/media/product/16093-galax-1660-super-2.jpg', 5000000),
(59, 'Laptop Acer Aspire A315-56-58EG NX.HS5SV.00J (Core i5 1035G1/ 4Gb RAM / 256Gb SSD/ 15.6Inch Full HD - IPS/VGA ON/Win11/Black / 1 Yr)', 6, 'https://nguyencongpc.vn/media/product/22097-acer6.jpg', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `loaiTaiKhoan` tinyint(1) NOT NULL COMMENT '0: admin, 1:user',
  `diaChi` varchar(255) NOT NULL,
  `SDT` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `hoTen`, `matKhau`, `loaiTaiKhoan`, `diaChi`, `SDT`) VALUES
('admin@gmail.com', 'ADMIN', '$2y$10$15bxKG4Qimh7SaZRBO88ke9EM8jCOXOoor4OmMcdXkCYVvI/yWEiO', 0, 'Hà Nội', '113'),
('duc@gmail.com', 'Nguyễn Anh Đức', '$2y$10$vO7vVXR6fk8S50Cz2K4YKOy7K0UgV7JjTPt4tp396IvwTPNQ0AiVW', 1, 'Bắc Từ Liêm - Hà Nội', '113114115'),
('mdoan2001@gmail.com', 'Nguyễn Minh Đoàn', '$2y$10$BC9m8Z/PSFAhj5OpbP/x2uhvE6hoNJS8qq50U3fxHzMCOsaiBJZOW', 1, 'Văn Giang - Hưng Yên - VN', '0962662287'),
('thuy@gmail.com', 'Thanh Thuỳ', '$2y$10$mLBqLGFnoX/23fTsUQbpXexJc0.GmabRELChSbdEyhXMNozfyzaLK', 1, 'Hưng Yên', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maDonHang` (`maDonHang`),
  ADD KEY `maSanPham` (`maSanPham`);

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`email`,`maSanPham`),
  ADD KEY `maSanPham` (`maSanPham`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khohang`
--
ALTER TABLE `khohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maNSX` (`maNSX`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `khohang`
--
ALTER TABLE `khohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`maDonHang`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`maSanPham`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`maSanPham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `khohang`
--
ALTER TABLE `khohang`
  ADD CONSTRAINT `khohang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maNSX`) REFERENCES `hangsanxuat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
