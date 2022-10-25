-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 06, 2022 lúc 06:05 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ChicLight`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `logo_brand` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `picture` varchar(450) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `brand_intro` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `brand`, `logo_brand`, `picture`, `brand_intro`) VALUES
(1, 'Anglepoise', 'https://johnlewis.scene7.com/is/image/JohnLewis/anglepoise_brl?$brand-logo_product$\r\n', 'https://www.slanted.de/sites/default/files/portfolio/6526/anglepoise-banner-light-1000px.png', 'Proudly displayed in the new London Design Museum and commemorated in a Royal Mail stamp set celebrating British design classics, Anglepoise® lamps can be found today in homes and offices and hotels all around the world.'),
(2, 'John Lewis', 'https://logos-world.net/wp-content/uploads/2021/02/John-Lewis-Logo-700x394.png', 'https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/815/cached.offlinehbpl.hbpl.co.uk/news/OMC/jl-201709040201598241-20180627093649635.jpg', 'Believe it or not, the UK''s largest retailer John Lewis & Partners, was once a small textile store. Its creator, John Lewis, was at the forefront of dry goods because we talked about 1864. Over time, he expanded the business, buying several department stores in different cities.'),
(3, 'OSRAM', 'https://hoangphatlighting.vn/upload/detail/2018/01/images/den-led-osram.jpg', 'https://www.hkd.com.vn/ckfinder/userfiles/images/LED%20OSRAM/logo-osram-hkd.jpg', 'The ams OSRAM Group, including the listed companies ams AG as parent company and OSRAM Licht AG is a global leader in optical solutions. By adding intelligence to light and passion to innovation, we enrich people''s lives. This is what we mean by Sensing is Life.'),
(4, 'Laura Ashley', 'https://cdn.shopify.com/s/files/1/0600/7129/t/33/assets/logo@2x@2x.png?v=92198925707753951921621260046', 'https://cdn11.bigcommerce.com/s-y3o90vgqrf/content/home/laura-ashley-banner-1290.jpg', 'Laura Ashley plc was a British textile design company now controlled by the MUI Group of Malaysia.\r\nIt was founded by Bernard Ashley, an engineer, and his wife Laura Ashley in 1953 then grew over the next 20 years to become an international retail chain.\r\nSales totalled over £276 million in 2000.\r\nIts products have been described as ''quintessentially English.\r\n'),
(5, 'Philips Hue', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Philips_logo_new.svg/2560px-Philips_logo_new.svg.png', 'https://cdn.tgdd.vn/Files/2021/05/08/1349579/tong-hop-bo-phu-kien-philips-hue-ban-nen-trang-b-7-652x367.jpg', 'Philips is one of the world''s most trusted lighting brands. Since 1891, Philips has been synonymous with high-quality, reliable, innovative technology that improves people''s lives.\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(70) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `idea` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `customer_name`, `phone`, `email`, `idea`) VALUES
(1, 'fdsfadsaf', 1231231231, 'fdsafg@gmail.com', 'fdsfdsaflk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img`
--

CREATE TABLE `img` (
  `id_img` int(11) NOT NULL,
  `img_1` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img_2` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img_3` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img_4` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `img`
--

INSERT INTO `img` (`id_img`, `img_1`, `img_2`, `img_3`, `img_4`) VALUES
(79, 'https://johnlewis.scene7.com/is/image/JohnLewis/109225540?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/109225540alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/109225540alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/109225540alt4?$rsp-pdp-port-640$'),
(80, 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt5?$rsp-pdp-port-640$'),
(81, 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt5?$rsp-pdp-port-640$'),
(82, 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt5?$rsp-pdp-port-640$'),
(83, 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162068alt5?$rsp-pdp-port-640$'),
(84, 'https://johnlewis.scene7.com/is/image/JohnLewis/239482691?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/239482691alt2?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/239482691alt3?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/239482691alt4?$rsp-pdp-port-640$'),
(85, 'https://johnlewis.scene7.com/is/image/JohnLewis/237614834alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237614834alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237614834alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237614834alt5?$rsp-pdp-port-640$'),
(86, 'https://johnlewis.scene7.com/is/image/JohnLewis/238925816alt7?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238925816alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238925816alt5?$rsp-pdp-port-640$', '  https://johnlewis.scene7.com/is/image/JohnLewis/238925816alt6?$rsp-pdp-port-640$'),
(87, 'https://johnlewis.scene7.com/is/image/JohnLewis/238162053?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238162053alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162053alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238162053alt5?$rsp-pdp-port-640$'),
(88, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943264?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt1?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt3?$rsp-pdp-port-640$'),
(89, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943264?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt1?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt3?$rsp-pdp-port-640$'),
(90, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943264?$rsp-pdp-port-640$', '     https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943264alt3?$rsp-pdp-port-640$'),
(91, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943263?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943263alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943263alt2?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/238943263alt3?$rsp-pdp-port-640$'),
(92, 'https://johnlewis.scene7.com/is/image/JohnLewis/240287077?$rsp-pdp-port-640$', '      https://johnlewis.scene7.com/is/image/JohnLewis/240287077alt1?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/240287077alt3?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/240287077alt4?$rsp-pdp-port-640$'),
(93, 'https://johnlewis.scene7.com/is/image/JohnLewis/240287080?$rsp-pdp-port-640$', ' https://johnlewis.scene7.com/is/image/JohnLewis/240287080alt1?$rsp-pdp-port-640$', '  https://johnlewis.scene7.com/is/image/JohnLewis/240287080alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240287080alt3?$rsp-pdp-port-640$'),
(94, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943266?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238943266alt1?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238943266alt2?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238943266alt3?$rsp-pdp-port-640$'),
(95, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943260?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238943260alt1?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238943260alt2?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238943260alt3?$rsp-pdp-port-640$'),
(96, 'https://johnlewis.scene7.com/is/image/JohnLewis/237653309alt8?wid=330&hei=440', 'https://johnlewis.scene7.com/is/image/JohnLewis/237653309alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237653309?$rsp-pdp-port-640$', '               https://www.johnlewis.com/john-lewis-ada-marble-touch-lamp-white-grey/p3689677'),
(97, 'https://johnlewis.scene7.com/is/image/JohnLewis/239783167?wid=330&hei=440', '               https://johnlewis.scene7.com/is/image/JohnLewis/239783167alt1?$rsp-pdp-port-640$', '               https://johnlewis.scene7.com/is/image/JohnLewis/239783167alt2?$rsp-pdp-port-640$', '               https://johnlewis.scene7.com/is/image/JohnLewis/239783167alt3?$rsp-pdp-port-640$ '),
(98, 'https://johnlewis.scene7.com/is/image/JohnLewis/239783167?wid=330&hei=440', '               https://johnlewis.scene7.com/is/image/JohnLewis/239783167alt1?$rsp-pdp-port-640$', '               https://johnlewis.scene7.com/is/image/JohnLewis/239783167alt2?$rsp-pdp-port-640$', '               https://johnlewis.scene7.com/is/image/JohnLewis/239783167alt3?$rsp-pdp-port-640$ '),
(99, 'https://johnlewis.scene7.com/is/image/JohnLewis/234652512alt7?wid=330&hei=440', '        https://johnlewis.scene7.com/is/image/JohnLewis/234652512alt4?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/234652512?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/234652512alt1?$rsp-pdp-port-640$'),
(100, 'https://johnlewis.scene7.com/is/image/JohnLewis/239783161?wid=330&hei=440', '        https://johnlewis.scene7.com/is/image/JohnLewis/239783161alt1?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/239783161alt3?$rsp-pdp-port-640$', ''),
(101, 'https://johnlewis.scene7.com/is/image/JohnLewis/238938875?wid=330&hei=440', '        https://johnlewis.scene7.com/is/image/JohnLewis/238938875alt1?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238938875alt2?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/238938875alt9?$rsp-pdp-port-640$'),
(102, 'https://johnlewis.scene7.com/is/image/JohnLewis/231686165alt8?wid=330&hei=440', '        https://johnlewis.scene7.com/is/image/JohnLewis/231686165alt2?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/231686165?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/231686165alt1?$rsp-pdp-port-640$'),
(103, 'https://johnlewis.scene7.com/is/image/JohnLewis/236410775alt2?wid=330&hei=440', '        https://johnlewis.scene7.com/is/image/JohnLewis/236410775?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/236410775alt1?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/236410775alt5?$rsp-pdp-port-640$'),
(104, 'https://johnlewis.scene7.com/is/image/JohnLewis/237992904alt1?wid=330&hei=440', '        https://johnlewis.scene7.com/is/image/JohnLewis/237992904?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/237992904alt2?$rsp-pdp-port-640$', '        https://johnlewis.scene7.com/is/image/JohnLewis/237992904alt3?$rsp-pdp-port-640$'),
(105, 'https://johnlewis.scene7.com/is/image/JohnLewis/230472068?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/230472068alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/230472068alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/000151176alt10?$rsp-pdp-port-640$'),
(106, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943964alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943964alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943964alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943964alt9?$rsp-pdp-port-640$'),
(107, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943554?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943554alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943554alt3?$rsp-pdp-port-640$', ''),
(108, 'https://johnlewis.scene7.com/is/image/JohnLewis/238943554?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943554alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238943554alt3?$rsp-pdp-port-640$', ''),
(109, 'https://johnlewis.scene7.com/is/image/JohnLewis/238367771alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238367771alt5?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238367771alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238367771alt9?$rsp-pdp-port-640$'),
(110, 'https://johnlewis.scene7.com/is/image/JohnLewis/240888018alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240888018?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240888018alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240888018alt4?$rsp-pdp-port-640$'),
(111, 'https://johnlewis.scene7.com/is/image/JohnLewis/240887830?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887830alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887830alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887830alt3?$rsp-pdp-port-640$'),
(112, 'https://johnlewis.scene7.com/is/image/JohnLewis/240826745?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240826745alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240826745alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240826745alt5?$rsp-pdp-port-1440$'),
(113, 'https://johnlewis.scene7.com/is/image/JohnLewis/231571486alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/231571486?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/231571486alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/SS17_LI_CRYSTALalt10?$rsp-pdp-port-640$'),
(114, 'https://johnlewis.scene7.com/is/image/JohnLewis/237406864alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237406864alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237406864?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237406864alt6?$rsp-pdp-port-640$'),
(115, 'https://johnlewis.scene7.com/is/image/JohnLewis/240887836alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887836alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887836?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887836alt5?$rsp-pdp-port-640$'),
(116, 'https://johnlewis.scene7.com/is/image/JohnLewis/237992864?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237992864alt1?$rsp-pdp-port-1440$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237992864alt3?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/237992864alt9?$rsp-pdp-port-640$'),
(117, 'https://johnlewis.scene7.com/is/image/JohnLewis/240887826?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887826alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887826alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240887826alt3?$rsp-pdp-port-1440$'),
(118, 'https://johnlewis.scene7.com/is/image/JohnLewis/240271945?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240271945alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240271945alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/240271945alt9?$rsp-pdp-port-640$'),
(119, 'https://johnlewis.scene7.com/is/image/JohnLewis/231744067alt4?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/231744067alt6?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/231744067alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/231744067?$rsp-pdp-port-640$'),
(120, 'https://johnlewis.scene7.com/is/image/JohnLewis/239334673?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/239334673alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/239334673alt2?$rsp-pdp-port-640$', ''),
(121, 'https://johnlewis.scene7.com/is/image/JohnLewis/238497952?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238497952alt1?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238497952alt2?$rsp-pdp-port-640$', 'https://johnlewis.scene7.com/is/image/JohnLewis/238497952alt3?$rsp-pdp-port-640$');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `name_products` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` float NOT NULL,
  `intro` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `made_in` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `material` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `wattage` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Power_Input` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_brand` int(11) NOT NULL,
  `id_type` int(10) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_products`, `name_products`, `price`, `intro`, `made_in`, `material`, `wattage`, `Power_Input`, `id_brand`, `id_type`, `id_img`) VALUES
(51, 'Anglepoise + National Trust 1227', 149, 'Mini Table Lamp, Buttermilk Yellow', 'United Kingdom', 'Cast iron', '6', '220', 1, 3, 79),
(52, 'Anglepoise + Paul Smith Defender Type 75', 250, 'Mini Desk Lamp, Edition 4', 'China', 'Cast iron base, aluminium cover, steel, copper, plastic', '6', '220', 1, 3, 83),
(53, 'Anglepoise + Paul Smith Defender Type 75', 289, 'Desk Lamp, Edition 3', 'China', 'Steel, aluminium and cast iron', '6', '220', 1, 3, 84),
(54, 'Anglepoise Type 75 Margaret Howell Edition', 219, 'Desk Lamp, Saxon Blue', 'China', 'Aluminium', '42', '220', 1, 3, 85),
(55, 'Anglepoise Type 75 Mini', 135, 'Table Lamp, Turmeric', 'China', 'Aluminium, cast iron, chrome', '6', '220', 1, 3, 86),
(56, 'Anglepoise Type 80 ', 219, 'Desk Lamp, Rose Pink', 'China', 'Aluminium, Cast Iron', '10', '220', 1, 3, 87),
(57, 'Bay Lighting Esma Glass', 175, 'Table Lamp, Grey', 'China', 'Base: Steel, fabric', '7', '220', 3, 3, 90),
(58, 'Bay Lighting Esma Glass ', 175, 'Table Lamp, Grey', 'China', 'Base: Glass, steel. Lampshade: Faux silk', '7', '220', 3, 3, 91),
(59, 'Bay Lighting Esma Glass', 175, 'Table Lamp, Grey', 'China', 'Steel, crystal glass, fabric', '6', '220', 3, 3, 92),
(60, 'Bay Lighting Esma Glass', 175, 'Table Lamp, Grey', 'China', 'Marble, metal, glass', '3', '220', 3, 3, 93),
(61, 'Bay Lighting Esma Glass', 175, 'Table Lamp, Grey', 'China', 'Base: Glass, Steel. Lampshade: Velvet', '10', '220', 1, 3, 94),
(62, 'Bay Lighting Narva', 185, 'Table Lamp, Aged Bronze', 'China', 'Base: Metal. Lampshade: Faux linen', '10', '220', 3, 3, 95),
(63, 'Ada Marble Touch Lamp', 70, 'the Ada table lamp is designed with a 3-stage touch function, allowing you to choose your preferred lighting output', 'China', ' Base: Metal. Lampshade: Faux linen', '5-7 W', '220', 2, 3, 96),
(65, ' Bee Ceramic Table Lamp, Natural', 350, '   This table lamp features a traditional vase-shaped base made from glazed ceramic and decorated with charming flying bees.', 'China', ' Base: Metal. Lampshade: Faux linen', '5-7 W', '220', 2, 3, 98),
(66, 'Danny Oval Touch Table Lamp, Satin Nickel', 450, 'The beautiful oval shaped white washed patterned glass will add a chic edge to your home,         complete with a 3 stage touch dimmer so you can easily adjust the brightness and turn the lamp on/off.', 'China', 'Base: Metal. Lampshade: Faux linen', '5-7 W', '220', 2, 3, 99),
(67, 'Dragonfly Ceramic Table Lamp, Natural', 150, '    This large table lamp features a traditional vase-shaped base made from glazed ceramic and decorated with charming flying dragonflies. We''ve added a natural linen lampshade to enhance a warm glow of light.', 'China', 'Base: Metal. Lampshade: Faux linen', '28 W', '220', 2, 3, 100),
(68, 'Emilia Crystal Touch Table Lamps, Set of 2', 380, 'A column of crystal glass beads and polished chrome metal rods encase the central light source of these sparkly, decorative table lamps.', 'China', 'Base: Metal. Lampshade: Faux linen', '15 W', '220', 2, 3, 101),
(69, ' Harmony Ribbon Small Table Lamp, Natural', 650, ' Crafted into a curvy silhouette, our Harmony Ribbon Small table lamp will complement any home decor.', 'Spain', 'Base: Metal. Lampshade: Faux linen', '28 W', '220', 2, 3, 102),
(70, 'Oberon Holographic Table Light, Multi', 85, 'The striking Oberon table lamp offers a unique, holographic style lighting effect for your home.', 'China', 'Base: Metal. Lampshade: Faux linen', '28 W', '220', 1, 1, 103),
(71, ' Romy Mirrored Glass Table Lamp, Metallic Silver', 95, 'Made from mirrored glass, the geometric shape of the Romy table lamp has a striking modern style.', 'China', 'Base: Metal. Lampshade: Faux linen', '28 W', '220', 2, 3, 104),
(72, 'Lulu Wall Light', 250, 'This excellent value, single-arm wall light is made with a frosted glass, cone-shaped shade. It offers a warm wash of light and it''s available in a choice of finishes.', 'China', 'Base: Metal. Lampshade: Faux linen', '40 W', '220 V', 2, 2, 105),
(73, 'Blakely Wall Light, Antique Brass', 900, 'Our in-house designers kept things simple with this wall light, which is made from steel and features a linen-blend lampshade. The result is a functional and sophisticated lighting solution, easy to style around your home.', 'China', 'Base: Metal. Lampshade: Faux linen', '5-7 W', '220', 3, 2, 106),
(74, 'Bay Lighting Carter Wall Light, Antique Brass', 400, 'Made from sturdy steel with a dome-shaped, clear glass shade, this wall light has a soft, industrial aesthetic. The head is adjustable so you can direct light where you need it and it''s best paired with an LED filament bulb to enhance a restorative look in your home.', 'United Kingdom', 'Base: Metal. Lampshade: Faux linen', '15 W', '220 V', 3, 2, 108),
(75, 'Impex Diamond Cube Crystal Wall Light, Clear/Chrome', 399, 'A statement piece for any room or hallway, this crystal wall light from Impex''s Diamond range is reminiscent of Art Deco design. Faceted diamond-shaped crystals glisten on a chrome frame, providing a warm wash of light.', 'Canada', 'Base: Metal. Lampshade: Faux linen', '4 W', '220 V', 3, 2, 109),
(76, 'Tate Chandelier Ceiling Light, Matt White', 1500, 'Painted in a distressed matt finish, this ceiling light epitomises classic, country charm. Its five arms are curved around a simple wooden spindle column and it''s suspended from a height-adjustable ceiling chain. Five LED bulbs are required and when illuminated it will spread light around your space. You can also add candle grip shades if you prefer to soften the glow.', 'China', ' Wood ', '5-7W SES LED Candle', '220 V', 4, 1, 110),
(77, 'Vienna Crystal Flush Ceiling Light, Clear/Polished Chrome', 1850, 'This decorative ceiling light will draw the eye, thanks to its glistening crystal design. It''s made from a combination of bevelled glass crystal rods and square-cut faceted glass droplets, all suspended from a durable metal frame. ', 'China', ' Crystal glass, metal ', '2-4W G9 LED Capsule', '220 V', 4, 1, 111),
(78, 'Savoie 3 Light Pendant Ceiling Light, Brass', 2200, 'A semi-flush ceiling light with a brass painted finish and beautiful textured glass discs which circle the circumference of the light. A stylish and unique centre piece for your living space.', 'China', 'Steel, glass ', '6 W', '220 V', 4, 1, 112),
(79, 'Frieda Easy-to-Fit Crystal Ceiling Shade', 1150, 'A dazzling, glass pendant that is formed from individual, reflective strips that let the light shine through. A sparkling light that would suit any hallway. Easy to fit, this ceiling shade will seamlessly attach to your existing light fitting for an instant refresh to your space.', 'China', 'Crystal ', '28 W', '220 V', 5, 1, 113),
(80, 'Romy Easy-to-Fit Mirrored Glass Ceiling Shade, Gold', 1590, 'This eye-catching, non-electrical ceiling shade will introduce a dramatic lighting style to your space. Crafted from mercurised glass it offers two different looks when switched on or off. Light shines through the distressed accents in the glass to create a glowing effect.', 'China', ' Glass, Metal ', '28 W', '220 V', 5, 1, 114),
(81, 'Shamley Chandelier Ceiling Light, Matt White', 2900, 'Offering the glamour of a traditional chandelier but designed for a much more modest space, this ceiling light dazzles in its smaller form', 'China', ' Crystal glass, metal ', '50 W', '220 V', 5, 1, 115),
(82, 'Lucia Crystal Semi Flush Chandelier Ceiling Light, Clear', 2600, 'A sparkling, semi-flush fitting, our Lucia chandelier ceiling light is ideal for smaller spaces. Its formation of glass crystals are suspended from a polished iron ring', 'China', ' Glass, Iron ', '20 W', '220 V', 5, 1, 116),
(83, 'Atherton Semi Flush Ceiling Light, Satin Brass', 1809, 'Thanks to its seven arms, this bold semi-flush ceiling fitting will spread light around your room. It has textured glass globe shades that offer a sparkly accent when illuminated', 'China', ' Metal, glass ', '28 W', '220 V', 5, 1, 117),
(84, 'Sorrento 6 Arm Ceiling Light, Polished Nickel/Charcoal', 2309, 'Generous in size, this timeless light fitting is ideal in living spaces and dining rooms, and it''s suspended from a height-adjustable chain. Made from metal in a polished or satin finish, it''s designed with a smart drum lampshade that encases six lights', 'China', ' Metal, cotton, plastic ', '28 W', '220 V', 5, 1, 118),
(85, 'Victoria Chandelier Ceiling Light, Metallic Brown', 2450, 'The delicate, sculpted design of this ceiling light makes it no less impressive when installed in your home. Glass droplets are suspended from a metal frame in an organic formation around the central light source', 'China', ' Glass ', '15 W', '220 V', 5, 1, 119),
(86, 'Nordlux Grant Wall Light, Brass', 580, 'The brass-finished metal of this elegant wall light gives it a subtle, Deco-inspired look. It features an opal white glass shade that will enhance a warm and diffused glow of light', 'China', ' Metal, glass ', '5-7 W', '220 V', 4, 2, 120),
(87, 'Huxley Wall Light, Antique Brass', 850, 'Sleek and understated, our single arm Huxley wall light is ideal for illuminating hallways or installing on either side of your bed. The antique finished metal gives the design a nostalgic, Art-Deco inspired feel,', 'China', ' Metal, Glass ', '15 W', '220 V', 4, 2, 121);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id_type`, `type`) VALUES
(1, 'Ceiling Lights'),
(2, 'Wall Lights'),
(3, 'Desk & Table Lamps');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_admin`, `name`, `pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_show_product`
-- (See below for the actual view)
--
create view `vw_show_product`
as
select products.id_products,
img.img_1,
img.img_2,
img.img_3,
img.img_4,
products.name_products,
products.price,
type.type,
brand.brand,
products.intro,
products.material,
products.wattage,
products.Power_Input,
products.made_in,
products.id_brand,
products.id_type
from products,img,brand,type
where products.id_img = img.id_img 
  and products.id_type = type.id_type
  and products.id_brand = brand.id_brand;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_show_product`
--


CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_show_product1`  
AS SELECT `products`.`id_products` AS `id_products`, `img`.`img_1` AS `img_1`, `img`.`img_2` AS `img_2`, `img`.`img_3` AS `img_3`, `img`.`img_4` AS `img_4`, `products`.`name_products` AS `name_products`, `products`.`price` AS `price`, `type`.`type` AS `type`, `brand`.`brand` AS `brand`, `products`.`intro` AS `intro`, `products`.`wattage` AS `wattage`, `products`.`material` AS `material`, `products`.`Power_Input` AS `Power_Input`, `products`.`made_in` AS `made_in`, `products`.`id_brand` AS `id_brand`, `products`.`id_type` AS `id_type` FROM (((`products` join `img`) join `brand`) join `type`) WHERE `products`.`id_img` = `img`.`id_img` AND `products`.`id_type` = `type`.`id_type` AND `products`.`id_brand` = `brand`.`id_brand`;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `id_img` (`id_img`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_img`) REFERENCES `img` (`id_img`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
